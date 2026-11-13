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

namespace Google\Service\Appengine;

class VpcNetworkInterface extends \Google\Collection
{
  protected $collection_key = 'tags';
  /**
   * Optional. The VPC network that the App Engine resource will be able to send
   * traffic to. At least one of network or subnetwork must be specified. If
   * both network and subnetwork are specified, the given VPC subnetwork must
   * belong to the given VPC network. If network is not specified, it will be
   * looked up from the subnetwork. Could be either a short name or a full path.
   * e.g. {VPC_NETWORK} or
   * projects/{HOST_PROJECT_ID}/global/networks/{VPC_NETWORK}
   *
   * @var string
   */
  public $network;
  /**
   * Optional. The VPC subnetwork that the App Engine resource will get IPs
   * from. At least one of network or subnetwork must be specified. If both
   * network and subnetwork are specified, the given VPC subnetwork must belong
   * to the given VPC network. If subnetwork is not specified, the subnetwork
   * with the same name with the network will be used. Could be either a short
   * name or a full path. e.g. {SUBNET_NAME} or
   * projects/{HOST_PROJECT_ID}/regions/{REGION}/subnetworks/{SUBNET_NAME}
   *
   * @var string
   */
  public $subnet;
  /**
   * Optional. The network tags that will be applied to this App Engine
   * resource.
   *
   * @var string[]
   */
  public $tags;

  /**
   * Optional. The VPC network that the App Engine resource will be able to send
   * traffic to. At least one of network or subnetwork must be specified. If
   * both network and subnetwork are specified, the given VPC subnetwork must
   * belong to the given VPC network. If network is not specified, it will be
   * looked up from the subnetwork. Could be either a short name or a full path.
   * e.g. {VPC_NETWORK} or
   * projects/{HOST_PROJECT_ID}/global/networks/{VPC_NETWORK}
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Optional. The VPC subnetwork that the App Engine resource will get IPs
   * from. At least one of network or subnetwork must be specified. If both
   * network and subnetwork are specified, the given VPC subnetwork must belong
   * to the given VPC network. If subnetwork is not specified, the subnetwork
   * with the same name with the network will be used. Could be either a short
   * name or a full path. e.g. {SUBNET_NAME} or
   * projects/{HOST_PROJECT_ID}/regions/{REGION}/subnetworks/{SUBNET_NAME}
   *
   * @param string $subnet
   */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /**
   * @return string
   */
  public function getSubnet()
  {
    return $this->subnet;
  }
  /**
   * Optional. The network tags that will be applied to this App Engine
   * resource.
   *
   * @param string[] $tags
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return string[]
   */
  public function getTags()
  {
    return $this->tags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpcNetworkInterface::class, 'Google_Service_Appengine_VpcNetworkInterface');
