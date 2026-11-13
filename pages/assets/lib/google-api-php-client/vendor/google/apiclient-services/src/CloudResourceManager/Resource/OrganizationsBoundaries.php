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

namespace Google\Service\CloudResourceManager\Resource;

use Google\Service\CloudResourceManager\Boundary;
use Google\Service\CloudResourceManager\ListBoundariesResponse;
use Google\Service\CloudResourceManager\Operation;

/**
 * The "boundaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google\Service\CloudResourceManager(...);
 *   $boundaries = $cloudresourcemanagerService->organizations_boundaries;
 *  </code>
 */
class OrganizationsBoundaries extends \Google\Service\Resource
{
  /**
   * Creates a Boundary under a parent Folder or Organization. Creating a Boundary
   * triggers the creation of a Management Project if one is not supplied.
   * (boundaries.create)
   *
   * @param string $parent Required. The parent resource under which the Boundary
   * will be created. Format: `organizations/{organization_id}` or
   * `folders/{folder_id}`
   * @param Boundary $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string boundaryId Required. The user-assigned ID for the Boundary,
   * which will become the final component of the Boundary's resource name. Must
   * be unique within the parent resource. It must be 6 to 30 lowercase ASCII
   * letters, digits, or hyphens. It must start with a letter. Trailing hyphens
   * are prohibited. Example: `my-boundary-123`
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Boundary $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes the Boundary identified by the specified `name` (for example,
   * `folders/123456789/boundaries/my-boundary`). (boundaries.delete)
   *
   * @param string $name Required. The name of the Boundary to delete. Format:
   * `organizations/{organization_id}/boundaries/{boundary_id}` or
   * `folders/{folder_id}/boundaries/{boundary_id}`
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Retrieves the Boundary identified by the specified `name` (for example,
   * `folders/123456789/boundaries/my-boundary`). (boundaries.get)
   *
   * @param string $name Required. The name of the Boundary to retrieve. Format:
   * `organizations/{organization_id}/boundaries/{boundary_id}` or
   * `folders/{folder_id}/boundaries/{boundary_id}` Example:
   * `folders/123456789/boundaries/my-boundary`
   * @param array $optParams Optional parameters.
   * @return Boundary
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Boundary::class);
  }
  /**
   * Lists Boundaries that are direct children of the specified organization or
   * folder resource. (boundaries.listOrganizationsBoundaries)
   *
   * @param string $parent Required. The name of the parent resource whose
   * Boundaries are being listed. Format: `organizations/{organization_id}` or
   * `folders/{folder_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of Boundaries to return
   * in the response. The service may return fewer Boundaries than requested. If
   * unspecified, at most 100 Boundaries will be returned. The maximum value is
   * 100; values above 100 will be coerced to 100.
   * @opt_param string pageToken Optional. A pagination token received from a
   * previous call to `ListBoundaries` that indicates from where listing should
   * continue. Provide this to retrieve the subsequent page.
   * @return ListBoundariesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsBoundaries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListBoundariesResponse::class);
  }
  /**
   * Updates the `display_name` and `resource_filter.tag_filter.tag_value` of the
   * Boundary identified by the specified `name` (for example,
   * `folders/123456789/boundaries/my-boundary`). (boundaries.patch)
   *
   * @param string $name Identifier. The unique resource name of the Boundary.
   * Format: - `organizations/{organization_id}/boundaries/{boundary_id}` -
   * `folders/{folder_id}/boundaries/{boundary_id}` Example:
   * `folders/123456789/boundaries/my-boundary`
   * @param Boundary $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Boundary $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsBoundaries::class, 'Google_Service_CloudResourceManager_Resource_OrganizationsBoundaries');
