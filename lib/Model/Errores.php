<?php

namespace RcRenuevaFico\Simulacion\Client\Model;

use \ArrayAccess;
use \RcRenuevaFico\Simulacion\Client\ObjectSerializer;

class Errores implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Errores';
    
    protected static $RCCPMTypes = [
        'errores' => '\RcRenuevaFico\Simulacion\Client\Model\Error[]',
        'autenticacion' => '\RcRenuevaFico\Simulacion\Client\Model\Autenticacion'
    ];
    
    protected static $RCCPMFormats = [
        'errores' => null,
        'autenticacion' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'errores' => 'errores',
        'autenticacion' => 'autenticacion'
    ];
    
    protected static $setters = [
        'errores' => 'setErrores',
        'autenticacion' => 'setAutenticacion'
    ];
    
    protected static $getters = [
        'errores' => 'getErrores',
        'autenticacion' => 'getAutenticacion'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['errores'] = isset($data['errores']) ? $data['errores'] : null;
        $this->container['autenticacion'] = isset($data['autenticacion']) ? $data['autenticacion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getErrores()
    {
        return $this->container['errores'];
    }
    
    public function setErrores($errores)
    {
        $this->container['errores'] = $errores;
        return $this;
    }
    
    public function getAutenticacion()
    {
        return $this->container['autenticacion'];
    }
    
    public function setAutenticacion($autenticacion)
    {
        $this->container['autenticacion'] = $autenticacion;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
