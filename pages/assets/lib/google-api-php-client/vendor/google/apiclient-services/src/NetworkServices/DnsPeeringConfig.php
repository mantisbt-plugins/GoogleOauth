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

namespace Google\Service\NetworkServices;

class DnsPeeringConfig extends \Google\Collection
{
  protected $collection_key = 'domains';
  /**
   * Optional. Deprecated: Use `domains` instead. The domain to peer.
   *
   * @deprecated
   * @var string
   */
  public $domain;
  /**
   * Optional. The domains to peer.
   *
   * @var string[]
   */
  public $domains;
  /**
   * Optional. The target network resource name for DNS peering. Format:
   * projects/{project}/global/networks/{network_id}
   *
   * @var string
   */
  public $targetNetwork;

  /**
   * Optional. Deprecated: Use `domains` instead. The domain to peer.
   *
   * @deprecated
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * Optional. The domains to peer.
   *
   * @param string[] $domains
   */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /**
   * @return string[]
   */
  public function getDomains()
  {
    return $this->domains;
  }
  /**
   * Optional. The target network resource name for DNS peering. Format:
   * projects/{project}/global/networks/{network_id}
   *
   * @param string $targetNetwork
   */
  public function setTargetNetwork($targetNetwork)
  {
    $this->targetNetwork = $targetNetwork;
  }
  /**
   * @return string
   */
  public function getTargetNetwork()
  {
    return $this->targetNetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DnsPeeringConfig::class, 'Google_Service_NetworkServices_DnsPeeringConfig');
