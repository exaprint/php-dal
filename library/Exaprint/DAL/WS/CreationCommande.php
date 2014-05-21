<?php

namespace Exaprint\DAL\WS;

class CreationCommande extends WebServiceAbstract
{


    protected $_params = [
        'pnIDClient'                     => null,
        'pnIDModeReglement'              => null,
        'pnIDClientAdresseLivraison'     => null,
        'pnIDClientContact'              => null,
        'pnIdProduit'                    => null,
        'pnIdProduitFamilleCommerciale'  => 0,
        'pmPrixHT'                       => 0,
        'pmTauxTVA'                      => 0,
        'pmMontantTVA'                   => 0,
        'pmMontantTTC'                   => 0,
        'pnQuantite'                     => 0,
        'psCSVValeursOptionsProduit'     => null,
        'pmPoidsCommande'                => 0,
        'psReference'                    => null,
        'pmMontantHTCommande'            => 0,
        'pmMontantTVACommande'           => 0,
        'pmMontantTTCCommande'           => 0,
        'pbCAExaClub'                    => 0,
        'psCommentairePAO'               => '',
        'psCommentaireBlocagePaiement'   => '',
        'psCommentaireBlocageCommercial' => '',
        'psCommentaireBlocagePAO'        => '',
        'psCommentaires'                 => '',
        'psLibelleLigneCde'              => null,
        'pnIdAdresseBatPapier'           => 0,
        'psCSVMailBatNumerique'          => '',
        'pnIdAdresseJustificatif'        => 0,
        'pnIDDevis'                      => 0,
        'pnIdAmalgame'                   => 0,
        'pbEstGroupage'                  => 0,
        'pnNumeroPanier'                 => 0,
        'pnNbPorteCarte'                 => 0,
        'pbImpressionEnlEtat'            => 0,
        'pnIDCommandeTimbroShop'         => 0,
        'pbConsommationSolde'            => 0,
        'psCSVQRCodeFlashCode'           => '',
        'pbEstRevendeurMotionCard'       => 0,
        'pnIDCertificationSociete'       => 0,
        'pnTypeUtilisationCertification' => 0,
        'pmMontantMargePrintbox'         => 0,
        'pnIDCommandePartenaire'         => 0,
        'psCSVFrais'                     => '',
        'psCodePromo'                    => '',
        'psCSVFraisPort'                 => '',
        'psCSVFraisDon'                  => '',
        'psCSVFraisExaclub'              => '',
        'psCSVFraisBatPapier'            => '',

    ];

    /**
     * @return string
     */
    public function getName()
    {
        return "WS_nCreationDevis";
    }

    public function pnIDClient($value)
    {
        return $this->_setParam('pnIDClient', $value, self::TYPE_INT);
    }

    public function pnIDModeReglement($value)
    {
        return $this->_setParam('pnIDModeReglement', $value, self::TYPE_INT);
    }

    public function pnIDClientAdresseLivraison($value)
    {
        return $this->_setParam('pnIDClientAdresseLivraison', $value, self::TYPE_INT);
    }

    public function pnIDClientContact($value)
    {
        return $this->_setParam('pnIDClientContact', $value, self::TYPE_INT);
    }

    public function pnIdProduit($value)
    {
        return $this->_setParam('pnIdProduit', $value, self::TYPE_INT);
    }

    public function pnIdProduitFamilleCommerciale($value)
    {
        return $this->_setParam('pnIdProduitFamilleCommerciale', $value, self::TYPE_INT);
    }

    public function pmPrixHT($value)
    {
        return $this->_setParam('pmPrixHT', $value, self::TYPE_FLOAT);
    }

    public function pmTauxTVA($value)
    {
        return $this->_setParam('pmTauxTVA', $value, self::TYPE_FLOAT);
    }

    public function pmMontantTVA($value)
    {
        return $this->_setParam('pmMontantTVA', $value, self::TYPE_FLOAT);
    }

    public function pmMontantTTC($value)
    {
        return $this->_setParam('pmMontantTTC', $value, self::TYPE_FLOAT);
    }

    public function pnQuantite($value)
    {
        return $this->_setParam('pnQuantite', $value, self::TYPE_INT);
    }

    public function psCSVValeursOptionsProduit($value)
    {
        return $this->_setParam('psCSVValeursOptionsProduit', $value, self::TYPE_CSV);
    }

    public function pmPoidsCommande($value)
    {
        return $this->_setParam('pmPoidsCommande', $value, self::TYPE_FLOAT);
    }

    public function psReference($value)
    {
        return $this->_setParam('psReference', $value, self::TYPE_STRING);
    }

    public function pmMontantHTCommande($value)
    {
        return $this->_setParam('pmMontantHTCommande', $value, self::TYPE_FLOAT);
    }

