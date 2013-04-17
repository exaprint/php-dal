<?php

namespace Exaprint\DAL\Societe;

class Filter extends \RBM\SqlQuery\Filter
{


    public function idSociete($IDSociete)
    {
        $this->equals('IDSociete', $IDSociete);
    }
}
