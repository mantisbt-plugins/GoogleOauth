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

namespace Google\Service\HangoutsChat;

class AccessPermissionSettings extends \Google\Model
{
  protected $discoverSpaceSettingType = AccessPermissionSetting::class;
  protected $discoverSpaceSettingDataType = '';
  protected $joinSpaceSettingType = AccessPermissionSetting::class;
  protected $joinSpaceSettingDataType = '';
  protected $viewSpaceMembershipSettingType = AccessPermissionSetting::class;
  protected $viewSpaceMembershipSettingDataType = '';

  /**
   * Optional. Access permission setting for discovering the space.
   *
   * @param AccessPermissionSetting $discoverSpaceSetting
   */
  public function setDiscoverSpaceSetting(AccessPermissionSetting $discoverSpaceSetting)
  {
    $this->discoverSpaceSetting = $discoverSpaceSetting;
  }
  /**
   * @return AccessPermissionSetting
   */
  public function getDiscoverSpaceSetting()
  {
    return $this->discoverSpaceSetting;
  }
  /**
   * Optional. Access permission setting for joining the space.
   *
   * @param AccessPermissionSetting $joinSpaceSetting
   */
  public function setJoinSpaceSetting(AccessPermissionSetting $joinSpaceSetting)
  {
    $this->joinSpaceSetting = $joinSpaceSetting;
  }
  /**
   * @return AccessPermissionSetting
   */
  public function getJoinSpaceSetting()
  {
    return $this->joinSpaceSetting;
  }
  /**
   * Optional. Access permission setting for viewing space membership. Must be
   * specified together with `PermissionSettings.view_space_membership` in the
   * update mask and request body when updating who can view space membership.
   * When granting view access to a target audience, you must also grant
   * `PermissionSettings.view_space_membership` to all members in the same
   * request. To remove an existing target audience (for example, to restrict
   * view access to space managers or assistant managers only), specify an empty
   * `AccessPermissionSetting` (with no `principals`).
   *
   * @param AccessPermissionSetting $viewSpaceMembershipSetting
   */
  public function setViewSpaceMembershipSetting(AccessPermissionSetting $viewSpaceMembershipSetting)
  {
    $this->viewSpaceMembershipSetting = $viewSpaceMembershipSetting;
  }
  /**
   * @return AccessPermissionSetting
   */
  public function getViewSpaceMembershipSetting()
  {
    return $this->viewSpaceMembershipSetting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccessPermissionSettings::class, 'Google_Service_HangoutsChat_AccessPermissionSettings');
