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

namespace Google\Service\GoogleMarketingPlatformAdminAPI;

class UserGroupMember extends \Google\Model
{
  /**
   * Unspecified membership role.
   */
  public const MEMBERSHIP_ROLE_MEMBERSHIP_ROLE_UNSPECIFIED = 'MEMBERSHIP_ROLE_UNSPECIFIED';
  /**
   * Owner role that can add and remove group members.
   */
  public const MEMBERSHIP_ROLE_MEMBERSHIP_ROLE_OWNER = 'MEMBERSHIP_ROLE_OWNER';
  /**
   * Member role that receives all permissions assigned to the group.
   */
  public const MEMBERSHIP_ROLE_MEMBERSHIP_ROLE_MEMBER = 'MEMBERSHIP_ROLE_MEMBER';
  /**
   * Optional. The role of the member in the user group.
   *
   * @var string
   */
  public $membershipRole;
  /**
   * Identifier. The resource name of this UserGroupMember. Format:
   * organizations/{org_id}/userGroups/{user_group_id}/members/{member_id}
   * Example: "organizations/123abc/userGroups/456def/members/789ghi"
   *
   * @var string
   */
  public $name;
  /**
   * Email address of the user member.
   *
   * @var string
   */
  public $userEmail;
  /**
   * User group resource name of the group member.
   *
   * @var string
   */
  public $userGroup;

  /**
   * Optional. The role of the member in the user group.
   *
   * Accepted values: MEMBERSHIP_ROLE_UNSPECIFIED, MEMBERSHIP_ROLE_OWNER,
   * MEMBERSHIP_ROLE_MEMBER
   *
   * @param self::MEMBERSHIP_ROLE_* $membershipRole
   */
  public function setMembershipRole($membershipRole)
  {
    $this->membershipRole = $membershipRole;
  }
  /**
   * @return self::MEMBERSHIP_ROLE_*
   */
  public function getMembershipRole()
  {
    return $this->membershipRole;
  }
  /**
   * Identifier. The resource name of this UserGroupMember. Format:
   * organizations/{org_id}/userGroups/{user_group_id}/members/{member_id}
   * Example: "organizations/123abc/userGroups/456def/members/789ghi"
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Email address of the user member.
   *
   * @param string $userEmail
   */
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  /**
   * @return string
   */
  public function getUserEmail()
  {
    return $this->userEmail;
  }
  /**
   * User group resource name of the group member.
   *
   * @param string $userGroup
   */
  public function setUserGroup($userGroup)
  {
    $this->userGroup = $userGroup;
  }
  /**
   * @return string
   */
  public function getUserGroup()
  {
    return $this->userGroup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserGroupMember::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_UserGroupMember');
