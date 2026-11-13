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

namespace Google\Service\BigtableAdmin;

class AutomatedBackupPolicy extends \Google\Collection
{
  protected $collection_key = 'locations';
  /**
   * Optional. If `true`, automated backups are explicitly disabled on this
   * table. This allows users to opt out of default enablement.
   *
   * @var bool
   */
  public $disabled;
  /**
   * How frequently automated backups should occur. The only supported value at
   * this time is 24 hours. An undefined frequency is treated as 24 hours.
   *
   * @var string
   */
  public $frequency;
  /**
   * Optional. The amount of time that the automated backups remain hot. If
   * specified, the backups created by this policy are `HOT` backups. If not
   * specified, the backups are `STANDARD` backups. The value must be at least
   * 24 hours and at most 10 days, and can't exceed the policy's
   * `retention_period`. Only SSD instances support `HOT` automated backups.
   *
   * @var string
   */
  public $keepHotDuration;
  /**
   * Optional. A list of Cloud Bigtable zones where automated backups are
   * allowed to be created. If empty, automated backups will be created in all
   * zones of the instance. Locations are in the format
   * `projects/{project}/locations/{zone}`. You can set this field only for
   * tables in Enterprise Plus instances.
   *
   * @var string[]
   */
  public $locations;
  /**
   * Required. How long the automated backups should be retained. Values must be
   * at least 3 days and at most 90 days.
   *
   * @var string
   */
  public $retentionPeriod;

  /**
   * Optional. If `true`, automated backups are explicitly disabled on this
   * table. This allows users to opt out of default enablement.
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * How frequently automated backups should occur. The only supported value at
   * this time is 24 hours. An undefined frequency is treated as 24 hours.
   *
   * @param string $frequency
   */
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /**
   * @return string
   */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /**
   * Optional. The amount of time that the automated backups remain hot. If
   * specified, the backups created by this policy are `HOT` backups. If not
   * specified, the backups are `STANDARD` backups. The value must be at least
   * 24 hours and at most 10 days, and can't exceed the policy's
   * `retention_period`. Only SSD instances support `HOT` automated backups.
   *
   * @param string $keepHotDuration
   */
  public function setKeepHotDuration($keepHotDuration)
  {
    $this->keepHotDuration = $keepHotDuration;
  }
  /**
   * @return string
   */
  public function getKeepHotDuration()
  {
    return $this->keepHotDuration;
  }
  /**
   * Optional. A list of Cloud Bigtable zones where automated backups are
   * allowed to be created. If empty, automated backups will be created in all
   * zones of the instance. Locations are in the format
   * `projects/{project}/locations/{zone}`. You can set this field only for
   * tables in Enterprise Plus instances.
   *
   * @param string[] $locations
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return string[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * Required. How long the automated backups should be retained. Values must be
   * at least 3 days and at most 90 days.
   *
   * @param string $retentionPeriod
   */
  public function setRetentionPeriod($retentionPeriod)
  {
    $this->retentionPeriod = $retentionPeriod;
  }
  /**
   * @return string
   */
  public function getRetentionPeriod()
  {
    return $this->retentionPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutomatedBackupPolicy::class, 'Google_Service_BigtableAdmin_AutomatedBackupPolicy');
