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

namespace Google\Service\DatabaseMigrationService;

class ReservedPublicIpConfig extends \Google\Collection
{
  protected $collection_key = 'egressPublicIps';
  /**
   * Output only. The reserved public IPs.
   *
   * @var string[]
   */
  public $egressPublicIps;
  /**
   * Optional. Number of static public IP addresses to reserve.
   *
   * @var int
   */
  public $natIpsCount;

  /**
   * Output only. The reserved public IPs.
   *
   * @param string[] $egressPublicIps
   */
  public function setEgressPublicIps($egressPublicIps)
  {
    $this->egressPublicIps = $egressPublicIps;
  }
  /**
   * @return string[]
   */
  public function getEgressPublicIps()
  {
    return $this->egressPublicIps;
  }
  /**
   * Optional. Number of static public IP addresses to reserve.
   *
   * @param int $natIpsCount
   */
  public function setNatIpsCount($natIpsCount)
  {
    $this->natIpsCount = $natIpsCount;
  }
  /**
   * @return int
   */
  public function getNatIpsCount()
  {
    return $this->natIpsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservedPublicIpConfig::class, 'Google_Service_DatabaseMigrationService_ReservedPublicIpConfig');
