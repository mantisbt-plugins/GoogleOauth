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

namespace Google\Service\DisplayVideo;

class PlannedProduct extends \Google\Model
{
  protected $advancedProductTargetingType = AdvancedProductTargeting::class;
  protected $advancedProductTargetingDataType = '';
  /**
   * Required. The budget for this product in micros.
   *
   * @var string
   */
  public $budgetMicros;
  /**
   * Required. The code for the product, e.g. "VIDEO_REACH_CAMPAIGN".
   *
   * @var string
   */
  public $plannableProductCode;

  /**
   * Optional. Optional line item level targeting overrides.
   *
   * @param AdvancedProductTargeting $advancedProductTargeting
   */
  public function setAdvancedProductTargeting(AdvancedProductTargeting $advancedProductTargeting)
  {
    $this->advancedProductTargeting = $advancedProductTargeting;
  }
  /**
   * @return AdvancedProductTargeting
   */
  public function getAdvancedProductTargeting()
  {
    return $this->advancedProductTargeting;
  }
  /**
   * Required. The budget for this product in micros.
   *
   * @param string $budgetMicros
   */
  public function setBudgetMicros($budgetMicros)
  {
    $this->budgetMicros = $budgetMicros;
  }
  /**
   * @return string
   */
  public function getBudgetMicros()
  {
    return $this->budgetMicros;
  }
  /**
   * Required. The code for the product, e.g. "VIDEO_REACH_CAMPAIGN".
   *
   * @param string $plannableProductCode
   */
  public function setPlannableProductCode($plannableProductCode)
  {
    $this->plannableProductCode = $plannableProductCode;
  }
  /**
   * @return string
   */
  public function getPlannableProductCode()
  {
    return $this->plannableProductCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannedProduct::class, 'Google_Service_DisplayVideo_PlannedProduct');
