<?php

/*


    $soap_client = new SoapClient("http://wsgeoip.lavasoft.com/ipservice.asmx?WSDL");
    $GetIpAddress = "31.135.42.102";
    print_r($vec);
    echo '<br><br>';

    $quote = $soap_client->GetIpLocation($GetIpAddress);
    print_r($quote);
    echo '<br><br>';
    echo "Ваш IP: ";  echo $vec;
    echo '<br><br>';
    echo "Страна: ";  echo  $quote->GetLocationResult;
*/

// создаем ноый soap клиент
$client = new SoapClient('http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl');
//параметры
$param = array(
 'ipAddress' => $_POST["ip"],
 'licenseKey' => '0', //пришлось использовать это полуживой но рабочий сервис, остальные входе поисков оказались не рабочими
);
//обращаемся по функции из списка доступных SOAP-функций
$result = $client->ResolveIP($param);
//print_r($result);
//Выводим полученные параматры
foreach ($result as $obj)
{
    echo "Ваш IP: " . $param["ipAddress"];
    echo '<br><br>';
    echo "Ваш Город: " . $obj->City;
    echo '<br><br>';
    echo "Регион: " . $obj->StateProvince;
    echo '<br><br>';
    echo "Страна: " . $obj->Country;
    echo '<br><br>';
    echo "Широта: " . $obj->Latitude;
    echo '<br><br>';
    echo "Долгота: " . $obj->Longitude;
}
echo '<br><br>';
echo '<br><br>';
/*Список
$client = new SoapClient('http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl');
var_dump($client->__getFunctions());
echo '<br><br>';
echo '<br><br>';

/*
$client = new SoapClient("https://www.maxmind.com/app/minfraud_soap_wsdl3");
$params = '62.231.186.18';
$result = $client->minfraud_soap($params);
var_dump($result);
$country = $result->GetGeoIPResult->CountryName;

*/