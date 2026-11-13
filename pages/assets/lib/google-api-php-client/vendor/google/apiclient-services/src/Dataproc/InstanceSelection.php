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

namespace Google\Service\Dataproc;

class InstanceSelection extends \Google\Collection
{
  protected $collection_key = 'machineTypes';
  protected $diskConfigType = DiskConfig::class;
  protected $diskConfigDataType = '';
  /**
   * Optional. Full machine-type names, e.g. "n1-standard-16".
   *
   * @var string[]
   */
  public $machineTypes;
  /**
   * Optional. Preference of this instance selection. Lower number means higher
   * preference. The service will first try to create a VM based on the machine-
   * type with priority rank and fallback to next rank based on availability.
   * Machine types and instance selections with the same priority have the same
   * preference.
   *
   * @var int
   */
  public $rank;

  /**
   * Optional. Disk configuration to apply to the instances in this instance
   * selection. If specified on any entry in instanceSelectionList, then it must
   * be specified on every entry in instanceSelectionList and the
   * instanceGroupConfig must not specify any diskConfig.
   *
   * @param DiskConfig $diskConfig
   */
  public function setDiskConfig(DiskConfig $diskConfig)
  {
    $this->diskConfig = $diskConfig;
  }
  /**
   * @return DiskConfig
   */
  public function getDiskConfig()
  {
    return $this->diskConfig;
  }
  /**
   * Optional. Full machine-type names, e.g. "n1-standard-16".
   *
   * @param string[] $machineTypes
   */
  public function setMachineTypes($machineTypes)
  {
    $this->machineTypes = $machineTypes;
  }
  /**
   * @return string[]
   */
  public function getMachineTypes()
  {
    return $this->machineTypes;
  }
  /**
   * Optional. Preference of this instance selection. Lower number means higher
   * preference. The service will first try to create a VM based on the machine-
   * type with priority rank and fallback to next rank based on availability.
   * Machine types and instance selections with the same priority have the same
   * preference.
   *
   * @param int $rank
   */
  public function setRank($rank)
  {
    $this->rank = $rank;
  }
  /**
   * @return int
   */
  public function getRank()
  {
    return $this->rank;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceSelection::class, 'Google_Service_Dataproc_InstanceSelection');
