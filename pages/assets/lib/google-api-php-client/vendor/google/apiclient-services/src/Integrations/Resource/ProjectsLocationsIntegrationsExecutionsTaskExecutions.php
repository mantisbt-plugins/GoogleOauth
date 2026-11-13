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

use Google\Service\Integrations\GoogleCloudIntegrationsV2TaskExecution;

/**
 * The "taskExecutions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $integrationsService = new Google\Service\Integrations(...);
 *   $taskExecutions = $integrationsService->projects_locations_integrations_executions_taskExecutions;
 *  </code>
 */
class ProjectsLocationsIntegrationsExecutionsTaskExecutions extends \Google\Service\Resource
{
  /**
   * Get a TaskExecution in the specified project. (taskExecutions.get)
   *
   * @param string $name Required. The TaskExecution to retrieve. Format: projects
   * /{project}/locations/{location}/integrations/{integration}/executions/{execut
   * ion}/taskExecutions/{task_execution}
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2TaskExecution
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudIntegrationsV2TaskExecution::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsIntegrationsExecutionsTaskExecutions::class, 'Google_Service_Integrations_Resource_ProjectsLocationsIntegrationsExecutionsTaskExecutions');
