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

namespace Google\Service\ServiceNetworking;

class MetricRule extends \Google\Model
{
  /**
   * Optional. Metrics to update when the selected methods are called, and the
   * associated cost applied to each metric, iff the source of the call is an
   * agent. The key of the map is the metric name, and the values are the amount
   * increased for the metric against which the quota limits are defined. The
   * value must not be negative.
   *
   * @var string[]
   */
  public $agenticMetricCosts;
  /**
   * Metrics to update when the selected methods are called, and the associated
   * cost applied to each metric. The key of the map is the metric name, and the
   * values are the amount increased for the metric against which the quota
   * limits are defined. The value must not be negative.
   *
   * @var string[]
   */
  public $metricCosts;
  /**
   * Optional. Metrics to update when the selected methods are called, and the
   * associated cost applied to each metric, iff the source of the call is not
   * an agent. The key of the map is the metric name, and the values are the
   * amount increased for the metric against which the quota limits are defined.
   * The value must not be negative.
   *
   * @var string[]
   */
  public $nonagenticMetricCosts;
  /**
   * Selects the methods to which this rule applies. Refer to selector for
   * syntax details.
   *
   * @var string
   */
  public $selector;

  /**
   * Optional. Metrics to update when the selected methods are called, and the
   * associated cost applied to each metric, iff the source of the call is an
   * agent. The key of the map is the metric name, and the values are the amount
   * increased for the metric against which the quota limits are defined. The
   * value must not be negative.
   *
   * @param string[] $agenticMetricCosts
   */
  public function setAgenticMetricCosts($agenticMetricCosts)
  {
    $this->agenticMetricCosts = $agenticMetricCosts;
  }
  /**
   * @return string[]
   */
  public function getAgenticMetricCosts()
  {
    return $this->agenticMetricCosts;
  }
  /**
   * Metrics to update when the selected methods are called, and the associated
   * cost applied to each metric. The key of the map is the metric name, and the
   * values are the amount increased for the metric against which the quota
   * limits are defined. The value must not be negative.
   *
   * @param string[] $metricCosts
   */
  public function setMetricCosts($metricCosts)
  {
    $this->metricCosts = $metricCosts;
  }
  /**
   * @return string[]
   */
  public function getMetricCosts()
  {
    return $this->metricCosts;
  }
  /**
   * Optional. Metrics to update when the selected methods are called, and the
   * associated cost applied to each metric, iff the source of the call is not
   * an agent. The key of the map is the metric name, and the values are the
   * amount increased for the metric against which the quota limits are defined.
   * The value must not be negative.
   *
   * @param string[] $nonagenticMetricCosts
   */
  public function setNonagenticMetricCosts($nonagenticMetricCosts)
  {
    $this->nonagenticMetricCosts = $nonagenticMetricCosts;
  }
  /**
   * @return string[]
   */
  public function getNonagenticMetricCosts()
  {
    return $this->nonagenticMetricCosts;
  }
  /**
   * Selects the methods to which this rule applies. Refer to selector for
   * syntax details.
   *
   * @param string $selector
   */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /**
   * @return string
   */
  public function getSelector()
  {
    return $this->selector;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricRule::class, 'Google_Service_ServiceNetworking_MetricRule');
