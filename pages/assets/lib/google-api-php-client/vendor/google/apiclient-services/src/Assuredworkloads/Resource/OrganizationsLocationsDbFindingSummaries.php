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

use Google\Service\Assuredworkloads\GoogleCloudAssuredworkloadsV1ListDbFindingSummariesResponse;

/**
 * The "dbFindingSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $assuredworkloadsService = new Google\Service\Assuredworkloads(...);
 *   $dbFindingSummaries = $assuredworkloadsService->organizations_locations_dbFindingSummaries;
 *  </code>
 */
class OrganizationsLocationsDbFindingSummaries extends \Google\Service\Resource
{
  /**
   * Lists summaries of the active findings in a Data Boundary scope (an
   * organization, folder, or project), with one summary for each finding
   * category. (dbFindingSummaries.listOrganizationsLocationsDbFindingSummaries)
   *
   * @param string $parent Required. The parent scope to list finding summaries
   * for. Formats: * `organizations/{organization}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that restricts the
   * framework deployments whose findings are summarized. The syntax follows
   * [AIP-160](https://google.aip.dev/160). Supported fields are
   * `framework_deployment`, `framework_name`, and `framework_revision` (the major
   * revision ID of the framework).
   * @opt_param int pageSize Optional. The requested page size. The server might
   * return fewer items than requested. If unspecified, the server picks an
   * appropriate default.
   * @opt_param string pageToken Optional. A token that identifies the page of
   * results that the server should return. Pass the `next_page_token` value from
   * a previous result.
   * @return GoogleCloudAssuredworkloadsV1ListDbFindingSummariesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsDbFindingSummaries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAssuredworkloadsV1ListDbFindingSummariesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsDbFindingSummaries::class, 'Google_Service_Assuredworkloads_Resource_OrganizationsLocationsDbFindingSummaries');
