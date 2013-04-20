<?php
namespace Exaprint\DAL\Produit;

use RBM\SqlQuery\Column;
use RBM\SqlQuery\Func;

class Filter extends \Exaprint\DAL\Filter
{

    const OFFRE_CATALOGUE  = 1;
    const OFFRE_DEVIS      = 2;
    const OFFRE_TEMPORAIRE = 3;
    const OFFRE_AUTRE      = 4;
    const OFFRE_OBSOLETE   = 5;


    /**
     * @var array
     */
    protected $_IDsProduitOptionValeur = array();

    protected $_IDsProduitOptionValeurExcluded = array();

    /**
     * @inheritdoc
     */
    public function isEmpty()
    {
        return parent::isEmpty()
            && (count($this->_IDsProduitOptionValeur) + count($this->_IDsProduitOptionValeurExcluded) == 0);
    }

    /**
     * @inheritdoc
     */
    public function getSubFilters()
    {
        if (count($this->_IDsProduitOptionValeur) + count($this->_IDsProduitOptionValeurExcluded) == 0)
            return parent::getSubFilters();

        $sf = $this->_subFilters;
        $col = new Column('ListeIDValeurOption', $this->getTable());
        $col = new Func("CONCAT", [",", $col , ","]);

        foreach ($this->_IDsProduitOptionValeur as $IDProduitOption => $IDsPov) {
            $optionSubfilter = new \RBM\SqlQuery\Filter();
            $optionSubfilter->setTable($this->getTable());
            $optionSubfilter = $optionSubfilter->conjonction(self::CONJONCTION_OR);
            $sf[] = $optionSubfilter;
            foreach ($IDsPov as $IDPov) {
                $optionSubfilter->like($col, "%,$IDPov,%");
            }
        }

        foreach ($this->_IDsProduitOptionValeurExcluded as $IDProduitOption => $IDsPov) {
            $optionSubfilter = new \RBM\SqlQuery\Filter();
            $optionSubfilter->setTable($this->getTable());
            $optionSubfilter = $optionSubfilter->conjonction(self::CONJONCTION_OR);
            $sf[] = $optionSubfilter;
            foreach ($IDsPov as $IDPov) {
                $optionSubfilter->notLike($col, "%,$IDPov,%");
            }
        }

        return $sf;
    }

    public function idProduitFamilleProduitIn()
    {
        $this->idProduitFamilleProduitInArray(func_get_args());
    }

    public function idProduitFamilleProduitInArray($array)
    {
        $this->in('IDProduitFamilleProduit', $array);
    }

    public function caracteristiqueUnique()
    {
        $this->in("CaracteristiqueUnique", func_get_args());
    }

    public function caracteristiqueUniqueNot()
    {
        $this->notIn("CaracteristiqueUnique", func_get_args());
    }

    public function estSupp($supp)
    {
        $this->addBitClause('EstSupp', $supp);
    }

    public function optionValeurContains($IDProduitOption, $IDProduitOptionValeur)
    {
        if (!isset($this->_IDsProduitOptionValeur[$IDProduitOption])) {
            $this->_IDsProduitOptionValeur[$IDProduitOption] = array();
        }
        $this->_IDsProduitOptionValeur[$IDProduitOption][] = $IDProduitOptionValeur;
    }


    public function optionValeurNotContains($IDProduitOption, $IDProduitOptionValeur)
    {
        if (!isset($this->_IDsProduitOptionValeurExcluded[$IDProduitOption])) {
            $this->_IDsProduitOptionValeurExcluded[$IDProduitOption] = array();
        }
        $this->_IDsProduitOptionValeurExcluded[$IDProduitOption][] = $IDProduitOptionValeur;
    }

    public function offre()
    {
        $this->in("IDProduitOffre", func_get_args());
    }
}