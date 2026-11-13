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

namespace Google\Service\AgentIdentity\Resource;

use Google\Service\AgentIdentity\AccessSummary;
use Google\Service\AgentIdentity\ListAccessSummariesResponse;

/**
 * The "accessSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentidentityService = new Google\Service\AgentIdentity(...);
 *   $accessSummaries = $agentidentityService->projects_locations_accessSummaries;
 *  </code>
 */
class ProjectsLocationsAccessSummaries extends \Google\Service\Resource
{
  /**
   * Gets details of a single access summary. (accessSummaries.get)
   *
   * @param string $name Required. The resource name of the access summary.
   * @param array $optParams Optional parameters.
   * @return AccessSummary
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AccessSummary::class);
  }
  /**
   * Lists access summaries in a given project and location. Supported filters: -
   * `workload_id`: Filter by the SPIFFE ID of the agent. Example:
   * `workload_id="spiffe://example.com/ns/default/sa/my-agent"`
   * (accessSummaries.listProjectsLocationsAccessSummaries)
   *
   * @param string $parent Required. The parent resource where the search is
   * performed. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter string to restrict the results.
   * Currently supports filtering by `workload_id` or `auth_provider_name`. If no
   * filter is provided, returns all access summaries for the requested project
   * and location. Format: `workload_id=""` or `auth_provider_name=""`
   * @opt_param string orderBy Optional. This field is currently ignored. Defaults
   * to ordering by (auth_provider_id, user_id) in ascending order.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default. The maximum page size is 1000.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListAccessSummariesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAccessSummaries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAccessSummariesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAccessSummaries::class, 'Google_Service_AgentIdentity_Resource_ProjectsLocationsAccessSummaries');
