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

class TableSummary extends \Google\Model
{
  /**
   * Output only. Partition migration summary across all Hive tables in the
   * database.The total number of partitions discovered at the source.
   *
   * @var string
   */
  public $partitionDiscoveredCount;
  /**
   * Output only. The total number of partitions that failed to migrate at the
   * target.
   *
   * @var string
   */
  public $partitionFailedCount;
  /**
   * Output only. The total number of partitions successfully migrated at the
   * target.
   *
   * @var string
   */
  public $partitionSuccessCount;
  /**
   * Output only. Number of tables with a specific migration plan action. The
   * key is the action name (e.g. CREATE, UPDATE, SKIP, etc.).
   *
   * @var string[]
   */
  public $planCounts;
  /**
   * Output only. Number of tables with a specific migration result status. The
   * key is the status name (e.g. SUCCEEDED, FAILED, SKIPPED, etc.). This is
   * only set if the migration is not a dry run.
   *
   * @var string[]
   */
  public $resultCounts;

  /**
   * Output only. Partition migration summary across all Hive tables in the
   * database.The total number of partitions discovered at the source.
   *
   * @param string $partitionDiscoveredCount
   */
  public function setPartitionDiscoveredCount($partitionDiscoveredCount)
  {
    $this->partitionDiscoveredCount = $partitionDiscoveredCount;
  }
  /**
   * @return string
   */
  public function getPartitionDiscoveredCount()
  {
    return $this->partitionDiscoveredCount;
  }
  /**
   * Output only. The total number of partitions that failed to migrate at the
   * target.
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
   * Output only. The total number of partitions successfully migrated at the
   * target.
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
   * Output only. Number of tables with a specific migration plan action. The
   * key is the action name (e.g. CREATE, UPDATE, SKIP, etc.).
   *
   * @param string[] $planCounts
   */
  public function setPlanCounts($planCounts)
  {
    $this->planCounts = $planCounts;
  }
  /**
   * @return string[]
   */
  public function getPlanCounts()
  {
    return $this->planCounts;
  }
  /**
   * Output only. Number of tables with a specific migration result status. The
   * key is the status name (e.g. SUCCEEDED, FAILED, SKIPPED, etc.). This is
   * only set if the migration is not a dry run.
   *
   * @param string[] $resultCounts
   */
  public function setResultCounts($resultCounts)
  {
    $this->resultCounts = $resultCounts;
  }
  /**
   * @return string[]
   */
  public function getResultCounts()
  {
    return $this->resultCounts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableSummary::class, 'Google_Service_DataprocMetastore_TableSummary');
