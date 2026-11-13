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

class Item extends \Google\Collection
{
  protected $collection_key = 'customVariables';
  protected $additionalItemParametersType = ItemParameter::class;
  protected $additionalItemParametersDataType = 'array';
  public $conversionValue;
  protected $customVariablesType = ItemCustomVariable::class;
  protected $customVariablesDataType = 'array';
  /**
   * @var string
   */
  public $itemId;
  /**
   * @var string
   */
  public $merchantFeedLabel;
  /**
   * @var string
   */
  public $merchantFeedLanguageCode;
  /**
   * @var string
   */
  public $merchantId;
  /**
   * @var string
   */
  public $merchantProductId;
  /**
   * @var string
   */
  public $quantity;
  public $unitPrice;

  /**
   * @param ItemParameter[] $additionalItemParameters
   */
  public function setAdditionalItemParameters($additionalItemParameters)
  {
    $this->additionalItemParameters = $additionalItemParameters;
  }
  /**
   * @return ItemParameter[]
   */
  public function getAdditionalItemParameters()
  {
    return $this->additionalItemParameters;
  }
  public function setConversionValue($conversionValue)
  {
    $this->conversionValue = $conversionValue;
  }
  public function getConversionValue()
  {
    return $this->conversionValue;
  }
  /**
   * @param ItemCustomVariable[] $customVariables
   */
  public function setCustomVariables($customVariables)
  {
    $this->customVariables = $customVariables;
  }
  /**
   * @return ItemCustomVariable[]
   */
  public function getCustomVariables()
  {
    return $this->customVariables;
  }
  /**
   * @param string $itemId
   */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /**
   * @return string
   */
  public function getItemId()
  {
    return $this->itemId;
  }
  /**
   * @param string $merchantFeedLabel
   */
  public function setMerchantFeedLabel($merchantFeedLabel)
  {
    $this->merchantFeedLabel = $merchantFeedLabel;
  }
  /**
   * @return string
   */
  public function getMerchantFeedLabel()
  {
    return $this->merchantFeedLabel;
  }
  /**
   * @param string $merchantFeedLanguageCode
   */
  public function setMerchantFeedLanguageCode($merchantFeedLanguageCode)
  {
    $this->merchantFeedLanguageCode = $merchantFeedLanguageCode;
  }
  /**
   * @return string
   */
  public function getMerchantFeedLanguageCode()
  {
    return $this->merchantFeedLanguageCode;
  }
  /**
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
  /**
   * @param string $merchantProductId
   */
  public function setMerchantProductId($merchantProductId)
  {
    $this->merchantProductId = $merchantProductId;
  }
  /**
   * @return string
   */
  public function getMerchantProductId()
  {
    return $this->merchantProductId;
  }
  /**
   * @param string $quantity
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return string
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
class_alias(Item::class, 'Google_Service_DataManager_Item');
