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

namespace Google\Service\DataprocMetastore;

class PartitionReport extends \Google\Model
{
  /**
   * The state is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * All partitions migrated successfully at the target.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Some partitions migrated successfully at the target, but others failed.
   */
  public const STATE_PARTIALLY_SUCCEEDED = 'PARTIALLY_SUCCEEDED';
  /**
   * All partitions failed to migrate at the target.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The number of partitions that failed to migrate at the target.
   *
   * @var string
   */
  public $partitionFailedCount;
  /**
   * The number of partitions successfully migrated at the target.
   *
   * @var string
   */
  public $partitionSuccessCount;
  /**
   * Output only. The state of the partition migration.
   *
   * @var string
   */
  public $state;

  /**
   * The number of partitions that failed to migrate at the target.
   *
   * @param string $partitionFailedCount
   */
  public function setPartitionFailedCount($partitionFailedCount)
  {
    $this->partitionFailedCount = $partitionFailedCount;
  }
  /**
   * @return string
   */
  public function getPartitionFailedCount()
  {
    return $this->partitionFailedCount;
  }
  /**
   * The number of partitions successfully migrated at the target.
   *
   * @param string $partitionSuccessCount
   */
  public function setPartitionSuccessCount($partitionSuccessCount)
  {
    $this->partitionSuccessCount = $partitionSuccessCount;
  }
  /**
   * @return string
   */
  public function getPartitionSuccessCount()
  {
    return $this->partitionSuccessCount;
  }
  /**
   * Output only. The state of the partition migration.
   *
   * Accepted values: STATE_UNSPECIFIED, SUCCEEDED, PARTIALLY_SUCCEEDED, FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionReport::class, 'Google_Service_DataprocMetastore_PartitionReport');
