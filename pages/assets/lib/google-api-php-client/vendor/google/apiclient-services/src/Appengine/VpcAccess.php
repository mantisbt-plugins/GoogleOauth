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

class VpcAccess extends \Google\Collection
{
  /**
   * No value set; apply default behavior
   */
  public const VPC_EGRESS_VPC_EGRESS_UNSPECIFIED = 'VPC_EGRESS_UNSPECIFIED';
  /**
   * Force all traffic to egress through the NetworkInterface (and configured
   * VPC Network)
   */
  public const VPC_EGRESS_ALL_TRAFFIC = 'ALL_TRAFFIC';
  /**
   * Force all Private IP Space traffic to egress through NetworkInterface (and
   * configured VPC Network)
   */
  public const VPC_EGRESS_PRIVATE_IP_RANGES = 'PRIVATE_IP_RANGES';
  protected $collection_key = 'networkInterfaces';
  protected $networkInterfacesType = VpcNetworkInterface::class;
  protected $networkInterfacesDataType = 'array';
  /**
   * The traffic egress setting for the VPC network interface, controlling what
   * traffic is diverted through it.
   *
   * @var string
   */
  public $vpcEgress;

  /**
   * The Direct VPC configuration. Currently only single network interface is
   * supported.
   *
   * @param VpcNetworkInterface[] $networkInterfaces
   */
  public function setNetworkInterfaces($networkInterfaces)
  {
    $this->networkInterfaces = $networkInterfaces;
  }
  /**
   * @return VpcNetworkInterface[]
   */
  public function getNetworkInterfaces()
  {
    return $this->networkInterfaces;
  }
  /**
   * The traffic egress setting for the VPC network interface, controlling what
   * traffic is diverted through it.
   *
   * Accepted values: VPC_EGRESS_UNSPECIFIED, ALL_TRAFFIC, PRIVATE_IP_RANGES
   *
   * @param self::VPC_EGRESS_* $vpcEgress
   */
  public function setVpcEgress($vpcEgress)
  {
    $this->vpcEgress = $vpcEgress;
  }
  /**
   * @return self::VPC_EGRESS_*
   */
  public function getVpcEgress()
  {
    return $this->vpcEgress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpcAccess::class, 'Google_Service_Appengine_VpcAccess');
