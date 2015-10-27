<?php
namespace Exaprint\DAL\WS;

class VotreProfil3 extends WebServiceAbstract
{
    protected $_params = [
        'psCleJeton' => null,
        'pnIdClient' => null,
        'psConnuExparint' => null,
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
    public function pnIdClient($value)
    {
        return $this->_setParam('pnIdClient', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psConnuExparint($value)
    {
        return $this->_setParam('psConnuExparint', $value, self::TYPE_STRING);
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