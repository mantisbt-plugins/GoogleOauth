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

use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1ListDbFrameworkComplianceSummariesResponse;

/**
 * The "dbFrameworkComplianceSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $assuredworkloadsService = new Google\Service\Assuredworkloads(...);
 *   $dbFrameworkComplianceSummaries = $assuredworkloadsService->folders_locations_dbFrameworkComplianceSummaries;
 *  </code>
 */
class FoldersLocationsDbFrameworkComplianceSummaries extends \Google\Service\Resource
{
  /**
   * Lists the compliance summaries of the frameworks that are deployed in a Data
   * Boundary scope (an organization, folder, or project). (dbFrameworkComplianceS
   * ummaries.listFoldersLocationsDbFrameworkComplianceSummaries)
   *
   * @param string $parent Required. The parent scope to list framework compliance
   * summaries for. Formats: * `organizations/{organization}/locations/{location}`
   * * `folders/{folder}/locations/{location}` *
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that restricts the
   * results. Reserved for future use.
   * @opt_param int pageSize Optional. The requested page size. The server might
   * return fewer items than requested. If unspecified, the default page size is
   * 50. The maximum value is 1000.
   * @opt_param string pageToken Optional. A token that identifies the page of
   * results that the server should return. Pass the `next_page_token` value from
   * a previous result.
   * @opt_param string view Optional. The level of detail to return for each
   * summary. If not specified, `FRAMEWORK_COMPLIANCE_SUMMARY_VIEW_BASIC` is used.
   * @return GoogleCloudAssuredworkloadsV1ListDbFrameworkComplianceSummariesResponse
   * @throws \Google\Service\Exception
   */
  public function listFoldersLocationsDbFrameworkComplianceSummaries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAssuredworkloadsV1ListDbFrameworkComplianceSummariesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersLocationsDbFrameworkComplianceSummaries::class, 'Google_Service_Assuredworkloads_Resource_FoldersLocationsDbFrameworkComplianceSummaries');
