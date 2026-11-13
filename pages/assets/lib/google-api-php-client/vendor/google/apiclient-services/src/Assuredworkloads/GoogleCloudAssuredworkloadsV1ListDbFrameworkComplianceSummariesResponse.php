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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1ListDbFrameworkComplianceSummariesResponse extends \Google\Collection
{
  protected $collection_key = 'dbFrameworkComplianceSummaries';
  protected $dbFrameworkComplianceSummariesType = GoogleCloudAssuredworkloadsV1DbFrameworkComplianceSummary::class;
  protected $dbFrameworkComplianceSummariesDataType = 'array';
  /**
   * Output only. A token that can be sent as `page_token` to retrieve the next
   * page. If this field is empty, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The list of framework compliance summaries.
   *
   * @param GoogleCloudAssuredworkloadsV1DbFrameworkComplianceSummary[] $dbFrameworkComplianceSummaries
   */
  public function setDbFrameworkComplianceSummaries($dbFrameworkComplianceSummaries)
  {
    $this->dbFrameworkComplianceSummaries = $dbFrameworkComplianceSummaries;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1DbFrameworkComplianceSummary[]
   */
  public function getDbFrameworkComplianceSummaries()
  {
    return $this->dbFrameworkComplianceSummaries;
  }
  /**
   * Output only. A token that can be sent as `page_token` to retrieve the next
   * page. If this field is empty, there are no subsequent pages.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1ListDbFrameworkComplianceSummariesResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ListDbFrameworkComplianceSummariesResponse');
