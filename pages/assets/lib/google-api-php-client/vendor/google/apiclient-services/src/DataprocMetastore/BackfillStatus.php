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

class BackfillStatus extends \Google\Model
{
  /**
   * The backfill state is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Waiting to start.
   */
  public const STATE_PENDING = 'PENDING';
  /**
   * Backfill in progress.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * Backfill complete, report is available
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Backfill failed; check report for details
   */
  public const STATE_FAILED = 'FAILED';
  protected $migrationSummaryType = MigrationSummary::class;
  protected $migrationSummaryDataType = '';
  /**
   * Output only. The Cloud Storage path where the backfill or dry run report is
   * written. Format: "gs://path-to-report".
   *
   * @var string
   */
  public $reportPath;
  /**
   * Output only. The current state of the backfill (or dry run).
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Summary of the migration results. This is populated after the
   * backfill or dry run is finished.
   *
   * @param MigrationSummary $migrationSummary
   */
  public function setMigrationSummary(MigrationSummary $migrationSummary)
  {
    $this->migrationSummary = $migrationSummary;
  }
  /**
   * @return MigrationSummary
   */
  public function getMigrationSummary()
  {
    return $this->migrationSummary;
  }
  /**
   * Output only. The Cloud Storage path where the backfill or dry run report is
   * written. Format: "gs://path-to-report".
   *
   * @param string $reportPath
   */
  public function setReportPath($reportPath)
  {
    $this->reportPath = $reportPath;
  }
  /**
   * @return string
   */
  public function getReportPath()
  {
    return $this->reportPath;
  }
  /**
   * Output only. The current state of the backfill (or dry run).
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING, RUNNING, SUCCEEDED, FAILED
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
class_alias(BackfillStatus::class, 'Google_Service_DataprocMetastore_BackfillStatus');
