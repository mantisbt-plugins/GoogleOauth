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

class UserListGlobalLicense extends \Google\Collection
{
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_UNSPECIFIED = 'USER_LIST_GLOBAL_LICENSE_TYPE_UNSPECIFIED';
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_RESELLER = 'USER_LIST_GLOBAL_LICENSE_TYPE_RESELLER';
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_SELL_SIDE = 'USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_SELL_SIDE';
  public const LICENSE_TYPE_USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_BUY_SIDE = 'USER_LIST_GLOBAL_LICENSE_TYPE_DATA_MART_BUY_SIDE';
  public const STATUS_USER_LIST_LICENSE_STATUS_UNSPECIFIED = 'USER_LIST_LICENSE_STATUS_UNSPECIFIED';
  public const STATUS_USER_LIST_LICENSE_STATUS_ENABLED = 'USER_LIST_LICENSE_STATUS_ENABLED';
  public const STATUS_USER_LIST_LICENSE_STATUS_DISABLED = 'USER_LIST_LICENSE_STATUS_DISABLED';
  protected $collection_key = 'historicalPricings';
  protected $historicalPricingsType = UserListLicensePricing::class;
  protected $historicalPricingsDataType = 'array';
  /**
   * @var string
   */
  public $licenseType;
  protected $metricsType = UserListLicenseMetrics::class;
  protected $metricsDataType = '';
  /**
   * @var string
   */
  public $name;
  protected $pricingType = UserListLicensePricing::class;
  protected $pricingDataType = '';
  /**
   * @var string
   */
  public $status;
  /**
   * @var string
   */
  public $userListDisplayName;
  /**
   * @var string
   */
  public $userListId;

  /**
   * @param UserListLicensePricing[] $historicalPricings
   */
  public function setHistoricalPricings($historicalPricings)
  {
    $this->historicalPricings = $historicalPricings;
  }
  /**
   * @return UserListLicensePricing[]
   */
  public function getHistoricalPricings()
  {
    return $this->historicalPricings;
  }
  /**
   * @param self::LICENSE_TYPE_* $licenseType
   */
  public function setLicenseType($licenseType)
  {
    $this->licenseType = $licenseType;
  }
  /**
   * @return self::LICENSE_TYPE_*
   */
  public function getLicenseType()
  {
    return $this->licenseType;
  }
  /**
   * @param UserListLicenseMetrics $metrics
   */
  public function setMetrics(UserListLicenseMetrics $metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return UserListLicenseMetrics
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param UserListLicensePricing $pricing
   */
  public function setPricing(UserListLicensePricing $pricing)
  {
    $this->pricing = $pricing;
  }
  /**
   * @return UserListLicensePricing
   */
  public function getPricing()
  {
    return $this->pricing;
  }
  /**
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * @param string $userListDisplayName
   */
  public function setUserListDisplayName($userListDisplayName)
  {
    $this->userListDisplayName = $userListDisplayName;
  }
  /**
   * @return string
   */
  public function getUserListDisplayName()
  {
    return $this->userListDisplayName;
  }
  /**
   * @param string $userListId
   */
  public function setUserListId($userListId)
  {
    $this->userListId = $userListId;
  }
  /**
   * @return string
   */
  public function getUserListId()
  {
    return $this->userListId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListGlobalLicense::class, 'Google_Service_DataManager_UserListGlobalLicense');
