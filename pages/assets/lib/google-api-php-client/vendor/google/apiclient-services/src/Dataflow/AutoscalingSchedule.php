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

namespace Google\Service\Dataflow;

class AutoscalingSchedule extends \Google\Model
{
  /**
   * Optional. A crontab specification of when this schedule should trigger
   * applying overrides. The overrides will be applied from the trigger time
   * until the specified duration elapses.
   *
   * @var string
   */
  public $crontab;
  /**
   * Optional. The duration for which the parameter overrides for this schedule
   * will be applied when triggered by the crontab.
   *
   * @var string
   */
  public $duration;
  /**
   * Optional. The name of the schedule.
   *
   * @var string
   */
  public $name;
  protected $parametersType = Parameters::class;
  protected $parametersDataType = '';
  /**
   * Optional. Specifies the priority of the schedule. If two schedules overlap,
   * the one with the higher priority will be used. The higher the value, the
   * higher the priority of the schedule. The value must be non-negative; the
   * lowest priority is `0`, which is the default.
   *
   * @var string
   */
  public $priority;
  /**
   * Optional. The time zone for the schedule. The value of this field must be a
   * time zone name from the [tz
   * database](http://en.wikipedia.org/wiki/Tz_database). The default value is
   * UTC.
   *
   * @var string
   */
  public $timeZone;
  /**
   * Output only. When the customer last updated the schedule.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. A crontab specification of when this schedule should trigger
   * applying overrides. The overrides will be applied from the trigger time
   * until the specified duration elapses.
   *
   * @param string $crontab
   */
  public function setCrontab($crontab)
  {
    $this->crontab = $crontab;
  }
  /**
   * @return string
   */
  public function getCrontab()
  {
    return $this->crontab;
  }
  /**
   * Optional. The duration for which the parameter overrides for this schedule
   * will be applied when triggered by the crontab.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * Optional. The name of the schedule.
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
   * Optional. The parameters to use for autoscaling when this schedule is
   * active.
   *
   * @param Parameters $parameters
   */
  public function setParameters(Parameters $parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return Parameters
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Optional. Specifies the priority of the schedule. If two schedules overlap,
   * the one with the higher priority will be used. The higher the value, the
   * higher the priority of the schedule. The value must be non-negative; the
   * lowest priority is `0`, which is the default.
   *
   * @param string $priority
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /**
   * @return string
   */
  public function getPriority()
  {
    return $this->priority;
  }
  /**
   * Optional. The time zone for the schedule. The value of this field must be a
   * time zone name from the [tz
   * database](http://en.wikipedia.org/wiki/Tz_database). The default value is
   * UTC.
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
  /**
   * Output only. When the customer last updated the schedule.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoscalingSchedule::class, 'Google_Service_Dataflow_AutoscalingSchedule');
