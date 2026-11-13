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

class GoogleCloudRecaptchaenterpriseV1ChallengeRuleGroup extends \Google\Collection
{
  protected $collection_key = 'challengeRules';
  /**
   * Required. Action name provided at token generation. The action name is not
   * case-sensitive and can only contain alphanumeric characters, slashes, and
   * underscores. If "*" is provided, the rule group applies to all actions. If
   * multiple actions are provided, the rule group is applied to all of them.
   * This field is required.
   *
   * @var string[]
   */
  public $actions;
  protected $challengeRulesType = GoogleCloudRecaptchaenterpriseV1ChallengeRule::class;
  protected $challengeRulesDataType = 'array';

  /**
   * Required. Action name provided at token generation. The action name is not
   * case-sensitive and can only contain alphanumeric characters, slashes, and
   * underscores. If "*" is provided, the rule group applies to all actions. If
   * multiple actions are provided, the rule group is applied to all of them.
   * This field is required.
   *
   * @param string[] $actions
   */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /**
   * @return string[]
   */
  public function getActions()
  {
    return $this->actions;
  }
  /**
   * Required. A list of rules that configure when and how reCAPTCHA presents a
   * challenge. reCAPTCHA evaluates these rules in order and applies the first
   * one that matches.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ChallengeRule[] $challengeRules
   */
  public function setChallengeRules($challengeRules)
  {
    $this->challengeRules = $challengeRules;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ChallengeRule[]
   */
  public function getChallengeRules()
  {
    return $this->challengeRules;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1ChallengeRuleGroup::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ChallengeRuleGroup');
