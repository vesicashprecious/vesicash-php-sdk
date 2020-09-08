<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = getenv('VESICASH_PRIVATE_KEY');

// Initialize Service Loader
$vesicash = new VesicashServices();
$vesicash->setKey($privateKey)
    ->setMode('sandbox');

// Call service of choice
try {
    $request = $vesicash->service('transactions')->acceptTransaction([
        'transaction_id' => 'wnhIlowZIkIqSpUqxNaz'
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}