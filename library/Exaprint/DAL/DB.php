<?php

namespace Exaprint\DAL;

use \PDO;
use \Exception;

use RBM\SqlQuery\AbstractQuery;
use RBM\SqlQuery\Factory;
use RBM\SqlQuery\Renderer\SqlServer;

class DB extends PDO
{

    protected static $_instances = [];

    protected static $_defaultEnv;
    protected static $_defaultParameters = null;

    /**
     * @param $defaultEnv
     */
    public static function setDefaultEnv($defaultEnv)
    {
        self::$_defaultEnv = $defaultEnv;
    }

    /**
     * @param $defaultEnv
     */
    public static function setDefaultParameters($pParameters)
    {
        self::$_defaultParameters = $pParameters;
    }

    /**
     * @return string
     */
    public static function getDefaultEnv()
    {
        if (!isset(self::$_defaultEnv)) {
            if (isset($_SERVER['exaprint_env'])) {
                self::$_defaultEnv = $_SERVER['exaprint_env'];
            } else if (isset($_SERVER['exaprint_db_env'])){
                self::$_defaultEnv = $_SERVER['exaprint_db_env'];
            } else {
                throw new Exception('No env specified : $_SERVER[exaprint_env]');
            }
        }
        return self::$_defaultEnv;
    }

    /**
     * @param null $env
     * @return self
     */
    public static function get($pEnvironment = null)
    {
        $lEnvironment = is_null($pEnvironment) ? self::getDefaultEnv() : $pEnvironment;

        if (!isset(self::$_instances[$lEnvironment])) {
            self::$_instances[$lEnvironment] = new self($lEnvironment, self::$_defaultParameters);
        }

        return self::$_instances[$lEnvironment];
    }

    /**
     *
     */
    public static function init()
    {
        AbstractQuery::setDefaultRenderer(new SqlServer());

        Factory::setClassMap([

            "TBL_COMMANDE"                 => [
                "select" => '\Exaprint\DAL\Commande\Select',
                "filter" => '\Exaprint\DAL\Commande\Filter',
            ],

            "TBL_COMMANDE_LIGNE"           => [
                "select" => '\Exaprint\DAL\Commande\Ligne\Select',
                "filter" => '\Exaprint\DAL\Commande\Ligne\Filter',
            ],

            "TBL_COMMANDE_ETAT"            => [
                "select" => '\Exaprint\DAL\Commande\Etat\Select',
                "filter" => '\Exaprint\DAL\Commande\Etat\Filter',
            ],

            "TBL_CLIENT"                   => [
                "select" => '\Exaprint\DAL\Client\Select',
                "filter" => '\Exaprint\DAL\Client\Filter',
            ],

            "TBL_CLIENT_ADRESSELIVRAISON"  => [
                "select" => '\Exaprint\DAL\Client\AdresseLivraison\Select',
            ],

            "TBL_CLIENT_CONTACT"           => [
                "select" => '\Exaprint\DAL\Client\Contact\Select',
            ],

            "TBL_PRODUIT"                  => [
                "select" => '\Exaprint\DAL\Produit\Select',
                "filter" => '\Exaprint\DAL\Produit\Filter',
            ],

            "TBL_PRODUIT_FAMILLE_ARTICLES" => [
                "select" => '\Exaprint\DAL\Produit\Famille\Articles\Select',
                "filter" => '\Exaprint\DAL\Produit\Famille\Articles\Filter',
            ],

            "TBL_PRODUIT_FAMILLE_PRODUIT"  => [
                "select" => '\Exaprint\DAL\Produit\Famille\Produit\Select',
                "filter" => '\Exaprint\DAL\Produit\Famille\Produit\Filter',
            ],

            "TBL_PRODUIT_TL_PRODUIT_OPTION_FAMILLE_PRODUIT"  => [
                "select" => '\Exaprint\DAL\Produit\Famille\Produit\Option\Select',
            ],

            "TBL_PRODUIT_TL_PRODUIT_OPTION_VALEUR_PRODUIT_OPTION_FAMILLE_PRODUIT"  => [
                "select" => '\Exaprint\DAL\Produit\Famille\Produit\Option\Valeur\Select',
            ],

            "TBL_PRODUIT_OPTION"           => [
                "select" => '\Exaprint\DAL\Produit\Option\Select',
                "filter" => '\Exaprint\DAL\Produit\Option\Filter',
            ],

            "TBL_PRODUIT_OPTION_VALEUR"    => [
                "select" => '\Exaprint\DAL\Produit\Option\Valeur\Select',
                "filter" => '\Exaprint\DAL\Produit\Option\Valeur\Filter',
            ],

            "TBL_COMMANDE_PARTENAIRE"      => [
                "select" => '\Exaprint\DAL\Partenaire\Commande\Select',
            ],

            "TBL_PARTENAIRE"               => [
                "select" => '\Exaprint\DAL\Partenaire\Select',
            ],

            "TBL_TL_COMMANDE_PRINTBOX" => [
                "select" => '\Exaprint\DAL\Printbox\Projet\Select'
            ],
        ]);
    }

    /**
     * @param $env
     * @throws \Exception
     */
    public function __construct($pEnvironment, $pOptionalParameters = null) {

        // The first valid strategy is used.
        $lStrategies = array(
            "Exaprint\\DAL\\DB\\ConfigurationStrategy",
            "Exaprint\\DAL\\DB\\ServerEnvStrategy"
        );

        $lValidStrategyFound = false;

        foreach($lStrategies as $lStrategyClassName) {
            try {
                $lStrategy = new $lStrategyClassName($pEnvironment, $pOptionalParameters);
            } catch(Exception $e) {
                // This strategy doesn't exist !
                continue;
            }
            if($lStrategy->isValid()) {
                $lValidStrategyFound = true;
                try {
                    parent::__construct(
                        $lStrategy->getDsn(),
                        $lStrategy->getUserName(),
                        $lStrategy->getPassword()
                    );
                } catch (\PDOException $e) {
                    //trick to avoid random temporary access error to the DB
                    sleep(2);
                    try {
                        parent::__construct(
                            $lStrategy->getDsn(),
                            $lStrategy->getUserName(),
                            $lStrategy->getPassword()
                        );
                    } catch (\PDOException $e) {
                        throw new Exception(get_class($e) . ' Cannot access to the Database:' . $e->getMessage());
                    }
                }
                break;
            }
        }

        if(!$lValidStrategyFound) {
            throw new Exception("No valid strategy for DB connection.");
        } else {
            // Set Default Fetch Mode
            self::setAttribute(self::ATTR_DEFAULT_FETCH_MODE, self::FETCH_OBJ);
            // Set first day of weeks
            $this->query('SET DATEFIRST 1');
        }
    }

}
