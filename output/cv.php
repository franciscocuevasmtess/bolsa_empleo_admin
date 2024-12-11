<?php

//include "include/dbcommon.php";


header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

@ini_set('memory_limit', '512M');

@ini_set('max_execution_time', 6000); //300 seconds = 5 minutes

@ini_set("display_errors","0");
@ini_set("display_startup_errors","0");

//error_reporting(E_ALL);
//ini_set('display_errors', 1);


$param1 = $_GET['hash_generado'];

//echo $param1 ;

class JasperClient {
  private $url;
  private $username;
  private $password;
  
  public function __construct($url, $username, $password) {
    $this->url = $url;
    $this->username = $username;
    $this->password = $password;
  }
  
  public function requestReport($report, $format, $params) {
    $params_xml = "";
    foreach ($params as $name => $value) {
      $params_xml .= "<parameter name=\"$name\"><![CDATA[$value]]></parameter>\n";
    }
    
    $request = "
      <request operationName=\"runReport\" locale=\"en\">
        <argument name=\"RUN_OUTPUT_FORMAT\">$format</argument>
        <resourceDescriptor name=\"\" wsType=\"\"
        uriString=\"$report\"
        isNew=\"false\">
        <label>null</label>
        $params_xml
        </resourceDescriptor>
      </request>
    ";
    
    $client = new SoapClient(null, array(
        'location'  => $this->url,
        'uri'       => 'urn:',
        'login'     => $this->username,
        'password'  => $this->password,
        'trace'    => 1,
        'exception'=> 1,
        'soap_version'  => SOAP_1_1,
        'style'    => SOAP_RPC,
        'use'      => SOAP_LITERAL
      ));

    $pdf = null;
    try {
      $result = $client->__soapCall('runReport', array(     //runReport
        new SoapParam($request,"requestXmlString")     //requestXmlString
      ));
      
      $pdf = $this->parseReponseWithReportData(
        $client->__getLastResponseHeaders(),
        $client->__getLastResponse());
    } catch(SoapFault $exception) {
      $responseHeaders = $client->__getLastResponseHeaders();
      if ($exception->faultstring == "looks like we got no XML document" &&
          strpos($responseHeaders, "Content-Type: multipart/related;") !== false) {
        $pdf = $this->parseReponseWithReportData($responseHeaders, $client->__getLastResponse());
      } else {
        throw $exception;
      }
    }
    
    if ($pdf)
      return $pdf;
    else
      throw new Exception("Jasper did not return PDF data. Instead got: \n$result");
  }
  
  protected function parseReponseWithReportData($responseHeaders, $responseBody) {
    preg_match('/boundary="(.*?)"/', $responseHeaders, $matches);
    $boundary = $matches[1];
    $parts = explode($boundary, $responseBody);
      
    $pdf = null;
    foreach($parts as $part) {
      if (strpos($part, "Content-Type: application/pdf") !== false) {
        $pdf = substr($part, strpos($part, '%PDF-'));
        break;
      }
    }
    
    return $pdf;
  }

}



if(isset($param1)){



$jasper_url = "http://192.168.70.179:8080/services/repository?wsdl";

$jasper_username = "jasperadmin";
$jasper_password = "IDf1yUbWX2U2Sg1Q"; 


  $client = new JasperClient($jasper_url, $jasper_username, $jasper_password);
  
  $report_unit = "/bolsa/bolsa_cv";   //ejemplo   /reop/liquidacion_salarios
  $report_format = "PDF";
  $report_params = array( 'hash_generado' => $param1);
   
  $result = $client->requestReport($report_unit, $report_format,$report_params);


  
  header('Content-type: application/pdf');
  //header("Content-Disposition:inline;filename=bolsa_cv.pdf");
  header("Content-Disposition:attachment;filename=bolsa_cv.pdf");
  echo $result;
  //echo $result;
  }
  else{
      echo "nada que mostrar";
  }





?>