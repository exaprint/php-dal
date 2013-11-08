<?php

namespace Exaprint\DAL\WS;

class WebServiceClient extends \SoapClient
{
    protected static $_instances = [];

    protected static $_defaultEnv;

    /**
     * @param null|string $env
     * @return self
     */
    public static function get($env = null)
    {
        $env = is_null($env) ? self::getDefaultEnv() : $env;

        if (!isset(self::$_instances[$env])) self::$_instances[$env] = new self($env);

        return self::$_instances[$env];
    }


    /**
     * @param $defaultEnv
     */
    public static function setDefaultEnv($defaultEnv)
    {
        self::$_defaultEnv = $defaultEnv;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public static function getDefaultEnv()
    {
        if (!isset(self::$_defaultEnv)) {
            if (isset($_SERVER['exaprint_env'])) {
                self::$_defaultEnv = $_SERVER['exaprint_env'];
            } else {
                throw new \Exception('No env specified : $_SERVER[exaprint_env]');
            }
        }
        return self::$_defaultEnv;
    }

    protected $_token;

    public function __construct($env)
    {
        if(!isset($_SERVER["exaprint_ws_{$env}_wsdl"])){
            throw new Exception("Unable to access \$_SERVER[exaprint_ws_{$env}_wsdl]");
        }

        if(!isset($_SERVER["exaprint_ws_{$env}_token"])){
            throw new Exception("Unable to access \$_SERVER[exaprint_ws_{$env}_token]");
        }

        $wsdl = $_SERVER["exaprint_ws_{$env}_wsdl"];
        $this->_token = $_SERVER["exaprint_ws_{$env}_token"];

        parent::__construct($wsdl, [
            'soap_version'   => SOAP_1_1,
            'compression' => SOAP_COMPRESSION_ACCEPT,
            'cache_wsdl' => WSDL_CACHE_DISK,
            'trace' => 1,
            'exceptions' => true,
            'encoding' => 'utf-8',
        ]);
    }
    /**
     * @param WebServiceAbstract $service
     * @return string
     */
    public function call(WebServiceAbstract $service)
    {
        try {
            //$env = self::getDefaultEnv();
            //$this->__setLocation($_SERVER["exaprint_ws_{$env}_wsdl"]);
            $params = $service->getParams();
            $params['psCleJeton'] = $this->_token;
            $result = $this->__soapCall($service->getName(), [$params]);
            return $service->getResult($result);
        } catch (\SoapFault $soapFault) {
            print_r($soapFault);
        } catch (Exception $exception) {
            print_r($exception);
        }
    }

}