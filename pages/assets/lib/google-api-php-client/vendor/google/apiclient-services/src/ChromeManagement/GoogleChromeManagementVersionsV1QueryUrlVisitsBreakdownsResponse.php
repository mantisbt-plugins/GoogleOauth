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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1QueryUrlVisitsBreakdownsResponse extends \Google\Collection
{
  protected $collection_key = 'urlVisitsBreakdowns';
  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $urlVisitsBreakdownsType = GoogleChromeManagementVersionsV1UrlVisitsBreakdown::class;
  protected $urlVisitsBreakdownsDataType = 'array';

  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
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
  /**
   * The URL visit breakdowns from the specified insight.
   *
   * @param GoogleChromeManagementVersionsV1UrlVisitsBreakdown[] $urlVisitsBreakdowns
   */
  public function setUrlVisitsBreakdowns($urlVisitsBreakdowns)
  {
    $this->urlVisitsBreakdowns = $urlVisitsBreakdowns;
  }
  /**
   * @return GoogleChromeManagementVersionsV1UrlVisitsBreakdown[]
   */
  public function getUrlVisitsBreakdowns()
  {
    return $this->urlVisitsBreakdowns;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1QueryUrlVisitsBreakdownsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1QueryUrlVisitsBreakdownsResponse');
