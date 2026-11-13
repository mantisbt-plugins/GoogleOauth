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

namespace Google\Service\HomeGraphService;

class UserBlameStruct extends \Google\Model
{
  /**
   * Indicates an unspecified user blame type.
   */
  public const BLAME_TYPE_USER_BLAME_TYPE_ENUM_UNSPECIFIED = 'USER_BLAME_TYPE_ENUM_UNSPECIFIED';
  /**
   * Indicates phone location.
   */
  public const BLAME_TYPE_PHONE_LOCATION = 'PHONE_LOCATION';
  /**
   * Indicates manual change.
   */
  public const BLAME_TYPE_MANUAL_CHANGE = 'MANUAL_CHANGE';
  /**
   * Required. Specifies the user blame type.
   *
   * @var string
   */
  public $blameType;
  /**
   * Required. Specifies the email of the user.
   *
   * @var string
   */
  public $userEmail;

  /**
   * Required. Specifies the user blame type.
   *
   * Accepted values: USER_BLAME_TYPE_ENUM_UNSPECIFIED, PHONE_LOCATION,
   * MANUAL_CHANGE
   *
   * @param self::BLAME_TYPE_* $blameType
   */
  public function setBlameType($blameType)
  {
    $this->blameType = $blameType;
  }
  /**
   * @return self::BLAME_TYPE_*
   */
  public function getBlameType()
  {
    return $this->blameType;
  }
  /**
   * Required. Specifies the email of the user.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserBlameStruct::class, 'Google_Service_HomeGraphService_UserBlameStruct');
