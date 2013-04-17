<?php

namespace Exaprint\DAL\Commande;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Commande
 * @method \Exaprint\DAL\Commande\Filter filter
 */
class Select extends \RBM\SqlQuery\Select
{

    protected $_filterClass = '\RBM\DAL\Commande\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_COMMANDE", $cols);
    }
    /**
     * @return \RBM\SqlQuery\Select
     */
    public function ligne()
    {
        return $this->join('TBL_COMMANDE_LIGNE', 'IDCommande');
    }

    /**
     * @return \Exaprint\DAL\Produit\Select
     */
    public function produit()
    {
        return $this->ligne()->join('TBL_PRODUIT', 'IDProduit', 'IDProduit', [], '\Exaprint\DAL\Produit\Select');
    }

    /**
     * @return \Exaprint\DAL\Client\Select
     */
    public function client()
    {
        return $this->join('TBL_CLIENT', 'IDClient', 'IDClient', [], '\Exaprint\DAL\Client\Select');
    }

    /**
     * @return \RBM\SqlQuery\Select
     */
    public function certification(){
        return $this->join('TBL_COMMANDE_TL_CERTIFICATION_SOCIETE','IDCommande')
            ->join('TBL_CERTIFICATION_TL_SOCIETE','IDCertificationSociete')
            ->join('TBL_CERTIFICATION','IDCertification');
    }
}
