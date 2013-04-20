<?php

namespace Exaprint\DAL\Produit\Option\Valeur;

class Filter extends \Exaprint\DAL\Filter
{


    public function idProduitOption($IDProduitOption)
    {
        $this->equals('IDProduitOption', $IDProduitOption);
    }

}
