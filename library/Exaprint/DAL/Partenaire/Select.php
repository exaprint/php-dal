<?php

namespace Exaprint\DAL\Partenaire;

use RBM\SqlQuery\Column;

class Select extends \RBM\SqlQuery\Select
{
    public function produits()
    {
        return $this->join("TBL_PARTENAIRE_TL_PRODUIT", "IDPartenaire")->join("TBL_PRODUIT", "IDProduit");
    }
}