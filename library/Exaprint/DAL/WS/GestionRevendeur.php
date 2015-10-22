<?php
namespace Exaprint\DAL\WS;

class GestionRevendeur extends WebServiceAbstract
{

    const TYPE_ACTION_INSERT = 1;
    const TYPE_ACTION_UPDATE = 2;
    const TYPE_ACTION_DELETE = 3;

    protected $_params = [
        'psCleJeton'          => null,
        'pnTypeAction'        => null,
        'pnIDSociete'         => null,
        'psRaisonSociale'     => null,
        'pnIDFormule'         => 12,
        'pnIDClientActivite'  => 16,
        'psEmailFacturation'  => null,
        'pnIDPays'            => null,
        'psNumTVAIntraCom'    => '',
        'psNumSiret'          => '',
        'psAdresse1'          => null,
        'psAdresse2'          => null,
        'psAdresse3'          => null,
        'psCodePostal'        => null,
        'psVille'             => null,
        'psTelephone'         => null,
        'psPortable'          => '',
        'psFax'               => '',
        'pnIDClient'          => 0,
        'pnIDVille'           => null,
        'pnTypeRevendeur'     => 1,
        'psAssujettiTVA'      => '',
        'psNomContact'        => '',
        'pnIdLangueMailing'   => null,
        'psCodeNaf'           => '',
        'psRegion'            => '',
        'pbEstDetenteurSiret' => 0,
        'psInfosCommerciales' => '',
        'pbEstInscritMDA'     => 0,
        'pbEstAdherentMDA'    => 0,
        'psNumeroOrdreMDA'    => '',
        'psStockageCarteMDA'  => '',
        'psConnuExaprint'     => '',
        'psOrigineAutre'      => ''

    ];

    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nGestionRevendeur';
    }

    /**
     * @param $value
     * @return $this
     */
    public function pnTypeAction($value)
    {
        return $this->_setParam('pnTypeAction', $value, self::TYPE_INT);
    }

    public function pnIDSociete($value)
    {
        return $this->_setParam('pnIDSociete', $value, self::TYPE_INT);
    }

    public function psRaisonSociale($value)
    {
        return $this->_setParam('psRaisonSociale', $value, self::TYPE_STRING);
    }

    public function pnIDFormule($value)
    {
        return $this->_setParam('pnIDFormule', $value, self::TYPE_INT);
    }

    public function pnIDClientActivite($value)
    {
        return $this->_setParam('pnIDClientActivite', $value, self::TYPE_INT);
    }

    public function psEmailFacturation($value)
    {
        return $this->_setParam('psEmailFacturation', $value, self::TYPE_STRING);
    }

    public function pnIDPays($value)
    {
        return $this->_setParam('pnIDPays', $value, self::TYPE_INT);
    }

    public function psNumTVAIntraCom($value)
    {
        return $this->_setParam('psNumTVAIntraCom', $value, self::TYPE_STRING);
    }

    public function psNumSiret($value)
    {
        return $this->_setParam('psNumSiret', $value, self::TYPE_STRING);
    }

    public function psAdresse1($value)
    {
        return $this->_setParam('psAdresse1', $value, self::TYPE_STRING);
    }

    public function psAdresse2($value)
    {
        return $this->_setParam('psAdresse2', $value, self::TYPE_STRING);
    }

    public function psAdresse3($value)
    {
        return $this->_setParam('psAdresse3', $value, self::TYPE_STRING);
    }

    public function psCodePostal($value)
    {
        return $this->_setParam('psCodePostal', $value, self::TYPE_STRING);
    }

    public function psVille($value)
    {
        return $this->_setParam('psVille', $value, self::TYPE_STRING);
    }

    public function psTelephone($value)
    {
        return $this->_setParam('psTelephone', $value, self::TYPE_STRING);
    }

    public function psPortable($value)
    {
        return $this->_setParam('psPortable', $value, self::TYPE_STRING);
    }

    public function psFax($value)
    {
        return $this->_setParam('psFax', $value, self::TYPE_STRING);
    }

    public function pnIDClient($value)
    {
        return $this->_setParam('pnIDClient', $value, self::TYPE_INT);
    }

    public function pnIDVille($value)
    {
        return $this->_setParam('pnIDVille', $value, self::TYPE_INT);
    }

    public function pnTypeRevendeur($value)
    {
        return $this->_setParam('pnTypeRevendeur', $value, self::TYPE_INT);
    }

    public function psAssujettiTVA($value)
    {
        return $this->_setParam('psAssujettiTVA', $value, self::TYPE_STRING);
    }

    public function psNomContact($value)
    {
        return $this->_setParam('psNomContact', $value, self::TYPE_STRING);
    }

    public function pnIdLangueMailing($value)
    {
        return $this->_setParam('pnIdLangueMailing', $value, self::TYPE_INT);
    }

    public function psCodeNaf($value)
    {
        return $this->_setParam('psCodeNaf', $value, self::TYPE_STRING);
    }

    public function psRegion($value)
    {
        return $this->_setParam('psRegion', $value, self::TYPE_STRING);
    }

    public function pbEstDetenteurSiret($value)
    {
        return $this->_setParam('pbEstDetenteurSiret', $value, self::TYPE_BOOL);
    }

    public function psInfosCommerciales($value)
    {
        return $this->_setParam('psInfosCommerciales', $value, self::TYPE_STRING);
    }

    public function pbEstInscritMDA($value)
    {
        return $this->_setParam('pbEstInscritMDA', $value, self::TYPE_BOOL);
    }

    public function pbEstAdherentMDA($value)
    {
        return $this->_setParam('pbEstAdherentMDA', $value, self::TYPE_BOOL);
    }

    public function psNumeroOrdreMDA($value)
    {
        return $this->_setParam('psNumeroOrdreMDA', $value, self::TYPE_STRING);
    }

    public function psStockageCarteMDA($value)
    {
        return $this->_setParam('psStockageCarteMDA', $value, self::TYPE_STRING);
    }

    public function psConnuExparint($value)
    {
        return $this->_setParam('psConnuExaprint', $value, self::TYPE_STRING);
    }

    public function psOrigineAutre($value)
    {
        return $this->_setParam('psOrigineAutre', $value, self::TYPE_STRING);
    }

}