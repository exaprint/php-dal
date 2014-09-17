<?php
/**
 * Created by PhpStorm.
 * User: christophe
 * Date: 15/09/2014
 * Time: 16:01
 */

namespace Exaprint\DAL\DB;

use RBM\Utils\Dsn;

class ConfigurationStrategy extends AbstractCommonStrategy {

    public function isValid() {
        $lReturn = false;
        if (isset($this->mOptionalParameters[$this->mEnvironment]["db_host"])
            && isset($this->mOptionalParameters[$this->mEnvironment]["db_port"])
            && isset($this->mOptionalParameters[$this->mEnvironment]["db_name"])
            && isset($this->mOptionalParameters[$this->mEnvironment]["db_user"])
            && isset($this->mOptionalParameters[$this->mEnvironment]["db_pass"])
        ) {
            $lReturn = true;
        }
        return $lReturn;
    }

    public function getDSN() {

        $lDriver = isset($this->mOptionalParameters[$this->mEnvironment]["db_driver"])
            ? $this->mOptionalParameters[$this->mEnvironment]["db_driver"]
            : Dsn::DBLIB;

        $lReturn = new Dsn($lDriver, [
            "dbname"   => $this->mOptionalParameters[$this->mEnvironment]["db_name"],
            "host"     => $this->mOptionalParameters[$this->mEnvironment]["db_host"],
            "port"     => $this->mOptionalParameters[$this->mEnvironment]["db_port"],
            "encoding" => "UTF-8"
        ]);

        return $lReturn;
    }

    public function getUserName() {
        return $this->mOptionalParameters[$this->mEnvironment]["db_user"];
    }

    public function getPassword() {
        return $this->mOptionalParameters[$this->mEnvironment]["db_pass"];
    }
} 