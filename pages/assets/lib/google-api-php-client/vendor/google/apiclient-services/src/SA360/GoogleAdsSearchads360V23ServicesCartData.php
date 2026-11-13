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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesCartData extends \Google\Collection
{
  protected $collection_key = 'items';
  /**
   * The country code associated with the feed where the items are uploaded.
   *
   * @var string
   */
  public $feedCountryCode;
  /**
   * The language code associated with the feed where the items are uploaded.
   *
   * @var string
   */
  public $feedLanguageCode;
  protected $itemsType = GoogleAdsSearchads360V23ServicesCartDataItem::class;
  protected $itemsDataType = 'array';
  /**
   * Sum of all transaction level discounts, such as free shipping and coupon
   * discounts for the whole cart. The currency code is the same as that in the
   * `ClickConversion` message.
   *
   * @var 
   */
  public $localTransactionCost;
  /**
   * The Merchant Center ID where the items are uploaded.
   *
   * @var string
   */
  public $merchantId;

  /**
   * The country code associated with the feed where the items are uploaded.
   *
   * @param string $feedCountryCode
   */
  public function setFeedCountryCode($feedCountryCode)
  {
    $this->feedCountryCode = $feedCountryCode;
  }
  /**
   * @return string
   */
  public function getFeedCountryCode()
  {
    return $this->feedCountryCode;
  }
  /**
   * The language code associated with the feed where the items are uploaded.
   *
   * @param string $feedLanguageCode
   */
  public function setFeedLanguageCode($feedLanguageCode)
  {
    $this->feedLanguageCode = $feedLanguageCode;
  }
  /**
   * @return string
   */
  public function getFeedLanguageCode()
  {
    return $this->feedLanguageCode;
  }
  /**
   * Data of the items purchased.
   *
   * @param GoogleAdsSearchads360V23ServicesCartDataItem[] $items
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCartDataItem[]
   */
  public function getItems()
  {
    return $this->items;
  }
  public function setLocalTransactionCost($localTransactionCost)
  {
    $this->localTransactionCost = $localTransactionCost;
  }
  public function getLocalTransactionCost()
  {
    return $this->localTransactionCost;
  }
  /**
   * The Merchant Center ID where the items are uploaded.
   *
   * @param string $merchantId
   */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /**
   * @return string
   */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCartData::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCartData');
