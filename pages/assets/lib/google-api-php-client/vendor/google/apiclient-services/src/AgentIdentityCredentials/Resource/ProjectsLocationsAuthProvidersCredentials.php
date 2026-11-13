<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\AgentIdentityCredentials\Resource;

use Google\Service\AgentIdentityCredentials\GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsRequest;
use Google\Service\AgentIdentityCredentials\GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsResponse;
use Google\Service\AgentIdentityCredentials\GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsRequest;
use Google\Service\AgentIdentityCredentials\GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsResponse;

/**
 * The "credentials" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentidentitycredentialsService = new Google\Service\AgentIdentityCredentials(...);
 *   $credentials = $agentidentitycredentialsService->projects_locations_authProviders_credentials;
 *  </code>
 */
class ProjectsLocationsAuthProvidersCredentials extends \Google\Service\Resource
{
  /**
   * Finalizes the credentials after a successful consent flow.
   * (credentials.finalize)
   *
   * @param string $authProvider Required. The resource name of the auth provider.
   * Format:
   * `projects/{project}/locations/{location}/authProviders/{auth_provider}`
   * @param GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsResponse
   * @throws \Google\Service\Exception
   */
  public function finalize($authProvider, GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsRequest $postBody, $optParams = [])
  {
    $params = ['authProvider' => $authProvider, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('finalize', [$params], GoogleCloudAgentidentitycredentialsV1FinalizeCredentialsResponse::class);
  }
  /**
   * Retrieves authorization credentials for an auth provider, or indicates what
   * action needs to be taken to obtain credentials. If the `token` field in the
   * response is populated, credential retrieval was successful. If one of the
   * fields in the `result` oneof is populated, further action is required to
   * obtain credentials, such as redirecting the user for consent. View comments
   * on `RetrieveCredentialsResponse` for more information. (credentials.retrieve)
   *
   * @param string $authProvider Required. The resource name of the auth provider.
   * Format:
   * `projects/{project}/locations/{location}/authProviders/{auth_provider}`
   * @param GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsResponse
   * @throws \Google\Service\Exception
   */
  public function retrieve($authProvider, GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsRequest $postBody, $optParams = [])
  {
    $params = ['authProvider' => $authProvider, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('retrieve', [$params], GoogleCloudAgentidentitycredentialsV1RetrieveCredentialsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAuthProvidersCredentials::class, 'Google_Service_AgentIdentityCredentials_Resource_ProjectsLocationsAuthProvidersCredentials');
