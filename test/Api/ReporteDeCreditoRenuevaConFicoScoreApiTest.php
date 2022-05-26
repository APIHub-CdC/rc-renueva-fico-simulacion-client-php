<?php

namespace RcRenuevaFico\Simulacion\Client;

use \RcRenuevaFico\Simulacion\Client\Configuration;
use \RcRenuevaFico\Simulacion\Client\ApiException;
use \RcRenuevaFico\Simulacion\Client\ObjectSerializer;

use \RcRenuevaFico\Simulacion\Client\Model\PersonaPeticion;
use \RcRenuevaFico\Simulacion\Client\Model\DomicilioPeticion;

use \RcRenuevaFico\Simulacion\Client\Api\ReporteDeCrditoRenuevaConFicoScoreApi as Instance;

use \GuzzleHttp\Client;



class ReporteDeCreditoRenuevaConFicoScoreApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('Url');
        $this->x_api_key = "Your Apikey";
        $client = new Client();
        $this->apiInstance = new Instance($client,$config);
    }
    
    public function testGetReporte()
    {
        try{
            $request = new PersonaPeticion();
            $domicilio = new DomicilioPeticion();

            $request->setApellidoPaterno("");
            $request->setApellidoMaterno("");
            $request->setPrimerNombre("");
            $request->setFechaNacimiento("");
            $request->setRfc("");
            $request->setNacionalidad("");
            $request->setCuenta("");

            $domicilio->setDireccion("");
            $domicilio->setColoniaPoblacion("");
            $domicilio->setDelegacionMunicipio(" ");
            $domicilio->setCiudad("");
            $domicilio->setEstado("");
            $domicilio->setCp("");

            $request->setDomicilio($domicilio);

            $response = $this->apiInstance->getReporte($this->x_api_key, $request);
            $this->assertNotNull($response );
            print_r($response);

        }
        catch(Exception $e){
            echo 'Exception when calling ApiTest->testGetReporteRenuevaFico: ', $e->getMessage(), PHP_EOL;
        }
    }
}
