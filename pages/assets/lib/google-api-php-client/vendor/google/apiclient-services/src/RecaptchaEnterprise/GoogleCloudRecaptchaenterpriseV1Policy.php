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

class GoogleCloudRecaptchaenterpriseV1Policy extends \Google\Collection
{
  protected $collection_key = 'challengeRuleGroups';
  protected $challengeRuleGroupsType = GoogleCloudRecaptchaenterpriseV1ChallengeRuleGroup::class;
  protected $challengeRuleGroupsDataType = 'array';
  protected $clientSettingsType = GoogleCloudRecaptchaenterpriseV1ClientSettings::class;
  protected $clientSettingsDataType = '';
  /**
   * Identifier. Resource name for this policy. Format:
   * "projects/{project}/keys/{key}/policy" for a policy under a key.
   *
   * @var string
   */
  public $name;

  /**
   * Optional. Rules to configure the behavior of reCAPTCHA for showing a
   * challenge. Rule groups are evaluated in order. Evaluation stops when the
   * first matching rule group is found.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ChallengeRuleGroup[] $challengeRuleGroups
   */
  public function setChallengeRuleGroups($challengeRuleGroups)
  {
    $this->challengeRuleGroups = $challengeRuleGroups;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ChallengeRuleGroup[]
   */
  public function getChallengeRuleGroups()
  {
    return $this->challengeRuleGroups;
  }
  /**
   * Required. Configuration for clients protected by this policy.
   *
   * @param GoogleCloudRecaptchaenterpriseV1ClientSettings $clientSettings
   */
  public function setClientSettings(GoogleCloudRecaptchaenterpriseV1ClientSettings $clientSettings)
  {
    $this->clientSettings = $clientSettings;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1ClientSettings
   */
  public function getClientSettings()
  {
    return $this->clientSettings;
  }
  /**
   * Identifier. Resource name for this policy. Format:
   * "projects/{project}/keys/{key}/policy" for a policy under a key.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1Policy::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1Policy');
