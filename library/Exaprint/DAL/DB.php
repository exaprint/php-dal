<?php

namespace Exaprint\DAL;


use RBM\SqlQuery\AbstractQuery;
use RBM\SqlQuery\Renderer\SqlServer;
use RBM\Utils\Dsn;

class DB extends \PDO
{
    protected static $_instance;

    public static function getInstance()
    {
        if (!isset(self::$_instance)) self::$_instance = new self();
        return self::$_instance;
    }

    public function __construct()
    {
        $dsn = new Dsn(Dsn::DBLIB, [
            "dbname"   => $_SERVER["dbname"],
            "host"     => $_SERVER["dbhost"],
            "port"     => $_SERVER["dbport"],
            "encoding" => "UTF-8"
        ]);

        parent::__construct($dsn, $_SERVER["dbuser"], $_SERVER["dbpassword"]);
        self::setAttribute(self::ATTR_DEFAULT_FETCH_MODE, self::FETCH_OBJ);
        AbstractQuery::setDefaultRenderer(new SqlServer());
    }
}