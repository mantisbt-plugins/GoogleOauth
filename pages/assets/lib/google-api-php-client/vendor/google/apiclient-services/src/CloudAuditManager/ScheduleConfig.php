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

namespace Google\Service\CloudAuditManager;

class ScheduleConfig extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const FREQUENCY_FREQUENCY_UNSPECIFIED = 'FREQUENCY_UNSPECIFIED';
  /**
   * The audit runs every day.
   */
  public const FREQUENCY_DAILY = 'DAILY';
  /**
   * The audit runs weekly on the same day of the week as `start_time`.
   */
  public const FREQUENCY_WEEKLY = 'WEEKLY';
  /**
   * The audit runs monthly on the same day of the month as `start_time`.
   */
  public const FREQUENCY_MONTHLY = 'MONTHLY';
  /**
   * The audit runs quarterly (every 3 months) on the same day of the month as
   * `start_time`.
   */
  public const FREQUENCY_QUARTERLY = 'QUARTERLY';
  /**
   * The audit runs annually on the same month and day as `start_time`.
   */
  public const FREQUENCY_ANNUALLY = 'ANNUALLY';
  /**
   * Optional. Date that the schedule stops. If not specified, the schedule runs
   * indefinitely.
   *
   * @var string
   */
  public $endTime;
  /**
   * Required. Frequency of audit runs.
   *
   * @var string
   */
  public $frequency;
  /**
   * Required. Date and time when the first audit run is triggered. Subsequent
   * runs are based on this time and the chosen frequency.
   *
   * @var string
   */
  public $startTime;
  /**
   * Optional. Time zone for the audit schedule in IANA format (for example,
   * `America/New_York`). The time zone is used to interpret the `start_time`
   * and the `end_time`, and to calculate subsequent run dates. If not
   * specified, the time zone default is UTC.
   *
   * @var string
   */
  public $timeZone;

  /**
   * Optional. Date that the schedule stops. If not specified, the schedule runs
   * indefinitely.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Required. Frequency of audit runs.
   *
   * Accepted values: FREQUENCY_UNSPECIFIED, DAILY, WEEKLY, MONTHLY, QUARTERLY,
   * ANNUALLY
   *
   * @param self::FREQUENCY_* $frequency
   */
  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }
  /**
   * @return self::FREQUENCY_*
   */
  public function getFrequency()
  {
    return $this->frequency;
  }
  /**
   * Required. Date and time when the first audit run is triggered. Subsequent
   * runs are based on this time and the chosen frequency.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Optional. Time zone for the audit schedule in IANA format (for example,
   * `America/New_York`). The time zone is used to interpret the `start_time`
   * and the `end_time`, and to calculate subsequent run dates. If not
   * specified, the time zone default is UTC.
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScheduleConfig::class, 'Google_Service_CloudAuditManager_ScheduleConfig');
