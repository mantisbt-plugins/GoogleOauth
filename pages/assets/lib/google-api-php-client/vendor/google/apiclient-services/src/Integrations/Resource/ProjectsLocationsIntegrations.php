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

namespace Google\Service\Integrations\Resource;

use Google\Service\Integrations\ExecuteRequestContent;
use Google\Service\Integrations\GoogleApiHttpBody;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateIntegrationBranchRequest;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateIntegrationBranchResponse;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateIntegrationDocumentRequest;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateIntegrationDocumentResponse;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateJavascriptRequest;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateJavascriptResponse;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetRecommendTasksRequest;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetRecommendTasksResponse;
use Google\Service\Integrations\ScheduleRequestContent;

/**
 * The "integrations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $integrationsService = new Google\Service\Integrations(...);
 *   $integrations = $integrationsService->projects_locations_integrations;
 *  </code>
 */
class ProjectsLocationsIntegrations extends \Google\Service\Resource
{
  /**
   * Executes integrations synchronously. The response is not returned until the
   * requested execution is either fulfilled or experienced an error. Only one
   * integration can be executed. Request format URL: https://integrations.googlea
   * pis.com/v2/projects/$PROJECT/locations/$LOCATION/integrations/$INTEGRATION_NA
   * ME:execute Request payload: (the entire payload is optional unless input
   * variables need to be set.) {"variable1": "hello world", "variable2": 1,
   * "variable3": {"my_json_key": "my json string value" } (integrations.execute)
   *
   * @param string $parent Required. The integration resource name.
   * @param ExecuteRequestContent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. This is used to de-dup incoming
   * request: if the duplicate request was detected, the response from the
   * previous execution is returned.
   * @opt_param string triggerId Required. The API trigger id associated with the
   * integration. An integration can have multiple trigger_id. This field is
   * required to disambiguate which trigger should be invoked.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function execute($parent, ExecuteRequestContent $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('execute', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Generates an integration branch. (integrations.generateIntegrationBranch)
   *
   * @param string $parent Required. Format:
   * `projects/{project}/locations/{location}/integrations/{integration}`
   * @param GoogleCloudIntegrationsV2DuetGenerateIntegrationBranchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2DuetGenerateIntegrationBranchResponse
   * @throws \Google\Service\Exception
   */
  public function generateIntegrationBranch($parent, GoogleCloudIntegrationsV2DuetGenerateIntegrationBranchRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateIntegrationBranch', [$params], GoogleCloudIntegrationsV2DuetGenerateIntegrationBranchResponse::class);
  }
  /**
   * Generates documentation for an integration version.
   * (integrations.generateIntegrationDocument)
   *
   * @param string $parent Required. Format:
   * `projects/{project}/locations/{location}/integrations/{integration}`
   * @param GoogleCloudIntegrationsV2DuetGenerateIntegrationDocumentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2DuetGenerateIntegrationDocumentResponse
   * @throws \Google\Service\Exception
   */
  public function generateIntegrationDocument($parent, GoogleCloudIntegrationsV2DuetGenerateIntegrationDocumentRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateIntegrationDocument', [$params], GoogleCloudIntegrationsV2DuetGenerateIntegrationDocumentResponse::class);
  }
  /**
   * Generates Javascript code for data mapping. (integrations.generateJavascript)
   *
   * @param string $parent Required. Format:
   * `projects/{project}/locations/{location}/integrations/{integration}`
   * @param GoogleCloudIntegrationsV2DuetGenerateJavascriptRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2DuetGenerateJavascriptResponse
   * @throws \Google\Service\Exception
   */
  public function generateJavascript($parent, GoogleCloudIntegrationsV2DuetGenerateJavascriptRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateJavascript', [$params], GoogleCloudIntegrationsV2DuetGenerateJavascriptResponse::class);
  }
  /**
   * Recommends tasks to replace a selected task. (integrations.recommendTasks)
   *
   * @param string $parent Required. Format:
   * `projects/{project}/locations/{location}/integrations/{integration}`
   * @param GoogleCloudIntegrationsV2DuetRecommendTasksRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2DuetRecommendTasksResponse
   * @throws \Google\Service\Exception
   */
  public function recommendTasks($parent, GoogleCloudIntegrationsV2DuetRecommendTasksRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('recommendTasks', [$params], GoogleCloudIntegrationsV2DuetRecommendTasksResponse::class);
  }
  /**
   * Schedules an integration for execution. (integrations.schedule)
   *
   * @param string $parent Required. The integration resource name.
   * @param ScheduleRequestContent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. This is used to de-dup incoming
   * request: if the duplicate request was detected, the response from the
   * previous execution is returned.
   * @opt_param string scheduleTime Optional. The time that the integration should
   * be executed. If the time is less or equal to the current time, the
   * integration is executed immediately.
   * @opt_param string triggerId Required. The API trigger id associated with the
   * integration. An integration can have multiple trigger_id. This field is
   * required to disambiguate which trigger should be invoked
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function schedule($parent, ScheduleRequestContent $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('schedule', [$params], GoogleApiHttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsIntegrations::class, 'Google_Service_Integrations_Resource_ProjectsLocationsIntegrations');
