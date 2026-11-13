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

namespace Google\Service\Firebaseappcheck;

class GoogleFirebaseAppcheckV1MintAppCheckTokenRequest extends \Google\Model
{
  protected $limitedUseConfigType = GoogleFirebaseAppcheckV1LimitedUseConfig::class;
  protected $limitedUseConfigDataType = '';
  /**
   * Optional. If specified, the returned App Check token will be a session
   * token, valid for the specified duration. Must be between 30 minutes and 7
   * days, inclusive.
   *
   * @var string
   */
  public $tokenTtl;

  /**
   * Optional. If specified, the returned App Check token will be a limited-use
   * token minted according to the specified configuration options.
   *
   * @param GoogleFirebaseAppcheckV1LimitedUseConfig $limitedUseConfig
   */
  public function setLimitedUseConfig(GoogleFirebaseAppcheckV1LimitedUseConfig $limitedUseConfig)
  {
    $this->limitedUseConfig = $limitedUseConfig;
  }
  /**
   * @return GoogleFirebaseAppcheckV1LimitedUseConfig
   */
  public function getLimitedUseConfig()
  {
    return $this->limitedUseConfig;
  }
  /**
   * Optional. If specified, the returned App Check token will be a session
   * token, valid for the specified duration. Must be between 30 minutes and 7
   * days, inclusive.
   *
   * @param string $tokenTtl
   */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /**
   * @return string
   */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppcheckV1MintAppCheckTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1MintAppCheckTokenRequest');
