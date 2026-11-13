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

class PlannableUserInterest extends \Google\Model
{
  protected $userInterestDataType = '';
  /**
   * Output only. The display name of the interest, for example "Outdoor
   * Enthusiasts".
   *
   * @var string
   */
  public $userInterestDisplayName;
  /**
   * Output only. The category path of the interest.
   *
   * @var string
   */
  public $userInterestPath;
  /**
   * Output only. The type of audience, e.g., "AFFINITY", "IN_MARKET".
   *
   * @var string
   */
  public $userInterestType;

  /**
   * Output only. The identifier for the user interest. The product_category
   * specified in the request dictates the field populated in the object. *
   * user_interest_category is populated for "Youtube". *
   * user_interest_user_list is populated for "Open Auction".
   *
   * @param UserInterest $userInterest
   */
  public function setUserInterest(UserInterest $userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return UserInterest
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * Output only. The display name of the interest, for example "Outdoor
   * Enthusiasts".
   *
   * @param string $userInterestDisplayName
   */
  public function setUserInterestDisplayName($userInterestDisplayName)
  {
    $this->userInterestDisplayName = $userInterestDisplayName;
  }
  /**
   * @return string
   */
  public function getUserInterestDisplayName()
  {
    return $this->userInterestDisplayName;
  }
  /**
   * Output only. The category path of the interest.
   *
   * @param string $userInterestPath
   */
  public function setUserInterestPath($userInterestPath)
  {
    $this->userInterestPath = $userInterestPath;
  }
  /**
   * @return string
   */
  public function getUserInterestPath()
  {
    return $this->userInterestPath;
  }
  /**
   * Output only. The type of audience, e.g., "AFFINITY", "IN_MARKET".
   *
   * @param string $userInterestType
   */
  public function setUserInterestType($userInterestType)
  {
    $this->userInterestType = $userInterestType;
  }
  /**
   * @return string
   */
  public function getUserInterestType()
  {
    return $this->userInterestType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannableUserInterest::class, 'Google_Service_DisplayVideo_PlannableUserInterest');
