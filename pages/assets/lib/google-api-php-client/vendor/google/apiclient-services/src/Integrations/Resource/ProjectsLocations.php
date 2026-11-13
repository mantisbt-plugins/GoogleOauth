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

use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateIntegrationRequest;
use Google\Service\Integrations\GoogleCloudIntegrationsV2DuetGenerateIntegrationResponse;

/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $integrationsService = new Google\Service\Integrations(...);
 *   $locations = $integrationsService->projects_locations;
 *  </code>
 */
class ProjectsLocations extends \Google\Service\Resource
{
  /**
   * Generates an integration skeleton based on a natural language prompt.
   * (locations.generateIntegration)
   *
   * @param string $parent Required. The location in which the integration will be
   * generated. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudIntegrationsV2DuetGenerateIntegrationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudIntegrationsV2DuetGenerateIntegrationResponse
   * @throws \Google\Service\Exception
   */
  public function generateIntegration($parent, GoogleCloudIntegrationsV2DuetGenerateIntegrationRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateIntegration', [$params], GoogleCloudIntegrationsV2DuetGenerateIntegrationResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocations::class, 'Google_Service_Integrations_Resource_ProjectsLocations');
