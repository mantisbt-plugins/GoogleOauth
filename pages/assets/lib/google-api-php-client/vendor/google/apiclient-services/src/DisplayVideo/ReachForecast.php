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

class ReachForecast extends \Google\Collection
{
  protected $collection_key = 'plannedProductReachForecasts';
  /**
   * Total cost for this point in micros.
   *
   * @var string
   */
  public $costMicros;
  protected $forecastType = PlannedProductForecast::class;
  protected $forecastDataType = '';
  protected $plannedProductReachForecastsType = PlannedProductReachForecast::class;
  protected $plannedProductReachForecastsDataType = 'array';

  /**
   * Total cost for this point in micros.
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
   * Aggregate forecast for the entire plan.
   *
   * @param PlannedProductForecast $forecast
   */
  public function setForecast(PlannedProductForecast $forecast)
  {
    $this->forecast = $forecast;
  }
  /**
   * @return PlannedProductForecast
   */
  public function getForecast()
  {
    return $this->forecast;
  }
  /**
   * Breakdown for individual products at this cost point.
   *
   * @param PlannedProductReachForecast[] $plannedProductReachForecasts
   */
  public function setPlannedProductReachForecasts($plannedProductReachForecasts)
  {
    $this->plannedProductReachForecasts = $plannedProductReachForecasts;
  }
  /**
   * @return PlannedProductReachForecast[]
   */
  public function getPlannedProductReachForecasts()
  {
    return $this->plannedProductReachForecasts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReachForecast::class, 'Google_Service_DisplayVideo_ReachForecast');
