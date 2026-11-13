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

class CreateUserRequest extends \Google\Model
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
   * Optional. Specifies the permission level to give the user for the specified
   * domain. If not specified, the default value for this field is READER.
   *
   * @var string
   */
  public $permission;
  /**
   * Required. The user to create.
   *
   * @var string
   */
  public $userId;

  /**
   * Optional. Specifies the permission level to give the user for the specified
   * domain. If not specified, the default value for this field is READER.
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
   * Required. The user to create.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateUserRequest::class, 'Google_Service_PostmasterTools_CreateUserRequest');
