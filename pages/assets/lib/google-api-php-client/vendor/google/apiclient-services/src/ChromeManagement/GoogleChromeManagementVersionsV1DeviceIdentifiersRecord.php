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

class GoogleChromeManagementVersionsV1DeviceIdentifiersRecord extends \Google\Model
{
  /**
   * Output only. The first time these identifiers were reported.
   *
   * @var string
   */
  public $firstRecordTime;
  protected $identifiersType = GoogleChromeManagementVersionsV1DeviceIdentifiers::class;
  protected $identifiersDataType = '';
  /**
   * Output only. The time of the last activity of these identifiers either from
   * reporting, policy fetching or registration.
   *
   * @var string
   */
  public $lastActivityTime;

  /**
   * Output only. The first time these identifiers were reported.
   *
   * @param string $firstRecordTime
   */
  public function setFirstRecordTime($firstRecordTime)
  {
    $this->firstRecordTime = $firstRecordTime;
  }
  /**
   * @return string
   */
  public function getFirstRecordTime()
  {
    return $this->firstRecordTime;
  }
  /**
   * Output only. Device identifiers.
   *
   * @param GoogleChromeManagementVersionsV1DeviceIdentifiers $identifiers
   */
  public function setIdentifiers(GoogleChromeManagementVersionsV1DeviceIdentifiers $identifiers)
  {
    $this->identifiers = $identifiers;
  }
  /**
   * @return GoogleChromeManagementVersionsV1DeviceIdentifiers
   */
  public function getIdentifiers()
  {
    return $this->identifiers;
  }
  /**
   * Output only. The time of the last activity of these identifiers either from
   * reporting, policy fetching or registration.
   *
   * @param string $lastActivityTime
   */
  public function setLastActivityTime($lastActivityTime)
  {
    $this->lastActivityTime = $lastActivityTime;
  }
  /**
   * @return string
   */
  public function getLastActivityTime()
  {
    return $this->lastActivityTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1DeviceIdentifiersRecord::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1DeviceIdentifiersRecord');
