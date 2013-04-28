<?php

namespace Exaprint\DAL\Client;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Client
 * @method \Exaprint\DAL\Client\Filter filter
 */
class Select extends \Exaprint\DAL\Select
{

    public function societe()
    {
        return $this->join('TBL_SOCIETE', 'IDSociete');
    }

    /**
     * @return Select
     */
    public function ville()
    {
        $join = $this->join('TBL_VILLE', 'IDVille')->cols('LibelleVille');
        $join->setJoinType(Select::JOIN_LEFT);
        return $join;
    }

    public function pays()
    {
        return $this->join('TBL_PAYS', 'IDPays');
    }

    public function statCommandes()
    {
        $join = $this->join('VUE_STAT_COMMANDES', 'IDClient');
        $join->setJoinType(Select::JOIN_LEFT);
        return $join;
    }
}
