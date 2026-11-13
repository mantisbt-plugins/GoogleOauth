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

class AdEvent extends \Google\Model
{
  public const AD_FORMAT_AD_FORMAT_UNSPECIFIED = 'AD_FORMAT_UNSPECIFIED';
  public const AD_FORMAT_AD_FORMAT_AR = 'AD_FORMAT_AR';
  public const AD_FORMAT_AD_FORMAT_AUDIO = 'AD_FORMAT_AUDIO';
  public const AD_FORMAT_AD_FORMAT_BANNER = 'AD_FORMAT_BANNER';
  public const AD_FORMAT_AD_FORMAT_BUMPER = 'AD_FORMAT_BUMPER';
  public const AD_FORMAT_AD_FORMAT_CAROUSEL = 'AD_FORMAT_CAROUSEL';
  public const AD_FORMAT_AD_FORMAT_COLLECTION = 'AD_FORMAT_COLLECTION';
  public const AD_FORMAT_AD_FORMAT_IMAGE = 'AD_FORMAT_IMAGE';
  public const AD_FORMAT_AD_FORMAT_INTERACTIVE = 'AD_FORMAT_INTERACTIVE';
  public const AD_FORMAT_AD_FORMAT_INTERSTITIAL = 'AD_FORMAT_INTERSTITIAL';
  public const AD_FORMAT_AD_FORMAT_IN_FEED = 'AD_FORMAT_IN_FEED';
  public const AD_FORMAT_AD_FORMAT_IN_STREAM = 'AD_FORMAT_IN_STREAM';
  public const AD_FORMAT_AD_FORMAT_IN_STREAM_SKIPPABLE = 'AD_FORMAT_IN_STREAM_SKIPPABLE';
  public const AD_FORMAT_AD_FORMAT_IN_STREAM_NON_SKIPPABLE = 'AD_FORMAT_IN_STREAM_NON_SKIPPABLE';
  public const AD_FORMAT_AD_FORMAT_NATIVE = 'AD_FORMAT_NATIVE';
  public const AD_FORMAT_AD_FORMAT_SHORTS = 'AD_FORMAT_SHORTS';
  public const AD_FORMAT_AD_FORMAT_STORY = 'AD_FORMAT_STORY';
  public const AD_FORMAT_AD_FORMAT_SPONSORED = 'AD_FORMAT_SPONSORED';
  public const AD_FORMAT_AD_FORMAT_VIDEO = 'AD_FORMAT_VIDEO';
  public const AD_PLACEMENT_AD_PLACEMENT_UNSPECIFIED = 'AD_PLACEMENT_UNSPECIFIED';
  public const AD_PLACEMENT_AD_PLACEMENT_DISCOVER = 'AD_PLACEMENT_DISCOVER';
  public const AD_PLACEMENT_AD_PLACEMENT_FEED = 'AD_PLACEMENT_FEED';
  public const AD_PLACEMENT_AD_PLACEMENT_FOOTER = 'AD_PLACEMENT_FOOTER';
  public const AD_PLACEMENT_AD_PLACEMENT_HEADER = 'AD_PLACEMENT_HEADER';
  public const AD_PLACEMENT_AD_PLACEMENT_HOME = 'AD_PLACEMENT_HOME';
  public const AD_PLACEMENT_AD_PLACEMENT_IN_CONTENT = 'AD_PLACEMENT_IN_CONTENT';
  public const AD_PLACEMENT_AD_PLACEMENT_PROMOTED = 'AD_PLACEMENT_PROMOTED';
  public const AD_PLACEMENT_AD_PLACEMENT_SEARCH = 'AD_PLACEMENT_SEARCH';
  public const AD_PLACEMENT_AD_PLACEMENT_STORY = 'AD_PLACEMENT_STORY';
  public const AD_TYPE_AD_TYPE_UNSPECIFIED = 'AD_TYPE_UNSPECIFIED';
  public const AD_TYPE_AD_TYPE_DISPLAY = 'AD_TYPE_DISPLAY';
  public const AD_TYPE_AD_TYPE_TEXT = 'AD_TYPE_TEXT';
  public const AD_TYPE_AD_TYPE_IMAGE = 'AD_TYPE_IMAGE';
  public const AD_TYPE_AD_TYPE_RICH_MEDIA = 'AD_TYPE_RICH_MEDIA';
  public const AD_TYPE_AD_TYPE_HTML = 'AD_TYPE_HTML';
  public const AD_TYPE_AD_TYPE_AUDIO = 'AD_TYPE_AUDIO';
  public const AD_TYPE_AD_TYPE_VIDEO = 'AD_TYPE_VIDEO';
  public const ATTRIBUTION_HINT_ATTRIBUTION_HINT_UNSPECIFIED = 'ATTRIBUTION_HINT_UNSPECIFIED';
  public const ATTRIBUTION_HINT_ATTRIBUTION_HINT_CONVERTED = 'ATTRIBUTION_HINT_CONVERTED';
  public const ATTRIBUTION_HINT_ATTRIBUTION_HINT_NOT_CONVERTED = 'ATTRIBUTION_HINT_NOT_CONVERTED';
  public const EVENT_SUBTYPE_EVENT_SUBTYPE_UNSPECIFIED = 'EVENT_SUBTYPE_UNSPECIFIED';
  public const EVENT_SUBTYPE_EVENT_SUBTYPE_IMPRESSION = 'EVENT_SUBTYPE_IMPRESSION';
  public const EVENT_SUBTYPE_EVENT_SUBTYPE_ENGAGED_VIEW = 'EVENT_SUBTYPE_ENGAGED_VIEW';
  public const EVENT_SUBTYPE_EVENT_SUBTYPE_ONSITE_CLICK = 'EVENT_SUBTYPE_ONSITE_CLICK';
  public const EVENT_SUBTYPE_EVENT_SUBTYPE_OUTBOUND_CLICK = 'EVENT_SUBTYPE_OUTBOUND_CLICK';
  public const EVENT_TYPE_EVENT_TYPE_UNSPECIFIED = 'EVENT_TYPE_UNSPECIFIED';
  public const EVENT_TYPE_EVENT_TYPE_VIEW = 'EVENT_TYPE_VIEW';
  public const EVENT_TYPE_EVENT_TYPE_CLICK = 'EVENT_TYPE_CLICK';
  public const PLATFORM_PLATFORM_UNSPECIFIED = 'PLATFORM_UNSPECIFIED';
  public const PLATFORM_PLATFORM_IOS = 'PLATFORM_IOS';
  public const PLATFORM_PLATFORM_ANDROID = 'PLATFORM_ANDROID';
  public const PLATFORM_PLATFORM_WEB = 'PLATFORM_WEB';
  public const PLATFORM_TYPE_PLATFORM_TYPE_UNSPECIFIED = 'PLATFORM_TYPE_UNSPECIFIED';
  public const PLATFORM_TYPE_PLATFORM_TYPE_MOBILE = 'PLATFORM_TYPE_MOBILE';
  public const PLATFORM_TYPE_PLATFORM_TYPE_DESKTOP = 'PLATFORM_TYPE_DESKTOP';
  public const PLATFORM_TYPE_PLATFORM_TYPE_CTV = 'PLATFORM_TYPE_CTV';
  public const PLATFORM_TYPE_PLATFORM_TYPE_PHONE = 'PLATFORM_TYPE_PHONE';
  public const PLATFORM_TYPE_PLATFORM_TYPE_TABLET = 'PLATFORM_TYPE_TABLET';
  public const TARGETING_TYPE_TARGETING_TYPE_UNSPECIFIED = 'TARGETING_TYPE_UNSPECIFIED';
  public const TARGETING_TYPE_TARGETING_TYPE_AUDIENCE = 'TARGETING_TYPE_AUDIENCE';
  public const TARGETING_TYPE_TARGETING_TYPE_CONTEXTUAL = 'TARGETING_TYPE_CONTEXTUAL';
  public const TARGETING_TYPE_TARGETING_TYPE_DEMOGRAPHIC = 'TARGETING_TYPE_DEMOGRAPHIC';
  public const TARGETING_TYPE_TARGETING_TYPE_DEVICE = 'TARGETING_TYPE_DEVICE';
  public const TARGETING_TYPE_TARGETING_TYPE_GEO = 'TARGETING_TYPE_GEO';
  public const TARGETING_TYPE_TARGETING_TYPE_INTEREST = 'TARGETING_TYPE_INTEREST';
  public const TARGETING_TYPE_TARGETING_TYPE_PURCHASE_INTENT = 'TARGETING_TYPE_PURCHASE_INTENT';
  public const TARGETING_TYPE_TARGETING_TYPE_REMARKETING = 'TARGETING_TYPE_REMARKETING';
  /**
   * @var string
   */
  public $adFormat;
  /**
   * @var string
   */
  public $adFormatString;
  /**
   * @var string
   */
  public $adGroupId;
  /**
   * @var int
   */
  public $adHeight;
  /**
   * @var string
   */
  public $adId;
  /**
   * @var string
   */
  public $adPlacement;
  /**
   * @var string
   */
  public $adPlacementString;
  /**
   * @var string
   */
  public $adType;
  /**
   * @var string
   */
  public $adTypeString;
  /**
   * @var int
   */
  public $adWidth;
  /**
   * @var string
   */
  public $advertiserId;
  /**
   * @var string
   */
  public $attributionHint;
  /**
   * @var string
   */
  public $campaignId;
  /**
   * @var string
   */
  public $campaignName;
  protected $deviceInfoType = DeviceInfo::class;
  protected $deviceInfoDataType = '';
  /**
   * @var string
   */
  public $eventId;
  /**
   * @var string
   */
  public $eventSubtype;
  /**
   * @var string
   */
  public $eventSubtypeString;
  /**
   * @var string
   */
  public $eventType;
  /**
   * @var string
   */
  public $ipAddress;
  /**
   * @var bool
   */
  public $measurementAllowed;
  /**
   * @var string
   */
  public $medium;
  /**
   * @var string
   */
  public $mobileDeviceId;
  /**
   * @var string
   */
  public $platform;
  /**
   * @var string
   */
  public $platformString;
  /**
   * @var string
   */
  public $platformType;
  /**
   * @var string
   */
  public $platformTypeString;
  /**
   * @var string
   */
  public $regionCode;
  /**
   * @var string
   */
  public $source;
  /**
   * @var string
   */
  public $targetingType;
  /**
   * @var string
   */
  public $targetingTypeString;
  /**
   * @var string
   */
  public $timestamp;
  protected $userDataType = UserData::class;
  protected $userDataDataType = '';
  protected $viewabilityInfoType = ViewabilityInfo::class;
  protected $viewabilityInfoDataType = '';

