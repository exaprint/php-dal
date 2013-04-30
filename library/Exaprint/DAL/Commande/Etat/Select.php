<?php

namespace Exaprint\DAL\Commande\Etat;

class Select extends \Exaprint\DAL\Select
{
    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function libelle($IDLangue)
    {
        $join = $this->join("TBL_COMMANDE_ETAT_TRAD", "IDCommandeEtat");
        $join->joinCondition()->eq("IDLangue", $IDLangue);
        return $join;
    }
}