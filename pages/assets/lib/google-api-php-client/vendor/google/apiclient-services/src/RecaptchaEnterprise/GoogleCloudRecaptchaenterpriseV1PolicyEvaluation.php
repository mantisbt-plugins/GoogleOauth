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

class GoogleCloudRecaptchaenterpriseV1PolicyEvaluation extends \Google\Model
{
  protected $challengeRuleEvaluationType = GoogleCloudRecaptchaenterpriseV1ChallengeRuleEvaluation::class;
  protected $challengeRuleEvaluationDataType = '';

  /**
   * Output only. Populated if one or more Challenge rules were matched. Its
   * presence in the assessment indicates that at least one challenge rule was
   * matched and determined whether a challenge was presented to the user.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ChallengeRuleEvaluation $challengeRuleEvaluation
   */
  public function setChallengeRuleEvaluation(GoogleCloudRecaptchaenterpriseV1ChallengeRuleEvaluation $challengeRuleEvaluation)
  {
    $this->challengeRuleEvaluation = $challengeRuleEvaluation;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ChallengeRuleEvaluation
   */
  public function getChallengeRuleEvaluation()
  {
    return $this->challengeRuleEvaluation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1PolicyEvaluation::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1PolicyEvaluation');
