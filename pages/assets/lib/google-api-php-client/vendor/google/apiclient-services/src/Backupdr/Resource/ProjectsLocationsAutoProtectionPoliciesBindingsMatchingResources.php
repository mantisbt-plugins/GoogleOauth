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

namespace Google\Service\Backupdr\Resource;

use Google\Service\Backupdr\BindingMatchingResource;
use Google\Service\Backupdr\ListBindingMatchingResourcesResponse;

/**
 * The "matchingResources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $matchingResources = $backupdrService->projects_locations_autoProtectionPolicies_bindings_matchingResources;
 *  </code>
 */
class ProjectsLocationsAutoProtectionPoliciesBindingsMatchingResources extends \Google\Service\Resource
{
  /**
   * Gets details of a single Binding Matching Resource. (matchingResources.get)
   *
   * @param string $name Required. The name of the matching resource to retrieve.
   * Format: projects/{project}/locations/{location}/autoProtectionPolicies/{auto_
   * protection_policy}/bindings/{binding}/matchingResources/{matching_resource}
   * @param array $optParams Optional parameters.
   * @return BindingMatchingResource
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], BindingMatchingResource::class);
  }
  /**
   * Lists Binding Matching Resources for a given AutoProtectionPolicyBinding. (ma
   * tchingResources.listProjectsLocationsAutoProtectionPoliciesBindingsMatchingRe
   * sources)
   *
   * @param string $parent Required. The project, location, auto protection policy
   * and binding for which to retrieve `BindingMatchingResources` information.
   * Format: `projects/{project}/locations/{location}/autoProtectionPolicies/{auto
   * _protection_policy}/bindings/{binding}`. In Google Cloud Backup and DR,
   * locations map to Google Cloud regions, for example **us-central1**.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Field match expression used to filter the
   * results.
   * @opt_param string orderBy Optional. Field by which to sort the results.
   * @opt_param int pageSize Optional. The maximum number of
   * `BindingMatchingResources` to return in a single response. The default page
   * size is 100 and maximum page size is 200. Note that the response may include
   * a partial list and a caller should only rely on the response's
   * next_page_token to determine if there are more instances left to be queried.
   * @opt_param string pageToken Optional. The value of next_page_token received
   * from a previous `ListBindingMatchingResources` call. Provide this to retrieve
   * the subsequent page in a multi-page list of results. When paginating, all
   * other parameters provided to `ListBindingMatchingResources` must match the
   * call that provided the page token.
   * @return ListBindingMatchingResourcesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAutoProtectionPoliciesBindingsMatchingResources($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListBindingMatchingResourcesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAutoProtectionPoliciesBindingsMatchingResources::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsAutoProtectionPoliciesBindingsMatchingResources');
