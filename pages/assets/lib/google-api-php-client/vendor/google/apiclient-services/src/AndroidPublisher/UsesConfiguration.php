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

class UsesConfiguration extends \Google\Model
{
  /**
   * Unspecified keyboard type.
   */
  public const REQUIRED_KEYBOARD_TYPE_KEYBOARD_TYPE_UNSPECIFIED = 'KEYBOARD_TYPE_UNSPECIFIED';
  /**
   * Undefined keyboard type.
   */
  public const REQUIRED_KEYBOARD_TYPE_KEYBOARD_TYPE_UNDEFINED = 'KEYBOARD_TYPE_UNDEFINED';
  /**
   * No keys keyboard.
   */
  public const REQUIRED_KEYBOARD_TYPE_KEYBOARD_TYPE_NO_KEYS = 'KEYBOARD_TYPE_NO_KEYS';
  /**
   * Qwerty keyboard.
   */
  public const REQUIRED_KEYBOARD_TYPE_KEYBOARD_TYPE_QWERTY = 'KEYBOARD_TYPE_QWERTY';
  /**
   * Twelve key keyboard.
   */
  public const REQUIRED_KEYBOARD_TYPE_KEYBOARD_TYPE_TWELVE_KEY = 'KEYBOARD_TYPE_TWELVE_KEY';
  /**
   * Unspecified navigation type.
   */
  public const REQUIRED_NAVIGATION_TYPE_NAVIGATION_TYPE_UNSPECIFIED = 'NAVIGATION_TYPE_UNSPECIFIED';
  /**
   * Undefined navigation type.
   */
  public const REQUIRED_NAVIGATION_TYPE_NAVIGATION_TYPE_UNDEFINED = 'NAVIGATION_TYPE_UNDEFINED';
  /**
   * No navigation.
   */
  public const REQUIRED_NAVIGATION_TYPE_NAVIGATION_TYPE_NO_NAVIGATION = 'NAVIGATION_TYPE_NO_NAVIGATION';
  /**
   * Dpad navigation.
   */
  public const REQUIRED_NAVIGATION_TYPE_NAVIGATION_TYPE_DPAD = 'NAVIGATION_TYPE_DPAD';
  /**
   * Trackball navigation.
   */
  public const REQUIRED_NAVIGATION_TYPE_NAVIGATION_TYPE_TRACKBALL = 'NAVIGATION_TYPE_TRACKBALL';
  /**
   * Wheel navigation.
   */
  public const REQUIRED_NAVIGATION_TYPE_NAVIGATION_TYPE_WHEEL = 'NAVIGATION_TYPE_WHEEL';
  /**
   * Unspecified touchscreen type.
   */
  public const REQUIRED_TOUCHSCREEN_TYPE_TOUCHSCREEN_TYPE_UNSPECIFIED = 'TOUCHSCREEN_TYPE_UNSPECIFIED';
  /**
   * Undefined touchscreen type.
   */
  public const REQUIRED_TOUCHSCREEN_TYPE_TOUCHSCREEN_TYPE_UNDEFINED = 'TOUCHSCREEN_TYPE_UNDEFINED';
  /**
   * No touchscreen.
   */
  public const REQUIRED_TOUCHSCREEN_TYPE_TOUCHSCREEN_TYPE_NO_TOUCHSCREEN = 'TOUCHSCREEN_TYPE_NO_TOUCHSCREEN';
  /**
   * Stylus touchscreen.
   */
  public const REQUIRED_TOUCHSCREEN_TYPE_TOUCHSCREEN_TYPE_STYLUS = 'TOUCHSCREEN_TYPE_STYLUS';
  /**
   * Finger touchscreen.
   */
  public const REQUIRED_TOUCHSCREEN_TYPE_TOUCHSCREEN_TYPE_FINGER = 'TOUCHSCREEN_TYPE_FINGER';
  /**
   * The type of keyboard required.
   *
   * @var string
   */
  public $requiredKeyboardType;
  /**
   * The navigation device required.
   *
   * @var string
   */
  public $requiredNavigationType;
  /**
   * The type of touchscreen required.
   *
   * @var string
   */
  public $requiredTouchscreenType;
  /**
   * Whether or not the application requires a five-way navigation control.
   *
   * @var bool
   */
  public $requiresFiveWayNavigation;
  /**
   * Whether or not the application requires a hardware keyboard.
   *
   * @var bool
   */
  public $requiresHardwareKeyboard;

