<?php

namespace Exaprint\DAL;


use RBM\SqlQuery\AbstractQuery;
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
        AbstractQuery::setDefaultRenderer(new SqlServer());
    }
}