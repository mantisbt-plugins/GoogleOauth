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

class BigLakeMetastoreMigrationConfig extends \Google\Model
{
  /**
   * The conflict policy is unspecified.
   */
  public const CONFLICT_POLICY_CONFLICT_POLICY_UNSPECIFIED = 'CONFLICT_POLICY_UNSPECIFIED';
  /**
   * Skip migrating resources that already exist in the target catalog.
   */
  public const CONFLICT_POLICY_SKIP = 'SKIP';
  /**
   * Update resources that already exist in the target catalog.
   */
  public const CONFLICT_POLICY_OVERWRITE = 'OVERWRITE';
  /**
   * The migration mode is unspecified.
   */
  public const MODE_MIGRATION_MODE_UNSPECIFIED = 'MIGRATION_MODE_UNSPECIFIED';
  /**
   * Performs the metadata migration of requested resources. The migration
   * completes once the backfill is finished.
   */
  public const MODE_BACKFILL = 'BACKFILL';
  protected $backfillStatusType = BackfillStatus::class;
  protected $backfillStatusDataType = '';
  /**
   * Optional. The policy to handle conflicts when migrating resources, defaults
   * to SKIP if not specified.
   *
   * @var string
   */
  public $conflictPolicy;
  /**
   * Optional. If true, performs discovery of requested resources and analysis
   * against the target catalog to come up with a plan for each resource (e.g.
   * Create, Update, Skip, etc.). No metadata is actually migrated.
   *
   * @var bool
   */
  public $dryRun;
  protected $hiveConfigType = HiveConfig::class;
  protected $hiveConfigDataType = '';
  protected $icebergConfigType = IcebergConfig::class;
  protected $icebergConfigDataType = '';
  /**
   * Required. Defines the behavior of the migration execution.
   *
   * @var string
   */
  public $mode;
  /**
   * Optional. The Cloud Storage path where the backfill / dry run report should
   * be written. If not provided, the report will be generated in the service's
   * artifacts bucket. Format: "gs://path/to/folder"
   *
   * @var string
   */
  public $reportPath;

  /**
   * Output only.
   *
   * @param BackfillStatus $backfillStatus
   */
  public function setBackfillStatus(BackfillStatus $backfillStatus)
  {
    $this->backfillStatus = $backfillStatus;
  }
  /**
   * @return BackfillStatus
   */
  public function getBackfillStatus()
  {
    return $this->backfillStatus;
  }
  /**
   * Optional. The policy to handle conflicts when migrating resources, defaults
   * to SKIP if not specified.
   *
   * Accepted values: CONFLICT_POLICY_UNSPECIFIED, SKIP, OVERWRITE
   *
   * @param self::CONFLICT_POLICY_* $conflictPolicy
   */
  public function setConflictPolicy($conflictPolicy)
  {
    $this->conflictPolicy = $conflictPolicy;
  }
  /**
   * @return self::CONFLICT_POLICY_*
   */
  public function getConflictPolicy()
  {
    return $this->conflictPolicy;
  }
  /**
   * Optional. If true, performs discovery of requested resources and analysis
   * against the target catalog to come up with a plan for each resource (e.g.
   * Create, Update, Skip, etc.). No metadata is actually migrated.
   *
   * @param bool $dryRun
   */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /**
   * @return bool
   */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /**
   * Optional. At least one of hive_config or iceberg_config must be provided,
   * otherwise, a validation error will be thrown. If only one is provided, the
   * service only migrates tables of that specific type. If both are provided,
   * both Hive and Iceberg tables will be migrated.Configuration for migrating
   * Hive tables to a BigLake Hive catalog.
   *
   * @param HiveConfig $hiveConfig
   */
  public function setHiveConfig(HiveConfig $hiveConfig)
  {
    $this->hiveConfig = $hiveConfig;
  }
  /**
   * @return HiveConfig
   */
  public function getHiveConfig()
  {
    return $this->hiveConfig;
  }
  /**
   * Optional. Configuration for migrating Iceberg tables to a BigLake Iceberg
   * REST catalog.
   *
   * @param IcebergConfig $icebergConfig
   */
  public function setIcebergConfig(IcebergConfig $icebergConfig)
  {
    $this->icebergConfig = $icebergConfig;
  }
  /**
   * @return IcebergConfig
   */
  public function getIcebergConfig()
  {
    return $this->icebergConfig;
  }
  /**
   * Required. Defines the behavior of the migration execution.
   *
   * Accepted values: MIGRATION_MODE_UNSPECIFIED, BACKFILL
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * Optional. The Cloud Storage path where the backfill / dry run report should
   * be written. If not provided, the report will be generated in the service's
   * artifacts bucket. Format: "gs://path/to/folder"
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigLakeMetastoreMigrationConfig::class, 'Google_Service_DataprocMetastore_BigLakeMetastoreMigrationConfig');
