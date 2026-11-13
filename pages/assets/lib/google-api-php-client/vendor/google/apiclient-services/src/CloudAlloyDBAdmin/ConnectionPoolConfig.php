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

namespace Google\Service\CloudAlloyDBAdmin;

class ConnectionPoolConfig extends \Google\Model
{
  /**
   * The scaling type is not specified.
   */
  public const AUTHPROXY_POOLER_SCALING_TYPE_POOLER_SCALING_TYPE_UNSPECIFIED = 'POOLER_SCALING_TYPE_UNSPECIFIED';
  /**
   * No pooler is enabled.
   */
  public const AUTHPROXY_POOLER_SCALING_TYPE_POOLER_NONE = 'POOLER_NONE';
  /**
   * The number of poolers is automatically determined by the service based on
   * the VM size.
   */
  public const AUTHPROXY_POOLER_SCALING_TYPE_POOLER_MACHINE_SIZED = 'POOLER_MACHINE_SIZED';
  /**
   * The number of poolers is kept unchanged no matter the machine size.
   */
  public const AUTHPROXY_POOLER_SCALING_TYPE_POOLER_MANUAL_OVERRIDE = 'POOLER_MANUAL_OVERRIDE';
  /**
   * The scaling type is not specified.
   */
  public const POOLER_SCALING_TYPE_POOLER_SCALING_TYPE_UNSPECIFIED = 'POOLER_SCALING_TYPE_UNSPECIFIED';
  /**
   * No pooler is enabled.
   */
  public const POOLER_SCALING_TYPE_POOLER_NONE = 'POOLER_NONE';
  /**
   * The number of poolers is automatically determined by the service based on
   * the VM size.
   */
  public const POOLER_SCALING_TYPE_POOLER_MACHINE_SIZED = 'POOLER_MACHINE_SIZED';
  /**
   * The number of poolers is kept unchanged no matter the machine size.
   */
  public const POOLER_SCALING_TYPE_POOLER_MANUAL_OVERRIDE = 'POOLER_MANUAL_OVERRIDE';
  /**
   * Output only. The number of running AuthProxy poolers per instance.
   *
   * @var int
   */
  public $authproxyPoolerCount;
  /**
   * Optional. The scaling type of the AuthProxy pooler.
   *
   * @var string
   */
  public $authproxyPoolerScalingType;
  /**
   * Optional. Whether to enable Managed Connection Pool (MCP).
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. Connection Pool flags, as a list of "key": "value" pairs.
   *
   * @var string[]
   */
  public $flags;
  /**
   * Output only. The number of running poolers per instance.
   *
   * @var int
   */
  public $poolerCount;
  /**
   * Optional. The scaling type of the regular pooler.
   *
   * @var string
   */
  public $poolerScalingType;

  /**
   * Output only. The number of running AuthProxy poolers per instance.
   *
   * @param int $authproxyPoolerCount
   */
  public function setAuthproxyPoolerCount($authproxyPoolerCount)
  {
    $this->authproxyPoolerCount = $authproxyPoolerCount;
  }
  /**
   * @return int
   */
  public function getAuthproxyPoolerCount()
  {
    return $this->authproxyPoolerCount;
  }
  /**
   * Optional. The scaling type of the AuthProxy pooler.
   *
   * Accepted values: POOLER_SCALING_TYPE_UNSPECIFIED, POOLER_NONE,
   * POOLER_MACHINE_SIZED, POOLER_MANUAL_OVERRIDE
   *
   * @param self::AUTHPROXY_POOLER_SCALING_TYPE_* $authproxyPoolerScalingType
   */
  public function setAuthproxyPoolerScalingType($authproxyPoolerScalingType)
  {
    $this->authproxyPoolerScalingType = $authproxyPoolerScalingType;
  }
  /**
   * @return self::AUTHPROXY_POOLER_SCALING_TYPE_*
   */
  public function getAuthproxyPoolerScalingType()
  {
    return $this->authproxyPoolerScalingType;
  }
  /**
   * Optional. Whether to enable Managed Connection Pool (MCP).
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Optional. Connection Pool flags, as a list of "key": "value" pairs.
   *
   * @param string[] $flags
   */
  public function setFlags($flags)
  {
    $this->flags = $flags;
  }
  /**
   * @return string[]
   */
  public function getFlags()
  {
    return $this->flags;
  }
  /**
   * Output only. The number of running poolers per instance.
   *
   * @param int $poolerCount
   */
  public function setPoolerCount($poolerCount)
  {
    $this->poolerCount = $poolerCount;
  }
  /**
   * @return int
   */
  public function getPoolerCount()
  {
    return $this->poolerCount;
  }
  /**
   * Optional. The scaling type of the regular pooler.
   *
   * Accepted values: POOLER_SCALING_TYPE_UNSPECIFIED, POOLER_NONE,
   * POOLER_MACHINE_SIZED, POOLER_MANUAL_OVERRIDE
   *
   * @param self::POOLER_SCALING_TYPE_* $poolerScalingType
   */
  public function setPoolerScalingType($poolerScalingType)
  {
    $this->poolerScalingType = $poolerScalingType;
  }
  /**
   * @return self::POOLER_SCALING_TYPE_*
   */
  public function getPoolerScalingType()
  {
    return $this->poolerScalingType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectionPoolConfig::class, 'Google_Service_CloudAlloyDBAdmin_ConnectionPoolConfig');
