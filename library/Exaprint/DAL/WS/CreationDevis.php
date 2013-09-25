<?php

namespace Exaprint\DAL\WS;

class CreationDevis extends WebServiceAbstract
{


    const RECTO       = 1;
    const RECTO_VERSO = 2;

    protected $_params = [
        'psCleJeton'                 => null,
        'pnIDContact'                => null,
        'pnIDProduit'                => null,
        'psQuantites'                => null,
        'pnIDFamilleArticles'        => 0,
        'pmSurface'                  => 0,
        'pnRectoVerso'               => 0,
        'pmGrammageSupport'          => 0,
        'psIntitule'                 => '',
        'pnIDDEvis'                  => 0,
        'pmGrammageCouverture'       => 0,
        'pnNbFeuillets'              => 0,
        'psCommentaireClient'        => '',
        'psPrix'                     => '',
        'pbAvecBAT'                  => false,
        'psIDPromo'                  => '',
        'pnNbPages'                  => 0,
        'pmGrammageDos'              => 0,
        'psCSVValeurOption'          => '',
        'psDemandeInitiale'          => '',
        'psCSVValeursOptionsProduit' => '',
        'pbFormeDecoupe'             => false,
        'psNomFormulaire'            => '',
        'psOptionNonReconnues'       => '',
        'psCommentairePAO'           => '',
        'pnIDCommandePartenaire'     => '',
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return "WS_nCreationDevis";
    }


    /**
     * @param $IDContact
     * @return $this
     */
    public function idContact($IDContact)
    {
        return $this->_setParam("pnIDContact", $IDContact, self::TYPE_INT);
    }

    /**
     * @param $IDProduit
     * @return $this
     */
    public function idProduit($IDProduit)
    {
        return $this->_setParam("pnIDProduit", $IDProduit, self::TYPE_INT);
    }

    /**
     * @param $quantites
     * @return $this
     */
    public function quantites(array $quantites)
    {
        return $this->_setParam("psQuantites", $quantites, self::TYPE_CSV);
    }

    /**
     * @param $IDProduitFamilleArticles
     * @return $this
     */
    public function IDProduitFamilleArticles($IDProduitFamilleArticles)
    {
        return $this->_setParam("pnIDProduitFamilleArticles", $IDProduitFamilleArticles, self::TYPE_INT);
    }

    /**
     * @param $surface
     * @return $this
     */
    public function surface($surface)
    {
        return $this->_setParam("pmSurface", $surface, self::TYPE_FLOAT);
    }

    /**
     * @param $rectoVerso
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function rectoVerso($rectoVerso)
    {
        if ($rectoVerso != self::RECTO && $rectoVerso != self::RECTO_VERSO) {
            throw new \InvalidArgumentException("La valeur pour le paramètre RectoVerso doit être 1 ou 2");
        }
        return $this->_setParam("pnRectoVerso", $rectoVerso, self::TYPE_INT);
    }

    /**
     * @param $grammageSupport
     * @return $this
     */
    public function grammageSupport($grammageSupport)
    {
        return $this->_setParam("pmGrammageSupport", $grammageSupport, self::TYPE_FLOAT);
    }

    /**
     * @param string $intitule
     * @return $this
     */
    public function intitule($intitule)
    {
        return $this->_setParam("psIntitule", $intitule, self::TYPE_STRING);
    }

    /**
     * @param int $IDDevis
     * @return $this
     */
    public function idDevis($IDDevis)
    {
        return $this->_setParam("pnIDDEvis", $IDDevis, self::TYPE_STRING);
    }

    /**
     * @param float $grammageCouverture
     * @return $this
     */
    public function grammageCouverture($grammageCouverture)
    {
        return $this->_setParam("pmGrammageCouverture", $grammageCouverture, self::TYPE_FLOAT);
    }

    /**
     * @param int $nbFeuillets
     * @return $this
     */
    public function nbFeuillets($nbFeuillets)
    {
        return $this->_setParam("pmNbFeuillets", $nbFeuillets, self::TYPE_INT);
    }

    /**
     * @param string $commentaireClient
     * @return $this
     */
    public function commentaireClient($commentaireClient)
    {
        return $this->_setParam("psCommentaireClient", $commentaireClient, self::TYPE_STRING);
    }

    /**
     * @param array $prix
     * @return $this
     */
    public function prix(array $prix)
    {
        return $this->_setParam("psPrix", $prix, self::TYPE_CSV);
    }

    /**
     * @param boolean $avecBat
     * @return $this
     */
    public function avecBat($avecBat)
    {
        return $this->_setParam("pbAvecBAT", $avecBat, self::TYPE_BOOL);
    }

    /**
     * @param string $idPromo
     * @return $this
     */
    public function idPromo($idPromo)
    {
        return $this->_setParam("psIDPromo", $idPromo, self::TYPE_STRING);
    }

    /**
     * @param int $nbPages
     * @return $this
     */
    public function nbPages($nbPages)
    {
        return $this->_setParam("pnNbPages", $nbPages, self::TYPE_INT);
    }

    /**
     * @param float $grammageDos
     * @return $this
     */
    public function grammageDos($grammageDos)
    {
        return $this->_setParam("pmGrammageDos", $grammageDos, self::TYPE_FLOAT);
    }

    /**
     * @param array $valeurOption
     * @return $this
     */
    public function valeurOption(array $valeurOption)
    {
        return $this->_setParam("psCSVValeurOption", $valeurOption, self::TYPE_CSV);
    }

    /**
     * @param string $demandeInitiale
     * @return $this
     */
    public function demandeInitiale($demandeInitiale)
    {
        return $this->_setParam("psDemandeInitiale", $demandeInitiale, self::TYPE_STRING);
    }

    /**
     * @param array $valeursOptionsProduit
     * @return $this
     */
    public function valeursOptionsProduit(array $valeursOptionsProduit)
    {
        return $this->_setParam("psValeursOptionsProduit", $valeursOptionsProduit, self::TYPE_CSV);
    }

    /**
     * @param boolean $avecFormeDecoupe
     * @return $this
     */
    public function avecFormeDecoupe($avecFormeDecoupe)
    {
        return $this->_setParam("pbFormeDecoupe", $avecFormeDecoupe, self::TYPE_BOOL);
    }

    /**
     * @param string $nomFormulaire
     * @return $this
     */
    public function nomFormulaire($nomFormulaire)
    {
        return $this->_setParam("psNomFormulaire", $nomFormulaire, self::TYPE_STRING);
    }

    /**
     * @param string $optionsNonReconnues
     * @return $this
     */
    public function optionsNonReconnues($optionsNonReconnues)
    {
        return $this->_setParam("psOptionNonReconnues", $optionsNonReconnues, self::TYPE_STRING);
    }

    /**
     * @param string $commentairePao
     * @return $this
     */
    public function commentairePao($commentairePao)
    {
        return $this->_setParam("psCommentairePao", $commentairePao, self::TYPE_STRING);
    }

    /**
     * @param int $idCommandePartenaire
     * @return $this
     */
    public function idCommandePartenaire($idCommandePartenaire)
    {
        return $this->_setParam("pnIDCommandPartenaire", $idCommandePartenaire, self::TYPE_STRING);
    }
}