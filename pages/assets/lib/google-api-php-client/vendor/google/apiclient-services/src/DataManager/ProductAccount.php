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

class ProductAccount extends \Google\Model
{
  public const ACCOUNT_TYPE_ACCOUNT_TYPE_UNSPECIFIED = 'ACCOUNT_TYPE_UNSPECIFIED';
  public const ACCOUNT_TYPE_GOOGLE_ADS = 'GOOGLE_ADS';
  public const ACCOUNT_TYPE_DISPLAY_VIDEO_PARTNER = 'DISPLAY_VIDEO_PARTNER';
  public const ACCOUNT_TYPE_DISPLAY_VIDEO_ADVERTISER = 'DISPLAY_VIDEO_ADVERTISER';
  public const ACCOUNT_TYPE_DATA_PARTNER = 'DATA_PARTNER';
  public const ACCOUNT_TYPE_GOOGLE_ANALYTICS_PROPERTY = 'GOOGLE_ANALYTICS_PROPERTY';
  public const ACCOUNT_TYPE_GOOGLE_AD_MANAGER_AUDIENCE_LINK = 'GOOGLE_AD_MANAGER_AUDIENCE_LINK';
  public const ACCOUNT_TYPE_FLOODLIGHT_CONFIG = 'FLOODLIGHT_CONFIG';
  public const ACCOUNT_TYPE_GOOGLE_AD_MANAGER = 'GOOGLE_AD_MANAGER';
  public const PRODUCT_PRODUCT_UNSPECIFIED = 'PRODUCT_UNSPECIFIED';
  public const PRODUCT_GOOGLE_ADS = 'GOOGLE_ADS';
  public const PRODUCT_DISPLAY_VIDEO_PARTNER = 'DISPLAY_VIDEO_PARTNER';
  public const PRODUCT_DISPLAY_VIDEO_ADVERTISER = 'DISPLAY_VIDEO_ADVERTISER';
  public const PRODUCT_DATA_PARTNER = 'DATA_PARTNER';
  /**
   * @var string
   */
  public $accountId;
  /**
   * @var string
   */
  public $accountType;
  /**
   * @deprecated
   * @var string
   */
  public $product;

  /**
   * @param string $accountId
   */
  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  /**
   * @return string
   */
  public function getAccountId()
  {
    return $this->accountId;
  }
  /**
   * @param self::ACCOUNT_TYPE_* $accountType
   */
  public function setAccountType($accountType)
  {
    $this->accountType = $accountType;
  }
  /**
   * @return self::ACCOUNT_TYPE_*
   */
  public function getAccountType()
  {
    return $this->accountType;
  }
  /**
   * @deprecated
   * @param self::PRODUCT_* $product
   */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /**
   * @deprecated
   * @return self::PRODUCT_*
   */
  public function getProduct()
  {
    return $this->product;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductAccount::class, 'Google_Service_DataManager_ProductAccount');
