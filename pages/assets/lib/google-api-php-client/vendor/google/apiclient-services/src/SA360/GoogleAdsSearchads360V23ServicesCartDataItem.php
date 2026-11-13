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

class GoogleAdsSearchads360V23ServicesCartDataItem extends \Google\Model
{
  /**
   * The shopping id of the item. Must be equal to the Merchant Center product
   * identifier.
   *
   * @var string
   */
  public $productId;
  /**
   * Number of items sold.
   *
   * @var int
   */
  public $quantity;
  /**
   * Unit price excluding tax, shipping, and any transaction level discounts.
   * The currency code is the same as that in the `ClickConversion` message.
   *
   * @var 
   */
  public $unitPrice;

  /**
   * The shopping id of the item. Must be equal to the Merchant Center product
   * identifier.
   *
   * @param string $productId
   */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /**
   * @return string
   */
  public function getProductId()
  {
    return $this->productId;
  }
  /**
   * Number of items sold.
   *
   * @param int $quantity
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return int
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setUnitPrice($unitPrice)
  {
    $this->unitPrice = $unitPrice;
  }
  public function getUnitPrice()
  {
    return $this->unitPrice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCartDataItem::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCartDataItem');
