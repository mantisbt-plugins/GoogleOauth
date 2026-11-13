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

use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1AggregateDbFrameworkComplianceReportResponse;
use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1FetchDbFrameworkComplianceReportResponse;

/**
 * The "dbFrameworkComplianceReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $assuredworkloadsService = new Google\Service\Assuredworkloads(...);
 *   $dbFrameworkComplianceReports = $assuredworkloadsService->projects_locations_dbFrameworkComplianceReports;
 *  </code>
 */
class ProjectsLocationsDbFrameworkComplianceReports extends \Google\Service\Resource
{
  /**
   * Gets daily compliance reports over a time range for a framework that's
   * deployed in a Data Boundary scope. (dbFrameworkComplianceReports.aggregate)
   *
   * @param string $name Required. The name of the framework compliance report to
   * aggregate over time. The report ID is the ID of the compliance framework, for
   * example `builtin-fedramp-high`. Format: `organizations/{organization_id}/loca
   * tions/{location}/dbFrameworkComplianceReports/{db_framework_compliance_report
   * }`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that restricts the
   * framework deployments that are included in the report. The syntax follows
   * [AIP-160](https://google.aip.dev/160). Supported fields are
   * `framework_deployment`, `framework_name`, and `framework_revision` (the major
   * revision ID of the framework).
   * @opt_param string interval.endTime Optional. Exclusive end of the interval.
   * If specified, a Timestamp matching this interval will have to be before the
   * end.
   * @opt_param string interval.startTime Optional. Inclusive start of the
   * interval. If specified, a Timestamp matching this interval will have to be
   * the same or after the start.
   * @return GoogleCloudAssuredworkloadsV1AggregateDbFrameworkComplianceReportResponse
   * @throws \Google\Service\Exception
   */
  public function aggregate($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('aggregate', [$params], GoogleCloudAssuredworkloadsV1AggregateDbFrameworkComplianceReportResponse::class);
  }
  /**
   * Fetches the current compliance report for a framework that's deployed in a
   * Data Boundary scope (an organization, folder, or project). The report
   * includes the number of passing, failing, and not assessed controls in the
   * framework. (dbFrameworkComplianceReports.fetch)
   *
   * @param string $name Required. The name of the framework compliance report to
   * retrieve. The report ID is the ID of the compliance framework, for example
   * `builtin-fedramp-high`. Formats: * `organizations/{organization}/locations/{l
   * ocation}/dbFrameworkComplianceReports/{db_framework_compliance_report}` * `fo
   * lders/{folder}/locations/{location}/dbFrameworkComplianceReports/{db_framewor
   * k_compliance_report}` * `projects/{project}/locations/{location}/dbFrameworkC
   * omplianceReports/{db_framework_compliance_report}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string endTime Optional. The end time of the report. Reserved for
   * future use. Currently, the report always reflects the current compliance
   * state.
   * @opt_param string filter Optional. A filter expression that restricts the
   * results. Reserved for future use.
   * @return GoogleCloudAssuredworkloadsV1FetchDbFrameworkComplianceReportResponse
   * @throws \Google\Service\Exception
   */
  public function fetch($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetch', [$params], GoogleCloudAssuredworkloadsV1FetchDbFrameworkComplianceReportResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDbFrameworkComplianceReports::class, 'Google_Service_Assuredworkloads_Resource_ProjectsLocationsDbFrameworkComplianceReports');
