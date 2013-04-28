<?php

namespace Exaprint\DAL\Client\AdresseLivraison;

use RBM\SqlQuery\Column;

class Select extends \Exaprint\DAL\Select
{

    public function client()
    {
        return $this->join('TBL_CLIENT', 'IDClient');
    }

    /**
     * @return Select
     */
    public function ville()
    {
        $join = $this->join('TBL_VILLE', 'IDVille')->cols('LibelleVille');
        $join->setJoinType(self::JOIN_LEFT);
        return $join;
    }

    public function pays()
    {
        return $this->join('TBL_PAYS', 'IDPays');
    }
}
