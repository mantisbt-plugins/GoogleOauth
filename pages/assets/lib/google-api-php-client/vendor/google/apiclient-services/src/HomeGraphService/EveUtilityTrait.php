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

class EveUtilityTrait extends \Google\Collection
{
  protected $collection_key = 'acceptedCommandList';
  /**
   * Required. Output only. Accepted command list for this trait
   *
   * @var string[]
   */
  public $acceptedCommandList;
  /**
   * @var string
   */
  public $accumulatedControlPoint;
  public $airPressure;
  public $altitude;
  /**
   * @var bool
   */
  public $childLock;
  public $current;
  /**
   * @var string
   */
  public $getConfig;
  /**
   * @var bool
   */
  public $holdPosition;
  /**
   * @var string
   */
  public $lastEventTime;
  /**
   * @var string
   */
  public $loggingControlPoint;
  /**
   * @var string
   */
  public $loggingData;
  /**
   * @var string
   */
  public $loggingMetadata;
  /**
   * @var string
   */
  public $loggingTime;
  /**
   * @var int
   */
  public $motionSensitivity;
  /**
   * @var bool
   */
  public $obstructionDetected;
  /**
   * @var string
   */
  public $openCount;
  /**
   * @var int
   */
  public $rloc16;
  /**
   * @var string
   */
  public $setConfig;
  /**
   * @var int
   */
  public $statusFault;
  public $voltage;
  public $watt;
  public $wattAccumulated;
  /**
   * @var int
   */
  public $weatherTrend;

  /**
   * Required. Output only. Accepted command list for this trait
   *
   * @param string[] $acceptedCommandList
   */
  public function setAcceptedCommandList($acceptedCommandList)
  {
    $this->acceptedCommandList = $acceptedCommandList;
  }
  /**
   * @return string[]
   */
  public function getAcceptedCommandList()
  {
    return $this->acceptedCommandList;
  }
  /**
   * @param string $accumulatedControlPoint
   */
  public function setAccumulatedControlPoint($accumulatedControlPoint)
  {
    $this->accumulatedControlPoint = $accumulatedControlPoint;
  }
  /**
   * @return string
   */
  public function getAccumulatedControlPoint()
  {
    return $this->accumulatedControlPoint;
  }
  public function setAirPressure($airPressure)
  {
    $this->airPressure = $airPressure;
  }
  public function getAirPressure()
  {
    return $this->airPressure;
  }
  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }
  public function getAltitude()
  {
    return $this->altitude;
  }
  /**
   * @param bool $childLock
   */
  public function setChildLock($childLock)
  {
    $this->childLock = $childLock;
  }
  /**
   * @return bool
   */
  public function getChildLock()
  {
    return $this->childLock;
  }
  public function setCurrent($current)
  {
    $this->current = $current;
  }
  public function getCurrent()
  {
    return $this->current;
  }
  /**
   * @param string $getConfig
   */
  public function setGetConfig($getConfig)
  {
    $this->getConfig = $getConfig;
  }
  /**
   * @return string
   */
  public function getGetConfig()
  {
    return $this->getConfig;
  }
  /**
   * @param bool $holdPosition
   */
  public function setHoldPosition($holdPosition)
  {
    $this->holdPosition = $holdPosition;
  }
  /**
   * @return bool
   */
  public function getHoldPosition()
  {
    return $this->holdPosition;
  }
  /**
   * @param string $lastEventTime
   */
  public function setLastEventTime($lastEventTime)
  {
    $this->lastEventTime = $lastEventTime;
  }
  /**
   * @return string
   */
  public function getLastEventTime()
  {
    return $this->lastEventTime;
  }
  /**
   * @param string $loggingControlPoint
   */
  public function setLoggingControlPoint($loggingControlPoint)
  {
    $this->loggingControlPoint = $loggingControlPoint;
  }
  /**
   * @return string
   */
  public function getLoggingControlPoint()
  {
    return $this->loggingControlPoint;
  }
  /**
   * @param string $loggingData
   */
  public function setLoggingData($loggingData)
  {
    $this->loggingData = $loggingData;
  }
  /**
   * @return string
   */
  public function getLoggingData()
  {
    return $this->loggingData;
  }
  /**
   * @param string $loggingMetadata
   */
  public function setLoggingMetadata($loggingMetadata)
  {
    $this->loggingMetadata = $loggingMetadata;
  }
  /**
   * @return string
   */
  public function getLoggingMetadata()
  {
    return $this->loggingMetadata;
  }
  /**
   * @param string $loggingTime
   */
  public function setLoggingTime($loggingTime)
  {
    $this->loggingTime = $loggingTime;
  }
  /**
   * @return string
   */
  public function getLoggingTime()
  {
    return $this->loggingTime;
  }
  /**
   * @param int $motionSensitivity
   */
  public function setMotionSensitivity($motionSensitivity)
  {
    $this->motionSensitivity = $motionSensitivity;
  }
  /**
   * @return int
   */
  public function getMotionSensitivity()
  {
    return $this->motionSensitivity;
  }
  /**
   * @param bool $obstructionDetected
   */
  public function setObstructionDetected($obstructionDetected)
  {
    $this->obstructionDetected = $obstructionDetected;
  }
  /**
   * @return bool
   */
  public function getObstructionDetected()
  {
    return $this->obstructionDetected;
  }
  /**
   * @param string $openCount
   */
  public function setOpenCount($openCount)
  {
    $this->openCount = $openCount;
  }
  /**
   * @return string
   */
  public function getOpenCount()
  {
    return $this->openCount;
  }
  /**
   * @param int $rloc16
   */
  public function setRloc16($rloc16)
  {
    $this->rloc16 = $rloc16;
  }
  /**
   * @return int
   */
  public function getRloc16()
  {
    return $this->rloc16;
  }
  /**
   * @param string $setConfig
   */
  public function setSetConfig($setConfig)
  {
    $this->setConfig = $setConfig;
  }
  /**
   * @return string
   */
  public function getSetConfig()
  {
    return $this->setConfig;
  }
  /**
   * @param int $statusFault
   */
  public function setStatusFault($statusFault)
  {
    $this->statusFault = $statusFault;
  }
  /**
   * @return int
   */
  public function getStatusFault()
  {
    return $this->statusFault;
  }
  public function setVoltage($voltage)
  {
    $this->voltage = $voltage;
  }
  public function getVoltage()
  {
    return $this->voltage;
  }
  public function setWatt($watt)
  {
    $this->watt = $watt;
  }
  public function getWatt()
  {
    return $this->watt;
  }
  public function setWattAccumulated($wattAccumulated)
  {
    $this->wattAccumulated = $wattAccumulated;
  }
  public function getWattAccumulated()
  {
    return $this->wattAccumulated;
  }
  /**
   * @param int $weatherTrend
   */
  public function setWeatherTrend($weatherTrend)
  {
    $this->weatherTrend = $weatherTrend;
  }
  /**
   * @return int
   */
  public function getWeatherTrend()
  {
    return $this->weatherTrend;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EveUtilityTrait::class, 'Google_Service_HomeGraphService_EveUtilityTrait');
