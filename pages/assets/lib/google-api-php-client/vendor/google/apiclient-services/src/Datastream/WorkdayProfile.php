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

namespace Google\Service\Datastream;

class WorkdayProfile extends \Google\Model
{
  /**
   * Required. Host for the Workday connection. Must be a valid hostname (e.g.,
   * `wd3-impl-services1.workday.com`).
   *
   * @var string
   */
  public $host;
  protected $oauthRefreshTokenCredentialsType = OauthRefreshTokenCredentials::class;
  protected $oauthRefreshTokenCredentialsDataType = '';
  /**
   * Required. Tenant for the Workday connection (e.g., `google12`).
   *
   * @var string
   */
  public $tenant;

  /**
   * Required. Host for the Workday connection. Must be a valid hostname (e.g.,
   * `wd3-impl-services1.workday.com`).
   *
   * @param string $host
   */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /**
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }
  /**
   * Required. Credentials for authenticating with the Workday API. OAuth
   * Refresh Token credentials for authenticating with the Workday API.
   *
   * @param OauthRefreshTokenCredentials $oauthRefreshTokenCredentials
   */
  public function setOauthRefreshTokenCredentials(OauthRefreshTokenCredentials $oauthRefreshTokenCredentials)
  {
    $this->oauthRefreshTokenCredentials = $oauthRefreshTokenCredentials;
  }
  /**
   * @return OauthRefreshTokenCredentials
   */
  public function getOauthRefreshTokenCredentials()
  {
    return $this->oauthRefreshTokenCredentials;
  }
  /**
   * Required. Tenant for the Workday connection (e.g., `google12`).
   *
   * @param string $tenant
   */
  public function setTenant($tenant)
  {
    $this->tenant = $tenant;
  }
  /**
   * @return string
   */
  public function getTenant()
  {
    return $this->tenant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkdayProfile::class, 'Google_Service_Datastream_WorkdayProfile');
