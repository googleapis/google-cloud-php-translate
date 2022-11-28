<?php

require __DIR__ . '/../vendor/autoload.php';

// The new signature no longer promotes required fields as seperate parameters.
// Instead, a single request message instance is passed in which will have all
// configurable fields assigned to it.
// 
// The existing method names are kept the same, but placed in a parallel client
// found in a new namespace. This allows for support of both the old and new
// approaches simultaneously.

// Import relevant classes.
use Google\Cloud\Translate\V3\Client\TranslationServiceClient;
use Google\Cloud\Translate\V3\GetSupportedLanguagesRequest;

// Create the client.
$client = new TranslationServiceClient();

// Create the request object.
$request = (new GetSupportedLanguagesRequest())
    ->setParent(TranslationServiceClient::locationName('my-project', 'global'))
    ->setDisplayLanguageCode('en');

// Send the request.
$response = $client->getSupportedLanguages($request);