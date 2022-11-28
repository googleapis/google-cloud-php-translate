<?php

require __DIR__ . '/../vendor/autoload.php';

// The existing signature promotes required fields as their own
// individual parameters. Any optional fields are passed in to
// an array, which exists as the final parameter.

// Import relevant classes.
use Google\Cloud\Translate\V3\TranslationServiceClient;

// Create the client.
$client = new TranslationServiceClient();

// Send the request.
$response = $client->getSupportedLanguages(
    TranslationServiceClient::locationName('my-project', 'global'),
    [
        'displayLanguageCode' => 'en'
    ]
);