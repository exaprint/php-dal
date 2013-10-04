<?php

namespace Exaprint\DAL\WS;

use Exaprint\DAL\WS\CSV\DetailsReglement;

class CreationReglement extends  WebServiceAbstract
{

    protected $_params = [
        'psCleJeton'           => null,
        'pdDateReglement'      => null,
        'psNumeroEffet'        => null,
        'pnIDModeReglement'    => null,
        'psCSVDetailReglement' => null,
        'pnIDClient'           => null,
    ];


    /**
     * @return string
     */
    public function getName()
    {
        return 'WS_nCreationReglement';
    }

    /**
     * @param $date
     * @return $this
     */
    public function dateReglement($date)
    {
        return $this->_setParam('pdDateReglement', $date, self::TYPE_DATE);
    }

    /**
     * @param $numero
     * @return $this
     */
    public function numeroEffet($numero)
    {
        return $this->_setParam('psNumeroEffet', $numero, self::TYPE_STRING);
    }

    /**
     * @param $IDModeReglement
     * @return $this
     */
    public function idModeReglement($IDModeReglement)
    {
        return $this->_setParam('pnIDModeReglement', $IDModeReglement, self::TYPE_INT);
    }

    /**
     * @param array $details
     * @return $this
     */
    public function detailReglement(DetailsReglement $details)
    {
        return $this->_setParam('psCSVDetailReglement', $details, self::TYPE_CSV);
    }

    /**
     * @param $IDClient
     * @return $this
     */
    public function idClient($IDClient)
    {
        return $this->_setParam('pnIDClient', $IDClient, self::TYPE_INT);
    }
}