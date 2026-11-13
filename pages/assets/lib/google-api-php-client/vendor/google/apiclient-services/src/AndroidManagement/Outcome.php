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

namespace Google\Service\AndroidManagement;

class Outcome extends \Google\Model
{
  /**
   * Do not use this value.
   */
  public const OUTCOME_TYPE_OUTCOME_TYPE_UNSPECIFIED = 'OUTCOME_TYPE_UNSPECIFIED';
  /**
   * The action for which the policy is being evaluated (depending on the
   * stages), such as downloading the update or rebooting the device, happens
   * immediately. Positivity requirement: Any rule which uses this can't use any
   * of the following: * METERED_NETWORK * NOT_IDLE * NOT_CHARGING *
   * BATTERY_LEVEL_LOW
   */
  public const OUTCOME_TYPE_FORCE = 'FORCE';
  /**
   * Action should not be taken without the user's consent, but the user has a
   * way of proceeding with the update and is prompted to do so. Supported only
   * for OS_UPDATE_WITHOUT_API_LEVEL_CHANGE and OS_UPDATE_WITH_API_LEVEL_CHANGE.
   * For SINGLE_APP, GOOGLE_SYSTEM_SERVICES, and GOOGLE_PLAY_SYSTEM_UPDATE, the
   * default update behavior applies, as if no rule matched.
   */
  public const OUTCOME_TYPE_USER_PROMPT = 'USER_PROMPT';
  /**
   * The update is not downloaded and not installed. For updates on Google Play,
   * this only affects automatic updates, but does not prevent the user from
   * manually updating. For OEM system updates, this prevents both manual and
   * automatic updates. Positivity requirement: Any rule which uses this cannot
   * use any of the following: * UNMETERED_NETWORK * IDLE * CHARGING *
   * BATTERY_LEVEL_NOT_LOW
   */
  public const OUTCOME_TYPE_BLOCK = 'BLOCK';
  /**
   * Optional. Determines how to proceed with the update.
   *
   * @var string
   */
  public $outcomeType;

  /**
   * Optional. Determines how to proceed with the update.
   *
   * Accepted values: OUTCOME_TYPE_UNSPECIFIED, FORCE, USER_PROMPT, BLOCK
   *
   * @param self::OUTCOME_TYPE_* $outcomeType
   */
  public function setOutcomeType($outcomeType)
  {
    $this->outcomeType = $outcomeType;
  }
  /**
   * @return self::OUTCOME_TYPE_*
   */
  public function getOutcomeType()
  {
    return $this->outcomeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Outcome::class, 'Google_Service_AndroidManagement_Outcome');
