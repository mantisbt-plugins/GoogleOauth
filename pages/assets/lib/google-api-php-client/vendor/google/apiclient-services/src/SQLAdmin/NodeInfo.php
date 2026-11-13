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

namespace Google\Service\SQLAdmin;

class NodeInfo extends \Google\Collection
{
  protected $collection_key = 'ipMappings';
  /**
   * Output only. The instance connection name.
   *
   * @var string
   */
  public $connection;
  /**
   * Output only. The unique DNS name for this instance.
   *
   * @var string
   */
  public $dns;
  /**
   * Output only. The full resource name of the instance. Format:
   * projects/{project}/instances/{instance}
   *
   * @var string
   */
  public $instance;
  protected $ipMappingsType = IpMapping::class;
  protected $ipMappingsDataType = 'array';

  /**
   * Output only. The instance connection name.
   *
   * @param string $connection
   */
  public function setConnection($connection)
  {
    $this->connection = $connection;
  }
  /**
   * @return string
   */
  public function getConnection()
  {
    return $this->connection;
  }
  /**
   * Output only. The unique DNS name for this instance.
   *
   * @param string $dns
   */
  public function setDns($dns)
  {
    $this->dns = $dns;
  }
  /**
   * @return string
   */
  public function getDns()
  {
    return $this->dns;
  }
  /**
   * Output only. The full resource name of the instance. Format:
   * projects/{project}/instances/{instance}
   *
   * @param string $instance
   */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /**
   * @return string
   */
  public function getInstance()
  {
    return $this->instance;
  }
  /**
   * Output only. The list of IP addresses for this instance.
   *
   * @param IpMapping[] $ipMappings
   */
  public function setIpMappings($ipMappings)
  {
    $this->ipMappings = $ipMappings;
  }
  /**
   * @return IpMapping[]
   */
  public function getIpMappings()
  {
    return $this->ipMappings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NodeInfo::class, 'Google_Service_SQLAdmin_NodeInfo');
