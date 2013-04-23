<?php

namespace Exaprint\DAL\Partenaire;

use RBM\SqlQuery\Column;

class Select extends \RBM\SqlQuery\Select
{
    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_PARTENAIRE", $cols);
    }
}