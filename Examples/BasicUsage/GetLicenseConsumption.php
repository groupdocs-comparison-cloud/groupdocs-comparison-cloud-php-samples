<?php

// This example demonstrates how to get metered license consumption information
class GetLicenseConsumption {
    public static function Run() { 
        $licenseApi = Utils::GetLicenseApiInstance();

        $response = $licenseApi->getConsumptionCredit();
        
        echo "Credits: " . $response->getCredit();
        echo "Quantity: " . $response->getQuantity();
        echo "\n";
    }
}
