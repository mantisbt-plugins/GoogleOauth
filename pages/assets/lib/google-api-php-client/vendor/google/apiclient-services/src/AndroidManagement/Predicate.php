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

namespace Google\Service\AndroidManagement;

class Predicate extends \Google\Collection
{
  protected $collection_key = 'daysOfWeek';
  protected $dateLowerBoundType = Date::class;
  protected $dateLowerBoundDataType = '';
  protected $dateUpperBoundType = Date::class;
  protected $dateUpperBoundDataType = '';
  /**
   * Optional. Evaluates to true if this list is empty or if the current day of
   * the week in the device's local time is in this list.
   *
   * @var string[]
   */
  public $daysOfWeek;
  protected $timeOfDayLowerBoundType = TimeOfDay::class;
  protected $timeOfDayLowerBoundDataType = '';
  protected $timeOfDayUpperBoundType = TimeOfDay::class;
  protected $timeOfDayUpperBoundDataType = '';
  /**
   * Optional. A lower bound on the amount of time for which the update (that
   * is, the specific build or version) has been available to the device. This
   * must be a multiple of 24 hours.
   *
   * @var string
   */
  public $updateAgeLowerBound;
  /**
   * Optional. An upper bound on the amount of time for which the update has
   * been available. If not set or set to zero, always evaluates to true. This
   * must be a multiple of 24 hours.
   *
   * @var string
   */
  public $updateAgeUpperBound;

  /**
   * Optional. A lower bound on the current date, in the device time zone. If
   * not set, always evaluates to true.
   *
   * @param Date $dateLowerBound
   */
  public function setDateLowerBound(Date $dateLowerBound)
  {
    $this->dateLowerBound = $dateLowerBound;
  }
  /**
   * @return Date
   */
  public function getDateLowerBound()
  {
    return $this->dateLowerBound;
  }
  /**
   * Optional. An upper bound on the current date, in the device time zone. If
   * not set, always evaluates to true.
   *
   * @param Date $dateUpperBound
   */
  public function setDateUpperBound(Date $dateUpperBound)
  {
    $this->dateUpperBound = $dateUpperBound;
  }
  /**
   * @return Date
   */
  public function getDateUpperBound()
  {
    return $this->dateUpperBound;
  }
  /**
   * Optional. Evaluates to true if this list is empty or if the current day of
   * the week in the device's local time is in this list.
   *
   * @param string[] $daysOfWeek
   */
  public function setDaysOfWeek($daysOfWeek)
  {
    $this->daysOfWeek = $daysOfWeek;
  }
  /**
   * @return string[]
   */
  public function getDaysOfWeek()
  {
    return $this->daysOfWeek;
  }
  /**
   * Optional. A lower bound on the current time of the day, evaluated as
   * hh:00:00 in the device time zone. Must specify only the hour (0-23). The
   * policy will be rejected if minutes, seconds, or nanos are set. If not set,
   * always evaluates to true.
   *
   * @param TimeOfDay $timeOfDayLowerBound
   */
  public function setTimeOfDayLowerBound(TimeOfDay $timeOfDayLowerBound)
  {
    $this->timeOfDayLowerBound = $timeOfDayLowerBound;
  }
  /**
   * @return TimeOfDay
   */
  public function getTimeOfDayLowerBound()
  {
    return $this->timeOfDayLowerBound;
  }
  /**
   * Optional. An upper bound on the current time of the day, evaluated as
   * hh:00:00 in the device time zone. Must specify only the hour (0-23). The
   * policy will be rejected if minutes, seconds, or nanos are set. If not set,
   * always evaluates to true.The window closes at the specified hour (for
   * example, a lower bound of 14 and an upper bound of 15 covers 14:00 to
   * 15:00). When both bounds are set in the same rule, timeOfDayUpperBound must
   * be strictly greater than timeOfDayLowerBound for the window to match; if
   * timeOfDayUpperBound is less than or equal to timeOfDayLowerBound, the
   * predicate evaluates to false. Setting timeOfDayUpperBound to 0 (00:00)
   * evaluates to false for the entire day. To extend a window to the end of the
   * day (24:00), omit timeOfDayUpperBound. To define an overnight window
   * spanning midnight, use two rules: an evening rule with only
   * timeOfDayLowerBound set and a morning rule with only timeOfDayUpperBound
   * set (targeting the following day if daysOfWeek is set).
   *
   * @param TimeOfDay $timeOfDayUpperBound
   */
  public function setTimeOfDayUpperBound(TimeOfDay $timeOfDayUpperBound)
  {
    $this->timeOfDayUpperBound = $timeOfDayUpperBound;
  }
  /**
   * @return TimeOfDay
   */
  public function getTimeOfDayUpperBound()
  {
    return $this->timeOfDayUpperBound;
  }
  /**
   * Optional. A lower bound on the amount of time for which the update (that
   * is, the specific build or version) has been available to the device. This
   * must be a multiple of 24 hours.
   *
   * @param string $updateAgeLowerBound
   */
  public function setUpdateAgeLowerBound($updateAgeLowerBound)
  {
    $this->updateAgeLowerBound = $updateAgeLowerBound;
  }
  /**
   * @return string
   */
  public function getUpdateAgeLowerBound()
  {
    return $this->updateAgeLowerBound;
  }
  /**
   * Optional. An upper bound on the amount of time for which the update has
   * been available. If not set or set to zero, always evaluates to true. This
   * must be a multiple of 24 hours.
   *
   * @param string $updateAgeUpperBound
   */
  public function setUpdateAgeUpperBound($updateAgeUpperBound)
  {
    $this->updateAgeUpperBound = $updateAgeUpperBound;
  }
  /**
   * @return string
   */
  public function getUpdateAgeUpperBound()
  {
    return $this->updateAgeUpperBound;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Predicate::class, 'Google_Service_AndroidManagement_Predicate');
