<?php

namespace Exaprint\DAL\WS;

class MajPortefeuille extends WebServiceAbstract
{
    protected $_params = [
        'psCleJeton'   => null,
        'pnIdClient' => 0,
        'pbEstRevendeur' => false,
        'pnIDPortefeuille' => 0,
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_bMajPortefeuille';
    }

    /**
     * @param $idClient
     * @return $this
     */
    public function idClient($idClient)
    {
        return $this->_setParam('pnIdClient', $idClient, self::TYPE_INT);
    }

    /**
     * @param $estRevendeur
     * @return $this
     */
    public function estRevendeur($estRevendeur)
    {
        return $this->_setParam('pbEstRevendeur', $estRevendeur, self::TYPE_BOOL);
    }

    /**
     * @param $idPortefeuille
     * @return $this
     */
    public function idPortefeuille($idPortefeuille)
    {
        return $this->_setParam('pnIDPortefeuille', $idPortefeuille, self::TYPE_INT);
    }
}