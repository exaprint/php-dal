<?php

namespace Exaprint\DAL\Produit\Famille\Produit\Option;

class Select extends \Exaprint\DAL\Select
{
    /**
     * @param array $cols
     * @return \Exaprint\DAL\Produit\Famille\Produit\Option\Valeur\Select
     */
    public function valeurs($cols = [])
    {
        return $this->join(
            'TBL_PRODUIT_TL_PRODUIT_OPTION_VALEUR_PRODUIT_OPTION_FAMILLE_PRODUIT',
            'IDProduitTLProduitOptionFamilleProduit',
            'IDProduitTLProduitOptionFamilleProduit',
            $cols
        );
    }

    /**
     * @param array $cols
     * @return \Exaprint\DAL\Produit\Option\Select
     */
    public function option($cols = [])
    {
        return $this->join(
            'TBL_PRODUIT_OPTION',
            'IDProduitOption',
            'IDProduitOption',
            $cols
        );
    }
}