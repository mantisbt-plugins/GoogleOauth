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

class GoogleChromeManagementVersionsV1ContentTransfersSummary extends \Google\Model
{
  /**
   * Unspecified content transfers metric. Defaults to
   * CONTENT_TRANSFERS_METRIC_TOTAL_TRANSFERS.
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_UNSPECIFIED = 'CONTENT_TRANSFERS_METRIC_UNSPECIFIED';
  /**
   * The total number of content transfers (sensitive and non-sensitive). This
   * is the sum of the total_uploads, total_downloads, and total_prints.
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_TOTAL_TRANSFERS = 'CONTENT_TRANSFERS_METRIC_TOTAL_TRANSFERS';
  /**
   * The total number of content uploads (sensitive and non-sensitive).
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_TOTAL_UPLOADS = 'CONTENT_TRANSFERS_METRIC_TOTAL_UPLOADS';
  /**
   * The total number of content downloads (sensitive and non-sensitive).
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_TOTAL_DOWNLOADS = 'CONTENT_TRANSFERS_METRIC_TOTAL_DOWNLOADS';
  /**
   * The total number of content prints (sensitive and non-sensitive).
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_TOTAL_PRINTS = 'CONTENT_TRANSFERS_METRIC_TOTAL_PRINTS';
  /**
   * The total number of sensitive content transfers. This is the sum of the
   * sensitive_uploads, sensitive_downloads, and sensitive_prints.
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_TOTAL_SENSITIVE_TRANSFERS = 'CONTENT_TRANSFERS_METRIC_TOTAL_SENSITIVE_TRANSFERS';
  /**
   * The number of sensitive content uploads.
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_SENSITIVE_UPLOADS = 'CONTENT_TRANSFERS_METRIC_SENSITIVE_UPLOADS';
  /**
   * The number of sensitive content downloads.
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_SENSITIVE_DOWNLOADS = 'CONTENT_TRANSFERS_METRIC_SENSITIVE_DOWNLOADS';
  /**
   * The number of sensitive content prints.
   */
  public const METRIC_CONTENT_TRANSFERS_METRIC_SENSITIVE_PRINTS = 'CONTENT_TRANSFERS_METRIC_SENSITIVE_PRINTS';
  /**
   * The count of the content transfers metric.
   *
   * @var string
   */
  public $count;
  /**
   * The type of content transfers metric.
   *
   * @var string
   */
  public $metric;

  /**
   * The count of the content transfers metric.
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
   * The type of content transfers metric.
   *
   * Accepted values: CONTENT_TRANSFERS_METRIC_UNSPECIFIED,
   * CONTENT_TRANSFERS_METRIC_TOTAL_TRANSFERS,
   * CONTENT_TRANSFERS_METRIC_TOTAL_UPLOADS,
   * CONTENT_TRANSFERS_METRIC_TOTAL_DOWNLOADS,
   * CONTENT_TRANSFERS_METRIC_TOTAL_PRINTS,
   * CONTENT_TRANSFERS_METRIC_TOTAL_SENSITIVE_TRANSFERS,
   * CONTENT_TRANSFERS_METRIC_SENSITIVE_UPLOADS,
   * CONTENT_TRANSFERS_METRIC_SENSITIVE_DOWNLOADS,
   * CONTENT_TRANSFERS_METRIC_SENSITIVE_PRINTS
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
class_alias(GoogleChromeManagementVersionsV1ContentTransfersSummary::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ContentTransfersSummary');
