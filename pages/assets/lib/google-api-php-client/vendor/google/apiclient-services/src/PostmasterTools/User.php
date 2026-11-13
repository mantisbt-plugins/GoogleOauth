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

namespace Google\Service\PostmasterTools;

class User extends \Google\Model
{
  /**
   * Unspecified permission.
   */
  public const PERMISSION_PERMISSION_UNSPECIFIED = 'PERMISSION_UNSPECIFIED';
  /**
   * User has read access to the domain.
   */
  public const PERMISSION_READER = 'READER';
  /**
   * User has admin access to the domain.
   */
  public const PERMISSION_ADMIN = 'ADMIN';
  /**
   * User has owner access to the domain.
   */
  public const PERMISSION_OWNER = 'OWNER';
  /**
   * User has no access to the domain.
   */
  public const PERMISSION_NONE = 'NONE';
  /**
   * Output only. The user that added the current user.
   *
   * @var string
   */
  public $accessGranter;
  /**
   * Output only. The time the user was granted access.
   *
   * @var string
   */
  public $createTime;
  /**
   * Identifier. The resource name of the user. Format: users/{user} Note:
   * {user} is the user's email address.
   *
   * @var string
   */
  public $name;
  /**
   * The permission level that the user has for the specified domain.
   *
   * @var string
   */
  public $permission;
  /**
   * The user's email address.
   *
   * @var string
   */
  public $user;

  /**
   * Output only. The user that added the current user.
   *
   * @param string $accessGranter
   */
  public function setAccessGranter($accessGranter)
  {
    $this->accessGranter = $accessGranter;
  }
  /**
   * @return string
   */
  public function getAccessGranter()
  {
    return $this->accessGranter;
  }
  /**
   * Output only. The time the user was granted access.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Identifier. The resource name of the user. Format: users/{user} Note:
   * {user} is the user's email address.
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
   * The permission level that the user has for the specified domain.
   *
   * Accepted values: PERMISSION_UNSPECIFIED, READER, ADMIN, OWNER, NONE
   *
   * @param self::PERMISSION_* $permission
   */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /**
   * @return self::PERMISSION_*
   */
  public function getPermission()
  {
    return $this->permission;
  }
  /**
   * The user's email address.
   *
   * @param string $user
   */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /**
   * @return string
   */
  public function getUser()
  {
    return $this->user;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(User::class, 'Google_Service_PostmasterTools_User');
