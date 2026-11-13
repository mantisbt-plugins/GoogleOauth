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

class CatalogDeviceSelector extends \Google\Collection
{
  /**
   * Unspecified device type selector.
   */
  public const DEVICE_TYPE_SELECTOR_DEVICE_TYPE_SELECTOR_UNSPECIFIED = 'DEVICE_TYPE_SELECTOR_UNSPECIFIED';
  /**
   * Android Go device type.
   */
  public const DEVICE_TYPE_SELECTOR_ANDROID_GO = 'ANDROID_GO';
  protected $collection_key = 'socSelectors';
  /**
   * The device type selector.
   *
   * @var string
   */
  public $deviceTypeSelector;
  protected $ramSelectorType = RamSelector::class;
  protected $ramSelectorDataType = '';
  protected $socSelectorsType = SocSelector::class;
  protected $socSelectorsDataType = 'array';

  /**
   * The device type selector.
   *
   * Accepted values: DEVICE_TYPE_SELECTOR_UNSPECIFIED, ANDROID_GO
   *
   * @param self::DEVICE_TYPE_SELECTOR_* $deviceTypeSelector
   */
  public function setDeviceTypeSelector($deviceTypeSelector)
  {
    $this->deviceTypeSelector = $deviceTypeSelector;
  }
  /**
   * @return self::DEVICE_TYPE_SELECTOR_*
   */
  public function getDeviceTypeSelector()
  {
    return $this->deviceTypeSelector;
  }
  /**
   * Defines a RAM selector for a device.
   *
   * @param RamSelector $ramSelector
   */
  public function setRamSelector(RamSelector $ramSelector)
  {
    $this->ramSelector = $ramSelector;
  }
  /**
   * @return RamSelector
   */
  public function getRamSelector()
  {
    return $this->ramSelector;
  }
  /**
   * The SOC selectors. A device matches the device selector if it matches any
   * of the SOC selectors.
   *
   * @param SocSelector[] $socSelectors
   */
  public function setSocSelectors($socSelectors)
  {
    $this->socSelectors = $socSelectors;
  }
  /**
   * @return SocSelector[]
   */
  public function getSocSelectors()
  {
    return $this->socSelectors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogDeviceSelector::class, 'Google_Service_AndroidPublisher_CatalogDeviceSelector');
