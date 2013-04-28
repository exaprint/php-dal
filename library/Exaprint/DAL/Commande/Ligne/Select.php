<?php

namespace Exaprint\DAL\Commande\Ligne;

use RBM\SqlQuery\Column;

class Select extends \Exaprint\DAL\Select
{
    public function produit()
    {
        return $this->join("TBL_PRODUIT", "IDProduit");
    }
}