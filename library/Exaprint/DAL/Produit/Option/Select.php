<?php

namespace Exaprint\DAL\Produit\Option;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Produit\Option
 */
class Select extends \Exaprint\DAL\Select
{

    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function libelle($IDLangue)
    {
        $join = $this->join('TBL_PRODUIT_OPTION_TRAD', 'IDProduitOption');
        $join->filter()->equals('IDLangue', $IDLangue);
        return $join;
    }
}
