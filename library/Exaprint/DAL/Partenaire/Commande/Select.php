<?php

namespace Exaprint\DAL\Partenaire\Commande;

use RBM\SqlQuery\Column;

class Select extends \RBM\SqlQuery\Select
{
    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_COMMANDE_PARTENAIRE", $cols);
    }

    /**
     * @return \Exaprint\DAL\Commande\Select
     */
    public function commande()
    {
        return $this->join(
            "TBL_COMMANDE",
            "IDCommandePartenaire",
            "IDCommandePartenaire",
            [],
            '\Exaprint\DAL\Commande\Select'
        );
    }
}