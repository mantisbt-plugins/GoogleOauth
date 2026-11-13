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

namespace Google\Service\HomeGraphService;

class ThermostatFanControlTrait extends \Google\Model
{
  public const TIMER_SPEED_FAN_SPEED_SETTING_ENUM_UNSPECIFIED = 'FAN_SPEED_SETTING_ENUM_UNSPECIFIED';
  public const TIMER_SPEED_FAN_SPEED_SETTING_OFF = 'FAN_SPEED_SETTING_OFF';
  public const TIMER_SPEED_FAN_SPEED_SETTING_STAGE1 = 'FAN_SPEED_SETTING_STAGE1';
  public const TIMER_SPEED_FAN_SPEED_SETTING_STAGE2 = 'FAN_SPEED_SETTING_STAGE2';
  public const TIMER_SPEED_FAN_SPEED_SETTING_STAGE3 = 'FAN_SPEED_SETTING_STAGE3';
  public const TIMER_SPEED_FAN_SPEED_SETTING_AUTO = 'FAN_SPEED_SETTING_AUTO';
  /**
   * @var string
   */
  public $timerDuration;
  /**
   * @var string
   */
  public $timerEnd;
  /**
   * @var string
   */
  public $timerSpeed;

  /**
   * @param string $timerDuration
   */
  public function setTimerDuration($timerDuration)
  {
    $this->timerDuration = $timerDuration;
  }
  /**
   * @return string
   */
  public function getTimerDuration()
  {
    return $this->timerDuration;
  }
  /**
   * @param string $timerEnd
   */
  public function setTimerEnd($timerEnd)
  {
    $this->timerEnd = $timerEnd;
  }
  /**
   * @return string
   */
  public function getTimerEnd()
  {
    return $this->timerEnd;
  }
  /**
   * @param self::TIMER_SPEED_* $timerSpeed
   */
  public function setTimerSpeed($timerSpeed)
  {
    $this->timerSpeed = $timerSpeed;
  }
  /**
   * @return self::TIMER_SPEED_*
   */
  public function getTimerSpeed()
  {
    return $this->timerSpeed;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThermostatFanControlTrait::class, 'Google_Service_HomeGraphService_ThermostatFanControlTrait');
