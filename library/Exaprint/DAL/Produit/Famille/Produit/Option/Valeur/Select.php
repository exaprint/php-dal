<?php

namespace Exaprint\DAL\Produit\Famille\Produit\Option\Valeur;

class Select extends \Exaprint\DAL\Select
{
    /**
     * @param $cols
     * @return \Exaprint\DAL\Produit\Option\Valeur\Select
     */
    public function optionValeurs($cols)
    {
        return $this->leftJoin(
            'TBL_PRODUIT_OPTION_VALEUR',
            'IDProduitOptionValeur',
            'IDProduitOptionValeur',
            $cols
        );
    }
}