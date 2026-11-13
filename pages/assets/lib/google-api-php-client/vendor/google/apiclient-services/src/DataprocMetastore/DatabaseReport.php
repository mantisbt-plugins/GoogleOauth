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

class DatabaseReport extends \Google\Model
{
  /**
   * The name of the database.
   *
   * @var string
   */
  public $database;
  protected $executionPlanType = ExecutionPlan::class;
  protected $executionPlanDataType = '';
  protected $executionResultType = ExecutionResult::class;
  protected $executionResultDataType = '';
  protected $tableReportsType = TableReport::class;
  protected $tableReportsDataType = 'map';

  /**
   * The name of the database.
   *
   * @param string $database
   */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /**
   * @return string
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * The discovered intent for the database (what we found and what we planned).
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
   * The actual outcome of the database migration.
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
   * A map of table names to their respective reports.
   *
   * @param TableReport[] $tableReports
   */
  public function setTableReports($tableReports)
  {
    $this->tableReports = $tableReports;
  }
  /**
   * @return TableReport[]
   */
  public function getTableReports()
  {
    return $this->tableReports;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseReport::class, 'Google_Service_DataprocMetastore_DatabaseReport');
