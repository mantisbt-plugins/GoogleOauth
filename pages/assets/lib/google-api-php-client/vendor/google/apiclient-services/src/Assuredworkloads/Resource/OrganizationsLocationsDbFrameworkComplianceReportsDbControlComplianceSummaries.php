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

use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1ListDbControlComplianceSummariesResponse;

/**
 * The "dbControlComplianceSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $assuredworkloadsService = new Google\Service\Assuredworkloads(...);
 *   $dbControlComplianceSummaries = $assuredworkloadsService->organizations_locations_dbFrameworkComplianceReports_dbControlComplianceSummaries;
 *  </code>
 */
class OrganizationsLocationsDbFrameworkComplianceReportsDbControlComplianceSummaries extends \Google\Service\Resource
{
  /**
   * Lists the compliance summaries of the controls in a framework compliance
   * report. (dbControlComplianceSummaries.listOrganizationsLocationsDbFrameworkCo
   * mplianceReportsDbControlComplianceSummaries)
   *
   * @param string $parent Required. The framework compliance report to list
   * control compliance summaries for. Formats: * `organizations/{organization}/lo
   * cations/{location}/dbFrameworkComplianceReports/{db_framework_compliance_repo
   * rt}` * `folders/{folder}/locations/{location}/dbFrameworkComplianceReports/{d
   * b_framework_compliance_report}` * `projects/{project}/locations/{location}/db
   * FrameworkComplianceReports/{db_framework_compliance_report}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that restricts the
   * results. The syntax follows [AIP-160](https://google.aip.dev/160). Supported
   * fields are `framework_deployment`, `framework_name`, `framework_revision`
   * (the major revision ID of the framework), and `end_time`. The `end_time`
   * field accepts a single equality comparison with an [RFC
   * 3339](https://www.ietf.org/rfc/rfc3339.txt) timestamp, for example `end_time
   * = "2026-01-01T00:00:00Z"`. Only findings that were updated at or after this
   * time are counted.
   * @opt_param int pageSize Optional. The requested page size. The server might
   * return fewer items than requested. If unspecified, the default page size is
   * 50. The maximum value is 1000.
   * @opt_param string pageToken Optional. A token that identifies the page of
   * results that the server should return. Pass the `next_page_token` value from
   * a previous result.
   * @return GoogleCloudAssuredworkloadsV1ListDbControlComplianceSummariesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsDbFrameworkComplianceReportsDbControlComplianceSummaries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAssuredworkloadsV1ListDbControlComplianceSummariesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsDbFrameworkComplianceReportsDbControlComplianceSummaries::class, 'Google_Service_Assuredworkloads_Resource_OrganizationsLocationsDbFrameworkComplianceReportsDbControlComplianceSummaries');
