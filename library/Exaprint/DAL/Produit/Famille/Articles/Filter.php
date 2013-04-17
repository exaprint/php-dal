<?php

namespace Exaprint\DAL\Produit\Famille\Articles;

class Filter extends \RBM\SqlQuery\Filter
{

    public function estSupp($supp)
    {
        $this->addBitClause('EstSupp', $supp);
    }
}
