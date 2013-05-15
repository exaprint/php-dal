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
     * @param string $joinType
     * @return \RBM\SqlQuery\Select
     */
    public function misesAJour($cols = [], $joinType = self::JOIN_LEFT)
    {
        $j = $this->join("TBL_COMMANDE_PARTENAIRE_MISE_A_JOUR", "IDCommandePartenaire", "IDCommandePartenaire", $cols);
        $j->setJoinType($joinType);
        return $j;
    }

    /**
     * @param array $cols
     * @param string $joinType
     * @return \RBM\SqlQuery\Select
     */
    public function transferts($cols = [], $joinType = self::JOIN_LEFT)
    {
        $j = $this->join("TBL_COMMANDE_PARTENAIRE_TRANSFERT", "IDCommandePartenaire", "IDCommandePartenaire", $cols);
        $j->setJoinType($joinType);
        return $j;
    }
}