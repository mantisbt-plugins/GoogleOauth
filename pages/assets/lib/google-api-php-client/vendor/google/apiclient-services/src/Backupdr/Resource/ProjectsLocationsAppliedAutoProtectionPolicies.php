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

use Google\Service\Backupdr\ListAppliedAutoProtectionPoliciesResponse;

/**
 * The "appliedAutoProtectionPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $appliedAutoProtectionPolicies = $backupdrService->projects_locations_appliedAutoProtectionPolicies;
 *  </code>
 */
class ProjectsLocationsAppliedAutoProtectionPolicies extends \Google\Service\Resource
{
  /**
   * Lists AppliedAutoProtectionPolicies in a given project and location. (applied
   * AutoProtectionPolicies.listProjectsLocationsAppliedAutoProtectionPolicies)
   *
   * @param string $parent Required. The project and location for which to
   * retrieve the list of applied policies. Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters resources
   * listed in the response.
   * @opt_param string orderBy Optional. An expression that sorts the results in
   * the response.
   * @opt_param int pageSize Optional. The maximum number of applied policies to
   * return in a single page. The maximum value is 1000; values above 1000 will be
   * coerced to 1000. If unspecified or set to 0, a default page size of 500 will
   * be used.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAppliedAutoProtectionPolicies` call.
   * @return ListAppliedAutoProtectionPoliciesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppliedAutoProtectionPolicies($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAppliedAutoProtectionPoliciesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppliedAutoProtectionPolicies::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsAppliedAutoProtectionPolicies');
