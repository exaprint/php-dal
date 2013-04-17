<?php

require '../vendor/autoload.php';
$renderer = new \RBM\SqlQuery\Renderer\SqlServer();

//$produit = new \Exaprint\DAL\Produit\Select();
///** @var \Exaprint\DAL\Produit\Filter $f */
//$f = $produit->filter();
//$f->optionValeurContains(75, 233);
//$f->optionValeurContains(75, 234);
//$f->optionValeurContains(75, 235);
//$f->optionValeurNotContains(80, 23);
//$f->optionValeurNotContains(80, 22);
//
//
//
//echo $renderer->format($produit, true);
//
//
//$societe = new Exaprint\DAL\Societe\Select();
//$societe->filter()->idSociete(1);
//
//echo $renderer->format($societe, true);

$pfp = new \Exaprint\DAL\Produit\Famille\Produit\Select(['Code']);
$pfp->familleArticles()->filter()->estSupp(0);

echo $renderer->format($pfp, true);