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

namespace Google\Service\Dataform;

class EndUserAuthenticationConfig extends \Google\Model
{
  protected $oauthConfigType = OAuthConfig::class;
  protected $oauthConfigDataType = '';
  /**
   * Output only. Email address of the user to run workflow invocations under.
   *
   * @var string
   */
  public $userEmail;

  /**
   * Optional. OAuth configuration for end user authentication.
   *
   * @param OAuthConfig $oauthConfig
   */
  public function setOauthConfig(OAuthConfig $oauthConfig)
  {
    $this->oauthConfig = $oauthConfig;
  }
  /**
   * @return OAuthConfig
   */
  public function getOauthConfig()
  {
    return $this->oauthConfig;
  }
  /**
   * Output only. Email address of the user to run workflow invocations under.
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
class_alias(EndUserAuthenticationConfig::class, 'Google_Service_Dataform_EndUserAuthenticationConfig');
