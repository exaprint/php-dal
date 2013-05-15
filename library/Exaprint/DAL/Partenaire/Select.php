<?php

namespace Exaprint\DAL\Partenaire;

use RBM\SqlQuery\Column;

class Select extends \RBM\SqlQuery\Select
{

    /**
     * @param array $cols
     * @return \Exaprint\DAL\Produit\Select
     */
    public function produits($cols = [])
    {
        return $this
            ->join("TBL_PARTENAIRE_TL_PRODUIT", "IDPartenaire")
            ->join("TBL_PRODUIT", "IDProduit", "IDProduit", $cols);
    }

    /**
     * @param array $cols
     * @return \Exaprint\DAL\Partenaire\Commande\Select
     */
    public function commandes($cols = [])
    {
        $j = $this->join("TBL_COMMANDE_PARTENAIRE", "IDCommandePartenaire", "IDCommandePartenaire", $cols);
        $j->setJoinType(self::JOIN_LEFT);
        return $j;
    }
}