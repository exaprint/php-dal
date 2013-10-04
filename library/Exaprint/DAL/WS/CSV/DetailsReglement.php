<?php

namespace Exaprint\DAL\WS\CSV;

class DetailsReglement extends CsvAbstract
{

    const TYPE_COMMANDE = 1;
    const TYPE_AVOIR    = 2;
    const TYPE_FACTURE  = 3;
    
    public function addRow($type, $id, $montant)
    {
        $this->_cells[] = $type;
        $this->_cells[] = $id;
        $this->_cells[] = round($montant, 2);
    }
}