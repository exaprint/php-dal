<?php

namespace Exaprint\DAL\Produit\Famille\Produit;

class Filter extends \RBM\SqlQuery\Filter
{


    public function IDProduitFamilleProduit($IDProduitFamilleProduit)
    {
        $this->equals("IDProduitFamilleProduit", $IDProduitFamilleProduit);
    }

    public function IDProduitFamilleArticles()
    {
        $this->in("IDProduitFamilleArticles", func_get_args());
        return $this;
    }

    public function IDProduitFamilleArticlesInArray($ids)
    {
        $this->in("IDProduitFamilleArticles", $ids);
        return $this;
    }

    public function IDProduitFamilleArticlesNot()
    {
        $this->notIn("IDProduitFamilleArticles", func_get_args());
    }

    public function estSupp($supp)
    {
        $this->addBitClause('EstSupp', $supp);
    }
}
