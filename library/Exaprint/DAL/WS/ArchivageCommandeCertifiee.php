<?php

namespace Exaprint\DAL\WS;

class ArchivageCommandeCertifiee extends WebServiceAbstract
{

    protected $_params = [
        'psCleJeton'   => null,
        'pnIdCommande' => null,
    ];


    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nArchivageCommandeCertifiee';
    }

    /**
     * @param $orderId
     * @return $this
     */
    public function orderId($orderId)
    {
        return $this->_setParam('pnIdCommande', $orderId, self::TYPE_INT);
    }
}