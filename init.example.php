<?php
use Ipsp\Api;
use Ipsp\Client;

define('MERCHANT_ID' , 1000);
define('MERCHANT_PASSWORD' , 'test');
define('IPSP_GATEWAY' ,  'api.fondy.eu');

$client = new Client( MERCHANT_ID , MERCHANT_PASSWORD, IPSP_GATEWAY );
$ipsp   = new Api( $client );
