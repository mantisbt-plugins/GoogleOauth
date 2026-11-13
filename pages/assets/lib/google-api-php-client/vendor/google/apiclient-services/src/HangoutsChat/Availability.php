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

class Availability extends \Google\Model
{
  /**
   * Default value. The state is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The user is currently active, based on recent activity.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The user is currently idle. This state indicates a period of inactivity
   * after being ACTIVE, before potentially transitioning to AWAY.
   */
  public const STATE_IDLE = 'IDLE';
  /**
   * The user is currently away. This can be either automatically set after a
   * period of inactivity in ACTIVE or IDLE state, or it can be manually set by
   * the user. When manually set via `MarkAsAway`, this state persists
   * regardless of user activity.
   */
  public const STATE_AWAY = 'AWAY';
  /**
   * The user is in Do Not Disturb state, which is manually set.
   */
  public const STATE_DO_NOT_DISTURB = 'DO_NOT_DISTURB';
  protected $customStatusType = CustomStatus::class;
  protected $customStatusDataType = '';
  protected $doNotDisturbMetadataType = DoNotDisturbMetadata::class;
  protected $doNotDisturbMetadataDataType = '';
  /**
   * Identifier. Resource name of the user's availability. Format:
   * `users/{user}/availability` `{user}` is the id for the Person in the People
   * API or Admin SDK directory API. For example, `users/123456789`. The user's
   * email address or `me` can also be used as an alias to refer to the caller.
   * For example, `users/user@example.com` or `users/me`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The user's current availability state.
   *
   * @var string
   */
  public $state;

  /**
   * Optional. The user's custom status.
   *
   * @param CustomStatus $customStatus
   */
  public function setCustomStatus(CustomStatus $customStatus)
  {
    $this->customStatus = $customStatus;
  }
  /**
   * @return CustomStatus
   */
  public function getCustomStatus()
  {
    return $this->customStatus;
  }
  /**
   * Output only. Metadata if the user state is set to DO_NOT_DISTURB.
   *
   * @param DoNotDisturbMetadata $doNotDisturbMetadata
   */
  public function setDoNotDisturbMetadata(DoNotDisturbMetadata $doNotDisturbMetadata)
  {
    $this->doNotDisturbMetadata = $doNotDisturbMetadata;
  }
  /**
   * @return DoNotDisturbMetadata
   */
  public function getDoNotDisturbMetadata()
  {
    return $this->doNotDisturbMetadata;
  }
  /**
   * Identifier. Resource name of the user's availability. Format:
   * `users/{user}/availability` `{user}` is the id for the Person in the People
   * API or Admin SDK directory API. For example, `users/123456789`. The user's
   * email address or `me` can also be used as an alias to refer to the caller.
   * For example, `users/user@example.com` or `users/me`.
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
   * Output only. The user's current availability state.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, IDLE, AWAY, DO_NOT_DISTURB
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Availability::class, 'Google_Service_HangoutsChat_Availability');
