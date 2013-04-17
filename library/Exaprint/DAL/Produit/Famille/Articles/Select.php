<?php

namespace Exaprint\DAL\Produit\Famille\Articles;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Produit\Famille\Articles
 * @method \Exaprint\DAL\Produit\Famille\Articles\Filter filter
 */
class Select extends \RBM\SqlQuery\Select
{

    protected $_filterClass = '\Exaprint\DAL\Produit\Famille\Articles\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_PRODUIT_FAMILLE_ARTICLES", $cols);
    }

    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function libelle($IDLangue)
    {
        $join = $this->join("TBL_PRODUIT_FAMILLE_ARTICLES_TRAD", "IDProduitFamilleArticles");
        $join->filter()->equals('IDLangue', $IDLangue);
        return $join;
    }

    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function categorie($IDLangue)
    {
        $join = $this->join("TBL_PRODUIT_CATEGORIE_TRAD", "IDProduitCategorie");
        $join->joinCondition()->equals('IDLangue', $IDLangue);
        $join->setJoinType(self::JOIN_LEFT);
        return $join;
    }
}
