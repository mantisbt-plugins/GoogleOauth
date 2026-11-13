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

class GoogleAdsSearchads360V23ServicesConversionAdjustmentResult extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ADJUSTMENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Represents value unknown in this version.
   */
  public const ADJUSTMENT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Negates a conversion so that its total value and count are both zero.
   */
  public const ADJUSTMENT_TYPE_RETRACTION = 'RETRACTION';
  /**
   * Changes the value of a conversion.
   */
  public const ADJUSTMENT_TYPE_RESTATEMENT = 'RESTATEMENT';
  /**
   * Supplements an existing conversion with provided user identifiers and user
   * agent, which can be used by Google to enhance the conversion count.
   */
  public const ADJUSTMENT_TYPE_ENHANCEMENT = 'ENHANCEMENT';
  /**
   * The date time at which the adjustment occurred. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @var string
   */
  public $adjustmentDateTime;
  /**
   * The adjustment type.
   *
   * @var string
   */
  public $adjustmentType;
  /**
   * Resource name of the conversion action associated with this conversion
   * adjustment.
   *
   * @var string
   */
  public $conversionAction;
  protected $gclidDateTimePairType = GoogleAdsSearchads360V23ServicesGclidDateTimePair::class;
  protected $gclidDateTimePairDataType = '';
  /**
   * The order ID of the conversion to be adjusted.
   *
   * @var string
   */
  public $orderId;

  /**
   * The date time at which the adjustment occurred. The format is "yyyy-mm-dd
   * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @param string $adjustmentDateTime
   */
  public function setAdjustmentDateTime($adjustmentDateTime)
  {
    $this->adjustmentDateTime = $adjustmentDateTime;
  }
  /**
   * @return string
   */
  public function getAdjustmentDateTime()
  {
    return $this->adjustmentDateTime;
  }
  /**
   * The adjustment type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, RETRACTION, RESTATEMENT, ENHANCEMENT
   *
   * @param self::ADJUSTMENT_TYPE_* $adjustmentType
   */
  public function setAdjustmentType($adjustmentType)
  {
    $this->adjustmentType = $adjustmentType;
  }
  /**
   * @return self::ADJUSTMENT_TYPE_*
   */
  public function getAdjustmentType()
  {
    return $this->adjustmentType;
  }
  /**
   * Resource name of the conversion action associated with this conversion
   * adjustment.
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
   * The gclid and conversion date time of the conversion.
   *
   * @param GoogleAdsSearchads360V23ServicesGclidDateTimePair $gclidDateTimePair
   */
  public function setGclidDateTimePair(GoogleAdsSearchads360V23ServicesGclidDateTimePair $gclidDateTimePair)
  {
    $this->gclidDateTimePair = $gclidDateTimePair;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGclidDateTimePair
   */
  public function getGclidDateTimePair()
  {
    return $this->gclidDateTimePair;
  }
  /**
   * The order ID of the conversion to be adjusted.
   *
   * @param string $orderId
   */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /**
   * @return string
   */
  public function getOrderId()
  {
    return $this->orderId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesConversionAdjustmentResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesConversionAdjustmentResult');
