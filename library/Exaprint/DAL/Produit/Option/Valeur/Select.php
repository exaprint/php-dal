<?php

namespace Exaprint\DAL\Produit\Option\Valeur;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Produit\Option\Valeur
 * @method \Exaprint\DAL\Produit\Option\Valeur\Filter filter
 */
class Select extends \RBM\SqlQuery\Select
{

    protected $_filterClass = '\Exaprint\DAL\Produit\Option\Valeur\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_PRODUIT_OPTION_VALEUR", $cols);
    }

    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function libelle($IDLangue)
    {
        $join = $this->join('TBL_PRODUIT_OPTION_VALEUR_TRAD', 'IDProduitOptionValeur');
        $join->filter()->equals('IDLangue', $IDLangue);
        return $join;
    }
}
