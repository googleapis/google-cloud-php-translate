<?php

require __DIR__ . '/../vendor/autoload.php';

// The new signature no longer promotes required fields as seperate parameters.
// Instead, a single request message instance is passed in which will have all
// configurable fields assigned to it.
// 
// "send" is prefixed to the existing method's name in order to support
// both the old and new approaches simultaneously.

// Import relevant classes.
use Google\Cloud\Translate\V3\GetSupportedLanguagesRequest;
use Google\Cloud\Translate\V3\TranslationServiceClient;

// Create the client.
$client = new TranslationServiceClient();

// Create the request object.
$request = (new GetSupportedLanguagesRequest())
    ->setParent(TranslationServiceClient::locationName('my-project', 'global'))
    ->setDisplayLanguageCode('en');

// Send the request.
$response = $client->sendGetSupportedLanguages($request);