<?php

namespace Exaprint\DAL\Societe;

class Filter extends \Exaprint\DAL\Filter
{

    public function idSociete($IDSociete)
    {
        $this->equals('IDSociete', $IDSociete);
    }
}
