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

namespace Google\Service\AgentRegistry;

class ScanningConfig extends \Google\Model
{
  /**
   * Default value. Inherits system default (ENABLED_BLOCKING).
   */
  public const POLICY_POLICY_UNSPECIFIED = 'POLICY_UNSPECIFIED';
  /**
   * Bypasses scanning.
   */
  public const POLICY_DISABLED = 'DISABLED';
  /**
   * Scans the skill package and blocks download if security or safety issues
   * are found.
   */
  public const POLICY_ENABLED_BLOCKING = 'ENABLED_BLOCKING';
  /**
   * Scans the skill package in audit mode without blocking downloads.
   */
  public const POLICY_ENABLED_NONBLOCKING = 'ENABLED_NONBLOCKING';
  /**
   * Optional. The security scanning policy.
   *
   * @var string
   */
  public $policy;

  /**
   * Optional. The security scanning policy.
   *
   * Accepted values: POLICY_UNSPECIFIED, DISABLED, ENABLED_BLOCKING,
   * ENABLED_NONBLOCKING
   *
   * @param self::POLICY_* $policy
   */
  public function setPolicy($policy)
  {
    $this->policy = $policy;
  }
  /**
   * @return self::POLICY_*
   */
  public function getPolicy()
  {
    return $this->policy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScanningConfig::class, 'Google_Service_AgentRegistry_ScanningConfig');
