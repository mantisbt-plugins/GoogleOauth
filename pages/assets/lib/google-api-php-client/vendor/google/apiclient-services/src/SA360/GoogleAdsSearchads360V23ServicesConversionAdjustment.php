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

class GoogleAdsSearchads360V23ServicesConversionAdjustment extends \Google\Collection
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
  protected $collection_key = 'userIdentifiers';
  /**
   * The date time at which the adjustment occurred. Must be after the
   * conversion_date_time. The timezone must be specified. The format is "yyyy-
   * mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
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
   * adjustment. Note: Although this resource name consists of a customer id and
   * a conversion action id, validation will ignore the customer id and use the
   * conversion action id as the sole identifier of the conversion action.
   *
   * @var string
   */
  public $conversionAction;
  protected $gclidDateTimePairType = GoogleAdsSearchads360V23ServicesGclidDateTimePair::class;
  protected $gclidDateTimePairDataType = '';
  /**
   * The order ID of the conversion to be adjusted. If the conversion was
   * reported with an order ID specified, that order ID must be used as the
   * identifier here. The order ID is required for enhancements.
   *
   * @var string
   */
  public $orderId;
  protected $restatementValueType = GoogleAdsSearchads360V23ServicesRestatementValue::class;
  protected $restatementValueDataType = '';
  /**
   * The user agent to enhance the original conversion. This can be found in
   * your user's HTTP request header when they convert on your web page.
   * Example, "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X)". User
   * agent can only be specified in enhancements with user identifiers.
   *
   * @var string
   */
  public $userAgent;
  protected $userIdentifiersType = GoogleAdsSearchads360V23CommonUserIdentifier::class;
  protected $userIdentifiersDataType = 'array';

  /**
   * The date time at which the adjustment occurred. Must be after the
   * conversion_date_time. The timezone must be specified. The format is "yyyy-
   * mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
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
   * adjustment. Note: Although this resource name consists of a customer id and
   * a conversion action id, validation will ignore the customer id and use the
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
   * For adjustments, uniquely identifies a conversion that was reported without
   * an order ID specified. If the adjustment_type is ENHANCEMENT, this value is
   * optional but may be set in addition to the order_id.
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
   * The order ID of the conversion to be adjusted. If the conversion was
   * reported with an order ID specified, that order ID must be used as the
   * identifier here. The order ID is required for enhancements.
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
  /**
   * Information needed to restate the conversion's value. Required for
   * restatements. Should not be supplied for retractions. An error will be
   * returned if provided for a retraction. NOTE: If you want to upload a second
   * restatement with a different adjusted value, it must have a new, more
   * recent, adjustment occurrence time. Otherwise, it will be treated as a
   * duplicate of the previous restatement and ignored.
   *
   * @param GoogleAdsSearchads360V23ServicesRestatementValue $restatementValue
   */
  public function setRestatementValue(GoogleAdsSearchads360V23ServicesRestatementValue $restatementValue)
  {
    $this->restatementValue = $restatementValue;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesRestatementValue
   */
  public function getRestatementValue()
  {
    return $this->restatementValue;
  }
  /**
   * The user agent to enhance the original conversion. This can be found in
   * your user's HTTP request header when they convert on your web page.
   * Example, "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X)". User
   * agent can only be specified in enhancements with user identifiers.
   *
   * @param string $userAgent
   */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /**
   * @return string
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /**
   * The user identifiers to enhance the original conversion.
   * ConversionAdjustmentUploadService only accepts user identifiers in
   * enhancements. The maximum number of user identifiers for each enhancement
   * is 5.
   *
   * @param GoogleAdsSearchads360V23CommonUserIdentifier[] $userIdentifiers
   */
  public function setUserIdentifiers($userIdentifiers)
  {
    $this->userIdentifiers = $userIdentifiers;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserIdentifier[]
   */
  public function getUserIdentifiers()
  {
    return $this->userIdentifiers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesConversionAdjustment::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesConversionAdjustment');
