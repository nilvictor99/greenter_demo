<?php
use Greenter\Ws\Services\SunatEndpoints;
use Greenter\See;

$see = new See();
$see->setCertificate(file_get_contents(__DIR__.'/LLAMAPECERTIFICADODEMO20452578951.pem'));
$see->setService(SunatEndpoints::FE_BETA);  
$see->setClaveSOL('20000000001', 'MODDATOS', 'moddatos');

return $see;            