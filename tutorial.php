<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://masterpassturkiye.com:8082/MMIUIMasterPass_V2/MerchantServices/MPGCommitPurchaseService.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://masterpassturkiye.com:8082/MMIUIMasterPass_V2/MerchantServices/MPGCommitPurchaseService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Enesdayanc\MasterpassCommitPurchase\ClassMap::get(),
);
/**
 * Samples for Commit ServiceType
 */
$commit = new \Enesdayanc\MasterpassCommitPurchase\ServiceType\Commit($options);
/**
 * Sample call for CommitPurchase operation/method
 */
if ($commit->CommitPurchase(new \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchase()) !== false) {
    print_r($commit->getResult());
} else {
    print_r($commit->getLastError());
}
/**
 * Samples for Custom ServiceType
 */
$custom = new \Enesdayanc\MasterpassCommitPurchase\ServiceType\Custom($options);
/**
 * Sample call for CustomCommitPurchase operation/method
 */
if ($custom->CustomCommitPurchase(new \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchase()) !== false) {
    print_r($custom->getResult());
} else {
    print_r($custom->getLastError());
}
