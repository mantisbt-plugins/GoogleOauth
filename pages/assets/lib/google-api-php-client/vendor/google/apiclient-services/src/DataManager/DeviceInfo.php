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

namespace Google\Service\DataManager;

class DeviceInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $brand;
  /**
   * @var string
   */
  public $browser;
  /**
   * @var string
   */
  public $browserVersion;
  /**
   * @var string
   */
  public $category;
  /**
   * @var string
   */
  public $ipAddress;
  /**
   * @var string
   */
  public $languageCode;
  /**
   * @var string
   */
  public $model;
  /**
   * @var string
   */
  public $operatingSystem;
  /**
   * @var string
   */
  public $operatingSystemVersion;
  /**
   * @var int
   */
  public $screenHeight;
  /**
   * @var int
   */
  public $screenWidth;
  /**
   * @var string
   */
  public $userAgent;

  /**
   * @param string $brand
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /**
   * @return string
   */
  public function getBrand()
  {
    return $this->brand;
  }
  /**
   * @param string $browser
   */
  public function setBrowser($browser)
  {
    $this->browser = $browser;
  }
  /**
   * @return string
   */
  public function getBrowser()
  {
    return $this->browser;
  }
  /**
   * @param string $browserVersion
   */
  public function setBrowserVersion($browserVersion)
  {
    $this->browserVersion = $browserVersion;
  }
  /**
   * @return string
   */
  public function getBrowserVersion()
  {
    return $this->browserVersion;
  }
  /**
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
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
  /**
   * @param string $operatingSystem
   */
  public function setOperatingSystem($operatingSystem)
  {
    $this->operatingSystem = $operatingSystem;
  }
  /**
   * @return string
   */
  public function getOperatingSystem()
  {
    return $this->operatingSystem;
  }
  /**
   * @param string $operatingSystemVersion
   */
  public function setOperatingSystemVersion($operatingSystemVersion)
  {
    $this->operatingSystemVersion = $operatingSystemVersion;
  }
  /**
   * @return string
   */
  public function getOperatingSystemVersion()
  {
    return $this->operatingSystemVersion;
  }
  /**
   * @param int $screenHeight
   */
  public function setScreenHeight($screenHeight)
  {
    $this->screenHeight = $screenHeight;
  }
  /**
   * @return int
   */
  public function getScreenHeight()
  {
    return $this->screenHeight;
  }
  /**
   * @param int $screenWidth
   */
  public function setScreenWidth($screenWidth)
  {
    $this->screenWidth = $screenWidth;
  }
  /**
   * @return int
   */
  public function getScreenWidth()
  {
    return $this->screenWidth;
  }
  /**
   * @param string $userAgent
   */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /**
   * @return string
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceInfo::class, 'Google_Service_DataManager_DeviceInfo');
