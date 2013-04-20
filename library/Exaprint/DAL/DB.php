<?php

namespace Exaprint\DAL;


use RBM\SqlQuery\AbstractQuery;
use RBM\SqlQuery\Renderer\SqlServer;
use RBM\Utils\Dsn;

class DB extends \PDO
{
    protected static $_instances = [];

    protected static $_defaultEnv = "prod";

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
        if(!isset($_SERVER["exaprint_db_{$env}_host"])
        || !isset($_SERVER["exaprint_db_{$env}_user"])
        || !isset($_SERVER["exaprint_db_{$env}_pass"])
        || !isset($_SERVER["exaprint_db_{$env}_port"])
        || !isset($_SERVER["exaprint_db_{$env}_name"])){
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