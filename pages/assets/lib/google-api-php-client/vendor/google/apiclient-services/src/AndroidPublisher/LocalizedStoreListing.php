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

class LocalizedStoreListing extends \Google\Model
{
  /**
   * The name of the app in this localization.
   *
   * @var string
   */
  public $appName;
  protected $featureGraphicType = ImageAsset::class;
  protected $featureGraphicDataType = '';
  /**
   * A longer description of the app in this localization.
   *
   * @var string
   */
  public $fullDescription;
  protected $iconType = ImageAsset::class;
  protected $iconDataType = '';
  /**
   * The BCP-47 language code for this localization.
   *
   * @var string
   */
  public $languageCode;
  protected $phoneScreenshotsType = ScreenshotSet::class;
  protected $phoneScreenshotsDataType = '';
  /**
   * A short description of the app in this localization.
   *
   * @var string
   */
  public $shortDescription;
  protected $tabletRegularScreenshotsType = ScreenshotSet::class;
  protected $tabletRegularScreenshotsDataType = '';
  protected $tabletSmallScreenshotsType = ScreenshotSet::class;
  protected $tabletSmallScreenshotsDataType = '';
  protected $videoType = VideoAsset::class;
  protected $videoDataType = '';

  /**
   * The name of the app in this localization.
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
   * The feature graphic of the app.
   *
   * @param ImageAsset $featureGraphic
   */
  public function setFeatureGraphic(ImageAsset $featureGraphic)
  {
    $this->featureGraphic = $featureGraphic;
  }
  /**
   * @return ImageAsset
   */
  public function getFeatureGraphic()
  {
    return $this->featureGraphic;
  }
  /**
   * A longer description of the app in this localization.
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
   * The icon of the app.
   *
   * @param ImageAsset $icon
   */
  public function setIcon(ImageAsset $icon)
  {
    $this->icon = $icon;
  }
  /**
   * @return ImageAsset
   */
  public function getIcon()
  {
    return $this->icon;
  }
  /**
   * The BCP-47 language code for this localization.
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
   * The phone screenshots of the app.
   *
   * @param ScreenshotSet $phoneScreenshots
   */
  public function setPhoneScreenshots(ScreenshotSet $phoneScreenshots)
  {
    $this->phoneScreenshots = $phoneScreenshots;
  }
  /**
   * @return ScreenshotSet
   */
  public function getPhoneScreenshots()
  {
    return $this->phoneScreenshots;
  }
  /**
   * A short description of the app in this localization.
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
   * The regular tablet screenshots of the app.
   *
   * @param ScreenshotSet $tabletRegularScreenshots
   */
  public function setTabletRegularScreenshots(ScreenshotSet $tabletRegularScreenshots)
  {
    $this->tabletRegularScreenshots = $tabletRegularScreenshots;
  }
  /**
   * @return ScreenshotSet
   */
  public function getTabletRegularScreenshots()
  {
    return $this->tabletRegularScreenshots;
  }
  /**
   * The small tablet screenshots of the app.
   *
   * @param ScreenshotSet $tabletSmallScreenshots
   */
  public function setTabletSmallScreenshots(ScreenshotSet $tabletSmallScreenshots)
  {
    $this->tabletSmallScreenshots = $tabletSmallScreenshots;
  }
  /**
   * @return ScreenshotSet
   */
  public function getTabletSmallScreenshots()
  {
    return $this->tabletSmallScreenshots;
  }
  /**
   * The video of the app.
   *
   * @param VideoAsset $video
   */
  public function setVideo(VideoAsset $video)
  {
    $this->video = $video;
  }
  /**
   * @return VideoAsset
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocalizedStoreListing::class, 'Google_Service_AndroidPublisher_LocalizedStoreListing');
