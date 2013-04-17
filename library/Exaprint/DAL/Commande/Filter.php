<?php

namespace Exaprint\DAL\Commande;

class Filter extends \RBM\SqlQuery\Filter
{

    const BLOCAGE_TYPE_COMMERCIAL = 'commercial';
    const BLOCAGE_TYPE_PAO =     'pao';
    const BLOCAGE_TYPE_PAIEMENT = 'paiement';

    public function dateAjout($debut, $fin)
    {
        if($debut && !$fin){
            return $this->addClause("$this->_table.DateAjout >= '$debut'");
        } else if ($fin && !$debut){
            return $this->addClause("$this->_table.DateAjout <= '$fin'");
        } else if ($debut && $fin){
            return $this->addClause("$this->_table.DateAjout BETWEEN '$debut' AND '$fin'");
        }
        return $this;
    }

    public function idCommandeEtat()
    {
        $this->in("IDCommandeEtat", func_get_args());
        return $this;
    }

    public function idCommandeEtatNot()
    {
        $this->notIn("IDCommandeEtat", func_get_args());
        return $this;
    }

    public function estBloquee($type, $bloquee)
    {
        $col = 'EstBloque' . ucfirst($type);
        return $this->addBitClause($col, $bloquee);
    }

    public function estAnnulee($annulee)
    {
        return $this->addBitClause('EstAnnule', $annulee);
    }

    public function estSupprimee($supp)
    {
        return $this->addBitClause('EstSupp', $supp);
    }

    public function estSuspendue($suspendue)
    {
        return $this->addBitClause('EstSuspendu', $suspendue);
    }

    public function idClient($IDClient)
    {
        return $this->equals('IDClient', $IDClient);
    }

    public function estPrincipale($principale)
    {
        return $this->isNull('IDCommandePrincipale');
    }
}
