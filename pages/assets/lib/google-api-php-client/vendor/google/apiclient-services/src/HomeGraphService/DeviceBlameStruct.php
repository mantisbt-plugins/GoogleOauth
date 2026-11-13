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

class DeviceBlameStruct extends \Google\Model
{
  /**
   * Indicates an unspecified device blame type.
   */
  public const BLAME_TYPE_DEVICE_BLAME_TYPE_ENUM_UNSPECIFIED = 'DEVICE_BLAME_TYPE_ENUM_UNSPECIFIED';
  /**
   * Indicates lock interaction.
   */
  public const BLAME_TYPE_LOCK = 'LOCK';
  /**
   * Indicates unlock interaction.
   */
  public const BLAME_TYPE_UNLOCK = 'UNLOCK';
  /**
   * Indicates motion detection.
   */
  public const BLAME_TYPE_MOTION_DETECTION = 'MOTION_DETECTION';
  /**
   * Indicates touch interaction.
   */
  public const BLAME_TYPE_TOUCH_INTERACTION = 'TOUCH_INTERACTION';
  /**
   * Indicates voice interaction.
   */
  public const BLAME_TYPE_VOICE_INTERACTION = 'VOICE_INTERACTION';
  /**
   * Required. Specifies the device blame type.
   *
   * @var string
   */
  public $blameType;

  /**
   * Required. Specifies the device blame type.
   *
   * Accepted values: DEVICE_BLAME_TYPE_ENUM_UNSPECIFIED, LOCK, UNLOCK,
   * MOTION_DETECTION, TOUCH_INTERACTION, VOICE_INTERACTION
   *
   * @param self::BLAME_TYPE_* $blameType
   */
  public function setBlameType($blameType)
  {
    $this->blameType = $blameType;
  }
  /**
   * @return self::BLAME_TYPE_*
   */
  public function getBlameType()
  {
    return $this->blameType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceBlameStruct::class, 'Google_Service_HomeGraphService_DeviceBlameStruct');
