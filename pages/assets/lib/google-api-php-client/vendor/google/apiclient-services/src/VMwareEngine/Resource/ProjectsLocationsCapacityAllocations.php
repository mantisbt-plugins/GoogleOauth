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

namespace Google\Service\VMwareEngine\Resource;

use Google\Service\VMwareEngine\ListCapacityAllocationsResponse;

/**
 * The "capacityAllocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $vmwareengineService = new Google\Service\VMwareEngine(...);
 *   $capacityAllocations = $vmwareengineService->projects_locations_capacityAllocations;
 *  </code>
 */
class ProjectsLocationsCapacityAllocations extends \Google\Service\Resource
{
  /**
   * Lists `CapacityAllocation` resources in a given project and location.
   * (capacityAllocations.listProjectsLocationsCapacityAllocations)
   *
   * @param string $parent Required. The resource name of the location to query
   * for capacity allocations. Resource names are schemeless URIs that follow the
   * conventions in https://cloud.google.com/apis/design/resource_names. For
   * example: `projects/my-project/locations/us-central1-a`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that matches resources
   * returned in the response. The expression must specify the field name, a
   * comparison operator, and the value that you want to use for filtering. The
   * value must be a string or a number. The comparison operator must be `=`,
   * `!=`, `>`, `>=`, `<`, or `<=`. The has operator `:` is also supported.
   * Supported fields include `name`, `display_name` (or `placement_group`),
   * `machine_family`, `allocated_capacity_count`, `consumed_capacity_count`, and
   * `connected_placement_group` (using `=`). For example, if you are filtering a
   * list of capacity allocations, you can exclude the ones named `example-
   * capacity-allocation` by specifying `name != "example-capacity-allocation"`.
   * You can also filter on other fields, such as machine family (`"ve1"`,
   * `"ve2"`, or `"ve3"`) or connected placement group: ``` machine_family = "ve1"
   * connected_placement_group = "example-placement-group" ``` To filter on
   * multiple expressions, provide each separate expression within parentheses.
   * For example: ``` (machine_family = "ve1") (allocated_capacity_count > 10) ```
   * By default, each expression is an `AND` expression. However, you can include
   * `AND`, `OR`, and `NOT` expressions explicitly. For example: ```
   * ((machine_family = "ve1") AND (allocated_capacity_count > 10)) OR
   * (consumed_capacity_count > 0) ```
   * @opt_param string orderBy Optional. Sorts list results by a certain order. By
   * default, returned results are ordered by `name` in ascending order. You can
   * also sort results in descending order based on the `name` value using
   * `orderBy="name desc"`. Currently, only ordering by `name` is supported.
   * @opt_param int pageSize Optional. The maximum number of capacity allocations
   * to return in one page. The service may return fewer than this value. The
   * maximum value is coerced to 1000. The default value of this field is 500.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListCapacityAllocations` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListCapacityAllocations`
   * must match the call that provided the page token.
   * @return ListCapacityAllocationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsCapacityAllocations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListCapacityAllocationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCapacityAllocations::class, 'Google_Service_VMwareEngine_Resource_ProjectsLocationsCapacityAllocations');
