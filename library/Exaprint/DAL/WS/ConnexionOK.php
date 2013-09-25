<?php

namespace Exaprint\DAL\WS;

class ConnexionOK extends WebServiceAbstract
{

    protected $_params = [
        'psCleJeton' => null,
        'sLogin'     => null,
        'sMDP'       => null,
    ];


    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_bConnexionOK';
    }

    /**
     * @param $login
     * @return $this
     */
    public function login($login)
    {
        return $this->_setParam('sLogin', $login, self::TYPE_STRING);
    }

    /**
     * @param $password
     * @return $this
     */
    public function password($password)
    {
        return $this->_setParam('sMDP', $password, self::TYPE_STRING);
    }
}