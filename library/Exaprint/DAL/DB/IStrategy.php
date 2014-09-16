<?php
/**
 * Created by PhpStorm.
 * User: christophe
 * Date: 16/09/2014
 * Time: 14:09
 */

namespace Exaprint\DAL\DB;


interface IStrategy {

    public function isValid();

    public function getDSN();

    public function getUserName();

    public function getPassword();

} 