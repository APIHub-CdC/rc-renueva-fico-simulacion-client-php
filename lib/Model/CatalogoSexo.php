<?php

namespace RcRenuevaFico\Simulacion\Client\Model;
use \RcRenuevaFico\Simulacion\Client\ObjectSerializer;

class CatalogoSexo
{
    
    const F = 'F';
    const M = 'M';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::F,
            self::M,
        ];
    }
}
