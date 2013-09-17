<?php

require '../vendor/autoload.php';
\Exaprint\DAL\DB::init();
$renderer = new \RBM\SqlQuery\Renderer\SqlServer();

$select = new \Exaprint\DAL\Produit\Famille\Produit\Select();
$select->cols([]);
$select->filter()->IDProduitFamilleProduit(1);

$select->produitOptions()->valeurs()->optionValeurs('IDProduitOptionValeur')->libelle(1)->cols('LibelleTraduit');

echo $select;