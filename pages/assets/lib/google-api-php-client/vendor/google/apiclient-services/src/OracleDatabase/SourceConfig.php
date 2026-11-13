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

namespace Google\Service\OracleDatabase;

class SourceConfig extends \Google\Model
{
  /**
   * Default unspecified value.
   */
  public const CLONE_TYPE_CLONE_TYPE_UNSPECIFIED = 'CLONE_TYPE_UNSPECIFIED';
  /**
   * Creates a new database with the source database's data and metadata.
   */
  public const CLONE_TYPE_FULL = 'FULL';
  /**
   * Creates a new database that includes all the source database schema
   * metadata, but none of the source database data.
   */
  public const CLONE_TYPE_METADATA = 'METADATA';
  /**
   * Default unspecified value.
   */
  public const REFRESHABLE_MODE_REFRESHABLE_MODE_UNSPECIFIED = 'REFRESHABLE_MODE_UNSPECIFIED';
  /**
   * Automatic refresh.
   */
  public const REFRESHABLE_MODE_AUTOMATIC = 'AUTOMATIC';
  /**
   * Manual refresh.
   */
  public const REFRESHABLE_MODE_MANUAL = 'MANUAL';
  /**
   * Default unspecified value.
   */
  public const SOURCE_TYPE_SOURCE_TYPE_UNSPECIFIED = 'SOURCE_TYPE_UNSPECIFIED';
  /**
   * Clone database from an existing database specified in autonomous_database
   * field.
   */
  public const SOURCE_TYPE_CLONE_DATABASE = 'CLONE_DATABASE';
  /**
   * Create a cross-region disaster recovery peer adb from an existing adb.
   */
  public const SOURCE_TYPE_CROSS_REGION_DISASTER_RECOVERY = 'CROSS_REGION_DISASTER_RECOVERY';
  /**
   * Create a refreshable clone from an existing database specified in
   * autonomous_database field.
   */
  public const SOURCE_TYPE_CLONE_TO_REFRESHABLE = 'CLONE_TO_REFRESHABLE';
  /**
   * Create clone from the backup resource.
   */
  public const SOURCE_TYPE_BACKUP_FROM_ID = 'BACKUP_FROM_ID';
  /**
   * Create clone from backup specified by backup_time field, or use latest
   * available backup if use_latest_available_backup is true. The
   * autonomous_database field must specify the source database to clone from.
   */
  public const SOURCE_TYPE_BACKUP_FROM_TIMESTAMP = 'BACKUP_FROM_TIMESTAMP';
  /**
   * Optional. The frequency in seconds a refreshable clone is refreshed after
   * auto-refresh is enabled.
   *
   * @var int
   */
  public $autoRefreshFrequencySeconds;
  /**
   * Optional. The time, in seconds, the data of the automatic refreshable clone
   * lags the primary database at the point of refresh.
   *
   * @var int
   */
  public $autoRefreshPointLagSeconds;
  /**
   * Optional. The date and time that auto-refreshing will begin for an
   * Autonomous Database refreshable clone. This value controls only the start
   * time for the first refresh operation.
   *
   * @var string
   */
  public $autoRefreshStartTime;
  /**
   * Optional. This field specifies if the replication of automatic backups is
   * enabled when creating a Data Guard.
   *
   * @var bool
   */
  public $automaticBackupsReplicationEnabled;
  /**
   * Optional. The name of the primary Autonomous Database that is used to
   * create a Peer Autonomous Database from a source.
   *
   * @var string
   */
  public $autonomousDatabase;
  /**
   * Optional. The name of the Autonomous Database Backup resource with the
   * format: projects/{project}/locations/{region}/autonomousDatabaseBackups/{au
   * tonomous_database_backup} Required when source_type is BACKUP_FROM_ID.
   *
   * @var string
   */
  public $autonomousDatabaseBackup;
  /**
   * Optional. The timestamp specified for the point-in-time clone of the source
   * Autonomous Database. This field is only applicable in case of
   * BACKUP_FROM_TIMESTAMP source type and when use_latest_available_backup is
   * false.
   *
   * @var string
   */
  public $backupTime;
  /**
   * Optional. The clone type of the Autonomous Database. This field is only
   * applicable in case of cloning
   *
   * @var string
   */
  public $cloneType;
  /**
   * Optional. The refresh mode of the clone.
   *
   * @var string
   */
  public $refreshableMode;
  /**
   * Optional. The source type of the Autonomous Database.
   *
   * @var string
   */
  public $sourceType;
  /**
   * Optional. Clone from latest available backup timestamp. This field is only
   * applicable in case of BACKUP_FROM_TIMESTAMP source type.
   *
   * @var bool
   */
  public $useLatestAvailableBackup;

