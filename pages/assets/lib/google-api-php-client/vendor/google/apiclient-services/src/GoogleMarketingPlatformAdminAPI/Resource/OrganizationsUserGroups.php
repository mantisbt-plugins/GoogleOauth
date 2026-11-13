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

use Google\Service\GoogleMarketingPlatformAdminAPI\ListUserGroupsResponse;
use Google\Service\GoogleMarketingPlatformAdminAPI\MarketingplatformadminEmpty;
use Google\Service\GoogleMarketingPlatformAdminAPI\UserGroup;

/**
 * The "userGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $marketingplatformadminService = new Google\Service\GoogleMarketingPlatformAdminAPI(...);
 *   $userGroups = $marketingplatformadminService->organizations_userGroups;
 *  </code>
 */
class OrganizationsUserGroups extends \Google\Service\Resource
{
  /**
   * Creates a user group in the specified GMP organization. (userGroups.create)
   *
   * @param string $parent Required. The parent resource where this UserGroup will
   * be created. Format: organizations/{org_id}
   * @param UserGroup $postBody
   * @param array $optParams Optional parameters.
   * @return UserGroup
   * @throws \Google\Service\Exception
   */
  public function create($parent, UserGroup $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], UserGroup::class);
  }
  /**
   * Deletes a user group in the specified GMP organization. (userGroups.delete)
   *
   * @param string $name Required. The name of the user group to delete. Format:
   * organizations/{org_id}/userGroups/{user_group_id}
   * @param array $optParams Optional parameters.
   * @return MarketingplatformadminEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], MarketingplatformadminEmpty::class);
  }
  /**
   * Looks up a single user group. (userGroups.get)
   *
   * @param string $name Required. The name of the UserGroup to retrieve. Format:
   * organizations/{org_id}/userGroups/{user_group_id}
   * @param array $optParams Optional parameters.
   * @return UserGroup
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UserGroup::class);
  }
  /**
   * Returns a list of user groups in the specified GMP organization.
   * (userGroups.listOrganizationsUserGroups)
   *
   * @param string $parent Required. The parent org where this UserGroup will be
   * listed. Format: organizations/{org_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of user groups to return
   * in one call. The service may return fewer than this value. If unspecified, at
   * most 50 user groups will be returned. The maximum value is 1000; values above
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * ListUserGroups call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListUserGroups` must match the
   * call that provided the page token.
   * @return ListUserGroupsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsUserGroups($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUserGroupsResponse::class);
  }
  /**
   * Updates a user group in the specified GMP organization. (userGroups.patch)
   *
   * @param string $name Identifier. Resource name of this UserGroup. Format:
   * organizations/{org_id}/userGroups/{user_group_id} Example:
   * "organizations/123abc/userGroups/456def"
   * @param UserGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The list of fields to update. Field
   * names must be in snake case (for example, "field_to_update"). Omitted fields
   * will not be updated. To replace the entire entity, use one path with the
   * string "*" to match all fields.
   * @return UserGroup
   * @throws \Google\Service\Exception
   */
  public function patch($name, UserGroup $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], UserGroup::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsUserGroups::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_Resource_OrganizationsUserGroups');
