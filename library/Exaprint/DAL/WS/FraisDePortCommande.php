<?php

namespace Exaprint\DAL\WS;

class FraisDePortCommande extends WebServiceAbstract
{

    protected $_params = [
        'psCleJeton'           => null,
        'pmPoidsTotalCommande' => null,
        'pnIdAdresseLivraison' => null,
        'pnIDProduit'          => null,
    ];


    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_sFraisDePortCommande';
    }

    /**
     * @param $poids
     * @return $this
     */
    public function poidsTotalCommande($poids)
    {
        return $this->_setParam('pmPoidsTotalCommande', $poids, self::TYPE_FLOAT);
    }

    /**
     * @param $idAdresseLivraison
     * @return $this
     */
    public function idAdresseLivraison($idAdresseLivraison)
    {
        return $this->_setParam('pnIdAdresseLivraison', $idAdresseLivraison, self::TYPE_INT);
    }

    /**
     * @param $IDProduit
     * @return $this
     */
    public function idProduit($IDProduit)
    {
        return $this->_setParam('pnIDProduit', $IDProduit, self::TYPE_INT);
    }

    /**
     * @param $soapCallResponse
     * @return FraisDePortCommandeResult
     */
    public function getResult($soapCallResponse)
    {
        return FraisDePortCommandeResult::createFromXMLString(parent::getResult($soapCallResponse));
    }


}