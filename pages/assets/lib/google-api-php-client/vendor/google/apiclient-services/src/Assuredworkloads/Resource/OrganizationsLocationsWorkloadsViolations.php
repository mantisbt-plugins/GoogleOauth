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

namespace Google\Service\Assuredworkloads\Resource;

use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest;
use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1AcknowledgeViolationResponse;
use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1ListViolationsResponse;
use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1Violation;

/**
 * The "violations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $assuredworkloadsService = new Google\Service\Assuredworkloads(...);
 *   $violations = $assuredworkloadsService->organizations_locations_workloads_violations;
 *  </code>
 */
class OrganizationsLocationsWorkloadsViolations extends \Google\Service\Resource
{
  /**
   * Acknowledges an existing violation. By acknowledging a violation, users
   * acknowledge the existence of a compliance violation in their workload and
   * decide to ignore it due to a valid business justification. Acknowledgement is
   * a permanent operation and it cannot be reverted. (violations.acknowledge)
   *
   * @param string $name Required. The resource name of the violation to
   * acknowledge. Format: `organizations/{organization}/locations/{location}/workl
   * oads/{workload}/violations/{violation}`
   * @param GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAssuredworkloadsV1AcknowledgeViolationResponse
   * @throws \Google\Service\Exception
   */
  public function acknowledge($name, GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('acknowledge', [$params], GoogleCloudAssuredworkloadsV1AcknowledgeViolationResponse::class);
  }
  /**
   * Retrieves an Assured Workloads violation by its resource name.
   * (violations.get)
   *
   * @param string $name Required. The resource name of the violation to retrieve
   * (that is, the value of `Violation.name`). Format: `organizations/{organizatio
   * n}/locations/{location}/workloads/{workload}/violations/{violation}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. The violation view
   * (`VIOLATION_VIEW_ASSURED_WORKLOADS` or `VIOLATION_VIEW_DATA_BOUNDARY`) that
   * the violation belongs to. If not specified,
   * `VIOLATION_VIEW_ASSURED_WORKLOADS` is used.
   * @return GoogleCloudAssuredworkloadsV1Violation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAssuredworkloadsV1Violation::class);
  }
  /**
   * Lists the Violations in the AssuredWorkload Environment. Callers may also
   * choose to read across multiple Workloads as per
   * [AIP-159](https://google.aip.dev/159) by using '-' (the hyphen or dash
   * character) as a wildcard character instead of workload-id in the parent.
   * Format `organizations/{org_id}/locations/{location}/workloads/-`
   * (violations.listOrganizationsLocationsWorkloadsViolations)
   *
   * @param string $parent Required. The workload to list violations for. To list
   * violations across all workloads in an organization, use `-` as the workload
   * ID. When `view` is `VIOLATION_VIEW_DATA_BOUNDARY`, violations are listed for
   * the entire organization and location, and the workload ID is ignored. Format:
   * `organizations/{organization}/locations/{location}/workloads/{workload}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that restricts the
   * violations that are returned. The syntax follows
   * [AIP-160](https://google.aip.dev/160). Only the equality operator (`=`) is
   * supported, and expressions can be combined with `AND`, `OR`, and `NOT`. When
   * `view` is `VIOLATION_VIEW_DATA_BOUNDARY`, the following fields are supported:
   * `violationId`, `category`, `state` (`UNRESOLVED`, `RESOLVED`, or
   * `EXCEPTION`), `violationType` (`ORG_POLICY` or `RESOURCE`), `resourceType`,
   * `resourceName`, `project`, `associatedOrgPolicyViolationId`,
   * `cloudControlName`, `workloadDisplayName`, and `complianceType` (a framework
   * ID). Example: `state = "UNRESOLVED" AND complianceType = "builtin-fedramp-
   * high"`
   * @opt_param string interval.endTime The end of the time window.
   * @opt_param string interval.startTime The start of the time window.
   * @opt_param string orderBy Optional. A comma-separated list of fields to sort
   * the results by. The default sort order is ascending; to sort in descending
   * order, append ` desc` to the field name. For example, `update_time
   * desc,category`. When `view` is `VIOLATION_VIEW_DATA_BOUNDARY`, the following
   * fields are supported: `begin_time`, `update_time`, `resource_type`, `state`,
   * and `category`. If not specified, results are sorted by `begin_time` in
   * descending order.
   * @opt_param int pageSize Optional. The maximum number of violations to return.
   * The service might return fewer violations than this value. If unspecified, at
   * most 100 violations are returned. The maximum value is 1000; values above
   * 1000 are coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListViolations` call. Provide this token to retrieve the subsequent page.
   * When paginating, all other parameters that are provided to `ListViolations`
   * must match the call that provided the page token.
   * @opt_param string view Optional. The violation view
   * (`VIOLATION_VIEW_ASSURED_WORKLOADS` or `VIOLATION_VIEW_DATA_BOUNDARY`) to
   * list violations for. If not specified, `VIOLATION_VIEW_ASSURED_WORKLOADS` is
   * used.
   * @return GoogleCloudAssuredworkloadsV1ListViolationsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsWorkloadsViolations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAssuredworkloadsV1ListViolationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsWorkloadsViolations::class, 'Google_Service_Assuredworkloads_Resource_OrganizationsLocationsWorkloadsViolations');
