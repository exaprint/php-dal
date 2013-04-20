<?php

namespace Exaprint\DAL\Produit\Famille\Articles;

class Filter extends \Exaprint\DAL\Filter
{

    public function estSupp($supp)
    {
        $this->addBitClause('EstSupp', $supp);
    }
}
