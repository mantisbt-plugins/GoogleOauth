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

namespace Google\Service\ManagedKafka;

class PublicClusterDetails extends \Google\Collection
{
  protected $collection_key = 'externalIpAddresses';
  /**
   * Output only. DNS discovery records that resolve to all of the external IP
   * addresses associated with the public cluster. Used for configuring DNS-
   * based egress firewall rules to a public cluster. discovery_dns_record can
   * be added to this list if the cluster is scaled up. Must configure DNS based
   * firewalls to resolve ALL DNS records in this list as large clusters have IP
   * addresses sharded across records. Each record contains a maximum of 30 IP
   * addresses.
   *
   * @var string[]
   */
  public $discoveryDnsRecords;
  /**
   * Output only. All of the external IP addresses associated with the public
   * cluster used for configuring egress firewall rules to a public cluster.
   * external_ip_address can be added to this list if the cluster is scaled up.
   *
   * @var string[]
   */
  public $externalIpAddresses;

  /**
   * Output only. DNS discovery records that resolve to all of the external IP
   * addresses associated with the public cluster. Used for configuring DNS-
   * based egress firewall rules to a public cluster. discovery_dns_record can
   * be added to this list if the cluster is scaled up. Must configure DNS based
   * firewalls to resolve ALL DNS records in this list as large clusters have IP
   * addresses sharded across records. Each record contains a maximum of 30 IP
   * addresses.
   *
   * @param string[] $discoveryDnsRecords
   */
  public function setDiscoveryDnsRecords($discoveryDnsRecords)
  {
    $this->discoveryDnsRecords = $discoveryDnsRecords;
  }
  /**
   * @return string[]
   */
  public function getDiscoveryDnsRecords()
  {
    return $this->discoveryDnsRecords;
  }
  /**
   * Output only. All of the external IP addresses associated with the public
   * cluster used for configuring egress firewall rules to a public cluster.
   * external_ip_address can be added to this list if the cluster is scaled up.
   *
   * @param string[] $externalIpAddresses
   */
  public function setExternalIpAddresses($externalIpAddresses)
  {
    $this->externalIpAddresses = $externalIpAddresses;
  }
  /**
   * @return string[]
   */
  public function getExternalIpAddresses()
  {
    return $this->externalIpAddresses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublicClusterDetails::class, 'Google_Service_ManagedKafka_PublicClusterDetails');
