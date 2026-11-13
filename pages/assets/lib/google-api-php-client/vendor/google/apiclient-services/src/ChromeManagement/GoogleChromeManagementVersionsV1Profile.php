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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1Profile extends \Google\Collection
{
  protected $collection_key = 'userPolicies';
  /**
   * Output only. The email of the user signed in to this profile, if any.
   *
   * @var string
   */
  public $chromeSignedInUserEmail;
  protected $extensionPoliciesType = GoogleChromeManagementVersionsV1ExtensionPolicy::class;
  protected $extensionPoliciesDataType = 'array';
  protected $extensionsType = GoogleChromeManagementVersionsV1Extension::class;
  protected $extensionsDataType = 'array';
  /**
   * Output only. A unique ID for this profile.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The time when the last request to fetch policies succeeded for
   * this profile.
   *
   * @var string
   */
  public $lastPolicyFetchTime;
  /**
   * Output only. The time when the last report was received from this profile.
   *
   * @var string
   */
  public $lastStatusReportTime;
  /**
   * Output only. The name given to this profile.
   *
   * @var string
   */
  public $profileName;
  /**
   * Output only. The number of safe browsing warnings that were shown on this
   * profile.
   *
   * @var string
   */
  public $safeBrowsingWarnings;
  /**
   * Output only. The number of safe browsing warnings that were clicked through
   * on this profile.
   *
   * @var string
   */
  public $safeBrowsingWarningsClickThroughs;
  /**
   * Output only. The last time the safe browsing warning info was reset to 0.
   *
   * @var string
   */
  public $safeBrowsingWarningsResetTime;
  protected $userPoliciesType = GoogleChromeManagementVersionsV1Policy::class;
  protected $userPoliciesDataType = 'array';

  /**
   * Output only. The email of the user signed in to this profile, if any.
   *
   * @param string $chromeSignedInUserEmail
   */
  public function setChromeSignedInUserEmail($chromeSignedInUserEmail)
  {
    $this->chromeSignedInUserEmail = $chromeSignedInUserEmail;
  }
  /**
   * @return string
   */
  public function getChromeSignedInUserEmail()
  {
    return $this->chromeSignedInUserEmail;
  }
  /**
   * Output only. The list of extensions with applied extension policies.
   *
   * @param GoogleChromeManagementVersionsV1ExtensionPolicy[] $extensionPolicies
   */
  public function setExtensionPolicies($extensionPolicies)
  {
    $this->extensionPolicies = $extensionPolicies;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ExtensionPolicy[]
   */
  public function getExtensionPolicies()
  {
    return $this->extensionPolicies;
  }
  /**
   * Output only. The list of extensions installed for this profile.
   *
   * @param GoogleChromeManagementVersionsV1Extension[] $extensions
   */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /**
   * @return GoogleChromeManagementVersionsV1Extension[]
   */
  public function getExtensions()
  {
    return $this->extensions;
  }
  /**
   * Output only. A unique ID for this profile.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The time when the last request to fetch policies succeeded for
   * this profile.
   *
   * @param string $lastPolicyFetchTime
   */
  public function setLastPolicyFetchTime($lastPolicyFetchTime)
  {
    $this->lastPolicyFetchTime = $lastPolicyFetchTime;
  }
  /**
   * @return string
   */
  public function getLastPolicyFetchTime()
  {
    return $this->lastPolicyFetchTime;
  }
  /**
   * Output only. The time when the last report was received from this profile.
   *
   * @param string $lastStatusReportTime
   */
  public function setLastStatusReportTime($lastStatusReportTime)
  {
    $this->lastStatusReportTime = $lastStatusReportTime;
  }
  /**
   * @return string
   */
  public function getLastStatusReportTime()
  {
    return $this->lastStatusReportTime;
  }
  /**
   * Output only. The name given to this profile.
   *
   * @param string $profileName
   */
  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  /**
   * @return string
   */
  public function getProfileName()
  {
    return $this->profileName;
  }
  /**
   * Output only. The number of safe browsing warnings that were shown on this
   * profile.
   *
   * @param string $safeBrowsingWarnings
   */
  public function setSafeBrowsingWarnings($safeBrowsingWarnings)
  {
    $this->safeBrowsingWarnings = $safeBrowsingWarnings;
  }
  /**
   * @return string
   */
  public function getSafeBrowsingWarnings()
  {
    return $this->safeBrowsingWarnings;
  }
  /**
   * Output only. The number of safe browsing warnings that were clicked through
   * on this profile.
   *
   * @param string $safeBrowsingWarningsClickThroughs
   */
  public function setSafeBrowsingWarningsClickThroughs($safeBrowsingWarningsClickThroughs)
  {
    $this->safeBrowsingWarningsClickThroughs = $safeBrowsingWarningsClickThroughs;
  }
  /**
   * @return string
   */
  public function getSafeBrowsingWarningsClickThroughs()
  {
    return $this->safeBrowsingWarningsClickThroughs;
  }
  /**
   * Output only. The last time the safe browsing warning info was reset to 0.
   *
   * @param string $safeBrowsingWarningsResetTime
   */
  public function setSafeBrowsingWarningsResetTime($safeBrowsingWarningsResetTime)
  {
    $this->safeBrowsingWarningsResetTime = $safeBrowsingWarningsResetTime;
  }
  /**
   * @return string
   */
  public function getSafeBrowsingWarningsResetTime()
  {
    return $this->safeBrowsingWarningsResetTime;
  }
  /**
   * Output only. The list of Chrome browser policies applied to this profile.
   *
   * @param GoogleChromeManagementVersionsV1Policy[] $userPolicies
   */
  public function setUserPolicies($userPolicies)
  {
    $this->userPolicies = $userPolicies;
  }
  /**
   * @return GoogleChromeManagementVersionsV1Policy[]
   */
  public function getUserPolicies()
  {
    return $this->userPolicies;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1Profile::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1Profile');
