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

namespace Google\Service\AgentRegistry\Resource;

use Google\Service\AgentRegistry\Endpoint;
use Google\Service\AgentRegistry\ListAiApplicationEndpointsResponse;

/**
 * The "endpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentregistryService = new Google\Service\AgentRegistry(...);
 *   $endpoints = $agentregistryService->projects_locations_aiApplications_endpoints;
 *  </code>
 */
class ProjectsLocationsAiApplicationsEndpoints extends \Google\Service\Resource
{
  /**
   * Gets details of a single Endpoint under an AI Application. (endpoints.get)
   *
   * @param string $name Required. Name of the resource. Format: `projects/{projec
   * t}/locations/{location}/aiApplications/{ai_application}/endpoints/{endpoint}`
   * @param array $optParams Optional parameters.
   * @return Endpoint
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Endpoint::class);
  }
  /**
   * Lists Endpoints under an AI Application.
   * (endpoints.listProjectsLocationsAiApplicationsEndpoints)
   *
   * @param string $parent Required. Parent value (AI Application) for
   * ListAiApplicationEndpointsRequest. Format:
   * `projects/{project}/locations/{location}/aiApplications/{ai_application}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListAiApplicationEndpointsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAiApplicationsEndpoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAiApplicationEndpointsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAiApplicationsEndpoints::class, 'Google_Service_AgentRegistry_Resource_ProjectsLocationsAiApplicationsEndpoints');
