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

class UserGroup extends \Google\Model
{
  /**
   * Optional. The description of the user group.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The human-readable name for the user group.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. Resource name of this UserGroup. Format:
   * organizations/{org_id}/userGroups/{user_group_id} Example:
   * "organizations/123abc/userGroups/456def"
   *
   * @var string
   */
  public $name;

  /**
   * Optional. The description of the user group.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. The human-readable name for the user group.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Identifier. Resource name of this UserGroup. Format:
   * organizations/{org_id}/userGroups/{user_group_id} Example:
   * "organizations/123abc/userGroups/456def"
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserGroup::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_UserGroup');
