<?php

namespace Exaprint\DAL\Commande\Etat;

class Constant 
{
    /**
     * en_GB Incomplete<br>
     * es_ES Incompleto<br>
     * it_IT Incompleto<br>
     */
    const INCOMPLETE = 1;

    /**
     * en_GB Not checked<br>
     * es_ES No afectado<br>
     * it_IT Non controllata<br>
     */
    const NON_CONTROLE = 3;

    /**
     * en_GB Checking<br>
     * es_ES Control en curso<br>
     * it_IT Controllo in corso<br>
     */
    const CONTROLE_EN_COURS = 4;

    /**
     * en_GB File problem<br>
     * es_ES Error archivo<br>
     * it_IT Errore nel file<br>
     */
    const ERREUR_FICHIER = 5;

    /**
     * en_GB New file to check<br>
     * es_ES Nuevo archivo a controlar<br>
     * it_IT Nuovo file da controllare<br>
     */
    const NOUVEAU_FICHIER_A_CONTROLER = 6;

    /**
     * en_GB Check ok<br>
     * es_ES Control OK<br>
     * it_IT Controllo OK<br>
     */
    const CONTROLE_OK = 7;

    /**
     * en_GB File standardised<br>
     * es_ES Control Archivo ok<br>
     * it_IT File normalizzato<br>
     */
    const FICHIER_NORMALISE = 9;

    /**
     * en_GB Parcel  to be prepared<br>
     * es_ES Paquete a preparar<br>
     * it_IT Da imballare<br>
     */
    const COLIS_A_PREPARER = 10;

    /**
     * en_GB Assembly in progress<br>
     * es_ES Montaje En curso<br>
     * it_IT Montaggio in corso<br>
     */
    const MONTAGE_EN_COURS = 11;

    /**
     * en_GB Proof to be sent<br>
     * es_ES Prueba a enviar<br>
     * it_IT Prova colore da inviare<br>
     */
    const BAT_A_ENVOYER = 12;

    /**
     * en_GB Waiting for Proof confirmation<br>
     * es_ES Prueba a la espera de validación<br>
     * it_IT Prova colore in attesa di convalida<br>
     */
    const BAT_EN_ATTENTE_VALIDATION = 13;

    /**
     * en_GB Proof cancelled<br>
     * es_ES Prueba anulada<br>
     * it_IT Prova colore annullata<br>
     */
    const BAT_ANNULE = 14;

    /**
     * en_GB Proof accepted<br>
     * es_ES Prueba aceptada<br>
     * it_IT Prova colore accettata<br>
     */
    const BAT_ACCEPTE = 15;

    /**
     * en_GB Proof refused & new file sent<br>
     * es_ES Prueba rechazada con nuevo archivo<br>
     * it_IT Prova colore rifiutata con nuovo file<br>
     */
    const BAT_REFUSE_AVEC_NOUVEAU_FICHIER = 16;

    /**
     * en_GB Proof to be sent<br>
     * es_ES Prueba a enviar<br>
     * it_IT Prova colore da inviare<br>
     */
    const BAT_NUM_A_ENVOYER = 17;

    /**
     * en_GB Waiting for Proof confirmation<br>
     * es_ES Prueba a la espera de validación<br>
     * it_IT Prova colore in attesa di convalida<br>
     */
    const BAT_NUM_EN_ATTENTE_VALIDATION = 18;

    /**
     * en_GB Proof cancelled<br>
     * es_ES Prueba anulada<br>
     * it_IT Prova colore annullata<br>
     */
    const BAT_NUM_ANNULE = 19;

    /**
     * en_GB Proof accepted<br>
     * es_ES Prueba aceptada<br>
     * it_IT Prova colore accettata<br>
     */
    const BAT_NUM_ACCEPTE = 20;

    /**
     * en_GB Proof refused with new file sent<br>
     * es_ES Prueba rechazada con nuevo archivo<br>
     * it_IT Prova colore rifiutata con nuovo file<br>
     */
    const BAT_NUM_REFUSE_AVEC_NOUVEAU_FICHIER = 21;

    /**
     * en_GB Assembly - OK<br>
     * es_ES Montaje OK<br>
     * it_IT Montaggio OK<br>
     */
    const MONTAGE_OK = 22;

    /**
     * en_GB Printing in progress<br>
     * es_ES A la espera de impresión<br>
     * it_IT Produzione in corso<br>
     */
    const EN_COURS_DE_FABRICATION = 23;

    /**
     * en_GB Workshop in charged<br>
     * es_ES Impreso<br>
     * it_IT Presa in carico dall'atelier<br>
     */
    const PRISE_EN_CHARGE_ATELIER = 24;

    /**
     * en_GB Parcel prepared<br>
     * es_ES Paquetes preparados<br>
     * it_IT Imballo pronto<br>
     */
    const COLIS_PREPARES = 25;

    /**
     * en_GB Dispatched<br>
     * es_ES Enviado<br>
     * it_IT Spedito<br>
     */
    const EXPEDIEE = 26;

    /**
     * en_GB Invoiced<br>
     * es_ES Facturado<br>
     * it_IT Fatturato<br>
     */
    const FACTUREE = 27;

    /**
     * en_GB In transit to logistic center<br>
     * es_ES Transferencia al centro logístico<br>
     * it_IT Trasferimento al centro logistico<br>
     */
    const TRANSFERT_AU_CENTRE_LOGISTIQUE = 28;

    /**
     * en_GB Waiting for bulking<br>
     * es_ES A la espera de grupaje<br>
     * it_IT In attesa di raggruppamento<br>
     */
    const EN_ATTENTE_DE_GROUPAGE = 29;

    /**
     * en_GB Bulking in progress<br>
     * es_ES En curso de grupaje<br>
     * it_IT Consolidamento in atto<br>
     */
    const EN_COURS_DE_GROUPAGE = 30;

    /**
     * en_GB Bulking prepared<br>
     * es_ES Grupaje preparado<br>
     * it_IT Raggruppamento preparato<br>
     */
    const GROUPAGE_PREPARE = 31;

    /**
     * en_GB Delivered<br>
     * es_ES Entregado<br>
     * it_IT Consegnato<br>
     */
    const LIVRE = 32;

}