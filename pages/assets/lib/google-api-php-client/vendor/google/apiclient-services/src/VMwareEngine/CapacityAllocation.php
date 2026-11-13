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

namespace Google\Service\VMwareEngine;

class CapacityAllocation extends \Google\Collection
{
  protected $collection_key = 'privateClouds';
  /**
   * Output only. The allocated capacity for the capacity allocation.
   *
   * @var int
   */
  public $allocatedCapacityCount;
  /**
   * Output only. The consumed capacity for the capacity allocation.
   *
   * @var int
   */
  public $consumedCapacityCount;
  /**
   * Output only. The machine family of the capacity allocation.
   *
   * @var string
   */
  public $machineFamily;
  /**
   * Output only. Identifier. The resource name of the capacity allocation. The
   * last segment of the name is the placement group name. For example:
   * `projects/my-project/locations/us-central1-a/capacityAllocations/pg-123`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The private cloud names using the capacity allocation.
   *
   * @var string[]
   */
  public $privateClouds;

  /**
   * Output only. The allocated capacity for the capacity allocation.
   *
   * @param int $allocatedCapacityCount
   */
  public function setAllocatedCapacityCount($allocatedCapacityCount)
  {
    $this->allocatedCapacityCount = $allocatedCapacityCount;
  }
  /**
   * @return int
   */
  public function getAllocatedCapacityCount()
  {
    return $this->allocatedCapacityCount;
  }
  /**
   * Output only. The consumed capacity for the capacity allocation.
   *
   * @param int $consumedCapacityCount
   */
  public function setConsumedCapacityCount($consumedCapacityCount)
  {
    $this->consumedCapacityCount = $consumedCapacityCount;
  }
  /**
   * @return int
   */
  public function getConsumedCapacityCount()
  {
    return $this->consumedCapacityCount;
  }
  /**
   * Output only. The machine family of the capacity allocation.
   *
   * @param string $machineFamily
   */
  public function setMachineFamily($machineFamily)
  {
    $this->machineFamily = $machineFamily;
  }
  /**
   * @return string
   */
  public function getMachineFamily()
  {
    return $this->machineFamily;
  }
  /**
   * Output only. Identifier. The resource name of the capacity allocation. The
   * last segment of the name is the placement group name. For example:
   * `projects/my-project/locations/us-central1-a/capacityAllocations/pg-123`
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
   * Output only. The private cloud names using the capacity allocation.
   *
   * @param string[] $privateClouds
   */
  public function setPrivateClouds($privateClouds)
  {
    $this->privateClouds = $privateClouds;
  }
  /**
   * @return string[]
   */
  public function getPrivateClouds()
  {
    return $this->privateClouds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAllocation::class, 'Google_Service_VMwareEngine_CapacityAllocation');
