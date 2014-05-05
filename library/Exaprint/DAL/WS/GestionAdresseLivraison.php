<?php
namespace Exaprint\DAL\WS;

class GestionAdresseLivraison extends WebServiceAbstract
{

    const TYPE_ACTION_INSERT = 1;
    const TYPE_ACTION_UPDATE = 2;
    const TYPE_ACTION_DELETE = 3;

    protected $_params = [
        'psCleJeton'                  => null,
        'pnTypeAction'                => null,
        'pnIDClientAdresseLivraison'  => 0,
        'psIntitule'                  => '',
        'psAdresseLivraison1'         => '',
        'psAdresseLivraison2'         => '',
        'psAdresseLivraison3'         => '',
        'psVilleLivraison'            => '',
        'pnIDClient'                  => null,
        'psCodePostalLivraison'       => '',
        'pnIDPays'                    => '',
        'pnIDVille'                   => 0,
        'pbActif'                     => true,
        'psNomContact'                => '',
        'psTelephoneContact'          => '',
        'psCommentaire'               => '',
        'psDigicode'                  => '',
        'psPortableLivraison'         => '',
        'psEmailLivraison'            => '',
        'psNomDestinataire'           => '',
        'pnIDAdresseLivraisonOrigine' => 0,
        'pbEstFavorie'                => false,
        'psRegion'                    => false,
    ];

    public function getName()
    {
        return 'WS_nGestionAdresseLivraison';
    }


    public function pnTypeAction($value)
    {
        return $this->_setParam('pnTypeAction', $value, self::TYPE_INT);
    }

    public function pnIDClientAdresseLivraison($value)
    {
        return $this->_setParam('pnIDClientAdresseLivraison', $value, self::TYPE_INT);
    }

    public function psIntitule($value)
    {
        return $this->_setParam('psIntitule', $value, self::TYPE_STRING);
    }

    public function psAdresseLivraison1($value)
    {
        return $this->_setParam('psAdresseLivraison1', $value, self::TYPE_STRING);
    }

    public function psAdresseLivraison2($value)
    {
        return $this->_setParam('psAdresseLivraison2', $value, self::TYPE_STRING);
    }

    public function psAdresseLivraison3($value)
    {
        return $this->_setParam('psAdresseLivraison3', $value, self::TYPE_STRING);
    }

    public function psVilleLivraison($value)
    {
        return $this->_setParam('psVilleLivraison', $value, self::TYPE_STRING);
    }

    public function pnIDClient($value)
    {
        return $this->_setParam('pnIDClient', $value, self::TYPE_INT);
    }

    public function psCodePostalLivraison($value)
    {
        return $this->_setParam('psCodePostalLivraison', $value, self::TYPE_STRING);
    }

    public function pnIDPays($value)
    {
        return $this->_setParam('pnIDPays', $value, self::TYPE_INT);
    }

    public function pnIDVille($value)
    {
        return $this->_setParam('pnIDVille', $value, self::TYPE_INT);
    }

    public function pbActif($value)
    {
        return $this->_setParam('pbActif', $value, self::TYPE_BOOL);
    }

    public function psNomContact($value)
    {
        return $this->_setParam('psNomContact', $value, self::TYPE_STRING);
    }

    public function psTelephoneContact($value)
    {
        return $this->_setParam('psTelephoneContact', $value, self::TYPE_STRING);
    }

    public function psCommentaire($value)
    {
        return $this->_setParam('psCommentaire', $value, self::TYPE_STRING);
    }

    public function psDigicode($value)
    {
        return $this->_setParam('psDigicode', $value, self::TYPE_STRING);
    }

    public function psPortableLivraison($value)
    {
        return $this->_setParam('psPortableLivraison', $value, self::TYPE_STRING);
    }

    public function psEmailLivraison($value)
    {
        return $this->_setParam('psEmailLivraison', $value, self::TYPE_STRING);
    }

    public function psNomDestinataire($value)
    {
        return $this->_setParam('psNomDestinataire', $value, self::TYPE_STRING);
    }

    public function pnIDAdresseLivraisonOrigine($value)
    {
        return $this->_setParam('pnIDAdresseLivraisonOrigine', $value, self::TYPE_STRING);
    }

    public function pbEstFavorie($value)
    {
        return $this->_setParam('pbEstFavorie', $value, self::TYPE_BOOL);
    }

    public function psRegion($value)
    {
        return $this->_setParam('psRegion', $value, self::TYPE_STRING);
    }

}