<?php

namespace Exaprint\DAL\Produit;

use RBM\SqlQuery\Column;
use RBM\SqlQuery\Func;

/**
 * Class Select
 * @package Exaprint\DAL\Produit
 * @method \Exaprint\DAL\Produit\Filter filter
 */
class Select extends \Exaprint\DAL\Select
{

    protected $_filterClass = '\Exaprint\DAL\Produit\Filter';

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_PRODUIT", $cols); //
    }


    /**
     * @param $IDSociete
     * @return \RBM\SqlQuery\Select
     */
    public function valeursFinancieres($IDSociete)
    {
        $join = $this->join('TBL_PRODUIT_TL_PRODUIT_SOCIETE', 'IDProduit');
        $join->filter()->equals('IDSociete', $IDSociete);
        return $join;
    }

    /**
     * @return \Exaprint\DAL\Produit\Famille\Produit\Select
     */
    public function familleProduit()
    {
        return $this->join(
            "TBL_PRODUIT_FAMILLE_PRODUIT",
            'IDProduitFamilleProduit',
            'IDProduitFamilleProduit',
            [],
            '\Exaprint\DAL\Produit\Famille\Produit\Select'
        );
    }

    /**
     * @return \RBM\SqlQuery\Select
     */
    public function offre()
    {
        return $this->join('TBL_PRODUIT_OFFRE', 'IDProduitOffre');
    }

    /**
     * @param $IDLangue
     * @return \RBM\SqlQuery\Select
     */
    public function libelleFront($IDLangue)
    {
        $join = $this->join('TBL_PRODUIT_LIBELLE_FRONT_TRAD', 'IDProduit');
        $join->filter()->equals('IDLangue', $IDLangue);
        return $join;
    }

    /**
     * @param $IDProduitOption
     * @return \RBM\SqlQuery\Select
     */
    public function optionProduit($IDProduitOption)
    {
        $vpos = $this->join(["option_$IDProduitOption" => "VUE_PRODUIT_OPTION_SAISIE"], "IDProduit");
        $vpos->joinCondition()->equals("IDProduitOption", $IDProduitOption);
        $vpos->setJoinType(self::JOIN_LEFT);
        return $vpos;
    }

    /**
     * @param $IDSociete
     * @param $Quantite
     * @param string $columnName
     * @return $this
     */
    public function addColumnTarif($IDSociete, $Quantite, $columnName = "Prix")
    {
        return $this->addColumn(new Func(
            'dbo.f_mPrixIntermediaire',
            array(
                new Column('IDProduit', $this->getTable()),
                $IDSociete,
                $Quantite
            ),
            $columnName
        ));
    }

    /**
     * @param $longueur
     * @param $largeur
     * @param string $alias
     * @return $this
     */
    public function addColumnPoids($longueur, $largeur, $alias = 'Poids')
    {
        return $this->addColumn(
            new Func(
                'dbo.f_mObtenirPoidsUnitaireProduit',
                array(
                    new Column('IDProduit', $this->getTable()),
                    $largeur,
                    $longueur
                ),
                $alias
            )
        );
    }

    /**
     * @param $IDSociete
     * @param $quantite
     * @param string $alias
     * @return $this
     */
    public function addColumnDelai($IDSociete, $quantite, $alias = 'Delai')
    {
        return $this->addColumn(
            new Func(
                'dbo.f_nDelaiProduit',
                array(
                    new Column('IDProduit', $this->getTable()),
                    $quantite,
                    $IDSociete,
                    0
                ),
                $alias
            )
        );
    }

    /**
     * @param string $alias
     * @return $this
     */
    public function addColumnNbOptionsDefaut($alias = 'NbOptionsDefaut')
    {
        return $this->addColumn(new Func(
            "dbo.f_NbOptionsDefaut",
            array(new Column("IDProduit", $this->getTable())),
            $alias
        ));
    }
}
