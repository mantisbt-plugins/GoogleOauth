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

namespace Google\Service\AndroidManagement;

class SigninDetailGoogleAuthenticationOptions extends \Google\Model
{
  /**
   * The setting googleAuthenticationSettings for the enterprise that this sign-
   * in detail belongs to is used to determine whether the user needs to
   * authenticate with Google during enrollment.
   */
  public const AUTHENTICATION_REQUIREMENT_AUTHENTICATION_REQUIREMENT_UNSPECIFIED = 'AUTHENTICATION_REQUIREMENT_UNSPECIFIED';
  /**
   * Google authentication is optional for the user. This means the user can
   * choose to skip Google authentication during enrollment.
   */
  public const AUTHENTICATION_REQUIREMENT_OPTIONAL = 'OPTIONAL';
  /**
   * Google authentication is required for the user. This means the user must
   * authenticate with a Google account to proceed.
   */
  public const AUTHENTICATION_REQUIREMENT_REQUIRED = 'REQUIRED';
  /**
   * Optional. Specifies whether user should authenticate with Google during
   * enrollment. If this is set to any value other than
   * AUTHENTICATION_REQUIREMENT_UNSPECIFIED, the enterprise-level setting
   * googleAuthenticationSettings is ignored for devices enrolled with this
   * sign-in detail.
   *
   * @var string
   */
  public $authenticationRequirement;

  /**
   * Optional. Specifies whether user should authenticate with Google during
   * enrollment. If this is set to any value other than
   * AUTHENTICATION_REQUIREMENT_UNSPECIFIED, the enterprise-level setting
   * googleAuthenticationSettings is ignored for devices enrolled with this
   * sign-in detail.
   *
   * Accepted values: AUTHENTICATION_REQUIREMENT_UNSPECIFIED, OPTIONAL, REQUIRED
   *
   * @param self::AUTHENTICATION_REQUIREMENT_* $authenticationRequirement
   */
  public function setAuthenticationRequirement($authenticationRequirement)
  {
    $this->authenticationRequirement = $authenticationRequirement;
  }
  /**
   * @return self::AUTHENTICATION_REQUIREMENT_*
   */
  public function getAuthenticationRequirement()
  {
    return $this->authenticationRequirement;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SigninDetailGoogleAuthenticationOptions::class, 'Google_Service_AndroidManagement_SigninDetailGoogleAuthenticationOptions');
