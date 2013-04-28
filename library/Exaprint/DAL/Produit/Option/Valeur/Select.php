<?php

namespace Exaprint\DAL\Produit\Option\Valeur;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Produit\Option\Valeur
 * @method \Exaprint\DAL\Produit\Option\Valeur\Filter filter
 */
class Select extends \Exaprint\DAL\Select
{
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
