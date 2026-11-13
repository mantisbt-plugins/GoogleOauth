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

class Device extends \Google\Model
{
  /**
   * Unknown.
   */
  public const FORM_FACTOR_FORM_FACTOR_UNSPECIFIED = 'FORM_FACTOR_UNSPECIFIED';
  /**
   * Includes mobile phones, small foldables and other form factors not fitting
   * the other categories.
   */
  public const FORM_FACTOR_PHONE = 'PHONE';
  /**
   * Includes tablets and larger foldables.
   */
  public const FORM_FACTOR_TABLET = 'TABLET';
  /**
   * Includes desktops, laptops, Chromebooks, etc.
   */
  public const FORM_FACTOR_DESKTOP = 'DESKTOP';
  /**
   * Includes televisions and set-tops.
   */
  public const FORM_FACTOR_TV = 'TV';
  /**
   * Includes both watches and other wearables.
   */
  public const FORM_FACTOR_WATCH = 'WATCH';
  /**
   * Device processor architecture.
   *
   * @var string
   */
  public $architecture;
  /**
   * An invariant name of the manufacturer that submitted this product in its
   * most recognizable public form, e.g. "Google".
   *
   * @var string
   */
  public $companyName;
  /**
   * Full device name, suitable for passing to DeviceFilter. Format:
   * "manufacturer (model)".
   *
   * @var string
   */
  public $displayName;
  /**
   * See FormFactor message.
   *
   * @var string
   */
  public $formFactor;
  /**
   * Device brand name which is consistent with android.os.Build.BRAND.
   *
   * @var string
   */
  public $manufacturer;
  /**
   * Marketing name, most recognizable public form, e.g. "Pixel 6".
   *
   * @var string
   */
  public $marketingName;
  /**
   * The model name which is consistent with android.os.Build.MODEL, e.g.
   * ("SPH-L710", "GT-I9300").
   *
   * @var string
   */
  public $model;

  /**
   * Device processor architecture.
   *
   * @param string $architecture
   */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /**
   * @return string
   */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /**
   * An invariant name of the manufacturer that submitted this product in its
   * most recognizable public form, e.g. "Google".
   *
   * @param string $companyName
   */
  public function setCompanyName($companyName)
  {
    $this->companyName = $companyName;
  }
  /**
   * @return string
   */
  public function getCompanyName()
  {
    return $this->companyName;
  }
  /**
   * Full device name, suitable for passing to DeviceFilter. Format:
   * "manufacturer (model)".
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
   * See FormFactor message.
   *
   * Accepted values: FORM_FACTOR_UNSPECIFIED, PHONE, TABLET, DESKTOP, TV, WATCH
   *
   * @param self::FORM_FACTOR_* $formFactor
   */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /**
   * @return self::FORM_FACTOR_*
   */
  public function getFormFactor()
  {
    return $this->formFactor;
  }
  /**
   * Device brand name which is consistent with android.os.Build.BRAND.
   *
   * @param string $manufacturer
   */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /**
   * @return string
   */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /**
   * Marketing name, most recognizable public form, e.g. "Pixel 6".
   *
   * @param string $marketingName
   */
  public function setMarketingName($marketingName)
  {
    $this->marketingName = $marketingName;
  }
  /**
   * @return string
   */
  public function getMarketingName()
  {
    return $this->marketingName;
  }
  /**
   * The model name which is consistent with android.os.Build.MODEL, e.g.
   * ("SPH-L710", "GT-I9300").
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Device::class, 'Google_Service_FirebaseCrashlytics_Device');
