<?php
namespace Exaprint\DAL\WS;

class VotreProfil3 extends WebServiceAbstract
{
    protected $_params = [
        'psCleJeton' => null,
        'pnIDClient' => null,
        'psConnuExaprint' => null,
        'psOrigineAutre' => null,
        'psCSVAttenteExaprint' => null,
        'psCSVProduitInteresse' => null
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nVotreProfil3';
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
    public function pnIDClient($value)
    {
        return $this->_setParam('pnIDClient', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psConnuExaprint($value)
    {
        return $this->_setParam('psConnuExaprint', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psOrigineAutre($value)
    {
        return $this->_setParam('psOrigineAutre', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psCSVAttenteExaprint($value)
    {
        return $this->_setParam('psCSVAttenteExaprint', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psCSVProduitInteresse($value)
    {
        return $this->_setParam('psCSVProduitInteresse', $value, self::TYPE_STRING);
    }
}