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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaSessionConfig extends \Google\Model
{
  /**
   * Default value.
   */
  public const SESSION_MANAGEMENT_POLICY_SESSION_MANAGEMENT_POLICY_UNSPECIFIED = 'SESSION_MANAGEMENT_POLICY_UNSPECIFIED';
  /**
   * The session will be managed by the customer.
   */
  public const SESSION_MANAGEMENT_POLICY_NOT_MANAGED = 'NOT_MANAGED';
  /**
   * Sessions multi-tenancy will be controlled by Google using 1P or 3P identity
   * providers.
   */
  public const SESSION_MANAGEMENT_POLICY_VERTEX_AI_MANAGED = 'VERTEX_AI_MANAGED';
  /**
   * Optional. Session management policy that defines who will manage the
   * session.
   *
   * @var string
   */
  public $sessionManagementPolicy;
  protected $sessionTtlType = GoogleCloudDiscoveryengineV1alphaSessionConfigSessionTtl::class;
  protected $sessionTtlDataType = '';

  /**
   * Optional. Session management policy that defines who will manage the
   * session.
   *
   * Accepted values: SESSION_MANAGEMENT_POLICY_UNSPECIFIED, NOT_MANAGED,
   * VERTEX_AI_MANAGED
   *
   * @param self::SESSION_MANAGEMENT_POLICY_* $sessionManagementPolicy
   */
  public function setSessionManagementPolicy($sessionManagementPolicy)
  {
    $this->sessionManagementPolicy = $sessionManagementPolicy;
  }
  /**
   * @return self::SESSION_MANAGEMENT_POLICY_*
   */
  public function getSessionManagementPolicy()
  {
    return $this->sessionManagementPolicy;
  }
  /**
   * Optional. The TTL for the session. If unset, the default value is 60 days.
   *
   * @param GoogleCloudDiscoveryengineV1alphaSessionConfigSessionTtl $sessionTtl
   */
  public function setSessionTtl(GoogleCloudDiscoveryengineV1alphaSessionConfigSessionTtl $sessionTtl)
  {
    $this->sessionTtl = $sessionTtl;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaSessionConfigSessionTtl
   */
  public function getSessionTtl()
  {
    return $this->sessionTtl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaSessionConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaSessionConfig');
