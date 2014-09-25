<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/09/2014
 * Time: 15:02
 */

namespace Exaprint\DAL\WS;


class FraisDePortCommandeResult
{

    public static function createFromXMLString($string)
    {
        // OH MY GOD : attributs dans la balise fermante
        $string                  = str_replace(' xmlns="urn:Webservice_Isimedia"', '', $string);

        $xml                     = simplexml_load_string($string);

        $root                    = $xml->WS_mFraisDePortCommandeResult->STR_REPONSE;
        $result                  = new self();
        $result->codeErreur      = intval($root->nCodeErreur);
        $result->montantFrais    = floatval($root->mMontantFrais);
        $result->idTransporteur  = intval($root->nIDTransporteur);
        $result->nomTransporteur = (string)$root->sNomTransporteur;
        $result->libelleFrais    = (string)$root->sLibelleFrais;

        return $result;
    }

    /**
     * @var int
     */
    public $codeErreur;

    /**
     * @var float
     */
    public $montantFrais;

    /**
     * @var int
     */
    public $idTransporteur;

    /**
     * @var string
     */
    public $nomTransporteur;

    /**
     * @var string
     */
    public $libelleFrais;

}