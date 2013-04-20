<?php

namespace Exaprint\DAL\Commande;

class Filter extends \Exaprint\DAL\Filter
{

    const BLOCAGE_TYPE_COMMERCIAL = 'commercial';
    const BLOCAGE_TYPE_PAO =     'pao';
    const BLOCAGE_TYPE_PAIEMENT = 'paiement';

    /**
     * @param null $debut
     * @param null $fin
     * @return $this
     */
    public function dateAjout($debut = null, $fin = null)
    {
        return $this->_dateRange("DateAjout", $debut, $fin);
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
