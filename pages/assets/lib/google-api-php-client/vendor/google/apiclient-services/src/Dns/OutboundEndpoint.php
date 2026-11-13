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

namespace Google\Service\Dns;

class OutboundEndpoint extends \Google\Model
{
  /**
   * Optional. Annotations as key value pairs
   *
   * @var string[]
   */
  public $annotations;
  /**
   * Output only. [Output only] Create time stamp
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User provided description.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Immutable. User provided IP address to use for outbound DNS
   * forwarding. This address must be a free address on the subnetwork. If
   * omitted, a free IP address from the subnetwork is automatically allocated.
   *
   * @var string
   */
  public $endpointIp;
  /**
   * Optional. Labels as key value pairs
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The resource name of the OutboundEndpoint. Format: `projects/{p
   * roject}/locations/{location}/outboundEndpoints/{outboundEndpoint}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. Immutable. The VPC network containing the outbound endpoint,
   * specified as full path.
   *
   * @var string
   */
  public $network;
  /**
   * Required. Immutable. The subnetwork holding the endpoint_ip, specified as
   * full path.
   *
   * @var string
   */
  public $subnetwork;
  /**
   * Optional. Tag bindings as key value pairs
   *
   * @var string[]
   */
  public $tags;
  /**
   * Output only. [Output only] Update time stamp
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Annotations as key value pairs
   *
   * @param string[] $annotations
   */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return string[]
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * Output only. [Output only] Create time stamp
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
   * Optional. User provided description.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. Immutable. User provided IP address to use for outbound DNS
   * forwarding. This address must be a free address on the subnetwork. If
   * omitted, a free IP address from the subnetwork is automatically allocated.
   *
   * @param string $endpointIp
   */
  public function setEndpointIp($endpointIp)
  {
    $this->endpointIp = $endpointIp;
  }
  /**
   * @return string
   */
  public function getEndpointIp()
  {
    return $this->endpointIp;
  }
  /**
   * Optional. Labels as key value pairs
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
   * Identifier. The resource name of the OutboundEndpoint. Format: `projects/{p
   * roject}/locations/{location}/outboundEndpoints/{outboundEndpoint}`
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
   * Required. Immutable. The VPC network containing the outbound endpoint,
   * specified as full path.
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
   * Required. Immutable. The subnetwork holding the endpoint_ip, specified as
   * full path.
   *
   * @param string $subnetwork
   */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /**
   * @return string
   */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
  /**
   * Optional. Tag bindings as key value pairs
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
  /**
   * Output only. [Output only] Update time stamp
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutboundEndpoint::class, 'Google_Service_Dns_OutboundEndpoint');
