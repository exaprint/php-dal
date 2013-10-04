<?php

namespace Exaprint\DAL\WS\CSV;

class CsvAbstract 
{
    protected $_cells = [];

    public function asArray()
    {
        return $this->_cells;
    }
}