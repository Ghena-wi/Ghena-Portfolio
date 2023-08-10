<?php
namespace Sample;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\ProductionEnvironment;

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');

class PayPalClient
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment()
    {
        $clientId = "";
        $clientSecret = "";
        return new ProductionEnvironment($clientId, $clientSecret);
    }
}
// ProductionEnvironment
// SandboxEnvironment
?>