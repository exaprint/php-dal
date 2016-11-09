<?php
namespace Exaprint\DAL\WS;

class GestionRevendeurSimple extends WebServiceAbstract
{

    protected $_params = [
        'psCleJeton'          => null,
        'psEmail'             => '',
        'pnCivilite'          => '',
        'psNom'               => '',
        'psPrenom'            => '',
        'pbMailing'           => 0,
        'pnIdSociete'         => 1,
        'pnIdLangue'          => 1,
        'pnIdPays'            => 1,
        'psConnuExparint'     => '',
        'psOrigineAutre'      => ''
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nCreationClientContactParEmail';
    }

    public function psEmail($value)
    {
        return $this->_setParam('psEmail', $value, self::TYPE_STRING);
    }

    public function pnCivilite($value)
    {
        return $this->_setParam('pnCivilite', $value, self::TYPE_STRING);
    }

    public function psNom($value)
    {
        return $this->_setParam('psNom', $value, self::TYPE_STRING);
    }

    public function psPrenom($value)
    {
        return $this->_setParam('psPrenom', $value, self::TYPE_STRING);
    }

    public function pbMailing($value)
    {
        return $this->_setParam('pbMailing', $value, self::TYPE_BOOL);
    }

    public function pnIdSociete($value)
    {
        return $this->_setParam('pnIdSociete', $value, self::TYPE_INT);
    }

    public function pnIdLangue($value)
    {
        return $this->_setParam('pnIdLangue', $value, self::TYPE_INT);
    }

    public function pnIdPays($value)
    {
        return $this->_setParam('pnIdPays', $value, self::TYPE_INT);
    }

    public function psConnuExparint($value)
    {
        return $this->_setParam('psConnuExparint', $value, self::TYPE_STRING);
    }

    public function psOrigineAutre($value)
    {
        return $this->_setParam('psOrigineAutre', $value, self::TYPE_STRING);
    }

}