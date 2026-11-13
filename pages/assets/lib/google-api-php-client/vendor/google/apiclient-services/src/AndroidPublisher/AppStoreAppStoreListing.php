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

class AppStoreAppStoreListing extends \Google\Collection
{
  protected $collection_key = 'screenshotId';
  /**
   * Required. Image ID generated from UploadImage for the main app icon.
   *
   * @var string
   */
  public $appIconId;
  /**
   * Required. The title of the app.
   *
   * @var string
   */
  public $appName;
  /**
   * Required. Comprehensive description text about the app.
   *
   * @var string
   */
  public $fullDescription;
  /**
   * Required. Language code (e.g., "en-US") of the listing.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Required. Multiple image IDs for screenshot galleries.
   *
   * @var string[]
   */
  public $screenshotId;
  /**
   * Optional. Quick summary about the app.
   *
   * @var string
   */
  public $shortDescription;
  /**
   * Optional. Link to a video about the app.
   *
   * @var string
   */
  public $videoLink;

  /**
   * Required. Image ID generated from UploadImage for the main app icon.
   *
   * @param string $appIconId
   */
  public function setAppIconId($appIconId)
  {
    $this->appIconId = $appIconId;
  }
  /**
   * @return string
   */
  public function getAppIconId()
  {
    return $this->appIconId;
  }
  /**
   * Required. The title of the app.
   *
   * @param string $appName
   */
  public function setAppName($appName)
  {
    $this->appName = $appName;
  }
  /**
   * @return string
   */
  public function getAppName()
  {
    return $this->appName;
  }
  /**
   * Required. Comprehensive description text about the app.
   *
   * @param string $fullDescription
   */
  public function setFullDescription($fullDescription)
  {
    $this->fullDescription = $fullDescription;
  }
  /**
   * @return string
   */
  public function getFullDescription()
  {
    return $this->fullDescription;
  }
  /**
   * Required. Language code (e.g., "en-US") of the listing.
   *
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
   * Required. Multiple image IDs for screenshot galleries.
   *
   * @param string[] $screenshotId
   */
  public function setScreenshotId($screenshotId)
  {
    $this->screenshotId = $screenshotId;
  }
  /**
   * @return string[]
   */
  public function getScreenshotId()
  {
    return $this->screenshotId;
  }
  /**
   * Optional. Quick summary about the app.
   *
   * @param string $shortDescription
   */
  public function setShortDescription($shortDescription)
  {
    $this->shortDescription = $shortDescription;
  }
  /**
   * @return string
   */
  public function getShortDescription()
  {
    return $this->shortDescription;
  }
  /**
   * Optional. Link to a video about the app.
   *
   * @param string $videoLink
   */
  public function setVideoLink($videoLink)
  {
    $this->videoLink = $videoLink;
  }
  /**
   * @return string
   */
  public function getVideoLink()
  {
    return $this->videoLink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppStoreAppStoreListing::class, 'Google_Service_AndroidPublisher_AppStoreAppStoreListing');
