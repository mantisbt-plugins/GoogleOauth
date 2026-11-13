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

class GoogleChromeManagementVersionsV1UrlVisitsBreakdown extends \Google\Model
{
  /**
   * The event domain of the URL visits.
   *
   * @var string
   */
  public $eventDomain;
  protected $summaryType = GoogleChromeManagementVersionsV1UrlVisitsSummary::class;
  protected $summaryDataType = '';
  /**
   * The user that visited the URL.
   *
   * @var string
   */
  public $user;

  /**
   * The event domain of the URL visits.
   *
   * @param string $eventDomain
   */
  public function setEventDomain($eventDomain)
  {
    $this->eventDomain = $eventDomain;
  }
  /**
   * @return string
   */
  public function getEventDomain()
  {
    return $this->eventDomain;
  }
  /**
   * The summary of URL visits for the breakdown dimension.
   *
   * @param GoogleChromeManagementVersionsV1UrlVisitsSummary $summary
   */
  public function setSummary(GoogleChromeManagementVersionsV1UrlVisitsSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return GoogleChromeManagementVersionsV1UrlVisitsSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
  /**
   * The user that visited the URL.
   *
   * @param string $user
   */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /**
   * @return string
   */
  public function getUser()
  {
    return $this->user;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1UrlVisitsBreakdown::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1UrlVisitsBreakdown');
