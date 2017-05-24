<?php
require_once("php-client/SwaggerClient-php/autoload.php");
$api_instance = new Swagger\Client\Api\SmsApi();
$smsrequest = new \Swagger\Client\Model\SmsUniqueRequest(); // \Swagger\Client\Model\SMSRequest | sms request
include("keyid.php");
$smsrequest["keyid"]=$keyid;
$smsrequest["num"]="+919601977687";
$smsrequest["sms"]="Hello this is test message";
//$smsrequest["ucs2"]="1";
$smsrequest["emetteur"]="iSendPro";
try {
    $result = $api_instance->sendSms($smsrequest);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendSms: ', $e->getMessage(), PHP_EOL;
    $reponse_erreur=$e->getResponseBody();
    echo json_encode($reponse_erreur);
}
?>
