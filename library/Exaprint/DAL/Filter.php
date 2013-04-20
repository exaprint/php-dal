<?php

namespace Exaprint\DAL;

class Filter extends \RBM\SqlQuery\Filter
{
    /**
     * @param $column
     * @param null $dateStart
     * @param null $dateEnd
     * @return $this
     */
    protected function _dateRange($column, $dateStart = null, $dateEnd = null)
    {
        if(!is_null($dateStart)){
            $this->greaterThanEquals($column, $dateStart);
        }

        if(!is_null($dateEnd)){
            $this->lowerThanEquals($column, $dateEnd);
        }

        return $this;
    }
}