<?php

require '../vendor/autoload.php';
require '/Users/admin/Sites/env.php';

$fraisPort = new \Exaprint\DAL\WS\FraisDePortCommande();
$fraisPort->idAdresseLivraison(2300239);
$fraisPort->idProduit(184953);
$fraisPort->poidsTotalCommande(2200);

/** @var \Exaprint\DAL\WS\FraisDePortCommandeResult $fraisPortResult */
$fraisPortResult = \Exaprint\DAL\WS\WebServiceClient::get('prod')->call($fraisPort);

$frais = new \Exaprint\DAL\WS\CSV\Frais($fraisPortResult->montantFrais, \Exaprint\DAL\Frais\TypeFrais::TRANSPORT, 0);

print_r($frais->asArray());