<?php

namespace Exaprint\DAL\Produit\Famille\Produit;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Produit\Famille\Produit
 * @method \Exaprint\DAL\Produit\Famille\Produit\Filter filter
 */
class Select extends \RBM\SqlQuery\Select
{

    protected $_filterClass = '\Exaprint\Dal\Produit\Fmaille\Produit\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_PRODUIT_FAMILLE_PRODUIT", $cols);
    }

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
     * @return \Exaprint\DAL\Produit\Famille\Articles\Select
     */
    public function familleArticles()
    {
        return $this->join(
            'TBL_PRODUIT_FAMILLE_ARTICLES',
            'IDProduitFamilleArticles',
            'IDProduitFamilleArticles',
            [],
            '\Exaprint\DAL\Produit\Famille\Articles\Select'
        );
    }

}