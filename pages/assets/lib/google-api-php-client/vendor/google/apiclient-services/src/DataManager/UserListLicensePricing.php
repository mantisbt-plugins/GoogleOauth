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

class UserListLicensePricing extends \Google\Model
{
  public const BUYER_APPROVAL_STATE_USER_LIST_PRICING_BUYER_APPROVAL_STATE_UNSPECIFIED = 'USER_LIST_PRICING_BUYER_APPROVAL_STATE_UNSPECIFIED';
  public const BUYER_APPROVAL_STATE_PENDING = 'PENDING';
  public const BUYER_APPROVAL_STATE_APPROVED = 'APPROVED';
  public const BUYER_APPROVAL_STATE_REJECTED = 'REJECTED';
  public const COST_TYPE_USER_LIST_PRICING_COST_TYPE_UNSPECIFIED = 'USER_LIST_PRICING_COST_TYPE_UNSPECIFIED';
  public const COST_TYPE_CPC = 'CPC';
  public const COST_TYPE_CPM = 'CPM';
  public const COST_TYPE_MEDIA_SHARE = 'MEDIA_SHARE';
  /**
   * @var string
   */
  public $buyerApprovalState;
  /**
   * @var string
   */
  public $costMicros;
  /**
   * @var string
   */
  public $costType;
  /**
   * @var string
   */
  public $currencyCode;
  /**
   * @var string
   */
  public $endTime;
  /**
   * @var string
   */
  public $maxCostMicros;
  /**
   * @var bool
   */
  public $pricingActive;
  /**
   * @var string
   */
  public $pricingId;
  /**
   * @var string
   */
  public $startTime;

  /**
   * @param self::BUYER_APPROVAL_STATE_* $buyerApprovalState
   */
  public function setBuyerApprovalState($buyerApprovalState)
  {
    $this->buyerApprovalState = $buyerApprovalState;
  }
  /**
   * @return self::BUYER_APPROVAL_STATE_*
   */
  public function getBuyerApprovalState()
  {
    return $this->buyerApprovalState;
  }
  /**
   * @param string $costMicros
   */
  public function setCostMicros($costMicros)
  {
    $this->costMicros = $costMicros;
  }
  /**
   * @return string
   */
  public function getCostMicros()
  {
    return $this->costMicros;
  }
  /**
   * @param self::COST_TYPE_* $costType
   */
  public function setCostType($costType)
  {
    $this->costType = $costType;
  }
  /**
   * @return self::COST_TYPE_*
   */
  public function getCostType()
  {
    return $this->costType;
  }
  /**
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
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param string $maxCostMicros
   */
  public function setMaxCostMicros($maxCostMicros)
  {
    $this->maxCostMicros = $maxCostMicros;
  }
  /**
   * @return string
   */
  public function getMaxCostMicros()
  {
    return $this->maxCostMicros;
  }
  /**
   * @param bool $pricingActive
   */
  public function setPricingActive($pricingActive)
  {
    $this->pricingActive = $pricingActive;
  }
  /**
   * @return bool
   */
  public function getPricingActive()
  {
    return $this->pricingActive;
  }
  /**
   * @param string $pricingId
   */
  public function setPricingId($pricingId)
  {
    $this->pricingId = $pricingId;
  }
  /**
   * @return string
   */
  public function getPricingId()
  {
    return $this->pricingId;
  }
  /**
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListLicensePricing::class, 'Google_Service_DataManager_UserListLicensePricing');
