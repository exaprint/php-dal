<?php

namespace Exaprint\DAL\Commande\Ligne;

use RBM\SqlQuery\Column;

class Select extends \Exaprint\DAL\Select
{
    protected $_filterClass = '\Exaprint\DAL\Commande\Ligne\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_COMMANDE_LIGNE", $cols);
    }
}