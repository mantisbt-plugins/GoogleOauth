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

class TableReport extends \Google\Model
{
  protected $executionPlanType = ExecutionPlan::class;
  protected $executionPlanDataType = '';
  protected $executionResultType = ExecutionResult::class;
  protected $executionResultDataType = '';
  /**
   * The total number of partitions identified at the source during discovery.
   * This is only relevant for Hive Partitioned tables.
   *
   * @var string
   */
  public $partitionDiscoveredCount;
  protected $partitionReportType = PartitionReport::class;
  protected $partitionReportDataType = '';
  /**
   * The name of the table.
   *
   * @var string
   */
  public $table;

  /**
   * The discovered intent for the table (what we found and what we planned).
   *
   * @param ExecutionPlan $executionPlan
   */
  public function setExecutionPlan(ExecutionPlan $executionPlan)
  {
    $this->executionPlan = $executionPlan;
  }
  /**
   * @return ExecutionPlan
   */
  public function getExecutionPlan()
  {
    return $this->executionPlan;
  }
  /**
   * The actual outcome of the table migration.
   *
   * @param ExecutionResult $executionResult
   */
  public function setExecutionResult(ExecutionResult $executionResult)
  {
    $this->executionResult = $executionResult;
  }
  /**
   * @return ExecutionResult
   */
  public function getExecutionResult()
  {
    return $this->executionResult;
  }
  /**
   * The total number of partitions identified at the source during discovery.
   * This is only relevant for Hive Partitioned tables.
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
   * Report containing the results of partition migration for this table. This
   * is only relevant for Hive Partitioned tables.
   *
   * @param PartitionReport $partitionReport
   */
  public function setPartitionReport(PartitionReport $partitionReport)
  {
    $this->partitionReport = $partitionReport;
  }
  /**
   * @return PartitionReport
   */
  public function getPartitionReport()
  {
    return $this->partitionReport;
  }
  /**
   * The name of the table.
   *
   * @param string $table
   */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /**
   * @return string
   */
  public function getTable()
  {
    return $this->table;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableReport::class, 'Google_Service_DataprocMetastore_TableReport');