    public function pmMontantTVACommande($value)
    {
        return $this->_setParam('pmMontantTVACommande', $value, self::TYPE_FLOAT);
    }

    public function pmMontantTTCCommande($value)
    {
        return $this->_setParam('pmMontantTTCCommande', $value, self::TYPE_FLOAT);
    }

    public function pbCAExaClub($value)
    {
        return $this->_setParam('pbCAExaClub', $value, self::TYPE_BOOL);
    }

    public function psCommentairePAO($value)
    {
        return $this->_setParam('psCommentairePAO', $value, self::TYPE_STRING);
    }

    public function psCommentaireBlocagePaiement($value)
    {
        return $this->_setParam('psCommentaireBlocagePaiement', $value, self::TYPE_STRING);
    }

    public function psCommentaireBlocageCommercial($value)
    {
        return $this->_setParam('psCommentaireBlocageCommercial', $value, self::TYPE_STRING);
    }

    public function psCommentaireBlocagePAO($value)
    {
        return $this->_setParam('psCommentaireBlocagePAO', $value, self::TYPE_STRING);
    }

    public function psCommentaires($value)
    {
        return $this->_setParam('psCommentaires', $value, self::TYPE_STRING);
    }

    public function psLibelleLigneCde($value)
    {
        return $this->_setParam('psLibelleLigneCde', $value, self::TYPE_STRING);
    }

    public function pnIdAdresseBatPapier($value)
    {
        return $this->_setParam('pnIdAdresseBatPapier', $value, self::TYPE_INT);
    }

    public function psCSVMailBatNumerique($value)
    {
        return $this->_setParam('psCSVMailBatNumerique', $value, self::TYPE_CSV);
    }

    public function pnIdAdresseJustificatif($value)
    {
        return $this->_setParam('pnIdAdresseJustificatif', $value, self::TYPE_INT);
    }

    public function pnIDDevis($value)
    {
        return $this->_setParam('pnIDDevis', $value, self::TYPE_INT);
    }

    public function pnIdAmalgame($value)
    {
        return $this->_setParam('pnIdAmalgame', $value, self::TYPE_INT);
    }

    public function pbEstGroupage($value)
    {
        return $this->_setParam('pbEstGroupage', $value, self::TYPE_BOOL);
    }

    public function pnNumeroPanier($value)
    {
        return $this->_setParam('pnNumeroPanier', $value, self::TYPE_INT);
    }

    public function pnNbPorteCarte($value)
    {
        return $this->_setParam('pnNbPorteCarte', $value, self::TYPE_INT);
    }

    public function pbImpressionEnlEtat($value)
    {
        return $this->_setParam('pbImpressionEnlEtat', $value, self::TYPE_BOOL);
    }

    public function pnIDCommandeTimbroShop($value)
    {
        return $this->_setParam('pnIDCommandeTimbroShop', $value, self::TYPE_INT);
    }

    public function pbConsommationSolde($value)
    {
        return $this->_setParam('pbConsommationSolde', $value, self::TYPE_BOOL);
    }

    public function psCSVQRCodeFlashCode($value)
    {
        return $this->_setParam('psCSVQRCodeFlashCode', $value, self::TYPE_CSV);
    }

    public function pbEstRevendeurMotionCard($value)
    {
        return $this->_setParam('pbEstRevendeurMotionCard', $value, self::TYPE_BOOL);
    }

    public function pnIDCertificationSociete($value)
    {
        return $this->_setParam('pnIDCertificationSociete', $value, self::TYPE_INT);
    }

    public function pnTypeUtilisationCertification($value)
    {
        return $this->_setParam('pnTypeUtilisationCertification', $value, self::TYPE_INT);
    }

    public function pmMontantMargePrintbox($value)
    {
        return $this->_setParam('pmMontantMargePrintbox', $value, self::TYPE_FLOAT);
    }

    public function pnIDCommandePartenaire($value)
    {
        return $this->_setParam('pnIDCommandePartenaire', $value, self::TYPE_INT);
    }

    public function psCSVFrais($value)
    {
        return $this->_setParam('psCSVFrais', $value, self::TYPE_CSV);
    }

    public function psCodePromo($value)
    {
        return $this->_setParam('psCodePromo', $value, self::TYPE_STRING);
    }

    public function psCSVFraisPort($value)
    {
        return $this->_setParam('psCSVFraisPort', $value, self::TYPE_CSV);
    }

    public function psCSVFraisDon($value)
    {
        return $this->_setParam('psCSVFraisDon', $value, self::TYPE_CSV);
    }

    public function psCSVFraisExaclub($value)
    {
        return $this->_setParam('psCSVFraisExaclub', $value, self::TYPE_CSV);
    }

    public function psCSVFraisBatPapier($value)
    {
        return $this->_setParam('psCSVFraisBatPapier', $value, self::TYPE_CSV);
    }
}