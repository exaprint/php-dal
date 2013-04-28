<?php

namespace Exaprint\DAL;


use RBM\SqlQuery\AbstractQuery;
use RBM\SqlQuery\Factory;
use RBM\SqlQuery\Renderer\SqlServer;
use RBM\Utils\Dsn;

class DB extends \PDO
{

    const ENV_DEV_BACK  = 'dev_back';
    const ENV_DEV_FRONT = 'dev_front';
    const ENV_DEV_REF   = 'dev_ref';
    const ENV_STAGE     = 'stage';
    const ENV_PROD      = 'prod';

    protected static $_instances = [];

    protected static $_defaultEnv;

    /**
     * @param $defaultEnv
     */
    public static function setDefaultEnv($defaultEnv)
    {
        self::$_defaultEnv = $defaultEnv;
    }

    /**
     * @return string
     */
    public static function getDefaultEnv()
    {
        if (!isset(self::$_defaultEnv)) {
            if (isset($_SERVER['exaprint_db_env'])) {
                self::$_defaultEnv = $_SERVER['exaprint_db_env'];
            } else {
                throw new \Exception('No DB env specified : $_SERVER[exaprint_db_env]');
            }
        }
        return self::$_defaultEnv;
    }

    /**
     * @param null $env
     * @return self
     */
    public static function get($env = null)
    {
        $env = is_null($env) ? self::getDefaultEnv() : $env;

        if (!isset(self::$_instances[$env])) self::$_instances[$env] = new self($env);

        return self::$_instances[$env];
    }

    /**
     *
     */
    public static function initSqlQuery()
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

            "TBL_PRODUIT_OPTION"           => [
                "select" => '\Exaprint\DAL\Produit\Option\Select',
                "filter" => '\Exaprint\DAL\Produit\Option\Filter',
            ],

            "TBL_PRODUIT_OPTION_VALEUR"    => [
                "select" => '\Exaprint\DAL\Produit\Option\Valeur\Select',
                "filter" => '\Exaprint\DAL\Produit\Option\Valeur\Filter',
            ],

            "TBL_COMMANDE_PARTENAIRE" => [
                "select" => '\Exaprint\DAL\Partenaire\Commande\Select',
            ],

            "TBL_PARTENAIRE" => [
                "select" => '\Exaprint\DAL\Partenaire\Select',
            ],
        ]);
    }

    /**
     * @param $env
     * @throws \Exception
     */
    public function __construct($env)
    {
        if (!isset($_SERVER["exaprint_db_{$env}_host"])
            || !isset($_SERVER["exaprint_db_{$env}_user"])
            || !isset($_SERVER["exaprint_db_{$env}_pass"])
            || !isset($_SERVER["exaprint_db_{$env}_port"])
            || !isset($_SERVER["exaprint_db_{$env}_name"])
        ) {
            throw new \Exception("SetEnv values missing");
        }

        $dsn = new Dsn(Dsn::DBLIB, [
            "dbname"   => $_SERVER["exaprint_db_{$env}_name"],
            "host"     => $_SERVER["exaprint_db_{$env}_host"],
            "port"     => $_SERVER["exaprint_db_{$env}_port"],
            "encoding" => "UTF-8"
        ]);

        parent::__construct($dsn, $_SERVER["exaprint_db_{$env}_user"], $_SERVER["exaprint_db_{$env}_pass"]);
        self::setAttribute(self::ATTR_DEFAULT_FETCH_MODE, self::FETCH_OBJ);
    }
}