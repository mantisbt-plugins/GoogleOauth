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

class CatalogAppView extends \Google\Collection
{
  /**
   * Unspecified category.
   */
  public const APP_CATEGORY_APP_CATEGORY_UNSPECIFIED = 'APP_CATEGORY_UNSPECIFIED';
  /**
   * Game app.
   */
  public const APP_CATEGORY_GAME = 'GAME';
  /**
   * General app.
   */
  public const APP_CATEGORY_APP = 'APP';
  protected $collection_key = 'permissionsSdk23';
  /**
   * Active versions of the app mapped from `android:versionName` manifest
   * attributes.
   *
   * @var string[]
   */
  public $activeVersionNames;
  /**
   * The category of the app.
   *
   * @var string
   */
  public $appCategory;
  protected $appContactInformationType = AppContactInformation::class;
  protected $appContactInformationDataType = '';
  /**
   * The subcategory of the app e.g. "GAME_ACTION".
   *
   * @var string
   */
  public $appSubcategory;
  /**
   * The token used for delivery of the app with the Google Play Inline Install
   * API. The token is unique per Play app and per third-party app store
   * combination and has a limited validity period of 7 days.
   *
   * @var string
   */
  public $deliveryToken;
  protected $developerDetailsType = DeveloperDetails::class;
  protected $developerDetailsDataType = '';
  protected $deviceCompatibilityRequirementsType = DeviceCompatibilityRequirements::class;
  protected $deviceCompatibilityRequirementsDataType = 'array';
  protected $excludedDevicesByIdentifierType = DeviceIdentifier::class;
  protected $excludedDevicesByIdentifierDataType = 'array';
  protected $excludedDevicesBySelectorType = CatalogDeviceSelector::class;
  protected $excludedDevicesBySelectorDataType = 'array';
  protected $firstReleaseDateType = Date::class;
  protected $firstReleaseDateDataType = '';
  /**
   * Whether the app has ads.
   *
   * @var bool
   */
  public $hasInAppAds;
  /**
   * Whether the app has in-app purchases through Google Play.
   *
   * @var bool
   */
  public $hasInAppPurchases;
  /**
   * The IARC certificate ID for the app.
   *
   * @var string
   */
  public $iarcCertificateId;
  /**
   * Whether the app is targeted to an adult-only (18+) audience.
   *
   * @var bool
   */
  public $isAdultOnlyAudience;
  /**
   * The timestamp when the app was last published.
   *
   * @var string
   */
  public $lastPublishTime;
  protected $localizedStoreListingsType = LocalizedStoreListings::class;
  protected $localizedStoreListingsDataType = '';
  /**
   * The package name of the app.
   *
   * @var string
   */
  public $packageName;
  protected $permissionsType = CatalogPermission::class;
  protected $permissionsDataType = 'array';
  protected $permissionsSdk23Type = CatalogPermission::class;
  protected $permissionsSdk23DataType = 'array';
  protected $priceInTheUnitedStatesType = Money::class;
  protected $priceInTheUnitedStatesDataType = '';
  /**
   * The URL of the app's privacy policy.
   *
   * @var string
   */
  public $privacyPolicyUrl;
  protected $salePriceInTheUnitedStatesType = Money::class;
  protected $salePriceInTheUnitedStatesDataType = '';

