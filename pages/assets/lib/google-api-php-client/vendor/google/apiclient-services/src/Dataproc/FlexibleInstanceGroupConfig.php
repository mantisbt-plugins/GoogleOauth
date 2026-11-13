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

class FlexibleInstanceGroupConfig extends \Google\Model
{
  /**
   * Unspecified hardware class.
   */
  public const HARDWARE_CLASS_HARDWARE_CLASS_UNSPECIFIED = 'HARDWARE_CLASS_UNSPECIFIED';
  /**
   * Standard hardware class. Provides a balanced compute configuration with
   * approximately 4GB of memory per vCPU and standard disk storage
   * tiers.Candidate machine types include n4-standard, n4d-standard,
   * n2-standard, and n2d-standard (Rank 0), and c4-standard and c4d-standard
   * (Rank 1) (for requested core counts 2, 4, 8, 16, 32).Warning: The specific
   * machine families and types selected for this hardware class are subject to
   * change. Users should not take a dependency on the underlying machine type
   * selection.
   */
  public const HARDWARE_CLASS_STANDARD = 'STANDARD';
  /**
   * Performance hardware class. Provides a high-performance configuration with
   * approximately 8GB of memory per vCPU (e.g. high-memory machine types) and
   * higher-tier disk configurations (e.g. higher IOPS and throughput).Candidate
   * machine types include n4-highmem, n4d-highmem, n2-highmem, and n2d-highmem
   * (Rank 0), and c4-highmem and c4d-highmem (Rank 1) (for requested core
   * counts 2, 4, 8, 16, 32). n4, n4d, c4, and c4d use Hyperdisk Balanced with
   * provisioned storage, whereas n2 and n2d use SSD persistent disks.Warning:
   * The specific machine families and types selected for this hardware class
   * are subject to change. Users should not take a dependency on the underlying
   * machine type selection.
   */
  public const HARDWARE_CLASS_PERFORMANCE = 'PERFORMANCE';
  /**
   * Optional. The boot disk size in GB. This is a create-time specification and
   * is not currently mutable via update masks.
   *
   * @var int
   */
  public $bootDiskSizeGb;
  /**
   * Optional. The number of vCPUs per instance. Must be a power of 2 (2, 4, 8,
   * 16, 32). This is a create-time specification and is not currently mutable
   * via update masks.
   *
   * @var int
   */
  public $coreCount;
  /**
   * Optional. The hardware class of the instances. This is a create-time
   * specification and is not currently mutable via update masks.
   *
   * @var string
   */
  public $hardwareClass;
  /**
   * Optional. The number of VM instances requested.For master instances, this
   * must be 1. For worker and secondary worker instances, this represents the
   * desired capacity of the group and is mutable via cluster update operations
   * and autoscaling.
   *
   * @var int
   */
  public $numInstances;

  /**
   * Optional. The boot disk size in GB. This is a create-time specification and
   * is not currently mutable via update masks.
   *
   * @param int $bootDiskSizeGb
   */
  public function setBootDiskSizeGb($bootDiskSizeGb)
  {
    $this->bootDiskSizeGb = $bootDiskSizeGb;
  }
  /**
   * @return int
   */
  public function getBootDiskSizeGb()
  {
    return $this->bootDiskSizeGb;
  }
  /**
   * Optional. The number of vCPUs per instance. Must be a power of 2 (2, 4, 8,
   * 16, 32). This is a create-time specification and is not currently mutable
   * via update masks.
   *
   * @param int $coreCount
   */
  public function setCoreCount($coreCount)
  {
    $this->coreCount = $coreCount;
  }
  /**
   * @return int
   */
  public function getCoreCount()
  {
    return $this->coreCount;
  }
  /**
   * Optional. The hardware class of the instances. This is a create-time
   * specification and is not currently mutable via update masks.
   *
   * Accepted values: HARDWARE_CLASS_UNSPECIFIED, STANDARD, PERFORMANCE
   *
   * @param self::HARDWARE_CLASS_* $hardwareClass
   */
  public function setHardwareClass($hardwareClass)
  {
    $this->hardwareClass = $hardwareClass;
  }
  /**
   * @return self::HARDWARE_CLASS_*
   */
  public function getHardwareClass()
  {
    return $this->hardwareClass;
  }
  /**
   * Optional. The number of VM instances requested.For master instances, this
   * must be 1. For worker and secondary worker instances, this represents the
   * desired capacity of the group and is mutable via cluster update operations
   * and autoscaling.
   *
   * @param int $numInstances
   */
  public function setNumInstances($numInstances)
  {
    $this->numInstances = $numInstances;
  }
  /**
   * @return int
   */
  public function getNumInstances()
  {
    return $this->numInstances;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlexibleInstanceGroupConfig::class, 'Google_Service_Dataproc_FlexibleInstanceGroupConfig');
