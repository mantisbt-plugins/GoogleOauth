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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome extends \Google\Model
{
  /**
   * Default type that indicates this enum hasn't been specified.
   */
  public const DIFFICULTY_CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED = 'CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED';
  /**
   * Key tends to show fewer and easier challenges.
   */
  public const DIFFICULTY_USABILITY = 'USABILITY';
  /**
   * Key tends to show balanced (in amount and difficulty) challenges.
   */
  public const DIFFICULTY_BALANCE = 'BALANCE';
  /**
   * Key tends to show more and harder challenges.
   */
  public const DIFFICULTY_SECURITY = 'SECURITY';
  /**
   * Optional. The difficulty of the challenge to present to the user. If
   * unspecified, `BALANCE` is used.
   *
   * @var string
   */
  public $difficulty;

  /**
   * Optional. The difficulty of the challenge to present to the user. If
   * unspecified, `BALANCE` is used.
   *
   * Accepted values: CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED, USABILITY,
   * BALANCE, SECURITY
   *
   * @param self::DIFFICULTY_* $difficulty
   */
  public function setDifficulty($difficulty)
  {
    $this->difficulty = $difficulty;
  }
  /**
   * @return self::DIFFICULTY_*
   */
  public function getDifficulty()
  {
    return $this->difficulty;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ChallengeRuleChallengeOutcome');
