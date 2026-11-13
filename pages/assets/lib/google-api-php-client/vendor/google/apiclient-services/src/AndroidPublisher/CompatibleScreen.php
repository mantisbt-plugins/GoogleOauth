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

class CompatibleScreen extends \Google\Model
{
  /**
   * Unspecified density.
   */
  public const DENSITY_DENSITY_UNSPECIFIED = 'DENSITY_UNSPECIFIED';
  /**
   * No density.
   */
  public const DENSITY_DENSITY_NODPI = 'DENSITY_NODPI';
  /**
   * Low density.
   */
  public const DENSITY_DENSITY_LDPI = 'DENSITY_LDPI';
  /**
   * Medium density.
   */
  public const DENSITY_DENSITY_MDPI = 'DENSITY_MDPI';
  /**
   * TV density.
   */
  public const DENSITY_DENSITY_TVDPI = 'DENSITY_TVDPI';
  /**
   * High density.
   */
  public const DENSITY_DENSITY_HDPI = 'DENSITY_HDPI';
  /**
   * 280 dpi.
   */
  public const DENSITY_DENSITY_280 = 'DENSITY_280';
  /**
   * Extra high density.
   */
  public const DENSITY_DENSITY_XHDPI = 'DENSITY_XHDPI';
  /**
   * 360 dpi.
   */
  public const DENSITY_DENSITY_360 = 'DENSITY_360';
  /**
   * 400 dpi.
   */
  public const DENSITY_DENSITY_400 = 'DENSITY_400';
  /**
   * 420 dpi.
   */
  public const DENSITY_DENSITY_420 = 'DENSITY_420';
  /**
   * Extra extra high density.
   */
  public const DENSITY_DENSITY_XXHDPI = 'DENSITY_XXHDPI';
  /**
   * 560 dpi.
   */
  public const DENSITY_DENSITY_560 = 'DENSITY_560';
  /**
   * Extra extra extra high density.
   */
  public const DENSITY_DENSITY_XXXHDPI = 'DENSITY_XXXHDPI';
  /**
   * Unspecified screen size.
   */
  public const SCREEN_SIZE_SCREEN_SIZE_UNSPECIFIED = 'SCREEN_SIZE_UNSPECIFIED';
  /**
   * Small screen size.
   */
  public const SCREEN_SIZE_SCREEN_SIZE_SMALL = 'SCREEN_SIZE_SMALL';
  /**
   * Normal screen size.
   */
  public const SCREEN_SIZE_SCREEN_SIZE_NORMAL = 'SCREEN_SIZE_NORMAL';
  /**
   * Large screen size.
   */
  public const SCREEN_SIZE_SCREEN_SIZE_LARGE = 'SCREEN_SIZE_LARGE';
  /**
   * Extra large screen size.
   */
  public const SCREEN_SIZE_SCREEN_SIZE_EXTRA_LARGE = 'SCREEN_SIZE_EXTRA_LARGE';
  /**
   * Screen density.
   *
   * @var string
   */
  public $density;
  /**
   * The screen size.
   *
   * @var string
   */
  public $screenSize;

  /**
   * Screen density.
   *
   * Accepted values: DENSITY_UNSPECIFIED, DENSITY_NODPI, DENSITY_LDPI,
   * DENSITY_MDPI, DENSITY_TVDPI, DENSITY_HDPI, DENSITY_280, DENSITY_XHDPI,
   * DENSITY_360, DENSITY_400, DENSITY_420, DENSITY_XXHDPI, DENSITY_560,
   * DENSITY_XXXHDPI
   *
   * @param self::DENSITY_* $density
   */
  public function setDensity($density)
  {
    $this->density = $density;
  }
  /**
   * @return self::DENSITY_*
   */
  public function getDensity()
  {
    return $this->density;
  }
  /**
   * The screen size.
   *
   * Accepted values: SCREEN_SIZE_UNSPECIFIED, SCREEN_SIZE_SMALL,
   * SCREEN_SIZE_NORMAL, SCREEN_SIZE_LARGE, SCREEN_SIZE_EXTRA_LARGE
   *
   * @param self::SCREEN_SIZE_* $screenSize
   */
  public function setScreenSize($screenSize)
  {
    $this->screenSize = $screenSize;
  }
  /**
   * @return self::SCREEN_SIZE_*
   */
  public function getScreenSize()
  {
    return $this->screenSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompatibleScreen::class, 'Google_Service_AndroidPublisher_CompatibleScreen');
