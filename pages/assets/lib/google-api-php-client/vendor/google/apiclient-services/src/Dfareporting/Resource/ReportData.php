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

namespace Google\Service\Dfareporting\Resource;

use Google\Service\Dfareporting\ReportDataQueryRequest;
use Google\Service\Dfareporting\ReportDataResponse;

/**
 * The "reportData" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google\Service\Dfareporting(...);
 *   $reportData = $dfareportingService->reportData;
 *  </code>
 */
class ReportData extends \Google\Service\Resource
{
  /**
   * Executes an ad-hoc query and returns structured JSON payload data.
   * (reportData.query)
   *
   * @param string $profileId Required. The Campaign Manager 360 user profile ID.
   * @param ReportDataQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ReportDataResponse
   * @throws \Google\Service\Exception
   */
  public function query($profileId, ReportDataQueryRequest $postBody, $optParams = [])
  {
    $params = ['profileId' => $profileId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('query', [$params], ReportDataResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportData::class, 'Google_Service_Dfareporting_Resource_ReportData');
