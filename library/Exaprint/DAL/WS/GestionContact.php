<?php
namespace Exaprint\DAL\WS;

class GestionContact extends WebServiceAbstract
{

    const TYPE_ACTION_INSERT = 1;
    const TYPE_ACTION_UPDATE = 2;
    const TYPE_ACTION_DELETE = 3;

    protected $_params = [
        'psCleJeton'              => null,
        'pnTypeAction'            => null,
        'pnIDClient'              => null,
        'pnIdClientContact'       => 0,
        'psNomContact'            => null,
        'psPrenomContact'         => null,
        'pbEstReferentCommercial' => true,
        'pnCiviliteContact'       => null,
        'psEmailContact'          => null,
        'psTelContact'            => '',
        'psTelPortableContact'    => '',
        'pnIDContactFonction'     => 0,
        'pbMailingContact'        => true,
        'pbExapassActif'          => true,
        'pbEstContactPrincipal'   => true,
        'pnIdLangueMailing'       => null,
        'pbEstEnCopieMail'        => false,
        'pbMailingInfo'           => false
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nGestionContact';
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
    public function pnTypeAction($value)
    {
        return $this->_setParam('pnTypeAction', $value, self::TYPE_STRING);
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
    public function pnIdClientContact($value)
    {
        return $this->_setParam('pnIdClientContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psNomContact($value)
    {
        return $this->_setParam('psNomContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psPrenomContact($value)
    {
        return $this->_setParam('psPrenomContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pbEstReferentCommercial($value)
    {
        return $this->_setParam('pbEstReferentCommercial', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnCiviliteContact($value)
    {
        return $this->_setParam('pnCiviliteContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psEmailContact($value)
    {
        return $this->_setParam('psEmailContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psTelContact($value)
    {
        return $this->_setParam('psTelContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psTelPortableContact($value)
    {
        return $this->_setParam('psTelPortableContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnIDContactFonction($value)
    {
        return $this->_setParam('pnIDContactFonction', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pbMailingContact($value)
    {
        return $this->_setParam('pbMailingContact', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pbExapassActif($value)
    {
        return $this->_setParam('pbExapassActif', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pbEstContactPrincipal($value)
    {
        return $this->_setParam('pbEstContactPrincipal', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnIdLangueMailing($value)
    {
        return $this->_setParam('pnIdLangueMailing', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pbEstEnCopieMail($value)
    {
        return $this->_setParam('pbEstEnCopieMail', $value, self::TYPE_BOOL);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pbMailingInfo($value)
    {
        return $this->_setParam('pbMailingInfo', $value, self::TYPE_BOOL);
    }
}
