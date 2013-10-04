<?php

namespace Exaprint\DAL\WS;

use Exaprint\DAL\WS\CSV\CsvAbstract;

abstract class WebServiceAbstract
{
    const TYPE_INT    = 1;
    const TYPE_FLOAT  = 2;
    const TYPE_STRING = 3;
    const TYPE_BOOL   = 4;
    const TYPE_DATE   = 5;
    const TYPE_CSV    = 6;

    const DATE_FORMAT = 'Y-m-d';

    protected $_params = [];

    /**
     * @return array
     * @throws Exception
     */
    public function getParams()
    {
        $emptyParameters = [];
        foreach ($this->_params as $name => $value) {
            if (is_null($value) && strtolower($name) != 'psclejeton') $emptyParameters[] = $name;
        }

        if (count($emptyParameters) > 0) {
            throw new Exception("Missing required parameters : " . implode(', ', $emptyParameters));
        }

        return $this->_params;
    }

    /**
     * @return string
     */
    abstract public function getName();

    /**
     * @return string
     */
    public function getResult($soapCallResponse)
    {
        return $soapCallResponse->{$this->getName() . 'Result'};
    }

    /**
     * @param string $name
     * @param mixed $value
     * @param int $type
     * @return $this
     */
    protected function _setParam($name, $value, $type)
    {
        $this->_params[$name] = $this->_sanitizeValue($value, $type);
        return $this;
    }

    /**
     * @param string $value
     * @param int $type
     * @return float|int|string
     * @throws \InvalidArgumentException
     */
    protected function _sanitizeValue($value, $type)
    {
        switch ($type) {
            case self::TYPE_STRING:
                return (string)$value;
            case self::TYPE_BOOL:
                return ($value);
            case self::TYPE_INT:
                return intval($value);
            case self::TYPE_FLOAT:
                return floatval($value);
            case self::TYPE_CSV:
                if($value instanceof CsvAbstract)
                    return implode(';', $value->asArray());

                if (!is_array($value))
                    throw new \InvalidArgumentException("Value for param of type CSV must be an array");

                return implode(';', $value);
            case self::TYPE_DATE:
                if (is_a($value, '\DateTime')) {
                    /** @var $value \DateTime */
                    return $value->format(self::DATE_FORMAT);
                }
                return date(self::DATE_FORMAT, strtotime($value));
        }

        throw new \InvalidArgumentException("Specified type '$type' is unknown");
    }
}