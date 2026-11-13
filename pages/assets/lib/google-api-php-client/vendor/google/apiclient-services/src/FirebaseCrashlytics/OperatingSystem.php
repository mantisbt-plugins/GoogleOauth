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

namespace Google\Service\FirebaseCrashlytics;

class OperatingSystem extends \Google\Model
{
  /**
   * The device category (mobile, tablet, desktop).
   *
   * @var string
   */
  public $deviceType;
  /**
   * Name and version number. Formatted to be suitable for passing to
   * OperatingSystemFilter.
   *
   * @var string
   */
  public $displayName;
  /**
   * Operating system display version number.
   *
   * @var string
   */
  public $displayVersion;
  /**
   * Indicates if the OS has been modified or "jailbroken".
   *
   * @var string
   */
  public $modificationState;
  /**
   * Operating system name.
   *
   * @var string
   */
  public $os;
  /**
   * The OS type on Apple platforms (iOS, iPadOS, etc.).
   *
   * @var string
   */
  public $type;

  /**
   * The device category (mobile, tablet, desktop).
   *
   * @param string $deviceType
   */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /**
   * @return string
   */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /**
   * Name and version number. Formatted to be suitable for passing to
   * OperatingSystemFilter.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Operating system display version number.
   *
   * @param string $displayVersion
   */
  public function setDisplayVersion($displayVersion)
  {
    $this->displayVersion = $displayVersion;
  }
  /**
   * @return string
   */
  public function getDisplayVersion()
  {
    return $this->displayVersion;
  }
  /**
   * Indicates if the OS has been modified or "jailbroken".
   *
   * @param string $modificationState
   */
  public function setModificationState($modificationState)
  {
    $this->modificationState = $modificationState;
  }
  /**
   * @return string
   */
  public function getModificationState()
  {
    return $this->modificationState;
  }
  /**
   * Operating system name.
   *
   * @param string $os
   */
  public function setOs($os)
  {
    $this->os = $os;
  }
  /**
   * @return string
   */
  public function getOs()
  {
    return $this->os;
  }
  /**
   * The OS type on Apple platforms (iOS, iPadOS, etc.).
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperatingSystem::class, 'Google_Service_FirebaseCrashlytics_OperatingSystem');
