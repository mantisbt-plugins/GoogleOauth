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

namespace Google\Service\CloudNumberRegistry;

class DiscoveredRange extends \Google\Collection
{
  protected $collection_key = 'attributes';
  protected $attributesType = Attribute::class;
  protected $attributesDataType = 'array';
  /**
   * Output only. If true, allows child DiscoveredRanges of this DiscoveredRange
   * to overlap with each other.
   *
   * @var bool
   */
  public $childCidrOverlapAllowed;
  /**
   * Output only. The time at which the DiscoveredRange was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Description of the DiscoveredRange.
   *
   * @var string
   */
  public $description;
  protected $discoveryMetadataType = DiscoveryMetadata::class;
  protected $discoveryMetadataDataType = '';
  /**
   * Optional. The IPv4 CIDR range of the DiscoveredRange.
   *
   * @var string
   */
  public $ipv4CidrRange;
  /**
   * Optional. The IPv6 CIDR range of the DiscoveredRange.
   *
   * @var string
   */
  public $ipv6CidrRange;
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Required. Identifier. The resource name of the DiscoveredRange, in the
   * format `projects/{project}/locations/{location}/discoveredRanges/{discovere
   * d_range}`.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The resource name of the parent DiscoveredRange, in the format `p
   * rojects/{project}/locations/{location}/discoveredRanges/{discovered_range}`
   * .
   *
   * @var string
   */
  public $parentRange;
  /**
   * Optional. The Realm of the DiscoveredRange.
   *
   * @var string
   */
  public $realm;
  /**
   * Output only. The RegistryBook of the DiscoveredRange.
   *
   * @var string
   */
  public $registryBook;
  /**
   * Output only. The time at which the DiscoveredRange was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. The attributes of the DiscoveredRange.
   *
   * @param Attribute[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return Attribute[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * Output only. If true, allows child DiscoveredRanges of this DiscoveredRange
   * to overlap with each other.
   *
   * @param bool $childCidrOverlapAllowed
   */
  public function setChildCidrOverlapAllowed($childCidrOverlapAllowed)
  {
    $this->childCidrOverlapAllowed = $childCidrOverlapAllowed;
  }
  /**
   * @return bool
   */
  public function getChildCidrOverlapAllowed()
  {
    return $this->childCidrOverlapAllowed;
  }
  /**
   * Output only. The time at which the DiscoveredRange was created.
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
   * Optional. Description of the DiscoveredRange.
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
   * Output only. Owner metadata for this DiscoveredRange. A unique set of
   * metadata is associated with each DiscoveredRange. If an IP range is shared
   * by multiple resources (e.g., an Address resource and an Instance resource,
   * or multiple ForwardingRules),separate DiscoveredRanges are created, each
   * with a distinct owner. This ensures each DiscoveredRange has its own unique
   * set of attributes, labels, create time and update time.
   *
   * @param DiscoveryMetadata $discoveryMetadata
   */
  public function setDiscoveryMetadata(DiscoveryMetadata $discoveryMetadata)
  {
    $this->discoveryMetadata = $discoveryMetadata;
  }
  /**
   * @return DiscoveryMetadata
   */
  public function getDiscoveryMetadata()
  {
    return $this->discoveryMetadata;
  }
  /**
   * Optional. The IPv4 CIDR range of the DiscoveredRange.
   *
   * @param string $ipv4CidrRange
   */
  public function setIpv4CidrRange($ipv4CidrRange)
  {
    $this->ipv4CidrRange = $ipv4CidrRange;
  }
  /**
   * @return string
   */
  public function getIpv4CidrRange()
  {
    return $this->ipv4CidrRange;
  }
  /**
   * Optional. The IPv6 CIDR range of the DiscoveredRange.
   *
   * @param string $ipv6CidrRange
   */
  public function setIpv6CidrRange($ipv6CidrRange)
  {
    $this->ipv6CidrRange = $ipv6CidrRange;
  }
  /**
   * @return string
   */
  public function getIpv6CidrRange()
  {
    return $this->ipv6CidrRange;
  }
  /**
   * Optional. User-defined labels.
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
   * Required. Identifier. The resource name of the DiscoveredRange, in the
   * format `projects/{project}/locations/{location}/discoveredRanges/{discovere
   * d_range}`.
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
   * Optional. The resource name of the parent DiscoveredRange, in the format `p
   * rojects/{project}/locations/{location}/discoveredRanges/{discovered_range}`
   * .
   *
   * @param string $parentRange
   */
  public function setParentRange($parentRange)
  {
    $this->parentRange = $parentRange;
  }
  /**
   * @return string
   */
  public function getParentRange()
  {
    return $this->parentRange;
  }
  /**
   * Optional. The Realm of the DiscoveredRange.
   *
   * @param string $realm
   */
  public function setRealm($realm)
  {
    $this->realm = $realm;
  }
  /**
   * @return string
   */
  public function getRealm()
  {
    return $this->realm;
  }
  /**
   * Output only. The RegistryBook of the DiscoveredRange.
   *
   * @param string $registryBook
   */
  public function setRegistryBook($registryBook)
  {
    $this->registryBook = $registryBook;
  }
  /**
   * @return string
   */
  public function getRegistryBook()
  {
    return $this->registryBook;
  }
  /**
   * Output only. The time at which the DiscoveredRange was last updated.
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
class_alias(DiscoveredRange::class, 'Google_Service_CloudNumberRegistry_DiscoveredRange');
