<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbessuges
 * Date: 18/08/12
 * Time: 09:47
 * To change this template use File | Settings | File Templates.
 */
class Produit_Famille_Produit_Entity extends Sql_Entity
{
    public function getList($IDProduitFamilleArticles = 0, $IDLangue = 1, $EstSupp = null)
    {
        /** @var $select Produit_Famille_Produit_Select */
        $select = $this->select();

        $select->cols(
            'IDProduitFamilleProduit',
            'IDProduitFamilleArticles',
            'ReferenceProduit',
            'EstSupp'
        );

        $select->designation($IDLangue)->cols('LibelleTraduit');

        if ($IDProduitFamilleArticles != 0) {
            $select->filter()->equals("IDProduitFamilleArticles", $IDProduitFamilleArticles);
        }

        if (!is_null($EstSupp)) {
            $select->filter()->estSupp($EstSupp);
        }


        if($result = $this->query($select)){
            return $result->fetchAll(PDO::FETCH_OBJ);
        }
        return array();
    }

    /**
     * @param $reference string La valeur de la chaîne de recherche
     * @param array $IDsProduitFamilleArticles
     * @param int $IDLangue
     * @param null $EstSupp
     * @return array
     */
    public function findFromReference($reference, $IDsProduitFamilleArticles = array(), $IDLangue = 1, $EstSupp = null)
    {
        /** @var $select Produit_Famille_Produit_Select */
        $select = $this->select();

        $select->cols(
            'IDProduitFamilleProduit',
            'ReferenceProduit',
            'EstSupp'
        );

        $select->designation($IDLangue)->cols('LibelleTraduit');


        if (!is_null($EstSupp)) {
            $select->filter()->estSupp($EstSupp);
        }

        $select->filter()->like('ReferenceProduit', $reference . '%');

        if(count($IDsProduitFamilleArticles)){
            $select->filter()->in('IDProduitFamilleArticles', $IDsProduitFamilleArticles);
        }

        $result = $this->query($select);

        return $result->fetchAll(PDO::FETCH_OBJ);
    }
}
