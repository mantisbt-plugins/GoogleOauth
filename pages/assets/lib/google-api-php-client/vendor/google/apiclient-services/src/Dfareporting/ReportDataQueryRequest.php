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

namespace Google\Service\Dfareporting;

class ReportDataQueryRequest extends \Google\Collection
{
  protected $collection_key = 'sortBys';
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = DimensionValue::class;
  protected $dimensionFiltersDataType = 'array';
  /**
   * Optional. The list of dimension names to group by.
   *
   * @var string[]
   */
  public $dimensionNames;
  /**
   * Optional. Maximum number of result rows to return per page. The default
   * value is 100. The maximum allowed value is 1000. Values above 1000 will be
   * coerced (clamped) down to 1000. Negative values will be rejected.
   *
   * @var int
   */
  public $maxResults;
  /**
   * Required. The list of metric names to include.
   *
   * @var string[]
   */
  public $metricNames;
  /**
   * Optional. Continuation token for paginating results.
   *
   * @var string
   */
  public $pageToken;
  protected $sortBysType = SortBy::class;
  protected $sortBysDataType = 'array';

  /**
   * Optional. The requested date range covering the report duration.
   *
   * @param DateRange $dateRange
   */
  public function setDateRange(DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /**
   * @return DateRange
   */
  public function getDateRange()
  {
    return $this->dateRange;
  }
  /**
   * Optional. The list of dimension values on which report lines are filtered.
   * Utilizes the existing legacy filter message `DimensionValue`.
   *
   * @param DimensionValue[] $dimensionFilters
   */
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }
  /**
   * @return DimensionValue[]
   */
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  /**
   * Optional. The list of dimension names to group by.
   *
   * @param string[] $dimensionNames
   */
  public function setDimensionNames($dimensionNames)
  {
    $this->dimensionNames = $dimensionNames;
  }
  /**
   * @return string[]
   */
  public function getDimensionNames()
  {
    return $this->dimensionNames;
  }
  /**
   * Optional. Maximum number of result rows to return per page. The default
   * value is 100. The maximum allowed value is 1000. Values above 1000 will be
   * coerced (clamped) down to 1000. Negative values will be rejected.
   *
   * @param int $maxResults
   */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /**
   * @return int
   */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  /**
   * Required. The list of metric names to include.
   *
   * @param string[] $metricNames
   */
  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }
  /**
   * @return string[]
   */
  public function getMetricNames()
  {
    return $this->metricNames;
  }
  /**
   * Optional. Continuation token for paginating results.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * Optional. Sort options across either requested dimensions or metrics.
   *
   * @param SortBy[] $sortBys
   */
  public function setSortBys($sortBys)
  {
    $this->sortBys = $sortBys;
  }
  /**
   * @return SortBy[]
   */
  public function getSortBys()
  {
    return $this->sortBys;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportDataQueryRequest::class, 'Google_Service_Dfareporting_ReportDataQueryRequest');
