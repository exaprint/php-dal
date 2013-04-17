<?php

namespace Exaprint\DAL\Produit\Option\Valeur;

class Filter extends \RBM\SqlQuery\Filter
{


    public function idProduitOption($IDProduitOption)
    {
        $this->equals('IDProduitOption', $IDProduitOption);
    }

}
