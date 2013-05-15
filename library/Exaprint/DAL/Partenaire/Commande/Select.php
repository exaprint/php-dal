<?php

namespace Exaprint\DAL\Partenaire\Commande;

use RBM\SqlQuery\Column;

class Select extends \RBM\SqlQuery\Select
{
    /**
     * @param array $cols
     * @return \Exaprint\DAL\Commande\Select
     */
    public function commande($cols = [])
    {
        return $this->join("TBL_COMMANDE", "IDCommandePartenaire", "IDCommandePartenaire", $cols);
    }

    /**
     * @param array $cols
     * @return \RBM\SqlQuery\Select
     */
    public function misesAJour($cols = [])
    {
        return $this->join("TBL_COMMANDE_PARTENAIRE_MISE_A_JOUR", "IDCommandePartenaire", "IDCommandePartenaire", $cols);
    }

    /**
     * @param array $cols
     * @return \RBM\SqlQuery\Select
     */
    public function transferts($cols = [])
    {
        return $this->join("TBL_COMMANDE_PARTENAIRE_TRANSFERT", "IDCommandePartenaire", "IDCommandePartenaire", $cols);
    }
}