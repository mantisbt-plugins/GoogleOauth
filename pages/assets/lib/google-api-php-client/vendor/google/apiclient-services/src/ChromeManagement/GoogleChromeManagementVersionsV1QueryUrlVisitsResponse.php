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

class GoogleChromeManagementVersionsV1QueryUrlVisitsResponse extends \Google\Collection
{
  protected $collection_key = 'summaries';
  protected $summariesType = GoogleChromeManagementVersionsV1UrlVisitsSummary::class;
  protected $summariesDataType = 'array';

  /**
   * A collection of summaries for various URL visit metrics.
   *
   * @param GoogleChromeManagementVersionsV1UrlVisitsSummary[] $summaries
   */
  public function setSummaries($summaries)
  {
    $this->summaries = $summaries;
  }
  /**
   * @return GoogleChromeManagementVersionsV1UrlVisitsSummary[]
   */
  public function getSummaries()
  {
    return $this->summaries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1QueryUrlVisitsResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1QueryUrlVisitsResponse');
