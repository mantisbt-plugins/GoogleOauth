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

class GoogleAdsSearchads360V23ServicesCallConversion extends \Google\Collection
{
  protected $collection_key = 'customVariables';
  /**
   * The date time at which the call occurred. The timezone must be specified.
   * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01
   * 12:32:45-08:00".
   *
   * @var string
   */
  public $callStartDateTime;
  /**
   * The caller id from which this call was placed. Caller id is expected to be
   * in E.164 format with preceding '+' sign, for example, "+16502531234".
   *
   * @var string
   */
  public $callerId;
  protected $consentType = GoogleAdsSearchads360V23CommonConsent::class;
  protected $consentDataType = '';
  /**
   * Resource name of the conversion action associated with this conversion.
   * Note: Although this resource name consists of a customer id and a
   * conversion action id, validation will ignore the customer id and use the
   * conversion action id as the sole identifier of the conversion action.
   *
   * @var string
   */
  public $conversionAction;
  /**
   * The date time at which the conversion occurred. Must be after the call
   * time. The timezone must be specified. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @var string
   */
  public $conversionDateTime;
  /**
   * The value of the conversion for the advertiser.
   *
   * @var 
   */
  public $conversionValue;
  /**
   * Currency associated with the conversion value. This is the ISO 4217
   * 3-character currency code. For example: USD, EUR.
   *
   * @var string
   */
  public $currencyCode;
  protected $customVariablesType = GoogleAdsSearchads360V23ServicesCustomVariable::class;
  protected $customVariablesDataType = 'array';

  /**
   * The date time at which the call occurred. The timezone must be specified.
   * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01
   * 12:32:45-08:00".
   *
   * @param string $callStartDateTime
   */
  public function setCallStartDateTime($callStartDateTime)
  {
    $this->callStartDateTime = $callStartDateTime;
  }
  /**
   * @return string
   */
  public function getCallStartDateTime()
  {
    return $this->callStartDateTime;
  }
  /**
   * The caller id from which this call was placed. Caller id is expected to be
   * in E.164 format with preceding '+' sign, for example, "+16502531234".
   *
   * @param string $callerId
   */
  public function setCallerId($callerId)
  {
    $this->callerId = $callerId;
  }
  /**
   * @return string
   */
  public function getCallerId()
  {
    return $this->callerId;
  }
  /**
   * The consent setting for the event.
   *
   * @param GoogleAdsSearchads360V23CommonConsent $consent
   */
  public function setConsent(GoogleAdsSearchads360V23CommonConsent $consent)
  {
    $this->consent = $consent;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonConsent
   */
  public function getConsent()
  {
    return $this->consent;
  }
  /**
   * Resource name of the conversion action associated with this conversion.
   * Note: Although this resource name consists of a customer id and a
   * conversion action id, validation will ignore the customer id and use the
   * conversion action id as the sole identifier of the conversion action.
   *
   * @param string $conversionAction
   */
  public function setConversionAction($conversionAction)
  {
    $this->conversionAction = $conversionAction;
  }
  /**
   * @return string
   */
  public function getConversionAction()
  {
    return $this->conversionAction;
  }
  /**
   * The date time at which the conversion occurred. Must be after the call
   * time. The timezone must be specified. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @param string $conversionDateTime
   */
  public function setConversionDateTime($conversionDateTime)
  {
    $this->conversionDateTime = $conversionDateTime;
  }
  /**
   * @return string
   */
  public function getConversionDateTime()
  {
    return $this->conversionDateTime;
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
   * Currency associated with the conversion value. This is the ISO 4217
   * 3-character currency code. For example: USD, EUR.
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
  /**
   * The custom variables associated with this conversion.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomVariable[] $customVariables
   */
  public function setCustomVariables($customVariables)
  {
    $this->customVariables = $customVariables;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomVariable[]
   */
  public function getCustomVariables()
  {
    return $this->customVariables;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCallConversion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCallConversion');
