<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START translate_v3_generated_TranslationService_GetAdaptiveMtDataset_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Translate\V3\AdaptiveMtDataset;
use Google\Cloud\Translate\V3\Client\TranslationServiceClient;
use Google\Cloud\Translate\V3\GetAdaptiveMtDatasetRequest;

/**
 * Gets the Adaptive MT dataset.
 *
 * @param string $formattedName Name of the dataset. In the form of
 *                              `projects/{project-number-or-id}/locations/{location-id}/adaptiveMtDatasets/{adaptive-mt-dataset-id}`
 *                              Please see {@see TranslationServiceClient::adaptiveMtDatasetName()} for help formatting this field.
 */
function get_adaptive_mt_dataset_sample(string $formattedName): void
{
    // Create a client.
    $translationServiceClient = new TranslationServiceClient();

    // Prepare the request message.
    $request = (new GetAdaptiveMtDatasetRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var AdaptiveMtDataset $response */
        $response = $translationServiceClient->getAdaptiveMtDataset($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = TranslationServiceClient::adaptiveMtDatasetName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATASET]'
    );

    get_adaptive_mt_dataset_sample($formattedName);
}
// [END translate_v3_generated_TranslationService_GetAdaptiveMtDataset_sync]