  /**
   * @param self::AD_FORMAT_* $adFormat
   */
  public function setAdFormat($adFormat)
  {
    $this->adFormat = $adFormat;
  }
  /**
   * @return self::AD_FORMAT_*
   */
  public function getAdFormat()
  {
    return $this->adFormat;
  }
  /**
   * @param string $adFormatString
   */
  public function setAdFormatString($adFormatString)
  {
    $this->adFormatString = $adFormatString;
  }
  /**
   * @return string
   */
  public function getAdFormatString()
  {
    return $this->adFormatString;
  }
  /**
   * @param string $adGroupId
   */
  public function setAdGroupId($adGroupId)
  {
    $this->adGroupId = $adGroupId;
  }
  /**
   * @return string
   */
  public function getAdGroupId()
  {
    return $this->adGroupId;
  }
  /**
   * @param int $adHeight
   */
  public function setAdHeight($adHeight)
  {
    $this->adHeight = $adHeight;
  }
  /**
   * @return int
   */
  public function getAdHeight()
  {
    return $this->adHeight;
  }
  /**
   * @param string $adId
   */
  public function setAdId($adId)
  {
    $this->adId = $adId;
  }
  /**
   * @return string
   */
  public function getAdId()
  {
    return $this->adId;
  }
  /**
   * @param self::AD_PLACEMENT_* $adPlacement
   */
  public function setAdPlacement($adPlacement)
  {
    $this->adPlacement = $adPlacement;
  }
  /**
   * @return self::AD_PLACEMENT_*
   */
  public function getAdPlacement()
  {
    return $this->adPlacement;
  }
  /**
   * @param string $adPlacementString
   */
  public function setAdPlacementString($adPlacementString)
  {
    $this->adPlacementString = $adPlacementString;
  }
  /**
   * @return string
   */
  public function getAdPlacementString()
  {
    return $this->adPlacementString;
  }
  /**
   * @param self::AD_TYPE_* $adType
   */
  public function setAdType($adType)
  {
    $this->adType = $adType;
  }
  /**
   * @return self::AD_TYPE_*
   */
  public function getAdType()
  {
    return $this->adType;
  }
  /**
   * @param string $adTypeString
   */
  public function setAdTypeString($adTypeString)
  {
    $this->adTypeString = $adTypeString;
  }
  /**
   * @return string
   */
  public function getAdTypeString()
  {
    return $this->adTypeString;
  }
  /**
   * @param int $adWidth
   */
  public function setAdWidth($adWidth)
  {
    $this->adWidth = $adWidth;
  }
  /**
   * @return int
   */
  public function getAdWidth()
  {
    return $this->adWidth;
  }
  /**
   * @param string $advertiserId
   */
  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }
  /**
   * @return string
   */
  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }
  /**
   * @param self::ATTRIBUTION_HINT_* $attributionHint
   */
  public function setAttributionHint($attributionHint)
  {
    $this->attributionHint = $attributionHint;
  }
  /**
   * @return self::ATTRIBUTION_HINT_*
   */
  public function getAttributionHint()
  {
    return $this->attributionHint;
  }
  /**
   * @param string $campaignId
   */
  public function setCampaignId($campaignId)
  {
    $this->campaignId = $campaignId;
  }
  /**
   * @return string
   */
  public function getCampaignId()
  {
    return $this->campaignId;
  }
  /**
   * @param string $campaignName
   */
  public function setCampaignName($campaignName)
  {
    $this->campaignName = $campaignName;
  }
  /**
   * @return string
   */
  public function getCampaignName()
  {
    return $this->campaignName;
  }
  /**
   * @param DeviceInfo $deviceInfo
   */
  public function setDeviceInfo(DeviceInfo $deviceInfo)
  {
    $this->deviceInfo = $deviceInfo;
  }
  /**
   * @return DeviceInfo
   */
  public function getDeviceInfo()
  {
    return $this->deviceInfo;
  }
  /**
   * @param string $eventId
   */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /**
   * @return string
   */
  public function getEventId()
  {
    return $this->eventId;
  }
  /**
   * @param self::EVENT_SUBTYPE_* $eventSubtype
   */
  public function setEventSubtype($eventSubtype)
  {
    $this->eventSubtype = $eventSubtype;
  }
  /**
   * @return self::EVENT_SUBTYPE_*
   */
  public function getEventSubtype()
  {
    return $this->eventSubtype;
  }
  /**
   * @param string $eventSubtypeString
   */
  public function setEventSubtypeString($eventSubtypeString)
  {
    $this->eventSubtypeString = $eventSubtypeString;
  }
  /**
   * @return string
   */
  public function getEventSubtypeString()
  {
    return $this->eventSubtypeString;
  }
  /**
   * @param self::EVENT_TYPE_* $eventType
   */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /**
   * @return self::EVENT_TYPE_*
   */
  public function getEventType()
  {
    return $this->eventType;
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
   * @param bool $measurementAllowed
   */
  public function setMeasurementAllowed($measurementAllowed)
  {
    $this->measurementAllowed = $measurementAllowed;
  }
  /**
   * @return bool
   */
  public function getMeasurementAllowed()
  {
    return $this->measurementAllowed;
  }
  /**
   * @param string $medium
   */
  public function setMedium($medium)
  {
    $this->medium = $medium;
  }
  /**
   * @return string
   */
  public function getMedium()
  {
    return $this->medium;
  }
  /**
   * @param string $mobileDeviceId
   */
  public function setMobileDeviceId($mobileDeviceId)
  {
    $this->mobileDeviceId = $mobileDeviceId;
  }
  /**
   * @return string
   */
  public function getMobileDeviceId()
  {
    return $this->mobileDeviceId;
  }
  /**
   * @param self::PLATFORM_* $platform
   */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /**
   * @return self::PLATFORM_*
   */
  public function getPlatform()
  {
    return $this->platform;
  }
  /**
   * @param string $platformString
   */
  public function setPlatformString($platformString)
  {
    $this->platformString = $platformString;
  }
  /**
   * @return string
   */
  public function getPlatformString()
  {
    return $this->platformString;
  }
  /**
   * @param self::PLATFORM_TYPE_* $platformType
   */
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  /**
   * @return self::PLATFORM_TYPE_*
   */
  public function getPlatformType()
  {
    return $this->platformType;
  }
  /**
   * @param string $platformTypeString
   */
  public function setPlatformTypeString($platformTypeString)
  {
    $this->platformTypeString = $platformTypeString;
  }
  /**
   * @return string
   */
  public function getPlatformTypeString()
  {
    return $this->platformTypeString;
  }
  /**
   * @param string $regionCode
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /**
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * @param self::TARGETING_TYPE_* $targetingType
   */
  public function setTargetingType($targetingType)
  {
    $this->targetingType = $targetingType;
  }
  /**
   * @return self::TARGETING_TYPE_*
   */
  public function getTargetingType()
  {
    return $this->targetingType;
  }
  /**
   * @param string $targetingTypeString
   */
  public function setTargetingTypeString($targetingTypeString)
  {
    $this->targetingTypeString = $targetingTypeString;
  }
  /**
   * @return string
   */
  public function getTargetingTypeString()
  {
    return $this->targetingTypeString;
  }
  /**
   * @param string $timestamp
   */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /**
   * @return string
   */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  /**
   * @param UserData $userData
   */
  public function setUserData(UserData $userData)
  {
    $this->userData = $userData;
  }
  /**
   * @return UserData
   */
  public function getUserData()
  {
    return $this->userData;
  }
  /**
   * @param ViewabilityInfo $viewabilityInfo
   */
  public function setViewabilityInfo(ViewabilityInfo $viewabilityInfo)
  {
    $this->viewabilityInfo = $viewabilityInfo;
  }
  /**
   * @return ViewabilityInfo
   */
  public function getViewabilityInfo()
  {
    return $this->viewabilityInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdEvent::class, 'Google_Service_DataManager_AdEvent');
