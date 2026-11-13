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

namespace Google\Service\Looker;

class AuthType extends \Google\Model
{
  /**
   * Optional. Whether google auth is enabled on the Looker instance.
   *
   * @var bool
   */
  public $googleAuthEnabled;
  /**
   * Optional. Whether Workforce auth is enabled on the Looker instance.
   *
   * @var bool
   */
  public $workforceAuthEnabled;

  /**
   * Optional. Whether google auth is enabled on the Looker instance.
   *
   * @param bool $googleAuthEnabled
   */
  public function setGoogleAuthEnabled($googleAuthEnabled)
  {
    $this->googleAuthEnabled = $googleAuthEnabled;
  }
  /**
   * @return bool
   */
  public function getGoogleAuthEnabled()
  {
    return $this->googleAuthEnabled;
  }
  /**
   * Optional. Whether Workforce auth is enabled on the Looker instance.
   *
   * @param bool $workforceAuthEnabled
   */
  public function setWorkforceAuthEnabled($workforceAuthEnabled)
  {
    $this->workforceAuthEnabled = $workforceAuthEnabled;
  }
  /**
   * @return bool
   */
  public function getWorkforceAuthEnabled()
  {
    return $this->workforceAuthEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthType::class, 'Google_Service_Looker_AuthType');
