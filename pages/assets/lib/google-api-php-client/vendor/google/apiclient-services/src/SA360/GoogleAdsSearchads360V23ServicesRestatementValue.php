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

class GoogleAdsSearchads360V23ServicesRestatementValue extends \Google\Model
{
  /**
   * The restated conversion value. This is the value of the conversion after
   * restatement. For example, to change the value of a conversion from 100 to
   * 70, an adjusted value of 70 should be reported. NOTE: If you want to upload
   * a second restatement with a different adjusted value, it must have a new,
   * more recent, adjustment occurrence time. Otherwise, it will be treated as a
   * duplicate of the previous restatement and ignored.
   *
   * @var 
   */
  public $adjustedValue;
  /**
   * The currency of the restated value. If not provided, then the default
   * currency from the conversion action is used, and if that is not set then
   * the account currency is used. This is the ISO 4217 3-character currency
   * code for example, USD or EUR.
   *
   * @var string
   */
  public $currencyCode;

  public function setAdjustedValue($adjustedValue)
  {
    $this->adjustedValue = $adjustedValue;
  }
  public function getAdjustedValue()
  {
    return $this->adjustedValue;
  }
  /**
   * The currency of the restated value. If not provided, then the default
   * currency from the conversion action is used, and if that is not set then
   * the account currency is used. This is the ISO 4217 3-character currency
   * code for example, USD or EUR.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesRestatementValue::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesRestatementValue');
