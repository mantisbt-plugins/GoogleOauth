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

class PlannableUserList extends \Google\Model
{
  /**
   * Unspecified plannability status.
   */
  public const PLANNABLE_STATUS_PLANNABLE_STATUS_UNSPECIFIED = 'PLANNABLE_STATUS_UNSPECIFIED';
  /**
   * The user list is plannable.
   */
  public const PLANNABLE_STATUS_PLANNABLE = 'PLANNABLE';
  /**
   * The user list is unplannable.
   */
  public const PLANNABLE_STATUS_UNPLANNABLE = 'UNPLANNABLE';
  /**
   * Unspecified user list type.
   */
  public const USER_LIST_TYPE_USER_LIST_TYPE_UNSPECIFIED = 'USER_LIST_TYPE_UNSPECIFIED';
  /**
   * A first-party user list.
   */
  public const USER_LIST_TYPE_FIRST_PARTY = 'FIRST_PARTY';
  /**
   * A third-party user list.
   */
  public const USER_LIST_TYPE_THIRD_PARTY = 'THIRD_PARTY';
  /**
   * Output only. The display name of the user list.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The resource name identifying the user list. Format:
   * `advertisers/{advertiser_id}/userLists/{user_list_id}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The plannability status of the user list.
   *
   * @var string
   */
  public $plannableStatus;
  /**
   * Output only. The type of the user list.
   *
   * @var string
   */
  public $userListType;

  /**
   * Output only. The display name of the user list.
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
   * Output only. The resource name identifying the user list. Format:
   * `advertisers/{advertiser_id}/userLists/{user_list_id}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The plannability status of the user list.
   *
   * Accepted values: PLANNABLE_STATUS_UNSPECIFIED, PLANNABLE, UNPLANNABLE
   *
   * @param self::PLANNABLE_STATUS_* $plannableStatus
   */
  public function setPlannableStatus($plannableStatus)
  {
    $this->plannableStatus = $plannableStatus;
  }
  /**
   * @return self::PLANNABLE_STATUS_*
   */
  public function getPlannableStatus()
  {
    return $this->plannableStatus;
  }
  /**
   * Output only. The type of the user list.
   *
   * Accepted values: USER_LIST_TYPE_UNSPECIFIED, FIRST_PARTY, THIRD_PARTY
   *
   * @param self::USER_LIST_TYPE_* $userListType
   */
  public function setUserListType($userListType)
  {
    $this->userListType = $userListType;
  }
  /**
   * @return self::USER_LIST_TYPE_*
   */
  public function getUserListType()
  {
    return $this->userListType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannableUserList::class, 'Google_Service_DisplayVideo_PlannableUserList');
