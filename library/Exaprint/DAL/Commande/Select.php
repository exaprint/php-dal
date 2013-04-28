<?php

namespace Exaprint\DAL\Commande;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Commande
 * @method \Exaprint\DAL\Commande\Filter filter
 */
class Select extends \Exaprint\DAL\Select
{
    /**
     * @return \Exaprint\DAL\Commande\Ligne\Select
     */
    public function ligne()
    {
        return $this->join('TBL_COMMANDE_LIGNE', 'IDCommande');
    }

    /**
     * @deprecated
     * @return \Exaprint\DAL\Produit\Select
     */
    public function produit()
    {
        return $this->ligne()->produit();
    }

    /**
     * @return \Exaprint\DAL\Client\Select
     */
    public function client()
    {
        return $this->join('TBL_CLIENT', 'IDClient');
    }

    /**
     * @return \RBM\SqlQuery\Select
     */
    public function certification()
    {
        return $this->join('TBL_COMMANDE_TL_CERTIFICATION_SOCIETE', 'IDCommande')
            ->join('TBL_CERTIFICATION_TL_SOCIETE', 'IDCertificationSociete')
            ->join('TBL_CERTIFICATION', 'IDCertification');
    }

    /**
     * @return \Exaprint\DAL\Partenaire\Commande\Select
     */
    public function commandePartenaire()
    {
        return $this->join("TBL_COMMANDE_PARTENAIRE", "IDCommandePartenaire");
    }
}
