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

class GoogleCloudAssuredworkloadsV1ListDbFindingSummariesResponse extends \Google\Collection
{
  protected $collection_key = 'dbFindingSummaries';
  protected $dbFindingSummariesType = GoogleCloudAssuredworkloadsV1DbFindingSummary::class;
  protected $dbFindingSummariesDataType = 'array';
  /**
   * Output only. A token that can be sent as `page_token` to retrieve the next
   * page. If this field is empty, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The list of finding summaries, one for each finding category.
   *
   * @param GoogleCloudAssuredworkloadsV1DbFindingSummary[] $dbFindingSummaries
   */
  public function setDbFindingSummaries($dbFindingSummaries)
  {
    $this->dbFindingSummaries = $dbFindingSummaries;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1DbFindingSummary[]
   */
  public function getDbFindingSummaries()
  {
    return $this->dbFindingSummaries;
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
class_alias(GoogleCloudAssuredworkloadsV1ListDbFindingSummariesResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ListDbFindingSummariesResponse');
