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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1UrlVisitsSummary extends \Google\Model
{
  /**
   * Unspecified URL visits metric. Defaults to
   * URL_VISITS_METRIC_TOTAL_SUSPICIOUS_URL_VISITS.
   */
  public const METRIC_URL_VISITS_METRIC_UNSPECIFIED = 'URL_VISITS_METRIC_UNSPECIFIED';
  /**
   * The total number of suspicious URL visits. This is the sum of the
   * high_risk_url_visits, medium_risk_url_visits, and low_risk_url_visits.
   */
  public const METRIC_URL_VISITS_METRIC_TOTAL_SUSPICIOUS_URL_VISITS = 'URL_VISITS_METRIC_TOTAL_SUSPICIOUS_URL_VISITS';
  /**
   * The number of suspicious URL visits with high risk.
   */
  public const METRIC_URL_VISITS_METRIC_HIGH_RISK_URL_VISITS = 'URL_VISITS_METRIC_HIGH_RISK_URL_VISITS';
  /**
   * The number of suspicious URL visits with medium risk.
   */
  public const METRIC_URL_VISITS_METRIC_MEDIUM_RISK_URL_VISITS = 'URL_VISITS_METRIC_MEDIUM_RISK_URL_VISITS';
  /**
   * The number of suspicious URL visits with low risk.
   */
  public const METRIC_URL_VISITS_METRIC_LOW_RISK_URL_VISITS = 'URL_VISITS_METRIC_LOW_RISK_URL_VISITS';
  /**
   * The count of the URL visits metric.
   *
   * @var string
   */
  public $count;
  /**
   * The type of URL visits metric.
   *
   * @var string
   */
  public $metric;

  /**
   * The count of the URL visits metric.
   *
   * @param string $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * The type of URL visits metric.
   *
   * Accepted values: URL_VISITS_METRIC_UNSPECIFIED,
   * URL_VISITS_METRIC_TOTAL_SUSPICIOUS_URL_VISITS,
   * URL_VISITS_METRIC_HIGH_RISK_URL_VISITS,
   * URL_VISITS_METRIC_MEDIUM_RISK_URL_VISITS,
   * URL_VISITS_METRIC_LOW_RISK_URL_VISITS
   *
   * @param self::METRIC_* $metric
   */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return self::METRIC_*
   */
  public function getMetric()
  {
    return $this->metric;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1UrlVisitsSummary::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1UrlVisitsSummary');