  /**
   * Optional. The frequency in seconds a refreshable clone is refreshed after
   * auto-refresh is enabled.
   *
   * @param int $autoRefreshFrequencySeconds
   */
  public function setAutoRefreshFrequencySeconds($autoRefreshFrequencySeconds)
  {
    $this->autoRefreshFrequencySeconds = $autoRefreshFrequencySeconds;
  }
  /**
   * @return int
   */
  public function getAutoRefreshFrequencySeconds()
  {
    return $this->autoRefreshFrequencySeconds;
  }
  /**
   * Optional. The time, in seconds, the data of the automatic refreshable clone
   * lags the primary database at the point of refresh.
   *
   * @param int $autoRefreshPointLagSeconds
   */
  public function setAutoRefreshPointLagSeconds($autoRefreshPointLagSeconds)
  {
    $this->autoRefreshPointLagSeconds = $autoRefreshPointLagSeconds;
  }
  /**
   * @return int
   */
  public function getAutoRefreshPointLagSeconds()
  {
    return $this->autoRefreshPointLagSeconds;
  }
  /**
   * Optional. The date and time that auto-refreshing will begin for an
   * Autonomous Database refreshable clone. This value controls only the start
   * time for the first refresh operation.
   *
   * @param string $autoRefreshStartTime
   */
  public function setAutoRefreshStartTime($autoRefreshStartTime)
  {
    $this->autoRefreshStartTime = $autoRefreshStartTime;
  }
  /**
   * @return string
   */
  public function getAutoRefreshStartTime()
  {
    return $this->autoRefreshStartTime;
  }
  /**
   * Optional. This field specifies if the replication of automatic backups is
   * enabled when creating a Data Guard.
   *
   * @param bool $automaticBackupsReplicationEnabled
   */
  public function setAutomaticBackupsReplicationEnabled($automaticBackupsReplicationEnabled)
  {
    $this->automaticBackupsReplicationEnabled = $automaticBackupsReplicationEnabled;
  }
  /**
   * @return bool
   */
  public function getAutomaticBackupsReplicationEnabled()
  {
    return $this->automaticBackupsReplicationEnabled;
  }
  /**
   * Optional. The name of the primary Autonomous Database that is used to
   * create a Peer Autonomous Database from a source.
   *
   * @param string $autonomousDatabase
   */
  public function setAutonomousDatabase($autonomousDatabase)
  {
    $this->autonomousDatabase = $autonomousDatabase;
  }
  /**
   * @return string
   */
  public function getAutonomousDatabase()
  {
    return $this->autonomousDatabase;
  }
  /**
   * Optional. The name of the Autonomous Database Backup resource with the
   * format: projects/{project}/locations/{region}/autonomousDatabaseBackups/{au
   * tonomous_database_backup} Required when source_type is BACKUP_FROM_ID.
   *
   * @param string $autonomousDatabaseBackup
   */
  public function setAutonomousDatabaseBackup($autonomousDatabaseBackup)
  {
    $this->autonomousDatabaseBackup = $autonomousDatabaseBackup;
  }
  /**
   * @return string
   */
  public function getAutonomousDatabaseBackup()
  {
    return $this->autonomousDatabaseBackup;
  }
  /**
   * Optional. The timestamp specified for the point-in-time clone of the source
   * Autonomous Database. This field is only applicable in case of
   * BACKUP_FROM_TIMESTAMP source type and when use_latest_available_backup is
   * false.
   *
   * @param string $backupTime
   */
  public function setBackupTime($backupTime)
  {
    $this->backupTime = $backupTime;
  }
  /**
   * @return string
   */
  public function getBackupTime()
  {
    return $this->backupTime;
  }
  /**
   * Optional. The clone type of the Autonomous Database. This field is only
   * applicable in case of cloning
   *
   * Accepted values: CLONE_TYPE_UNSPECIFIED, FULL, METADATA
   *
   * @param self::CLONE_TYPE_* $cloneType
   */
  public function setCloneType($cloneType)
  {
    $this->cloneType = $cloneType;
  }
  /**
   * @return self::CLONE_TYPE_*
   */
  public function getCloneType()
  {
    return $this->cloneType;
  }
  /**
   * Optional. The refresh mode of the clone.
   *
   * Accepted values: REFRESHABLE_MODE_UNSPECIFIED, AUTOMATIC, MANUAL
   *
   * @param self::REFRESHABLE_MODE_* $refreshableMode
   */
  public function setRefreshableMode($refreshableMode)
  {
    $this->refreshableMode = $refreshableMode;
  }
  /**
   * @return self::REFRESHABLE_MODE_*
   */
  public function getRefreshableMode()
  {
    return $this->refreshableMode;
  }
  /**
   * Optional. The source type of the Autonomous Database.
   *
   * Accepted values: SOURCE_TYPE_UNSPECIFIED, CLONE_DATABASE,
   * CROSS_REGION_DISASTER_RECOVERY, CLONE_TO_REFRESHABLE, BACKUP_FROM_ID,
   * BACKUP_FROM_TIMESTAMP
   *
   * @param self::SOURCE_TYPE_* $sourceType
   */
  public function setSourceType($sourceType)
  {
    $this->sourceType = $sourceType;
  }
  /**
   * @return self::SOURCE_TYPE_*
   */
  public function getSourceType()
  {
    return $this->sourceType;
  }
  /**
   * Optional. Clone from latest available backup timestamp. This field is only
   * applicable in case of BACKUP_FROM_TIMESTAMP source type.
   *
   * @param bool $useLatestAvailableBackup
   */
  public function setUseLatestAvailableBackup($useLatestAvailableBackup)
  {
    $this->useLatestAvailableBackup = $useLatestAvailableBackup;
  }
  /**
   * @return bool
   */
  public function getUseLatestAvailableBackup()
  {
    return $this->useLatestAvailableBackup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SourceConfig::class, 'Google_Service_OracleDatabase_SourceConfig');
