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

class DatabaseSummary extends \Google\Model
{
  /**
   * The action is unspecified.
   */
  public const PLAN_ACTION_ACTION_UNSPECIFIED = 'ACTION_UNSPECIFIED';
  /**
   * Resource missing; will be created.
   */
  public const PLAN_ACTION_CREATE = 'CREATE';
  /**
   * Resource exists at the target, but differs from the source; will be
   * updated.
   */
  public const PLAN_ACTION_UPDATE = 'UPDATE';
  /**
   * Resource exists at the target; no changes will be made.
   */
  public const PLAN_ACTION_SKIP = 'SKIP';
  /**
   * Resource cannot be migrated due to a dependency failure (e.g., parent
   * resource missing).
   */
  public const PLAN_ACTION_DEPENDENCY_FAILURE = 'DEPENDENCY_FAILURE';
  /**
   * Resource cannot be migrated due to an error during discovery.
   */
  public const PLAN_ACTION_ERROR = 'ERROR';
  /**
   * The state is unspecified.
   */
  public const RESULT_STATUS_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The resource was migrated successfully.
   */
  public const RESULT_STATUS_SUCCEEDED = 'SUCCEEDED';
  /**
   * The resource failed to migrate.
   */
  public const RESULT_STATUS_FAILED = 'FAILED';
  /**
   * The resource was skipped and will not be migrated.
   */
  public const RESULT_STATUS_SKIPPED = 'SKIPPED';
  /**
   * Output only. The name of the database.
   *
   * @var string
   */
  public $database;
  /**
   * Output only. The migration plan action for the database.
   *
   * @var string
   */
  public $planAction;
  /**
   * Output only. The migration result status for the database. This is only set
   * if the migration is not a dry run.
   *
   * @var string
   */
  public $resultStatus;
  protected $tableSummaryType = TableSummary::class;
  protected $tableSummaryDataType = '';

  /**
   * Output only. The name of the database.
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
   * Output only. The migration plan action for the database.
   *
   * Accepted values: ACTION_UNSPECIFIED, CREATE, UPDATE, SKIP,
   * DEPENDENCY_FAILURE, ERROR
   *
   * @param self::PLAN_ACTION_* $planAction
   */
  public function setPlanAction($planAction)
  {
    $this->planAction = $planAction;
  }
  /**
   * @return self::PLAN_ACTION_*
   */
  public function getPlanAction()
  {
    return $this->planAction;
  }
  /**
   * Output only. The migration result status for the database. This is only set
   * if the migration is not a dry run.
   *
   * Accepted values: STATE_UNSPECIFIED, SUCCEEDED, FAILED, SKIPPED
   *
   * @param self::RESULT_STATUS_* $resultStatus
   */
  public function setResultStatus($resultStatus)
  {
    $this->resultStatus = $resultStatus;
  }
  /**
   * @return self::RESULT_STATUS_*
   */
  public function getResultStatus()
  {
    return $this->resultStatus;
  }
  /**
   * Output only. Aggregated summary of results for all tables in the database.
   *
   * @param TableSummary $tableSummary
   */
  public function setTableSummary(TableSummary $tableSummary)
  {
    $this->tableSummary = $tableSummary;
  }
  /**
   * @return TableSummary
   */
  public function getTableSummary()
  {
    return $this->tableSummary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseSummary::class, 'Google_Service_DataprocMetastore_DatabaseSummary');
