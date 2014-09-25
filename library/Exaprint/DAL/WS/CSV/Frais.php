<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/09/2014
 * Time: 14:49
 */

namespace Exaprint\DAL\WS\CSV;


class Frais extends CsvAbstract
{

    protected $idFraisTypeFrais;

    protected $montantUnitaireHT = 0;

    protected $exaclub = false;

    protected $quantite = 1;

    protected $tauxTVA;

    protected $commentaires = "";

    /**
     * @param $montantUnitaireHT
     * @param $idFraisTypeFrais
     * @param $tauxTVA
     */
    function __construct($montantUnitaireHT, $idFraisTypeFrais, $tauxTVA)
    {
        $this->montantUnitaireHT = $montantUnitaireHT;
        $this->idFraisTypeFrais  = $idFraisTypeFrais;
        $this->tauxTVA           = $tauxTVA;
    }

    public function asArray()
    {
        $arr = [
            $this->montantUnitaireHT,
            $this->exaclub ? 1 : 0,
            $this->quantite,
            $this->tauxTVA
        ];

        //montant HT
        $arr[] = round($montantHT = $this->montantUnitaireHT * $this->quantite, 2);
        //montant TVA
        $arr[] = $montantTVA = round($montantHT * $this->tauxTVA / 100, 2);
        //montant TTC
        $arr[] = $montantHT + $montantTVA;

        return $arr;
    }


} 