<?php

namespace Exaprint\DAL\Produit\Famille\Produit;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Produit\Famille\Produit
 * @method \Exaprint\DAL\Produit\Famille\Produit\Filter filter
 */
class Select extends \Exaprint\DAL\Select
{
    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function designation($IDLangue)
    {
        $join = $this->join("TBL_PRODUIT_FAMILLE_PRODUIT_DESIGNATION_TRADUCTION", "IDProduitFamilleProduit");
        $join->filter()->equals("IDLangue", $IDLangue);
        return $join;
    }

    /**
     *
     * @param array $cols
     * @return \Exaprint\DAL\Produit\Famille\Articles\Select
     */
    public function familleArticles($cols = [])
    {
        return $this->join(
            'TBL_PRODUIT_FAMILLE_ARTICLES',
            'IDProduitFamilleArticles',
            'IDProduitFamilleArticles',
            $cols,
            '\Exaprint\DAL\Produit\Famille\Articles\Select'
        );
    }

    /**
     * @param array $cols
     * @param null|int $typeOption
     * @return \Exaprint\DAL\Produit\Famille\Produit\Option\Select
     */
    public function produitOptions($cols = [], $typeOption = null)
    {
        /** @var \Exaprint\DAL\Produit\Famille\Produit\Option\Select $options */
        $options = $this->join(
            'TBL_PRODUIT_TL_PRODUIT_OPTION_FAMILLE_PRODUIT',
            'IDProduitFamilleProduit',
            'IDProduitFamilleProduit',
            $cols
        );

        if(!is_null($typeOption)){
            $options->option()->filter()->eq('TypeProduitOption', $typeOption);
        }

        return $options;
    }

}
