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

namespace Google\Service\DataManager;

class SizeInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $displayNetworkMembersCount;
  /**
   * @var string
   */
  public $gmailMembersCount;
  /**
   * @var string
   */
  public $searchNetworkMembersCount;
  /**
   * @var string
   */
  public $youtubeMembersCount;

  /**
   * @param string $displayNetworkMembersCount
   */
  public function setDisplayNetworkMembersCount($displayNetworkMembersCount)
  {
    $this->displayNetworkMembersCount = $displayNetworkMembersCount;
  }
  /**
   * @return string
   */
  public function getDisplayNetworkMembersCount()
  {
    return $this->displayNetworkMembersCount;
  }
  /**
   * @param string $gmailMembersCount
   */
  public function setGmailMembersCount($gmailMembersCount)
  {
    $this->gmailMembersCount = $gmailMembersCount;
  }
  /**
   * @return string
   */
  public function getGmailMembersCount()
  {
    return $this->gmailMembersCount;
  }
  /**
   * @param string $searchNetworkMembersCount
   */
  public function setSearchNetworkMembersCount($searchNetworkMembersCount)
  {
    $this->searchNetworkMembersCount = $searchNetworkMembersCount;
  }
  /**
   * @return string
   */
  public function getSearchNetworkMembersCount()
  {
    return $this->searchNetworkMembersCount;
  }
  /**
   * @param string $youtubeMembersCount
   */
  public function setYoutubeMembersCount($youtubeMembersCount)
  {
    $this->youtubeMembersCount = $youtubeMembersCount;
  }
  /**
   * @return string
   */
  public function getYoutubeMembersCount()
  {
    return $this->youtubeMembersCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SizeInfo::class, 'Google_Service_DataManager_SizeInfo');
