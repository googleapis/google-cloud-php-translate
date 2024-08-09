<?php
/*
 * Copyright 2024 Google LLC
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

// [START translate_v3_generated_TranslationService_UpdateGlossary_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Translate\V3\Client\TranslationServiceClient;
use Google\Cloud\Translate\V3\Glossary;
use Google\Cloud\Translate\V3\UpdateGlossaryRequest;
use Google\Rpc\Status;

/**
 * Updates a glossary. A LRO is used since the update can be async if the
 * glossary's entry file is updated.
 *
 * @param string $glossaryName The resource name of the glossary. Glossary names have the form
 *                             `projects/{project-number-or-id}/locations/{location-id}/glossaries/{glossary-id}`.
 */
function update_glossary_sample(string $glossaryName): void
{
    // Create a client.
    $translationServiceClient = new TranslationServiceClient();

    // Prepare the request message.
    $glossary = (new Glossary())
        ->setName($glossaryName);
    $request = (new UpdateGlossaryRequest())
        ->setGlossary($glossary);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $translationServiceClient->updateGlossary($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Glossary $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
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
    $glossaryName = '[NAME]';

    update_glossary_sample($glossaryName);
}
// [END translate_v3_generated_TranslationService_UpdateGlossary_sync]
