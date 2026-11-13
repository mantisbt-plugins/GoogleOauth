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

namespace Google\Service\ChromeManagement\Resource;

use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1CheckEnablementStatusResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1DisableInsightsRequest;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1DisableInsightsResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1EnableInsightsRequest;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1EnableInsightsResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1QueryContentTransfersBreakdownsResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1QueryContentTransfersResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1QueryUrlVisitsBreakdownsResponse;
use Google\Service\ChromeManagement\GoogleChromeManagementVersionsV1QueryUrlVisitsResponse;

/**
 * The "securityInsights" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromemanagementService = new Google\Service\ChromeManagement(...);
 *   $securityInsights = $chromemanagementService->customers_enterprise_securityInsights;
 *  </code>
 */
class CustomersEnterpriseSecurityInsights extends \Google\Service\Resource
{
  /**
   * Gets the setting state of the insights feature for the customer.
   * (securityInsights.checkEnablementStatus)
   *
   * @param string $customer Required. The customer to check the enablement status
   * for. Format: customers/{customer_id}
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1CheckEnablementStatusResponse
   * @throws \Google\Service\Exception
   */
  public function checkEnablementStatus($customer, $optParams = [])
  {
    $params = ['customer' => $customer];
    $params = array_merge($params, $optParams);
    return $this->call('checkEnablementStatus', [$params], GoogleChromeManagementVersionsV1CheckEnablementStatusResponse::class);
  }
  /**
   * Disables insights for the customer. (securityInsights.disable)
   *
   * @param string $customer Required. The customer to disable insights for.
   * Format: customers/{customer}
   * @param GoogleChromeManagementVersionsV1DisableInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1DisableInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function disable($customer, GoogleChromeManagementVersionsV1DisableInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('disable', [$params], GoogleChromeManagementVersionsV1DisableInsightsResponse::class);
  }
  /**
   * Enables insights for the customer and sets up required chrome connectors.
   * (securityInsights.enable)
   *
   * @param string $customer Required. The customer to enable insights for.
   * Format: customers/{customer}
   * @param GoogleChromeManagementVersionsV1EnableInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleChromeManagementVersionsV1EnableInsightsResponse
   * @throws \Google\Service\Exception
   */
  public function enable($customer, GoogleChromeManagementVersionsV1EnableInsightsRequest $postBody, $optParams = [])
  {
    $params = ['customer' => $customer, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enable', [$params], GoogleChromeManagementVersionsV1EnableInsightsResponse::class);
  }
  /**
   * Returns a high-level summary of content transfers for a given customer.
   * (securityInsights.queryContentTransfers)
   *
   * @param string $customer Required. The customer ID in the format
   * "customers/{customer_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The filter to apply to the request. For
   * syntax, see AIP-160. Data is not available for events older than 180 days,
   * and may be unavailable or inaccurate for time ranges less than 4 hours. If
   * `event_time` is not specified, results will be returned for the last 30 days.
   * Supported fields for filtering: - `event_time` Supported operators: - `>=`
   * and `<=` for `event_time` Supported conjunctions: - `AND` Example:
   * `event_time >= "2024-01-01T00:00:00Z" AND event_time <=
   * "2024-01-02T00:00:00Z"`
   * @return GoogleChromeManagementVersionsV1QueryContentTransfersResponse
   * @throws \Google\Service\Exception
   */
  public function queryContentTransfers($customer, $optParams = [])
  {
    $params = ['customer' => $customer];
    $params = array_merge($params, $optParams);
    return $this->call('queryContentTransfers', [$params], GoogleChromeManagementVersionsV1QueryContentTransfersResponse::class);
  }
  /**
   * Returns summaries of content transfers for a given metric and breakdown
   * dimension. (securityInsights.queryContentTransfersBreakdowns)
   *
   * @param string $customer Required. The customer ID in the format
   * "customers/{customer_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string breakdown Optional. The dimension to break down the content
   * transfers by. Defaults to USER.
   * @opt_param string filter Optional. The filter to apply to the request. For
   * syntax, see AIP-160. Data is not available for events older than 180 days or
   * more recent than 48 hours ago. If `event_time` is not specified, results will
   * end 48 hours ago. Supported fields for filtering: - `user` - `event_domain` -
   * `content_category` - `event_time` Filtering by `user` or `event_domain`
   * requires the `breakdown` dimension to be set to the corresponding value
   * (e.g., you must set `breakdown = USER` to filter by `user`). Supported
   * operators: - `=` for `user`, `event_domain`, and `content_category`. - `<=`
   * for `event_time`. Supported conjunctions: - `AND` Example: `user = "testuser"
   * AND event_time <= "2024-01-02T00:00:00Z"`
   * @opt_param string fixedTimeRange Optional. The fixed time range to return the
   * breakdowns for. Defaults to FIXED_TIME_RANGE_FOUR_WEEKS. Fixed time ranges
   * are used to allow for precomputation and optimize response times.
   * @opt_param string metric Optional. The metric to return the breakdowns for.
   * Defaults to CONTENT_TRANSFERS_METRIC_TOTAL_TRANSFERS.
   * @opt_param int pageSize Optional. The maximum number of breakdowns to return.
   * The service may return fewer than this value. If unspecified, at most 50
   * breakdowns will be returned. The maximum value is 1000; values above 1000
   * will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `QueryContentTransfersBreakdowns` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `QueryContentTransfersBreakdowns` must match the call that provided the page
   * token.
   * @return GoogleChromeManagementVersionsV1QueryContentTransfersBreakdownsResponse
   * @throws \Google\Service\Exception
   */
  public function queryContentTransfersBreakdowns($customer, $optParams = [])
  {
    $params = ['customer' => $customer];
    $params = array_merge($params, $optParams);
    return $this->call('queryContentTransfersBreakdowns', [$params], GoogleChromeManagementVersionsV1QueryContentTransfersBreakdownsResponse::class);
  }
  /**
   * Returns a high-level summary of URL visits for a given customer. Requires a
   * Chrome Enterprise Premium subscription. If the customer does not have this
   * subscription, query results will be empty. (securityInsights.queryUrlVisits)
   *
   * @param string $customer Required. The customer ID in the format
   * "customers/{customer_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The filter to apply to the request. For
   * syntax, see AIP-160. Data is not available for events older than 180 days,
   * and may be unavailable or inaccurate for time ranges less than 4 hours. If
   * `event_time` is not specified, results will be returned for the last 30 days.
   * Supported fields for filtering: - `event_time` Supported operators: - `>=`
   * and `<=` for `event_time` Supported conjunctions: - `AND` Example:
   * `event_time >= "2024-01-01T00:00:00Z" AND event_time <=
   * "2024-01-02T00:00:00Z"`
   * @return GoogleChromeManagementVersionsV1QueryUrlVisitsResponse
   * @throws \Google\Service\Exception
   */
  public function queryUrlVisits($customer, $optParams = [])
  {
    $params = ['customer' => $customer];
    $params = array_merge($params, $optParams);
    return $this->call('queryUrlVisits', [$params], GoogleChromeManagementVersionsV1QueryUrlVisitsResponse::class);
  }
  /**
   * Returns summaries of URL visits for a given metric and breakdown dimension.
   * Requires a Chrome Enterprise Premium subscription. If the customer does not
   * have this subscription, query results will be empty.
   * (securityInsights.queryUrlVisitsBreakdowns)
   *
   * @param string $customer Required. The customer ID in the format
   * "customers/{customer_id}".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string breakdown Optional. The dimension to break down the URL
   * visits by. Defaults to USER.
   * @opt_param string filter Optional. The filter to apply to the request. For
   * syntax, see AIP-160. Data is not available for events older than 180 days or
   * more recent than 48 hours ago. If `event_time` is not specified, results will
   * end 48 hours ago. Supported fields for filtering: - `user` - `event_domain` -
   * `event_time` Filtering by `user` or `event_domain` requires the `breakdown`
   * dimension to be set to the corresponding value (e.g., you must set `breakdown
   * = USER` to filter by `user`). Supported operators: - `=` for `user` and
   * `event_domain`. - `<=` for `event_time`. Supported conjunctions: - `AND`
   * Example: `user = "testuser" AND event_time <= "2024-01-02T00:00:00Z"`
   * @opt_param string fixedTimeRange Optional. The fixed time range to return the
   * breakdowns for. Defaults to FIXED_TIME_RANGE_FOUR_WEEKS. Fixed time ranges
   * are used to allow for precomputation and optimize response times.
   * @opt_param string metric Optional. The metric to return the breakdowns for.
   * Defaults to URL_VISITS_METRIC_TOTAL_SUSPICIOUS_URL_VISITS.
   * @opt_param int pageSize Optional. The maximum number of breakdowns to return.
   * The service may return fewer than this value. If unspecified, at most 50
   * breakdowns will be returned. The maximum value is 1000; values above 1000
   * will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `QueryUrlVisitsBreakdowns` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `QueryUrlVisitsBreakdowns` must match the call that provided the page token.
   * @return GoogleChromeManagementVersionsV1QueryUrlVisitsBreakdownsResponse
   * @throws \Google\Service\Exception
   */
  public function queryUrlVisitsBreakdowns($customer, $optParams = [])
  {
    $params = ['customer' => $customer];
    $params = array_merge($params, $optParams);
    return $this->call('queryUrlVisitsBreakdowns', [$params], GoogleChromeManagementVersionsV1QueryUrlVisitsBreakdownsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersEnterpriseSecurityInsights::class, 'Google_Service_ChromeManagement_Resource_CustomersEnterpriseSecurityInsights');
