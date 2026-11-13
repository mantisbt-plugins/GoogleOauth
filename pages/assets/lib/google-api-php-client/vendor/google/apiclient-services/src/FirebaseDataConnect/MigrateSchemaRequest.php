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

namespace Google\Service\FirebaseDataConnect;

class MigrateSchemaRequest extends \Google\Collection
{
  /**
   * Default behavior. Evaluates to EXECUTE_AND_RECORD.
   */
  public const EXECUTION_MODE_EXECUTION_MODE_UNSPECIFIED = 'EXECUTION_MODE_UNSPECIFIED';
  /**
   * Standard execution: executes DDL statements against the database catalog
   * and records completed steps in `firebasesql.schema_migrations`.
   */
  public const EXECUTION_MODE_EXECUTE_AND_RECORD = 'EXECUTE_AND_RECORD';
  /**
   * Applies DDL statements against the database catalog without writing to the
   * ledger. Used for maintenance scripts, temporary schema objects, and the
   * internal declarative flow.
   */
  public const EXECUTION_MODE_EXECUTE_ONLY = 'EXECUTE_ONLY';
  /**
   * Records steps into `firebasesql.schema_migrations` without executing their
   * DDL statements. Used for baselining pre-existing schemas or manual out-of-
   * band changes (e.g. ledger-only).
   */
  public const EXECUTION_MODE_RECORD_ONLY = 'RECORD_ONLY';
  protected $collection_key = 'migrationSteps';
  /**
   * Optional. Execution mode controlling DDL execution and ledger recording.
   * Defaults to EXECUTE_AND_RECORD.
   *
   * @var string
   */
  public $executionMode;
  protected $migrationStepsType = MigrationStep::class;
  protected $migrationStepsDataType = 'array';
  /**
   * Optional. When true, runs preflight validation (syntax, applied-step
   * immutability, sequence ordering, CONCURRENTLY isolation, and SAVEPOINT
   * catalog checks) without committing mutations to the database.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Optional. Execution mode controlling DDL execution and ledger recording.
   * Defaults to EXECUTE_AND_RECORD.
   *
   * Accepted values: EXECUTION_MODE_UNSPECIFIED, EXECUTE_AND_RECORD,
   * EXECUTE_ONLY, RECORD_ONLY
   *
   * @param self::EXECUTION_MODE_* $executionMode
   */
  public function setExecutionMode($executionMode)
  {
    $this->executionMode = $executionMode;
  }
  /**
   * @return self::EXECUTION_MODE_*
   */
  public function getExecutionMode()
  {
    return $this->executionMode;
  }
  /**
   * Required. Ordered migration steps from `./sql/migrations/` (or a single ad-
   * hoc step). Backend compares submitted versions against
   * `firebasesql.schema_migrations`: already-applied steps are verified for SQL
   * immutability and skipped, while unapplied steps (`version >
   * MAX(applied_version)`) are executed. All unapplied transactional steps in a
   * single request execute atomically within one database transaction (BEGIN
   * ... COMMIT): either every unapplied step commits and is recorded in the
   * ledger, or the entire request rolls back. An unapplied step containing
   * CREATE INDEX CONCURRENTLY or DROP INDEX CONCURRENTLY cannot be mixed with
   * other unapplied steps and must be the sole unapplied step executed in the
   * request.
   *
   * @param MigrationStep[] $migrationSteps
   */
  public function setMigrationSteps($migrationSteps)
  {
    $this->migrationSteps = $migrationSteps;
  }
  /**
   * @return MigrationStep[]
   */
  public function getMigrationSteps()
  {
    return $this->migrationSteps;
  }
  /**
   * Optional. When true, runs preflight validation (syntax, applied-step
   * immutability, sequence ordering, CONCURRENTLY isolation, and SAVEPOINT
   * catalog checks) without committing mutations to the database.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrateSchemaRequest::class, 'Google_Service_FirebaseDataConnect_MigrateSchemaRequest');
