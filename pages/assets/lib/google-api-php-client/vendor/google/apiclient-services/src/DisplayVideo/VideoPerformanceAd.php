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

namespace Google\Service\DisplayVideo;

class VideoPerformanceAd extends \Google\Collection
{
  protected $collection_key = 'videos';
  /**
   * Optional. The list of text assets shown on the call-to-action button. Must
   * be set if headlines is set.
   *
   * @var string[]
   */
  public $actionButtonLabels;
  protected $companionBannersType = ImageAsset::class;
  protected $companionBannersDataType = 'array';
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @var string[]
   */
  public $customParameters;
  /**
   * Optional. The list of descriptions shown on the call-to-action banner. Must
   * be set unless the parent line item's lineItemType is
   * `LINE_ITEM_TYPE_YOUTUBE_AND_PARTNERS_NON_SKIPPABLE`, in which case this
   * field cannot be set.
   *
   * @var string[]
   */
  public $descriptions;
  /**
   * Optional. The first piece after the domain in the display URL.
   *
   * @var string
   */
  public $displayUrlBreadcrumb1;
  /**
   * Optional. The second piece after the domain in the display URL. Can only be
   * set if displayUrlBreadcrumb1 is also set.
   *
   * @var string
   */
  public $displayUrlBreadcrumb2;
  /**
   * Output only. The domain of the display URL.
   *
   * @var string
   */
  public $domain;
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the ad.
   *
   * @var string
   */
  public $finalUrl;
  /**
   * Optional. The list of headlines shown on the call-to-action banner.
   *
   * @var string[]
   */
  public $headlines;
  /**
   * Optional. The list of long headlines shown on the call-to-action banner.
   * Must be set unless the parent line item's lineItemType is
   * `LINE_ITEM_TYPE_YOUTUBE_AND_PARTNERS_NON_SKIPPABLE`, in which case this
   * field cannot be set.
   *
   * @var string[]
   */
  public $longHeadlines;
  /**
   * Output only. The URL address loaded in the background for tracking
   * purposes. In v4 and earlier, this field represents the tracking URL
   * specified by the user manually. This can be found at
   * userSpecifiedTrackingUrl in v5.
   *
   * @var string
   */
  public $trackingUrl;
  protected $videosType = YoutubeVideoDetails::class;
  protected $videosDataType = 'array';

  /**
   * Optional. The list of text assets shown on the call-to-action button. Must
   * be set if headlines is set.
   *
   * @param string[] $actionButtonLabels
   */
  public function setActionButtonLabels($actionButtonLabels)
  {
    $this->actionButtonLabels = $actionButtonLabels;
  }
  /**
   * @return string[]
   */
  public function getActionButtonLabels()
  {
    return $this->actionButtonLabels;
  }
  /**
   * Optional. The list of companion banners used by this ad.
   *
   * @param ImageAsset[] $companionBanners
   */
  public function setCompanionBanners($companionBanners)
  {
    $this->companionBanners = $companionBanners;
  }
  /**
   * @return ImageAsset[]
   */
  public function getCompanionBanners()
  {
    return $this->companionBanners;
  }
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @param string[] $customParameters
   */
  public function setCustomParameters($customParameters)
  {
    $this->customParameters = $customParameters;
  }
  /**
   * @return string[]
   */
  public function getCustomParameters()
  {
    return $this->customParameters;
  }
  /**
   * Optional. The list of descriptions shown on the call-to-action banner. Must
   * be set unless the parent line item's lineItemType is
   * `LINE_ITEM_TYPE_YOUTUBE_AND_PARTNERS_NON_SKIPPABLE`, in which case this
   * field cannot be set.
   *
   * @param string[] $descriptions
   */
  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  /**
   * @return string[]
   */
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  /**
   * Optional. The first piece after the domain in the display URL.
   *
   * @param string $displayUrlBreadcrumb1
   */
  public function setDisplayUrlBreadcrumb1($displayUrlBreadcrumb1)
  {
    $this->displayUrlBreadcrumb1 = $displayUrlBreadcrumb1;
  }
  /**
   * @return string
   */
  public function getDisplayUrlBreadcrumb1()
  {
    return $this->displayUrlBreadcrumb1;
  }
  /**
   * Optional. The second piece after the domain in the display URL. Can only be
   * set if displayUrlBreadcrumb1 is also set.
   *
   * @param string $displayUrlBreadcrumb2
   */
  public function setDisplayUrlBreadcrumb2($displayUrlBreadcrumb2)
  {
    $this->displayUrlBreadcrumb2 = $displayUrlBreadcrumb2;
  }
  /**
   * @return string
   */
  public function getDisplayUrlBreadcrumb2()
  {
    return $this->displayUrlBreadcrumb2;
  }
  /**
   * Output only. The domain of the display URL.
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the ad.
   *
   * @param string $finalUrl
   */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /**
   * @return string
   */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /**
   * Optional. The list of headlines shown on the call-to-action banner.
   *
   * @param string[] $headlines
   */
  public function setHeadlines($headlines)
  {
    $this->headlines = $headlines;
  }
  /**
   * @return string[]
   */
  public function getHeadlines()
  {
    return $this->headlines;
  }
  /**
   * Optional. The list of long headlines shown on the call-to-action banner.
   * Must be set unless the parent line item's lineItemType is
   * `LINE_ITEM_TYPE_YOUTUBE_AND_PARTNERS_NON_SKIPPABLE`, in which case this
   * field cannot be set.
   *
   * @param string[] $longHeadlines
   */
  public function setLongHeadlines($longHeadlines)
  {
    $this->longHeadlines = $longHeadlines;
  }
  /**
   * @return string[]
   */
  public function getLongHeadlines()
  {
    return $this->longHeadlines;
  }
  /**
   * Output only. The URL address loaded in the background for tracking
   * purposes. In v4 and earlier, this field represents the tracking URL
   * specified by the user manually. This can be found at
   * userSpecifiedTrackingUrl in v5.
   *
   * @param string $trackingUrl
   */
  public function setTrackingUrl($trackingUrl)
  {
    $this->trackingUrl = $trackingUrl;
  }
  /**
   * @return string
   */
  public function getTrackingUrl()
  {
    return $this->trackingUrl;
  }
  /**
   * Required. The list of YouTube video assets used by this ad.
   *
   * @param YoutubeVideoDetails[] $videos
   */
  public function setVideos($videos)
  {
    $this->videos = $videos;
  }
  /**
   * @return YoutubeVideoDetails[]
   */
  public function getVideos()
  {
    return $this->videos;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoPerformanceAd::class, 'Google_Service_DisplayVideo_VideoPerformanceAd');
