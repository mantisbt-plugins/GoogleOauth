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

class AdminAccessBinding extends \Google\Collection
{
  protected $collection_key = 'organizationRoles';
  /**
   * Identifier. The resource name of this AdminAccessBinding. Format:
   * organizations/{org_id}/adminAccessBindings/{admin_access_binding_id}
   * Example: "organizations/123abc/adminAccessBindings/456def"
   *
   * @var string
   */
  public $name;
  /**
   * Optional. A list of roles granted to the parent organization.
   * USER_ADMIN_ROLE and BILLING_ADMIN_ROLE will be automatically added if
   * ORG_ADMIN_ROLE is assigned. No roles will be assigned if no roles are
   * specified.
   *
   * @var string[]
   */
  public $organizationRoles;
  /**
   * Email address of the user.
   *
   * @var string
   */
  public $userEmail;
  /**
   * Resource name of the user group.
   *
   * @var string
   */
  public $userGroup;

  /**
   * Identifier. The resource name of this AdminAccessBinding. Format:
   * organizations/{org_id}/adminAccessBindings/{admin_access_binding_id}
   * Example: "organizations/123abc/adminAccessBindings/456def"
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
   * Optional. A list of roles granted to the parent organization.
   * USER_ADMIN_ROLE and BILLING_ADMIN_ROLE will be automatically added if
   * ORG_ADMIN_ROLE is assigned. No roles will be assigned if no roles are
   * specified.
   *
   * @param string[] $organizationRoles
   */
  public function setOrganizationRoles($organizationRoles)
  {
    $this->organizationRoles = $organizationRoles;
  }
  /**
   * @return string[]
   */
  public function getOrganizationRoles()
  {
    return $this->organizationRoles;
  }
  /**
   * Email address of the user.
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
   * Resource name of the user group.
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
class_alias(AdminAccessBinding::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_AdminAccessBinding');
