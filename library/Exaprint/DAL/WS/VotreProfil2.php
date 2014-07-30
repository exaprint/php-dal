<?php
namespace Exaprint\DAL\WS;

class VotreProfil2 extends WebServiceAbstract
{
    protected $_params = [
        'psCleJeton' => null,
        'pnIdClient' => null,
        'psTailleSociete' => null,
        'pnIdActivite' => null,
        'pnNbPersonne' => null,
        'psVosClients' => null
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nVotreProfil2';
    }

    /**
     * @param $value
     * @return $this
     */
    public function psCleJeton($value)
    {
        return $this->_setParam('psCleJeton', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnIdClient($value)
    {
        return $this->_setParam('pnIdClient', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psTailleSociete($value)
    {
        return $this->_setParam('psTailleSociete', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnIdActivite($value)
    {
        return $this->_setParam('pnIdActivite', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnNbPersonne($value)
    {
        return $this->_setParam('pnNbPersonne', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psVosClients($value)
    {
        return $this->_setParam('psVosClients', $value, self::TYPE_STRING);
    }
}