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

namespace Google\Service\AnalyticsData;

class DataTruncationReason extends \Google\Collection
{
  /**
   * Unspecified type.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_UNSPECIFIED = 'DATA_TRUNCATION_TYPE_UNSPECIFIED';
  /**
   * Data is truncated in attribution report for rules-based models golden date.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_RULES_BASED_MODELS = 'DATA_TRUNCATION_TYPE_RULES_BASED_MODELS';
  /**
   * Data is truncated in attribution report for data driven attribution golden
   * date.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_DATA_DRIVEN_ATTRIBUTION = 'DATA_TRUNCATION_TYPE_DATA_DRIVEN_ATTRIBUTION';
  /**
   * Data is truncated because DV360 policy does not permit data older than 2
   * years from being returned.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_DV360 = 'DATA_TRUNCATION_TYPE_DV360';
  /**
   * Data is truncated because CM360 policy does not permit data older than 2
   * years from being returned.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_CM360 = 'DATA_TRUNCATION_TYPE_CM360';
  /**
   * New item-scoped ecommerce metrics only have data after a specific date.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_ITEM_SCOPED_ECOMMERCE_METRICS = 'DATA_TRUNCATION_TYPE_ITEM_SCOPED_ECOMMERCE_METRICS';
  /**
   * New event-scoped ecommerce metrics only have data after a specific date.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_EVENT_SCOPED_ECOMMERCE_METRICS = 'DATA_TRUNCATION_TYPE_EVENT_SCOPED_ECOMMERCE_METRICS';
  /**
   * Query date range may not be fully served.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_DATE_RANGE = 'DATA_TRUNCATION_TYPE_DATE_RANGE';
  /**
   * Data truncated because the query attempts to read event data prior to its
   * retention date.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_PROPERTY = 'DATA_TRUNCATION_TYPE_PROPERTY';
  /**
   * Data is truncated in conversions report.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_CONVERSIONS = 'DATA_TRUNCATION_TYPE_CONVERSIONS';
  /**
   * Data is truncated due to Google Ads 36 month retention policy.
   */
  public const DATA_TRUNCATION_TYPE_DATA_TRUNCATION_TYPE_GOOGLE_ADS = 'DATA_TRUNCATION_TYPE_GOOGLE_ADS';
  protected $collection_key = 'dataTruncationDateRanges';
  /**
   * The data truncation date in the format YYYY-MM-DD. Indicates data before
   * this date is truncated.
   *
   * @var string
   */
  public $dataTruncationDate;
  protected $dataTruncationDateRangesType = DataTruncationDateRange::class;
  protected $dataTruncationDateRangesDataType = 'array';
  /**
   * A descriptive message explaining the data truncation.
   *
   * @var string
   */
  public $dataTruncationMessage;
  /**
   * The type of data truncation.
   *
   * @var string
   */
  public $dataTruncationType;

  /**
   * The data truncation date in the format YYYY-MM-DD. Indicates data before
   * this date is truncated.
   *
   * @param string $dataTruncationDate
   */
  public function setDataTruncationDate($dataTruncationDate)
  {
    $this->dataTruncationDate = $dataTruncationDate;
  }
  /**
   * @return string
   */
  public function getDataTruncationDate()
  {
    return $this->dataTruncationDate;
  }
  /**
   * The truncated date ranges.
   *
   * @param DataTruncationDateRange[] $dataTruncationDateRanges
   */
  public function setDataTruncationDateRanges($dataTruncationDateRanges)
  {
    $this->dataTruncationDateRanges = $dataTruncationDateRanges;
  }
  /**
   * @return DataTruncationDateRange[]
   */
  public function getDataTruncationDateRanges()
  {
    return $this->dataTruncationDateRanges;
  }
  /**
   * A descriptive message explaining the data truncation.
   *
   * @param string $dataTruncationMessage
   */
  public function setDataTruncationMessage($dataTruncationMessage)
  {
    $this->dataTruncationMessage = $dataTruncationMessage;
  }
  /**
   * @return string
   */
  public function getDataTruncationMessage()
  {
    return $this->dataTruncationMessage;
  }
  /**
   * The type of data truncation.
   *
   * Accepted values: DATA_TRUNCATION_TYPE_UNSPECIFIED,
   * DATA_TRUNCATION_TYPE_RULES_BASED_MODELS,
   * DATA_TRUNCATION_TYPE_DATA_DRIVEN_ATTRIBUTION, DATA_TRUNCATION_TYPE_DV360,
   * DATA_TRUNCATION_TYPE_CM360,
   * DATA_TRUNCATION_TYPE_ITEM_SCOPED_ECOMMERCE_METRICS,
   * DATA_TRUNCATION_TYPE_EVENT_SCOPED_ECOMMERCE_METRICS,
   * DATA_TRUNCATION_TYPE_DATE_RANGE, DATA_TRUNCATION_TYPE_PROPERTY,
   * DATA_TRUNCATION_TYPE_CONVERSIONS, DATA_TRUNCATION_TYPE_GOOGLE_ADS
   *
   * @param self::DATA_TRUNCATION_TYPE_* $dataTruncationType
   */
  public function setDataTruncationType($dataTruncationType)
  {
    $this->dataTruncationType = $dataTruncationType;
  }
  /**
   * @return self::DATA_TRUNCATION_TYPE_*
   */
  public function getDataTruncationType()
  {
    return $this->dataTruncationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataTruncationReason::class, 'Google_Service_AnalyticsData_DataTruncationReason');
