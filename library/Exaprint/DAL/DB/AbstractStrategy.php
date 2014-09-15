<?php
/**
 * Created by PhpStorm.
 * User: christophe
 * Date: 15/09/2014
 * Time: 14:07
 */

namespace Exaprint\DAL\DB;


abstract class AbstractStrategy {

    protected $mEnvironment;
    protected $mOptionalParameters;

    public function __construct($pEnvironment, $pOptionalParameters = null) {
        $this->mEnvironment = $pEnvironment;
        $this->mOptionalParameters = $pOptionalParameters;
    }

    abstract public function isValid();

    abstract public function getDSN();

    abstract public function getUserName();

    abstract public function getPassword();

} 