<?php

namespace Exaprint\DAL\WS;


class CreationCommandePrintbox extends WebServiceAbstract
{
    protected $_params = [
        'pnIdCommande'      => 0,
        'pnIdClientFinal'   => 0,
        'pmMontantTTC'      => 0,
        'pmMontantHT'       => 0,
        'pmMontantTva'      => 0,
        'pbProforma'        => false,
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return "WS_nCreationCommandePrintbox";
    }

    public function pnIdCommande($value)
    {
        return $this->_setParam('pnIdCommande', $value, self::TYPE_INT);
    }

    public function pnIdClientFinal($value)
    {
        return $this->_setParam('pnIdClientFinal', $value, self::TYPE_INT);
    }

    public function pmMontantTTC($value)
    {
        return $this->_setParam('pmMontantTTC', $value, self::TYPE_FLOAT);
    }

    public function pmMontantHT($value)
    {
        return $this->_setParam('pmMontantHT', $value, self::TYPE_FLOAT);
    }

    public function pmMontantTva($value)
    {
        return $this->_setParam('pmMontantTva', $value, self::TYPE_FLOAT);
    }

    public function pbProforma($value)
    {
        return $this->_setParam('pbProforma', $value, self::TYPE_BOOL);
    }
} 