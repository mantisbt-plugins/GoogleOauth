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

class GoogleChromeManagementV1SaasUsageBrowser extends \Google\Model
{
  /**
   * No operating system specified.
   */
  public const OS_PLATFORM_DEVICE_SYSTEM_UNSPECIFIED = 'DEVICE_SYSTEM_UNSPECIFIED';
  /**
   * Other operating system.
   */
  public const OS_PLATFORM_SYSTEM_OTHER = 'SYSTEM_OTHER';
  /**
   * Android operating system.
   */
  public const OS_PLATFORM_SYSTEM_ANDROID = 'SYSTEM_ANDROID';
  /**
   * Apple iOS operating system.
   */
  public const OS_PLATFORM_SYSTEM_IOS = 'SYSTEM_IOS';
  /**
   * ChromeOS operating system.
   */
  public const OS_PLATFORM_SYSTEM_CROS = 'SYSTEM_CROS';
  /**
   * Microsoft Windows operating system.
   */
  public const OS_PLATFORM_SYSTEM_WINDOWS = 'SYSTEM_WINDOWS';
  /**
   * Apple macOS operating system.
   */
  public const OS_PLATFORM_SYSTEM_MAC = 'SYSTEM_MAC';
  /**
   * Linux operating system.
   */
  public const OS_PLATFORM_SYSTEM_LINUX = 'SYSTEM_LINUX';
  /**
   * Output only. The device permanent ID.
   *
   * @var string
   */
  public $devicePermanentId;
  /**
   * Output only. The timestamp when the application was first navigated to by
   * this browser.
   *
   * @var string
   */
  public $firstNavigationTime;
  /**
   * Output only. The timestamp when the application was last navigated to by
   * this browser.
   *
   * @var string
   */
  public $lastNavigationTime;
  /**
   * Output only. The machine name.
   *
   * @var string
   */
  public $machine;
  /**
   * Output only. The ID of the organizational unit.
   *
   * @var string
   */
  public $orgUnitId;
  /**
   * Output only. The OS platform.
   *
   * @var string
   */
  public $osPlatform;
  /**
   * Output only. The OS version.
   *
   * @var string
   */
  public $osVersion;

  /**
   * Output only. The device permanent ID.
   *
   * @param string $devicePermanentId
   */
  public function setDevicePermanentId($devicePermanentId)
  {
    $this->devicePermanentId = $devicePermanentId;
  }
  /**
   * @return string
   */
  public function getDevicePermanentId()
  {
    return $this->devicePermanentId;
  }
  /**
   * Output only. The timestamp when the application was first navigated to by
   * this browser.
   *
   * @param string $firstNavigationTime
   */
  public function setFirstNavigationTime($firstNavigationTime)
  {
    $this->firstNavigationTime = $firstNavigationTime;
  }
  /**
   * @return string
   */
  public function getFirstNavigationTime()
  {
    return $this->firstNavigationTime;
  }
  /**
   * Output only. The timestamp when the application was last navigated to by
   * this browser.
   *
   * @param string $lastNavigationTime
   */
  public function setLastNavigationTime($lastNavigationTime)
  {
    $this->lastNavigationTime = $lastNavigationTime;
  }
  /**
   * @return string
   */
  public function getLastNavigationTime()
  {
    return $this->lastNavigationTime;
  }
  /**
   * Output only. The machine name.
   *
   * @param string $machine
   */
  public function setMachine($machine)
  {
    $this->machine = $machine;
  }
  /**
   * @return string
   */
  public function getMachine()
  {
    return $this->machine;
  }
  /**
   * Output only. The ID of the organizational unit.
   *
   * @param string $orgUnitId
   */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /**
   * @return string
   */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /**
   * Output only. The OS platform.
   *
   * Accepted values: DEVICE_SYSTEM_UNSPECIFIED, SYSTEM_OTHER, SYSTEM_ANDROID,
   * SYSTEM_IOS, SYSTEM_CROS, SYSTEM_WINDOWS, SYSTEM_MAC, SYSTEM_LINUX
   *
   * @param self::OS_PLATFORM_* $osPlatform
   */
  public function setOsPlatform($osPlatform)
  {
    $this->osPlatform = $osPlatform;
  }
  /**
   * @return self::OS_PLATFORM_*
   */
  public function getOsPlatform()
  {
    return $this->osPlatform;
  }
  /**
   * Output only. The OS version.
   *
   * @param string $osVersion
   */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /**
   * @return string
   */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1SaasUsageBrowser::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1SaasUsageBrowser');
