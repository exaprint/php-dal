<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 24/03/2014
 * Time: 15:54
 */

namespace Exaprint\DAL\WS;


class GestionSuiviTransport extends WebServiceAbstract
{


    protected $_params = [
        'psCleJeton'           => null, // (chaîne) : Identifiant du prestataire/Module utilisant les web services
        'pnIdCde'              => null, // (entier) : Identifiant de la commande
        'psIdentifiantColis'   => null, // (chaîne) : Identifiant du colis (CodeBarre pour TNT)
        'psCodeRetourTNT'      => null, // (chaîne) : Code retour TNT indiquant le statut du colis
        'pbLivraisonOK'        => null, // (booléen) : Si le colis a été livré
        'pdDateLivraison'      => '0000-00-00', // (date - valeur par défaut="0000-00-00") : Date de livraison
        'phHeureLivraison'     => '00:00:00.000', // (heure - valeur par défaut="00:00:00.000") : Heure de livraison
        'psNomSignataire'      => "", // (chaîne - valeur par défaut="") : Nom de la personne ayant réceptionnée le colis
        'pdDateEvtStatut'      => null, // (date) : Date du statut
        'phHeureEvtStatut'     => null, // (heure) : Heure du statut
        'pmPoidsColis'         => 0, // (monétaire - valeur par défaut=0) : Poids du colis retourné par TNT
        'psCodePaysExp'        => '', // (chaîne - valeur par défaut="") : Code pays de l'expéditeur
        'psCodePaysDest'       => '', // (chaîne - valeur par défaut="") : Code pays du destinataire
        'pnTypeLigneEtiquette' => 1, // (entier - valeur par défaut=1) : ?
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return "WS_nGestionSuiviTransport";
    }


    /**
     * @param $IDCommande
     * @return $this
     */
    public function idCommande($IDCommande)
    {
        return $this->_setParam('pnIDCde', $IDCommande, self::TYPE_INT);
    }

    /**
     * @param $identifiantColis
     * @return $this
     */
    public function identifiantColis($identifiantColis)
    {
        return $this->_setParam('psIdentifiantColis', $identifiantColis, self::TYPE_STRING);
    }

    /**
     * @param $codeRetour
     * @return $this
     */
    public function codeRetour($codeRetour)
    {
        return $this->_setParam('psCodeRetourTNT', $codeRetour, self::TYPE_STRING);
    }

    /**
     * @param $livraisonOk
     * @return $this
     */
    public function livraisonOk($livraisonOk)
    {
        return $this->_setParam('pbLivraisonOK', $livraisonOk, self::TYPE_BOOL);
    }

    /**
     * @param \DateTime $date
     * @return $this
     */
    public function dateLivraison(\DateTime $date)
    {
        $this->_setParam('pdDateLivraison', $date->format('Y-m-d'), self::TYPE_STRING);
        $this->_setParam('phHeureLivraison', $date->format('H-i-s.000'), self::TYPE_STRING);
        return $this;
    }

    /**
     * @param \DateTime $date
     * @return $this
     */
    public function dateStatut(\DateTime $date)
    {
        $this->_setParam('pdDateEvtStatut', $date->format('Y-m-d'), self::TYPE_STRING);
        $this->_setParam('phHeureEvtStatut', $date->format('H-i-s.000'), self::TYPE_STRING);
        return $this;
    }

    /**
     * @param $nomSignataire
     * @return $this
     */
    public function nomSignataire($nomSignataire)
    {
        return $this->_setParam('psNomSignataire', $nomSignataire, self::TYPE_STRING);
    }

    /**
     * @param $poids
     * @return $this
     */
    public function poidsColis($poids)
    {
        return $this->_setParam('pmPoidsColis', $poids, self::TYPE_FLOAT);
    }

    /**
     * @param $code
     * @return $this
     */
    public function codePaysExpediteur($code)
    {
        return $this->_setParam('psCodePaysExp', $code, self::TYPE_STRING);
    }

    /**
     * @param $code
     * @return $this
     */
    public function codePaysDestinataire($code)
    {
        return $this->_setParam('psCodePaysDest', $code, self::TYPE_STRING);
    }

    /**
     * @param $type
     * @return $this
     */
    public function typeLigneEtiquette($type)
    {
        return $this->_setParam('pnTypeLigneEtiquette', $type, self::TYPE_INT);
    }
}