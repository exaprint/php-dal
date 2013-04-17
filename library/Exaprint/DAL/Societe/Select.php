<?php

namespace Exaprint\DAL\Societe;

use RBM\SqlQuery\Column;

/**
 * Class Select
 * @package Exaprint\DAL\Societe
 * @method \Exaprint\DAL\Societe\Filter filter
 */
class Select extends \RBM\SqlQuery\Select
{

    protected $_filterClass = '\Exaprint\DAL\Societe\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_SOCIETE", $cols);
    }
}