  /**
   * Active versions of the app mapped from `android:versionName` manifest
   * attributes.
   *
   * @param string[] $activeVersionNames
   */
  public function setActiveVersionNames($activeVersionNames)
  {
    $this->activeVersionNames = $activeVersionNames;
  }
  /**
   * @return string[]
   */
  public function getActiveVersionNames()
  {
    return $this->activeVersionNames;
  }
  /**
   * The category of the app.
   *
   * Accepted values: APP_CATEGORY_UNSPECIFIED, GAME, APP
   *
   * @param self::APP_CATEGORY_* $appCategory
   */
  public function setAppCategory($appCategory)
  {
    $this->appCategory = $appCategory;
  }
  /**
   * @return self::APP_CATEGORY_*
   */
  public function getAppCategory()
  {
    return $this->appCategory;
  }
  /**
   * Developer-provided contact information for the app.
   *
   * @param AppContactInformation $appContactInformation
   */
  public function setAppContactInformation(AppContactInformation $appContactInformation)
  {
    $this->appContactInformation = $appContactInformation;
  }
  /**
   * @return AppContactInformation
   */
  public function getAppContactInformation()
  {
    return $this->appContactInformation;
  }
  /**
   * The subcategory of the app e.g. "GAME_ACTION".
   *
   * @param string $appSubcategory
   */
  public function setAppSubcategory($appSubcategory)
  {
    $this->appSubcategory = $appSubcategory;
  }
  /**
   * @return string
   */
  public function getAppSubcategory()
  {
    return $this->appSubcategory;
  }
  /**
   * The token used for delivery of the app with the Google Play Inline Install
   * API. The token is unique per Play app and per third-party app store
   * combination and has a limited validity period of 7 days.
   *
   * @param string $deliveryToken
   */
  public function setDeliveryToken($deliveryToken)
  {
    $this->deliveryToken = $deliveryToken;
  }
  /**
   * @return string
   */
  public function getDeliveryToken()
  {
    return $this->deliveryToken;
  }
  /**
   * The developer details of the app.
   *
   * @param DeveloperDetails $developerDetails
   */
  public function setDeveloperDetails(DeveloperDetails $developerDetails)
  {
    $this->developerDetails = $developerDetails;
  }
  /**
   * @return DeveloperDetails
   */
  public function getDeveloperDetails()
  {
    return $this->developerDetails;
  }
  /**
   * The app may specify multiple sets of device compatibility requirements, and
   * a device is considered compatible with the app if it satisfies at least one
   * of `DeviceCompatibilityRequirements`.
   *
   * @param DeviceCompatibilityRequirements[] $deviceCompatibilityRequirements
   */
  public function setDeviceCompatibilityRequirements($deviceCompatibilityRequirements)
  {
    $this->deviceCompatibilityRequirements = $deviceCompatibilityRequirements;
  }
  /**
   * @return DeviceCompatibilityRequirements[]
   */
  public function getDeviceCompatibilityRequirements()
  {
    return $this->deviceCompatibilityRequirements;
  }
  /**
   * List of devices excluded from the app's distribution even if they are
   * otherwise compatible with the requirements from
   * device_compatibility_requirements. These are OR-ed, i.e. a device is
   * excluded if it matches any of the identifiers.
   *
   * @param DeviceIdentifier[] $excludedDevicesByIdentifier
   */
  public function setExcludedDevicesByIdentifier($excludedDevicesByIdentifier)
  {
    $this->excludedDevicesByIdentifier = $excludedDevicesByIdentifier;
  }
  /**
   * @return DeviceIdentifier[]
   */
  public function getExcludedDevicesByIdentifier()
  {
    return $this->excludedDevicesByIdentifier;
  }
  /**
   * List of devices excluded from the app's distribution even if they are
   * otherwise compatible with the requirements from
   * device_compatibility_requirements. A device is excluded if it matches any
   * of given the selectors.
   *
   * @param CatalogDeviceSelector[] $excludedDevicesBySelector
   */
  public function setExcludedDevicesBySelector($excludedDevicesBySelector)
  {
    $this->excludedDevicesBySelector = $excludedDevicesBySelector;
  }
  /**
   * @return CatalogDeviceSelector[]
   */
  public function getExcludedDevicesBySelector()
  {
    return $this->excludedDevicesBySelector;
  }
  /**
   * The date when the app was first released.
   *
   * @param Date $firstReleaseDate
   */
  public function setFirstReleaseDate(Date $firstReleaseDate)
  {
    $this->firstReleaseDate = $firstReleaseDate;
  }
  /**
   * @return Date
   */
  public function getFirstReleaseDate()
  {
    return $this->firstReleaseDate;
  }
  /**
   * Whether the app has ads.
   *
   * @param bool $hasInAppAds
   */
  public function setHasInAppAds($hasInAppAds)
  {
    $this->hasInAppAds = $hasInAppAds;
  }
  /**
   * @return bool
   */
  public function getHasInAppAds()
  {
    return $this->hasInAppAds;
  }
  /**
   * Whether the app has in-app purchases through Google Play.
   *
   * @param bool $hasInAppPurchases
   */
  public function setHasInAppPurchases($hasInAppPurchases)
  {
    $this->hasInAppPurchases = $hasInAppPurchases;
  }
  /**
   * @return bool
   */
  public function getHasInAppPurchases()
  {
    return $this->hasInAppPurchases;
  }
  /**
   * The IARC certificate ID for the app.
   *
   * @param string $iarcCertificateId
   */
  public function setIarcCertificateId($iarcCertificateId)
  {
    $this->iarcCertificateId = $iarcCertificateId;
  }
  /**
   * @return string
   */
  public function getIarcCertificateId()
  {
    return $this->iarcCertificateId;
  }
  /**
   * Whether the app is targeted to an adult-only (18+) audience.
   *
   * @param bool $isAdultOnlyAudience
   */
  public function setIsAdultOnlyAudience($isAdultOnlyAudience)
  {
    $this->isAdultOnlyAudience = $isAdultOnlyAudience;
  }
  /**
   * @return bool
   */
  public function getIsAdultOnlyAudience()
  {
    return $this->isAdultOnlyAudience;
  }
  /**
   * The timestamp when the app was last published.
   *
   * @param string $lastPublishTime
   */
  public function setLastPublishTime($lastPublishTime)
  {
    $this->lastPublishTime = $lastPublishTime;
  }
  /**
   * @return string
   */
  public function getLastPublishTime()
  {
    return $this->lastPublishTime;
  }
  /**
   * The localized store listings of the app which are shown on Google Play.
   *
   * @param LocalizedStoreListings $localizedStoreListings
   */
  public function setLocalizedStoreListings(LocalizedStoreListings $localizedStoreListings)
  {
    $this->localizedStoreListings = $localizedStoreListings;
  }
  /**
   * @return LocalizedStoreListings
   */
  public function getLocalizedStoreListings()
  {
    return $this->localizedStoreListings;
  }
  /**
   * The package name of the app.
   *
   * @param string $packageName
   */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /**
   * @return string
   */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /**
   * Required permissions declared by the app which apply for all Android SDK
   * versions.
   *
   * @param CatalogPermission[] $permissions
   */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /**
   * @return CatalogPermission[]
   */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /**
   * Required permissions declared by the app which apply for Android SDK
   * versions SDK 23 and above.
   *
   * @param CatalogPermission[] $permissionsSdk23
   */
  public function setPermissionsSdk23($permissionsSdk23)
  {
    $this->permissionsSdk23 = $permissionsSdk23;
  }
  /**
   * @return CatalogPermission[]
   */
  public function getPermissionsSdk23()
  {
    return $this->permissionsSdk23;
  }
  /**
   * The price of the app in the United States. Empty if the app is free.
   *
   * @param Money $priceInTheUnitedStates
   */
  public function setPriceInTheUnitedStates(Money $priceInTheUnitedStates)
  {
    $this->priceInTheUnitedStates = $priceInTheUnitedStates;
  }
  /**
   * @return Money
   */
  public function getPriceInTheUnitedStates()
  {
    return $this->priceInTheUnitedStates;
  }
  /**
   * The URL of the app's privacy policy.
   *
   * @param string $privacyPolicyUrl
   */
  public function setPrivacyPolicyUrl($privacyPolicyUrl)
  {
    $this->privacyPolicyUrl = $privacyPolicyUrl;
  }
  /**
   * @return string
   */
  public function getPrivacyPolicyUrl()
  {
    return $this->privacyPolicyUrl;
  }
  /**
   * The sale price of the app in the United States. Only populated for paid
   * apps with an active US sale.
   *
   * @param Money $salePriceInTheUnitedStates
   */
  public function setSalePriceInTheUnitedStates(Money $salePriceInTheUnitedStates)
  {
    $this->salePriceInTheUnitedStates = $salePriceInTheUnitedStates;
  }
  /**
   * @return Money
   */
  public function getSalePriceInTheUnitedStates()
  {
    return $this->salePriceInTheUnitedStates;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogAppView::class, 'Google_Service_AndroidPublisher_CatalogAppView');
