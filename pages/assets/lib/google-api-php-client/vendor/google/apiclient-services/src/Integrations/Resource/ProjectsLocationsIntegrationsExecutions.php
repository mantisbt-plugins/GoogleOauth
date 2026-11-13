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

use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetTroubleshootExecutionResponse;
use Google\Service\Integrations\GoogleCloudIntegrationsV2ListExecutionsResponse;

/**
 * The "executions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $integrationsService = new Google\Service\Integrations(...);
 *   $executions = $integrationsService->projects_locations_integrations_executions;
 *  </code>
 */
class ProjectsLocationsIntegrationsExecutions extends \Google\Service\Resource
{
  /**
   * Lists the results of all the integration executions. The response includes
   * the same information as the [execution
   * log](https://cloud.google.com/application-integration/docs/viewing-logs) in
   * the Integration UI. (executions.listProjectsLocationsIntegrationsExecutions)
   *
   * @param string $parent Required. parent resource name of integration
   * execution.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Standard filter field, we support
   * filtering on following fields: integration_name: the name of the integration.
   * create_time: the execution created time. update_time: the execution last
   * update time. state: the state of the executions. execution_id: the id of the
   * execution. trigger_id: the id of the trigger. All fields support for EQUALS,
   * in additional: create_time and update_time support for LESS_THAN,
   * GREATER_THAN Also supports operators like AND, OR, NOT For example:
   * trigger_id=\"id1\" AND integration_name=\"testIntegration\"
   * @opt_param int pageSize Optional. The size of entries in the response.
   * @opt_param string pageToken Optional. The token returned in the previous
   * response.
   * @opt_param string readMask Optional. View mask for the response data. If set,
   * only the field specified will be returned as part of the result. If not set,
   * all fields in execution info will be filled and returned.
   * @return GoogleCloudIntegrationsV2ListExecutionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsIntegrationsExecutions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudIntegrationsV2ListExecutionsResponse::class);
  }
  /**
   * View detailed explanation of why an integration execution failed, using LLM
   * (executions.troubleshoot)
   *
   * @param string $name Required. Execution resource name. Format: `projects/{pro
   * ject}/locations/{location}/integrations/{integration}/executions/{execution_i
   * d}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2DuetTroubleshootExecutionResponse
   * @throws \Google\Service\Exception
   */
  public function troubleshoot($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('troubleshoot', [$params], GoogleCloudIntegrationsV2DuetTroubleshootExecutionResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsIntegrationsExecutions::class, 'Google_Service_Integrations_Resource_ProjectsLocationsIntegrationsExecutions');
