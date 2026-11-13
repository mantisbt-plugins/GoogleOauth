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

namespace Google\Service\GoogleMarketingPlatformAdminAPI\Resource;

use Google\Service\GoogleMarketingPlatformAdminAPI\AdminAccessBinding;
use Google\Service\GoogleMarketingPlatformAdminAPI\ListAdminAccessBindingsResponse;

/**
 * The "adminAccessBindings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $marketingplatformadminService = new Google\Service\GoogleMarketingPlatformAdminAPI(...);
 *   $adminAccessBindings = $marketingplatformadminService->organizations_adminAccessBindings;
 *  </code>
 */
class OrganizationsAdminAccessBindings extends \Google\Service\Resource
{
  /**
   * Creates an admin access binding in the specified GMP organization.
   * (adminAccessBindings.create)
   *
   * @param string $parent Required. The parent organization, which owns this
   * Admin Access Binding. Format: organizations/{org_id}
   * @param AdminAccessBinding $postBody
   * @param array $optParams Optional parameters.
   * @return AdminAccessBinding
   * @throws \Google\Service\Exception
   */
  public function create($parent, AdminAccessBinding $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AdminAccessBinding::class);
  }
  /**
   * Looks up a single admin access binding. (adminAccessBindings.get)
   *
   * @param string $name Required. The name of the AdminAccessBinding to retrieve.
   * Format: organizations/{org_id}/adminAccessBindings/{admin_access_binding_id}
   * @param array $optParams Optional parameters.
   * @return AdminAccessBinding
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AdminAccessBinding::class);
  }
  /**
   * Returns a list of admin access bindings in the specified GMP organization.
   * (adminAccessBindings.listOrganizationsAdminAccessBindings)
   *
   * @param string $parent Required. The parent organization, which owns this
   * collection of Admin Access Bindings. Format: organizations/{org_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of Admin Access Bindings
   * to return in one call. The service may return fewer than this value. If
   * unspecified, at most 50 Admin Access Bindings will be returned. The maximum
   * value is 1000; values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * ListAdminAccessBindings call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListAdminAccessBindings`
   * must match the call that provided the page token.
   * @return ListAdminAccessBindingsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsAdminAccessBindings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAdminAccessBindingsResponse::class);
  }
  /**
   * Updates an admin access binding in the specified GMP organization.
   * (adminAccessBindings.patch)
   *
   * @param string $name Identifier. The resource name of this AdminAccessBinding.
   * Format: organizations/{org_id}/adminAccessBindings/{admin_access_binding_id}
   * Example: "organizations/123abc/adminAccessBindings/456def"
   * @param AdminAccessBinding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The list of fields to update. Field
   * names must be in snake case (for example, "field_to_update"). Omitted fields
   * will not be updated. To replace the entire entity, use one path with the
   * string "*" to match all fields.
   * @return AdminAccessBinding
   * @throws \Google\Service\Exception
   */
  public function patch($name, AdminAccessBinding $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], AdminAccessBinding::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsAdminAccessBindings::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_Resource_OrganizationsAdminAccessBindings');
