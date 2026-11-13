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

use Google\Service\GoogleMarketingPlatformAdminAPI\ListUserGroupMembersResponse;
use Google\Service\GoogleMarketingPlatformAdminAPI\MarketingplatformadminEmpty;
use Google\Service\GoogleMarketingPlatformAdminAPI\UserGroupMember;

/**
 * The "members" collection of methods.
 * Typical usage is:
 *  <code>
 *   $marketingplatformadminService = new Google\Service\GoogleMarketingPlatformAdminAPI(...);
 *   $members = $marketingplatformadminService->organizations_userGroups_members;
 *  </code>
 */
class OrganizationsUserGroupsMembers extends \Google\Service\Resource
{
  /**
   * Adds a member to the specified GMP user group. (members.create)
   *
   * @param string $parent Required. The parent resource where this
   * UserGroupMember will be created. Format:
   * organizations/{org_id}/userGroups/{user_group_id}
   * @param UserGroupMember $postBody
   * @param array $optParams Optional parameters.
   * @return UserGroupMember
   * @throws \Google\Service\Exception
   */
  public function create($parent, UserGroupMember $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], UserGroupMember::class);
  }
  /**
   * Deletes a member in the specified GMP user group. (members.delete)
   *
   * @param string $name Required. The name of the user group member to delete.
   * Format: organizations/{org_id}/userGroups/{user_group_id}/members/{member_id}
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
   * Looks up a single user group member. (members.get)
   *
   * @param string $name Required. The name of the user group member to retrieve.
   * Format: organizations/{org_id}/userGroups/{user_group_id}/members/{member_id}
   * @param array $optParams Optional parameters.
   * @return UserGroupMember
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UserGroupMember::class);
  }
  /**
   * Returns a list of members in the specified user group.
   * (members.listOrganizationsUserGroupsMembers)
   *
   * @param string $parent Required. The parent user group where this
   * UserGroupMember will be listed. Format:
   * organizations/{org_id}/userGroups/{user_group_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of user group members to
   * return in one call. The service may return fewer than this value. If
   * unspecified, at most 50 user group members will be returned. The maximum
   * value is 1000; values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * ListUserGroupMembers call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListUserGroupMembers` must
   * match the call that provided the page token.
   * @return ListUserGroupMembersResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsUserGroupsMembers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUserGroupMembersResponse::class);
  }
  /**
   * Updates a member in the specified GMP user group. (members.patch)
   *
   * @param string $name Identifier. The resource name of this UserGroupMember.
   * Format: organizations/{org_id}/userGroups/{user_group_id}/members/{member_id}
   * Example: "organizations/123abc/userGroups/456def/members/789ghi"
   * @param UserGroupMember $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The list of fields to update. Field
   * names must be in snake case (for example, "field_to_update"). Omitted fields
   * will not be updated. To replace the entire entity, use one path with the
   * string "*" to match all fields.
   * @return UserGroupMember
   * @throws \Google\Service\Exception
   */
  public function patch($name, UserGroupMember $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], UserGroupMember::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsUserGroupsMembers::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_Resource_OrganizationsUserGroupsMembers');
