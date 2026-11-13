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

namespace Google\Service\CustomerEngagementSuite;

class ChannelProfileInstagramConfig extends \Google\Model
{
  /**
   * Output only. The description of the Meta business page or profile.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The fetched Meta business page name.
   *
   * @var string
   */
  public $displayName;
  /**
   * Required. The Instagram Account ID.
   *
   * @var string
   */
  public $instagramAccountId;
  /**
   * Output only. The fetched Meta business profile thumbnail URL.
   *
   * @var string
   */
  public $thumbnailUrl;

  /**
   * Output only. The description of the Meta business page or profile.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The fetched Meta business page name.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Required. The Instagram Account ID.
   *
   * @param string $instagramAccountId
   */
  public function setInstagramAccountId($instagramAccountId)
  {
    $this->instagramAccountId = $instagramAccountId;
  }
  /**
   * @return string
   */
  public function getInstagramAccountId()
  {
    return $this->instagramAccountId;
  }
  /**
   * Output only. The fetched Meta business profile thumbnail URL.
   *
   * @param string $thumbnailUrl
   */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /**
   * @return string
   */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelProfileInstagramConfig::class, 'Google_Service_CustomerEngagementSuite_ChannelProfileInstagramConfig');
