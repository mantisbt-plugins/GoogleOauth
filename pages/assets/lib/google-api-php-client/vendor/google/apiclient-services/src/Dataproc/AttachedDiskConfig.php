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

class AttachedDiskConfig extends \Google\Model
{
  /**
   * Disk type is not specified.
   */
  public const DISK_TYPE_DISK_TYPE_UNSPECIFIED = 'DISK_TYPE_UNSPECIFIED';
  /**
   * Hyperdisk Balanced.
   */
  public const DISK_TYPE_HYPERDISK_BALANCED = 'HYPERDISK_BALANCED';
  /**
   * Hyperdisk Extreme.
   */
  public const DISK_TYPE_HYPERDISK_EXTREME = 'HYPERDISK_EXTREME';
  /**
   * Hyperdisk ML.
   */
  public const DISK_TYPE_HYPERDISK_ML = 'HYPERDISK_ML';
  /**
   * Hyperdisk Throughput.
   */
  public const DISK_TYPE_HYPERDISK_THROUGHPUT = 'HYPERDISK_THROUGHPUT';
  /**
   * Optional. Disk size in GB.
   *
   * @var int
   */
  public $diskSizeGb;
  /**
   * Optional. Deprecated: Use type instead.
   *
   * @deprecated
   * @var string
   */
  public $diskType;
  /**
   * Optional. Indicates how many IOPS to provision for the attached disk. This
   * sets the number of I/O operations per second that the disk can handle. See
   * https://cloud.google.com/compute/docs/disks/hyperdisks#hyperdisk-features
   *
   * @var string
   */
  public $provisionedIops;
  /**
   * Optional. Indicates how much throughput to provision for the attached disk.
   * This sets the number of throughput mb per second that the disk can handle.
   * See https://cloud.google.com/compute/docs/disks/hyperdisks#hyperdisk-
   * features
   *
   * @var string
   */
  public $provisionedThroughput;
  /**
   * Optional. Attached disk type. Currently only supports Hyperdisks. See
   * https://cloud.google.com/compute/docs/disks/hyperdisks. Note: Hyperdisk
   * Balanced High Availability is not supported.Allowed values are: hyperdisk-
   * balanced hyperdisk-extreme hyperdisk-ml hyperdisk-throughput
   *
   * @var string
   */
  public $type;

  /**
   * Optional. Disk size in GB.
   *
   * @param int $diskSizeGb
   */
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  /**
   * @return int
   */
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  /**
   * Optional. Deprecated: Use type instead.
   *
   * Accepted values: DISK_TYPE_UNSPECIFIED, HYPERDISK_BALANCED,
   * HYPERDISK_EXTREME, HYPERDISK_ML, HYPERDISK_THROUGHPUT
   *
   * @deprecated
   * @param self::DISK_TYPE_* $diskType
   */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /**
   * @deprecated
   * @return self::DISK_TYPE_*
   */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /**
   * Optional. Indicates how many IOPS to provision for the attached disk. This
   * sets the number of I/O operations per second that the disk can handle. See
   * https://cloud.google.com/compute/docs/disks/hyperdisks#hyperdisk-features
   *
   * @param string $provisionedIops
   */
  public function setProvisionedIops($provisionedIops)
  {
    $this->provisionedIops = $provisionedIops;
  }
  /**
   * @return string
   */
  public function getProvisionedIops()
  {
    return $this->provisionedIops;
  }
  /**
   * Optional. Indicates how much throughput to provision for the attached disk.
   * This sets the number of throughput mb per second that the disk can handle.
   * See https://cloud.google.com/compute/docs/disks/hyperdisks#hyperdisk-
   * features
   *
   * @param string $provisionedThroughput
   */
  public function setProvisionedThroughput($provisionedThroughput)
  {
    $this->provisionedThroughput = $provisionedThroughput;
  }
  /**
   * @return string
   */
  public function getProvisionedThroughput()
  {
    return $this->provisionedThroughput;
  }
  /**
   * Optional. Attached disk type. Currently only supports Hyperdisks. See
   * https://cloud.google.com/compute/docs/disks/hyperdisks. Note: Hyperdisk
   * Balanced High Availability is not supported.Allowed values are: hyperdisk-
   * balanced hyperdisk-extreme hyperdisk-ml hyperdisk-throughput
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AttachedDiskConfig::class, 'Google_Service_Dataproc_AttachedDiskConfig');
