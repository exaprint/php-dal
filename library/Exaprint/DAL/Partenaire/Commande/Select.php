<?php

namespace Exaprint\DAL\Partenaire\Commande;

use RBM\SqlQuery\Column;

class Select extends \RBM\SqlQuery\Select
{
    /**
     * @return \Exaprint\DAL\Commande\Select
     */
    public function commande()
    {
        return $this->join("TBL_COMMANDE", "IDCommandePartenaire");
    }
}