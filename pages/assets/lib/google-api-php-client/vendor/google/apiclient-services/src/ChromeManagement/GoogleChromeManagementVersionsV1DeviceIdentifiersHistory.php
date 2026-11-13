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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1DeviceIdentifiersHistory extends \Google\Collection
{
  protected $collection_key = 'records';
  /**
   * Output only. The device id is potentially being used by multiple devices.
   *
   * @var bool
   */
  public $deviceIdCollision;
  /**
   * Output only. The last time we detected the device id collision.
   *
   * @var string
   */
  public $lastDeviceIdCollisionDetectionTime;
  protected $recordsType = GoogleChromeManagementVersionsV1DeviceIdentifiersRecord::class;
  protected $recordsDataType = 'array';

  /**
   * Output only. The device id is potentially being used by multiple devices.
   *
   * @param bool $deviceIdCollision
   */
  public function setDeviceIdCollision($deviceIdCollision)
  {
    $this->deviceIdCollision = $deviceIdCollision;
  }
  /**
   * @return bool
   */
  public function getDeviceIdCollision()
  {
    return $this->deviceIdCollision;
  }
  /**
   * Output only. The last time we detected the device id collision.
   *
   * @param string $lastDeviceIdCollisionDetectionTime
   */
  public function setLastDeviceIdCollisionDetectionTime($lastDeviceIdCollisionDetectionTime)
  {
    $this->lastDeviceIdCollisionDetectionTime = $lastDeviceIdCollisionDetectionTime;
  }
  /**
   * @return string
   */
  public function getLastDeviceIdCollisionDetectionTime()
  {
    return $this->lastDeviceIdCollisionDetectionTime;
  }
  /**
   * Output only. List of device identifiers sent by this device. In descending
   * order by last_activity_time.
   *
   * @param GoogleChromeManagementVersionsV1DeviceIdentifiersRecord[] $records
   */
  public function setRecords($records)
  {
    $this->records = $records;
  }
  /**
   * @return GoogleChromeManagementVersionsV1DeviceIdentifiersRecord[]
   */
  public function getRecords()
  {
    return $this->records;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1DeviceIdentifiersHistory::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1DeviceIdentifiersHistory');
