<?php
/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 12/02/2015
 * Time: 11:14
 */

namespace Exaprint\DAL\WS;


class EnvoiMail extends WebServiceAbstract
{

    protected $params = [
        'psCleJeton'            => null,
        'pnIDSociete'           => 1,
        'pnIDMail'              => 0,
        'pnIDLangue'            => 1,
        'psListeAdresseA'       => '',
        'psListeAdresseCC'      => '',
        'psListeAdresseCCI'     => '',
        'psCSVParametreMail'    => '',
        'psAdresseExpediteur'   => '',
    ];
    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nEnvoiMail';
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
    public function pnIDSociete($value)
    {
        return $this->_setParam('pnIDSociete', $value, self::TYPE_INT);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnIDMail($value)
    {
        return $this->_setParam('pnIDMail', $value, self::TYPE_INT);
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnIDLangue($value)
    {
        return $this->_setParam('pnIDLangue', $value, self::TYPE_INT);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psListeAdresseA($value)
    {
        return $this->_setParam('psListeAdresseA', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psListeAdresseCC($value)
    {
        return $this->_setParam('psListeAdresseCC', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psListeAdresseCCI($value)
    {
        return $this->_setParam('psListeAdresseCCI', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psCSVParametreMail($value)
    {
        return $this->_setParam('psCSVParametreMail', $value, self::TYPE_STRING);
    }

    /**
     * @param $value
     * @return $this
     */
    public function psAdresseExpediteur($value)
    {
        return $this->_setParam('psAdresseExpediteur', $value, self::TYPE_STRING);
    }

} 