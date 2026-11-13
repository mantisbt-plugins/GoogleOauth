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

class GoogleChromeManagementV1FindSaasUsageReportsResponse extends \Google\Collection
{
  protected $collection_key = 'saasReports';
  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $saasReportsType = GoogleChromeManagementV1SaasUsageReport::class;
  protected $saasReportsDataType = 'array';
  /**
   * Total number of SaaS usage reports that match the request.
   *
   * @var string
   */
  public $totalSize;

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
   * The list of SaaS usage reports.
   *
   * @param GoogleChromeManagementV1SaasUsageReport[] $saasReports
   */
  public function setSaasReports($saasReports)
  {
    $this->saasReports = $saasReports;
  }
  /**
   * @return GoogleChromeManagementV1SaasUsageReport[]
   */
  public function getSaasReports()
  {
    return $this->saasReports;
  }
  /**
   * Total number of SaaS usage reports that match the request.
   *
   * @param string $totalSize
   */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /**
   * @return string
   */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1FindSaasUsageReportsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1FindSaasUsageReportsResponse');
