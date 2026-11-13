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

namespace Google\Service\AndroidPublisher;

class RecentUpdateEvent extends \Google\Model
{
  /**
   * Default value. This value is not used.
   */
  public const UPDATE_TYPE_UPDATE_TYPE_UNSPECIFIED = 'UPDATE_TYPE_UNSPECIFIED';
  /**
   * The app was modified.
   */
  public const UPDATE_TYPE_MODIFICATION = 'MODIFICATION';
  /**
   * The app stopped being eligible for catalog inclusion or was removed from
   * the Play Store.
   */
  public const UPDATE_TYPE_DELETION = 'DELETION';
  /**
   * The timestamp of the update.
   *
   * @var string
   */
  public $eventTime;
  /**
   * The package name of the app.
   *
   * @var string
   */
  public $playAppPackageName;
  /**
   * The type of the update event.
   *
   * @var string
   */
  public $updateType;

  /**
   * The timestamp of the update.
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
   * The package name of the app.
   *
   * @param string $playAppPackageName
   */
  public function setPlayAppPackageName($playAppPackageName)
  {
    $this->playAppPackageName = $playAppPackageName;
  }
  /**
   * @return string
   */
  public function getPlayAppPackageName()
  {
    return $this->playAppPackageName;
  }
  /**
   * The type of the update event.
   *
   * Accepted values: UPDATE_TYPE_UNSPECIFIED, MODIFICATION, DELETION
   *
   * @param self::UPDATE_TYPE_* $updateType
   */
  public function setUpdateType($updateType)
  {
    $this->updateType = $updateType;
  }
  /**
   * @return self::UPDATE_TYPE_*
   */
  public function getUpdateType()
  {
    return $this->updateType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecentUpdateEvent::class, 'Google_Service_AndroidPublisher_RecentUpdateEvent');
