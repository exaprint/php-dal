<?php

namespace Exaprint\DAL;

class Select extends \RBM\SqlQuery\Select
{
    protected $_filterClass = '\Exaprint\DAL\Filter';
}