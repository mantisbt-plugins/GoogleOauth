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

namespace Google\Service\CloudNumberRegistry;

class SearchIpResourcesRequest extends \Google\Collection
{
  protected $collection_key = 'searchResourceTypes';
  /**
   * Optional. Hint for how to order the results. Supported sort fields are: -
   * `name`: Sort alphabetically by the resource name. - `create_time`: Sort by
   * the creation timestamp of the resource. - `update_time`: Sort by the last
   * update timestamp of the resource. Supported directions are `asc`
   * (ascending) and `desc` (descending). If unspecified, direction defaults to
   * `asc`. Only sorting by a single field is supported.
   *
   * @var string
   */
  public $orderBy;
  /**
   * Optional. Requested page size. Server may return fewer items than
   * requested. If unspecified, server will pick an appropriate default.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. A token identifying a page of results the server should return.
   *
   * @var string
   */
  public $pageToken;
  /**
   * Optional. Search query. This string filters resources in an AIP-160-like
   * format. It has some limitations. You can only specify top level
   * conjunctions or attribute level negations. Each restriction can only be
   * used once except the attribute restriction. The available restrictions for
   * Ranges are: - `resource_id`: The resource ID to search for within Ranges
   * (only substring matching using the format `resource_id="*value*"` is
   * supported). - `realm`: The Realm name to search in. - `ip_address`: The IP
   * address to search for within Ranges. - `ip_version`: The IP version to
   * filter by (e.g., "IPV4", "IPV6"). - `parent_range`: The parent Range of the
   * Range to search for. - `attribute_text`: The attribute text to search for
   * within Ranges. - `attribute`: The attribute key and value to filter by. The
   * available restrictions for Realms are: - `ip_version`: The IP version to
   * search for. - `management_type`: The management type of the Realm (e.g.,
   * "CNR", "USER"). Only one of attribute_text or multiple attribute filters
   * can be specified. Examples: - `realm=test-realm` - `realm=test-realm AND
   * ip_address=10.0.0.0` - `realm=test-realm AND ip_version=IPV6` -
   * `realm=test-realm AND resource_id="*my-range*"` - `realm=test-realm AND
   * attribute_text=test` - `ip_address=10.0.0.0 AND attribute:(key1=value1) AND
   * attribute:(key2=value2)` - `attribute_text=test AND
   * parent_range=projects/123/locations/global/discoveredRanges/test-parent-
   * range` - `management_type=CNR`
   *
   * @var string
   */
  public $query;
  /**
   * Optional. The type of resources to search for. If not specified, the server
   * will return Ranges.
   *
   * @var string[]
   */
  public $searchResourceTypes;
  /**
   * Optional. Whether to show the utilization of the Ranges in the response.
   *
   * @var bool
   */
  public $showUtilization;

  /**
   * Optional. Hint for how to order the results. Supported sort fields are: -
   * `name`: Sort alphabetically by the resource name. - `create_time`: Sort by
   * the creation timestamp of the resource. - `update_time`: Sort by the last
   * update timestamp of the resource. Supported directions are `asc`
   * (ascending) and `desc` (descending). If unspecified, direction defaults to
   * `asc`. Only sorting by a single field is supported.
   *
   * @param string $orderBy
   */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /**
   * @return string
   */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /**
   * Optional. Requested page size. Server may return fewer items than
   * requested. If unspecified, server will pick an appropriate default.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Optional. A token identifying a page of results the server should return.
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
   * Optional. Search query. This string filters resources in an AIP-160-like
   * format. It has some limitations. You can only specify top level
   * conjunctions or attribute level negations. Each restriction can only be
   * used once except the attribute restriction. The available restrictions for
   * Ranges are: - `resource_id`: The resource ID to search for within Ranges
   * (only substring matching using the format `resource_id="*value*"` is
   * supported). - `realm`: The Realm name to search in. - `ip_address`: The IP
   * address to search for within Ranges. - `ip_version`: The IP version to
   * filter by (e.g., "IPV4", "IPV6"). - `parent_range`: The parent Range of the
   * Range to search for. - `attribute_text`: The attribute text to search for
   * within Ranges. - `attribute`: The attribute key and value to filter by. The
   * available restrictions for Realms are: - `ip_version`: The IP version to
   * search for. - `management_type`: The management type of the Realm (e.g.,
   * "CNR", "USER"). Only one of attribute_text or multiple attribute filters
   * can be specified. Examples: - `realm=test-realm` - `realm=test-realm AND
   * ip_address=10.0.0.0` - `realm=test-realm AND ip_version=IPV6` -
   * `realm=test-realm AND resource_id="*my-range*"` - `realm=test-realm AND
   * attribute_text=test` - `ip_address=10.0.0.0 AND attribute:(key1=value1) AND
   * attribute:(key2=value2)` - `attribute_text=test AND
   * parent_range=projects/123/locations/global/discoveredRanges/test-parent-
   * range` - `management_type=CNR`
   *
   * @param string $query
   */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /**
   * @return string
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * Optional. The type of resources to search for. If not specified, the server
   * will return Ranges.
   *
   * @param string[] $searchResourceTypes
   */
  public function setSearchResourceTypes($searchResourceTypes)
  {
    $this->searchResourceTypes = $searchResourceTypes;
  }
  /**
   * @return string[]
   */
  public function getSearchResourceTypes()
  {
    return $this->searchResourceTypes;
  }
  /**
   * Optional. Whether to show the utilization of the Ranges in the response.
   *
   * @param bool $showUtilization
   */
  public function setShowUtilization($showUtilization)
  {
    $this->showUtilization = $showUtilization;
  }
  /**
   * @return bool
   */
  public function getShowUtilization()
  {
    return $this->showUtilization;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchIpResourcesRequest::class, 'Google_Service_CloudNumberRegistry_SearchIpResourcesRequest');
