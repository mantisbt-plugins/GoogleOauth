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

class GoogleChromeManagementVersionsV1ContentTransfersBreakdown extends \Google\Model
{
  /**
   * The content category of the content transfers.
   *
   * @var string
   */
  public $contentCategory;
  /**
   * The event domain of the content transfers.
   *
   * @var string
   */
  public $eventDomain;
  protected $summaryType = GoogleChromeManagementVersionsV1ContentTransfersSummary::class;
  protected $summaryDataType = '';
  /**
   * The user that transferred the content.
   *
   * @var string
   */
  public $user;

  /**
   * The content category of the content transfers.
   *
   * @param string $contentCategory
   */
  public function setContentCategory($contentCategory)
  {
    $this->contentCategory = $contentCategory;
  }
  /**
   * @return string
   */
  public function getContentCategory()
  {
    return $this->contentCategory;
  }
  /**
   * The event domain of the content transfers.
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
   * The summary of content transfers for the breakdown dimension.
   *
   * @param GoogleChromeManagementVersionsV1ContentTransfersSummary $summary
   */
  public function setSummary(GoogleChromeManagementVersionsV1ContentTransfersSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ContentTransfersSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
  /**
   * The user that transferred the content.
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
class_alias(GoogleChromeManagementVersionsV1ContentTransfersBreakdown::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ContentTransfersBreakdown');
