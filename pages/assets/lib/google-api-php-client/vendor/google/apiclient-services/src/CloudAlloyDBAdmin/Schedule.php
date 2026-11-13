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

namespace Google\Service\CloudAlloyDBAdmin;

class Schedule extends \Google\Model
{
  /**
   * Cron expression for the triggering the schedule. See
   * https://cloud.google.com/compute/docs/autoscaler/scaling-
   * schedules#cron_expressions for the syntax.
   *
   * @var string
   */
  public $cronExpression;
  /**
   * Description of the schedule.
   *
   * @var string
   */
  public $description;
  /**
   * If true, the schedule is disabled.
   *
   * @var bool
   */
  public $disabled;
  /**
   * Duration of the schedule.
   *
   * @var string
   */
  public $durationSec;
  /**
   * Minimum number of nodes in while the schedule is active.
   *
   * @var string
   */
  public $minNodeCount;
  /**
   * Name of the schedule.
   *
   * @var string
   */
  public $name;
  /**
   * The location-based IANA time zone for interpreting the schedule's start
   * time. If no time zone is provided, UTC is used by default.
   *
   * @var string
   */
  public $timeZone;

  /**
   * Cron expression for the triggering the schedule. See
   * https://cloud.google.com/compute/docs/autoscaler/scaling-
   * schedules#cron_expressions for the syntax.
   *
   * @param string $cronExpression
   */
  public function setCronExpression($cronExpression)
  {
    $this->cronExpression = $cronExpression;
  }
  /**
   * @return string
   */
  public function getCronExpression()
  {
    return $this->cronExpression;
  }
  /**
   * Description of the schedule.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * If true, the schedule is disabled.
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
   * Duration of the schedule.
   *
   * @param string $durationSec
   */
  public function setDurationSec($durationSec)
  {
    $this->durationSec = $durationSec;
  }
  /**
   * @return string
   */
  public function getDurationSec()
  {
    return $this->durationSec;
  }
  /**
   * Minimum number of nodes in while the schedule is active.
   *
   * @param string $minNodeCount
   */
  public function setMinNodeCount($minNodeCount)
  {
    $this->minNodeCount = $minNodeCount;
  }
  /**
   * @return string
   */
  public function getMinNodeCount()
  {
    return $this->minNodeCount;
  }
  /**
   * Name of the schedule.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * The location-based IANA time zone for interpreting the schedule's start
   * time. If no time zone is provided, UTC is used by default.
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
class_alias(Schedule::class, 'Google_Service_CloudAlloyDBAdmin_Schedule');
