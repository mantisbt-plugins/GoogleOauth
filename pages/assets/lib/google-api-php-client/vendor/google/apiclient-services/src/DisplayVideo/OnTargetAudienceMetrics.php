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

namespace Google\Service\DisplayVideo;

class OnTargetAudienceMetrics extends \Google\Model
{
  /**
   * Size of the audience based on the census data of the targeted geography.
   *
   * @var string
   */
  public $censusAudienceSize;
  /**
   * Estimated size of the YouTube audience.
   *
   * @var string
   */
  public $youtubeAudienceSize;

  /**
   * Size of the audience based on the census data of the targeted geography.
   *
   * @param string $censusAudienceSize
   */
  public function setCensusAudienceSize($censusAudienceSize)
  {
    $this->censusAudienceSize = $censusAudienceSize;
  }
  /**
   * @return string
   */
  public function getCensusAudienceSize()
  {
    return $this->censusAudienceSize;
  }
  /**
   * Estimated size of the YouTube audience.
   *
   * @param string $youtubeAudienceSize
   */
  public function setYoutubeAudienceSize($youtubeAudienceSize)
  {
    $this->youtubeAudienceSize = $youtubeAudienceSize;
  }
  /**
   * @return string
   */
  public function getYoutubeAudienceSize()
  {
    return $this->youtubeAudienceSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OnTargetAudienceMetrics::class, 'Google_Service_DisplayVideo_OnTargetAudienceMetrics');