  /**
   * The type of keyboard required.
   *
   * Accepted values: KEYBOARD_TYPE_UNSPECIFIED, KEYBOARD_TYPE_UNDEFINED,
   * KEYBOARD_TYPE_NO_KEYS, KEYBOARD_TYPE_QWERTY, KEYBOARD_TYPE_TWELVE_KEY
   *
   * @param self::REQUIRED_KEYBOARD_TYPE_* $requiredKeyboardType
   */
  public function setRequiredKeyboardType($requiredKeyboardType)
  {
    $this->requiredKeyboardType = $requiredKeyboardType;
  }
  /**
   * @return self::REQUIRED_KEYBOARD_TYPE_*
   */
  public function getRequiredKeyboardType()
  {
    return $this->requiredKeyboardType;
  }
  /**
   * The navigation device required.
   *
   * Accepted values: NAVIGATION_TYPE_UNSPECIFIED, NAVIGATION_TYPE_UNDEFINED,
   * NAVIGATION_TYPE_NO_NAVIGATION, NAVIGATION_TYPE_DPAD,
   * NAVIGATION_TYPE_TRACKBALL, NAVIGATION_TYPE_WHEEL
   *
   * @param self::REQUIRED_NAVIGATION_TYPE_* $requiredNavigationType
   */
  public function setRequiredNavigationType($requiredNavigationType)
  {
    $this->requiredNavigationType = $requiredNavigationType;
  }
  /**
   * @return self::REQUIRED_NAVIGATION_TYPE_*
   */
  public function getRequiredNavigationType()
  {
    return $this->requiredNavigationType;
  }
  /**
   * The type of touchscreen required.
   *
   * Accepted values: TOUCHSCREEN_TYPE_UNSPECIFIED, TOUCHSCREEN_TYPE_UNDEFINED,
   * TOUCHSCREEN_TYPE_NO_TOUCHSCREEN, TOUCHSCREEN_TYPE_STYLUS,
   * TOUCHSCREEN_TYPE_FINGER
   *
   * @param self::REQUIRED_TOUCHSCREEN_TYPE_* $requiredTouchscreenType
   */
  public function setRequiredTouchscreenType($requiredTouchscreenType)
  {
    $this->requiredTouchscreenType = $requiredTouchscreenType;
  }
  /**
   * @return self::REQUIRED_TOUCHSCREEN_TYPE_*
   */
  public function getRequiredTouchscreenType()
  {
    return $this->requiredTouchscreenType;
  }
  /**
   * Whether or not the application requires a five-way navigation control.
   *
   * @param bool $requiresFiveWayNavigation
   */
  public function setRequiresFiveWayNavigation($requiresFiveWayNavigation)
  {
    $this->requiresFiveWayNavigation = $requiresFiveWayNavigation;
  }
  /**
   * @return bool
   */
  public function getRequiresFiveWayNavigation()
  {
    return $this->requiresFiveWayNavigation;
  }
  /**
   * Whether or not the application requires a hardware keyboard.
   *
   * @param bool $requiresHardwareKeyboard
   */
  public function setRequiresHardwareKeyboard($requiresHardwareKeyboard)
  {
    $this->requiresHardwareKeyboard = $requiresHardwareKeyboard;
  }
  /**
   * @return bool
   */
  public function getRequiresHardwareKeyboard()
  {
    return $this->requiresHardwareKeyboard;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsesConfiguration::class, 'Google_Service_AndroidPublisher_UsesConfiguration');
