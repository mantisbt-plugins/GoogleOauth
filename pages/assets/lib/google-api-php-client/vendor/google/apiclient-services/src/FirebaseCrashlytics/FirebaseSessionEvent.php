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

class FirebaseSessionEvent extends \Google\Model
{
  /**
   * Unknown.
   */
  public const EVENT_TYPE_SESSION_EVENT_TYPE_UNKNOWN = 'SESSION_EVENT_TYPE_UNKNOWN';
  /**
   * Application session started.
   */
  public const EVENT_TYPE_SESSION_START = 'SESSION_START';
  protected $deviceType = Device::class;
  protected $deviceDataType = '';
  /**
   * The start timestamp for the session event.
   *
   * @var string
   */
  public $eventTime;
  /**
   * Session event type. The SDK only supports SESSION_START events at this
   * time.
   *
   * @var string
   */
  public $eventType;
  /**
   * Uniquely identifies a device with Firebase apps installed.
   *
   * @var string
   */
  public $firebaseInstallationId;
  /**
   * The identifier of the first session since the last cold start. This id and
   * the session_id will be the same for app launches.
   *
   * @var string
   */
  public $firstSessionId;
  protected $operatingSystemType = OperatingSystem::class;
  protected $operatingSystemDataType = '';
  /**
   * Unique identifier for the Firebase session.
   *
   * @var string
   */
  public $sessionId;
  /**
   * Indicates the number of sessions since the last cold start.
   *
   * @var int
   */
  public $sessionIndex;
  protected $versionType = Version::class;
  protected $versionDataType = '';

  /**
   * Mobile device metadata.
   *
   * @param Device $device
   */
  public function setDevice(Device $device)
  {
    $this->device = $device;
  }
  /**
   * @return Device
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * The start timestamp for the session event.
   *
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * Session event type. The SDK only supports SESSION_START events at this
   * time.
   *
   * Accepted values: SESSION_EVENT_TYPE_UNKNOWN, SESSION_START
   *
   * @param self::EVENT_TYPE_* $eventType
   */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /**
   * @return self::EVENT_TYPE_*
   */
  public function getEventType()
  {
    return $this->eventType;
  }
  /**
   * Uniquely identifies a device with Firebase apps installed.
   *
   * @param string $firebaseInstallationId
   */
  public function setFirebaseInstallationId($firebaseInstallationId)
  {
    $this->firebaseInstallationId = $firebaseInstallationId;
  }
  /**
   * @return string
   */
  public function getFirebaseInstallationId()
  {
    return $this->firebaseInstallationId;
  }
  /**
   * The identifier of the first session since the last cold start. This id and
   * the session_id will be the same for app launches.
   *
   * @param string $firstSessionId
   */
  public function setFirstSessionId($firstSessionId)
  {
    $this->firstSessionId = $firstSessionId;
  }
  /**
   * @return string
   */
  public function getFirstSessionId()
  {
    return $this->firstSessionId;
  }
  /**
   * Operating system and version.
   *
   * @param OperatingSystem $operatingSystem
   */
  public function setOperatingSystem(OperatingSystem $operatingSystem)
  {
    $this->operatingSystem = $operatingSystem;
  }
  /**
   * @return OperatingSystem
   */
  public function getOperatingSystem()
  {
    return $this->operatingSystem;
  }
  /**
   * Unique identifier for the Firebase session.
   *
   * @param string $sessionId
   */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /**
   * @return string
   */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /**
   * Indicates the number of sessions since the last cold start.
   *
   * @param int $sessionIndex
   */
  public function setSessionIndex($sessionIndex)
  {
    $this->sessionIndex = $sessionIndex;
  }
  /**
   * @return int
   */
  public function getSessionIndex()
  {
    return $this->sessionIndex;
  }
  /**
   * Mobile application version numbers.
   *
   * @param Version $version
   */
  public function setVersion(Version $version)
  {
    $this->version = $version;
  }
  /**
   * @return Version
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FirebaseSessionEvent::class, 'Google_Service_FirebaseCrashlytics_FirebaseSessionEvent');
