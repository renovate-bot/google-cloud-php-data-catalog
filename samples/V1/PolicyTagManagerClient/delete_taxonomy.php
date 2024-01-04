<?php
/*
 * Copyright 2022 Google LLC
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

// [START datacatalog_v1_generated_PolicyTagManager_DeleteTaxonomy_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DataCatalog\V1\Client\PolicyTagManagerClient;
use Google\Cloud\DataCatalog\V1\DeleteTaxonomyRequest;

/**
 * Deletes a taxonomy, including all policy tags in this
 * taxonomy, their associated policies, and the policy tags references from
 * BigQuery columns.
 *
 * @param string $formattedName Resource name of the taxonomy to delete.
 *
 *                              Note: All policy tags in this taxonomy are also deleted. Please see
 *                              {@see PolicyTagManagerClient::taxonomyName()} for help formatting this field.
 */
function delete_taxonomy_sample(string $formattedName): void
{
    // Create a client.
    $policyTagManagerClient = new PolicyTagManagerClient();

    // Prepare the request message.
    $request = (new DeleteTaxonomyRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $policyTagManagerClient->deleteTaxonomy($request);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = PolicyTagManagerClient::taxonomyName('[PROJECT]', '[LOCATION]', '[TAXONOMY]');

    delete_taxonomy_sample($formattedName);
}
// [END datacatalog_v1_generated_PolicyTagManager_DeleteTaxonomy_sync]
