<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbessuges
 * Date: 21/08/12
 * Time: 15:41
 * To change this template use File | Settings | File Templates.
 */
class Produit_Option_Entity extends Sql_Entity
{
    public function findFromLibelle($libelle, $IDLangue, $IDsProduitFamilleProduit = array(), $EstSupp = null)
    {
        /** @var $select Produit_Option_Select */
        $select = $this->select();

        $select->cols('IDProduitOption');
        $select->libelle($IDLangue)->cols('LibelleTraduit')->filter()->like('LibelleTraduit', "$libelle%");

        if(!is_null($EstSupp)){
            $select->filter()->addBitClause('EstSupp', $EstSupp);
        }

        if(count($IDsProduitFamilleProduit)){
            $IDsProduitOption = $this->getIDsProduitOptionsByIDsProduitFamillesProduits($IDsProduitFamilleProduit, $IDLangue);
            if(count($IDsProduitOption)){
                $select->filter()->in('IDProduitOption', $IDsProduitOption);
            }
        }

        if ($result = $this->query($select)) {
            return $result->fetchAll(PDO::FETCH_OBJ);
        }
        return array();
    }

    public function getIDsProduitOptionsByIDsProduitFamillesProduits($IDsProduitFamilleProduit, $IDLangue)
    {
        $select = new Sql_Select();
        $select->setTable('EXP_VUE_PRODUIT_FAMILLE_PRODUIT_OPTION_VALEUR');
        $select->cols('IDProduitOption', 'LibelleTraduit');
        $select->filter()->equals('IDLangue', $IDLangue);
        $select->filter()->in('IDProduitFamilleProduit', $IDsProduitFamilleProduit);

        if($result = $this->query($select)){
            return $result->fetchAll(PDO::FETCH_COLUMN);
        }
        return array();
    }
}
