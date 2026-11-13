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

class UserInterest extends \Google\Model
{
  /**
   * Output only. The resource name of the interest category. Populated when
   * `product_category` is "Youtube". Format:
   * customers/{customer_id}/userInterests/{user_interest_id}
   *
   * @var string
   */
  public $userInterestCategory;
  /**
   * Output only. The resource name of the user list. Populated when
   * `product_category` is "Open Auction". Format:
   * customers/{customer_id}/userLists/{user_list_id}
   *
   * @var string
   */
  public $userInterestUserList;

  /**
   * Output only. The resource name of the interest category. Populated when
   * `product_category` is "Youtube". Format:
   * customers/{customer_id}/userInterests/{user_interest_id}
   *
   * @param string $userInterestCategory
   */
  public function setUserInterestCategory($userInterestCategory)
  {
    $this->userInterestCategory = $userInterestCategory;
  }
  /**
   * @return string
   */
  public function getUserInterestCategory()
  {
    return $this->userInterestCategory;
  }
  /**
   * Output only. The resource name of the user list. Populated when
   * `product_category` is "Open Auction". Format:
   * customers/{customer_id}/userLists/{user_list_id}
   *
   * @param string $userInterestUserList
   */
  public function setUserInterestUserList($userInterestUserList)
  {
    $this->userInterestUserList = $userInterestUserList;
  }
  /**
   * @return string
   */
  public function getUserInterestUserList()
  {
    return $this->userInterestUserList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserInterest::class, 'Google_Service_DisplayVideo_UserInterest');
