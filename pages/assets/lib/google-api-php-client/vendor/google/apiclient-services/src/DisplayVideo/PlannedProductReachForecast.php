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

class PlannedProductReachForecast extends \Google\Model
{
  /**
   * The cost in micros for this product.
   *
   * @var string
   */
  public $costMicros;
  /**
   * The code for the product.
   *
   * @var string
   */
  public $plannableProductCode;
  protected $plannedProductForecastType = PlannedProductForecast::class;
  protected $plannedProductForecastDataType = '';

  /**
   * The cost in micros for this product.
   *
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
   * The code for the product.
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
  /**
   * Performance metrics for the product.
   *
   * @param PlannedProductForecast $plannedProductForecast
   */
  public function setPlannedProductForecast(PlannedProductForecast $plannedProductForecast)
  {
    $this->plannedProductForecast = $plannedProductForecast;
  }
  /**
   * @return PlannedProductForecast
   */
  public function getPlannedProductForecast()
  {
    return $this->plannedProductForecast;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannedProductReachForecast::class, 'Google_Service_DisplayVideo_PlannedProductReachForecast');
