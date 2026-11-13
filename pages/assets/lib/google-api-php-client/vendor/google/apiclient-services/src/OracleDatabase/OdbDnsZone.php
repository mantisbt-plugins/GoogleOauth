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

namespace Google\Service\OracleDatabase;

class OdbDnsZone extends \Google\Model
{
  /**
   * Default unspecified value.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Indicates that the resource is in a provisioning state.
   */
  public const STATE_PROVISIONING = 'PROVISIONING';
  /**
   * Indicates that the resource is in an available state.
   */
  public const STATE_AVAILABLE = 'AVAILABLE';
  /**
   * Indicates that the resource is available but inactive.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * Indicates that the resource is in a terminating state.
   */
  public const STATE_TERMINATING = 'TERMINATING';
  /**
   * Indicates that the resource is in a failed state.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The date and time that the OdbDnsZone was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Immutable. The DNS suffix for the zone. Ex: abc.example.com.
   *
   * @var string
   */
  public $domain;
  /**
   * Optional. Labels or tags associated with the resource.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The name of the OdbDnsZone resource in the following format: pr
   * ojects/{project}/locations/{location}/odbNetworks/{odb_network}/odbDnsZones
   * /{odb_dns_zone}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. State of the OdbDnsZone.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The date and time that the OdbDnsZone was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. Immutable. The DNS suffix for the zone. Ex: abc.example.com.
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * Optional. Labels or tags associated with the resource.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. The name of the OdbDnsZone resource in the following format: pr
   * ojects/{project}/locations/{location}/odbNetworks/{odb_network}/odbDnsZones
   * /{odb_dns_zone}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. State of the OdbDnsZone.
   *
   * Accepted values: STATE_UNSPECIFIED, PROVISIONING, AVAILABLE, INACTIVE,
   * TERMINATING, FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OdbDnsZone::class, 'Google_Service_OracleDatabase_OdbDnsZone');
