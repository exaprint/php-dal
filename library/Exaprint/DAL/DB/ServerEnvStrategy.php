<?php
/**
 * Created by PhpStorm.
 * User: christophe
 * Date: 15/09/2014
 * Time: 14:09
 */

namespace Exaprint\DAL\DB;

use RBM\Utils\Dsn;

class ServerEnvStrategy extends AbstractStrategy {

    public function isValid() {
        $lReturn = false;
        if (isset($_SERVER["exaprint_db_{$this->mEnvironment}_host"])
            && isset($_SERVER["exaprint_db_{$this->mEnvironment}_user"])
            && isset($_SERVER["exaprint_db_{$this->mEnvironment}_pass"])
            && isset($_SERVER["exaprint_db_{$this->mEnvironment}_port"])
            && isset($_SERVER["exaprint_db_{$this->mEnvironment}_name"])
        ) {
            $lReturn = true;
        }
        return $lReturn;
    }

    public function getDSN() {

        $lDriver = isset($_SERVER["exaprint_db_{$this->mEnvironment}_driver"])
            ? $_SERVER["exaprint_db_{$this->mEnvironment}_driver"]
            : Dsn::DBLIB;

        $lReturn = new Dsn($lDriver, [
            "dbname"   => $_SERVER["exaprint_db_{$this->mEnvironment}_name"],
            "host"     => $_SERVER["exaprint_db_{$this->mEnvironment}_host"],
            "port"     => $_SERVER["exaprint_db_{$this->mEnvironment}_port"],
            "encoding" => "UTF-8"
        ]);

        return $lReturn;
    }

    public function getUserName() {
        return $_SERVER["exaprint_db_{$this->mEnvironment}_user"];
    }

    public function getPassword() {
        return $_SERVER["exaprint_db_{$this->mEnvironment}_pass"];
    }

} 