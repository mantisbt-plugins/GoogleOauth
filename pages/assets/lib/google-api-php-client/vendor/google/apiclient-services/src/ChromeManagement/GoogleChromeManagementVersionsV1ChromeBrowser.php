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

class GoogleChromeManagementVersionsV1ChromeBrowser extends \Google\Collection
{
  protected $collection_key = 'machinePolicies';
  /**
   * Optional. Asset identifier as annotated by the administrator or specified
   * during enrollment.
   *
   * @var string
   */
  public $annotatedAssetId;
  /**
   * Optional. Address or location of the device as annotated by the
   * administrator.
   *
   * @var string
   */
  public $annotatedLocation;
  /**
   * Optional. Notes about this device as annotated by the administrator.
   *
   * @var string
   */
  public $annotatedNotes;
  /**
   * Optional. User of the device as annotated by the administrator.
   *
   * @var string
   */
  public $annotatedUser;
  protected $attestationCredentialType = GoogleChromeManagementVersionsV1AttestationCredential::class;
  protected $attestationCredentialDataType = '';
  /**
   * Output only. Unique identifier of Chrome Browser.
   *
   * @var string
   */
  public $browserPermanentId;
  /**
   * Output only. List of all browser versions installed on this device.
   *
   * @var string[]
   */
  public $browserVersions;
  protected $browsersType = GoogleChromeManagementVersionsV1Browser::class;
  protected $browsersDataType = 'array';
  protected $deviceIdentifiersHistoryType = GoogleChromeManagementVersionsV1DeviceIdentifiersHistory::class;
  protected $deviceIdentifiersHistoryDataType = '';
  /**
   * Output only. The number of distinct extensions installed on all the Chrome
   * browsers of this device.
   *
   * @var string
   */
  public $extensionCount;
  /**
   * Output only. The time of the last activity on the device device either from
   * reporting, policy fetching or registration.
   *
   * @var string
   */
  public $lastActivityTime;
  /**
   * Output only. The last user who logged into a Chrome browser on this device.
   *
   * @var string
   */
  public $lastDeviceUser;
  protected $lastDeviceUsersType = GoogleChromeManagementVersionsV1BrowserUser::class;
  protected $lastDeviceUsersDataType = 'array';
  /**
   * Output only. The time the last policy fetch succeeded on this device.
   *
   * @var string
   */
  public $lastPolicyFetchTime;
  /**
   * Output only. The time the device last tried to register.
   *
   * @var string
   */
  public $lastRegistrationTime;
  /**
   * Output only. The time the device last sent a status report.
   *
   * @var string
   */
  public $lastStatusReportTime;
  protected $machineExtensionPoliciesType = GoogleChromeManagementVersionsV1ExtensionPolicy::class;
  protected $machineExtensionPoliciesDataType = 'array';
  /**
   * Output only. Machine name.
   *
   * @var string
   */
  public $machineName;
  protected $machinePoliciesType = GoogleChromeManagementVersionsV1Policy::class;
  protected $machinePoliciesDataType = 'array';
  /**
   * Identifier. Format:
   * customers/{customer_id}/chromeBrowsers/{browser_permanent_id}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Recent policy fetch activity by Omaha. Not necessarily the
   * last fetch since this field is only updated daily.
   *
   * @var string
   */
  public $omahaRecentFetchTime;
  /**
   * Output only. The obfuscated organizational unit ID of the browser.
   *
   * @var string
   */
  public $orgUnitId;
  /**
   * Output only. Device CPU architecture.
   *
   * @var string
   */
  public $osArchitecture;
  /**
   * Output only. Device Os platform.
   *
   * @var string
   */
  public $osPlatform;
  /**
   * Output only. Device Os platform and version combined.
   *
   * @var string
   */
  public $osPlatformVersion;
  /**
   * Output only. Device Os Version.
   *
   * @var string
   */
  public $osVersion;
  /**
   * Output only. The number of distinct policies set on all the Chrome browsers
   * of this device.
   *
   * @var string
   */
  public $policyCount;
  /**
   * Output only. The device's serial number.
   *
   * @var string
   */
  public $serialNumber;
  /**
   * Output only. The initial device id sent by the first Chrome browser that
   * enrolled this device.
   *
   * @var string
   */
  public $virtualDeviceId;

  /**
   * Optional. Asset identifier as annotated by the administrator or specified
   * during enrollment.
   *
   * @param string $annotatedAssetId
   */
  public function setAnnotatedAssetId($annotatedAssetId)
  {
    $this->annotatedAssetId = $annotatedAssetId;
  }
  /**
   * @return string
   */
  public function getAnnotatedAssetId()
  {
    return $this->annotatedAssetId;
  }
  /**
   * Optional. Address or location of the device as annotated by the
   * administrator.
   *
   * @param string $annotatedLocation
   */
  public function setAnnotatedLocation($annotatedLocation)
  {
    $this->annotatedLocation = $annotatedLocation;
  }
  /**
   * @return string
   */
  public function getAnnotatedLocation()
  {
    return $this->annotatedLocation;
  }
  /**
   * Optional. Notes about this device as annotated by the administrator.
   *
   * @param string $annotatedNotes
   */
  public function setAnnotatedNotes($annotatedNotes)
  {
    $this->annotatedNotes = $annotatedNotes;
  }
  /**
   * @return string
   */
  public function getAnnotatedNotes()
  {
    return $this->annotatedNotes;
  }
  /**
   * Optional. User of the device as annotated by the administrator.
   *
   * @param string $annotatedUser
   */
  public function setAnnotatedUser($annotatedUser)
  {
    $this->annotatedUser = $annotatedUser;
  }
  /**
   * @return string
   */
  public function getAnnotatedUser()
  {
    return $this->annotatedUser;
  }
  /**
   * Output only. The attestation credential used for Device Trust Connector.
   *
   * @param GoogleChromeManagementVersionsV1AttestationCredential $attestationCredential
   */
  public function setAttestationCredential(GoogleChromeManagementVersionsV1AttestationCredential $attestationCredential)
  {
    $this->attestationCredential = $attestationCredential;
  }
  /**
   * @return GoogleChromeManagementVersionsV1AttestationCredential
   */
  public function getAttestationCredential()
  {
    return $this->attestationCredential;
  }
  /**
   * Output only. Unique identifier of Chrome Browser.
   *
   * @param string $browserPermanentId
   */
  public function setBrowserPermanentId($browserPermanentId)
  {
    $this->browserPermanentId = $browserPermanentId;
  }
  /**
   * @return string
   */
  public function getBrowserPermanentId()
  {
    return $this->browserPermanentId;
  }
  /**
   * Output only. List of all browser versions installed on this device.
   *
   * @param string[] $browserVersions
   */
  public function setBrowserVersions($browserVersions)
  {
    $this->browserVersions = $browserVersions;
  }
  /**
   * @return string[]
   */
  public function getBrowserVersions()
  {
    return $this->browserVersions;
  }
  /**
   * Output only. List of Chrome browsers installed on this device.
   *
   * @param GoogleChromeManagementVersionsV1Browser[] $browsers
   */
  public function setBrowsers($browsers)
  {
    $this->browsers = $browsers;
  }
  /**
   * @return GoogleChromeManagementVersionsV1Browser[]
   */
  public function getBrowsers()
  {
    return $this->browsers;
  }
  /**
   * Output only. The history of identifiers reported to this device.
   *
   * @param GoogleChromeManagementVersionsV1DeviceIdentifiersHistory $deviceIdentifiersHistory
   */
  public function setDeviceIdentifiersHistory(GoogleChromeManagementVersionsV1DeviceIdentifiersHistory $deviceIdentifiersHistory)
  {
    $this->deviceIdentifiersHistory = $deviceIdentifiersHistory;
  }
  /**
   * @return GoogleChromeManagementVersionsV1DeviceIdentifiersHistory
   */
  public function getDeviceIdentifiersHistory()
  {
    return $this->deviceIdentifiersHistory;
  }
  /**
   * Output only. The number of distinct extensions installed on all the Chrome
   * browsers of this device.
   *
   * @param string $extensionCount
   */
  public function setExtensionCount($extensionCount)
  {
    $this->extensionCount = $extensionCount;
  }
  /**
   * @return string
   */
  public function getExtensionCount()
  {
    return $this->extensionCount;
  }
  /**
   * Output only. The time of the last activity on the device device either from
   * reporting, policy fetching or registration.
   *
   * @param string $lastActivityTime
   */
  public function setLastActivityTime($lastActivityTime)
  {
    $this->lastActivityTime = $lastActivityTime;
  }
  /**
   * @return string
   */
  public function getLastActivityTime()
  {
    return $this->lastActivityTime;
  }
  /**
   * Output only. The last user who logged into a Chrome browser on this device.
   *
   * @param string $lastDeviceUser
   */
  public function setLastDeviceUser($lastDeviceUser)
  {
    $this->lastDeviceUser = $lastDeviceUser;
  }
  /**
   * @return string
   */
  public function getLastDeviceUser()
  {
    return $this->lastDeviceUser;
  }
  /**
   * Output only. List of recent browser users, in descending order by last
   * report time.
   *
   * @param GoogleChromeManagementVersionsV1BrowserUser[] $lastDeviceUsers
   */
  public function setLastDeviceUsers($lastDeviceUsers)
  {
    $this->lastDeviceUsers = $lastDeviceUsers;
  }
  /**
   * @return GoogleChromeManagementVersionsV1BrowserUser[]
   */
  public function getLastDeviceUsers()
  {
    return $this->lastDeviceUsers;
  }
  /**
   * Output only. The time the last policy fetch succeeded on this device.
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
   * Output only. The time the device last tried to register.
   *
   * @param string $lastRegistrationTime
   */
  public function setLastRegistrationTime($lastRegistrationTime)
  {
    $this->lastRegistrationTime = $lastRegistrationTime;
  }
  /**
   * @return string
   */
  public function getLastRegistrationTime()
  {
    return $this->lastRegistrationTime;
  }
  /**
   * Output only. The time the device last sent a status report.
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
   * Output only. The list of all device level policies set for extensions
   * installed in Chrome on this device.
   *
   * @param GoogleChromeManagementVersionsV1ExtensionPolicy[] $machineExtensionPolicies
   */
  public function setMachineExtensionPolicies($machineExtensionPolicies)
  {
    $this->machineExtensionPolicies = $machineExtensionPolicies;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ExtensionPolicy[]
   */
  public function getMachineExtensionPolicies()
  {
    return $this->machineExtensionPolicies;
  }
  /**
   * Output only. Machine name.
   *
   * @param string $machineName
   */
  public function setMachineName($machineName)
  {
    $this->machineName = $machineName;
  }
  /**
   * @return string
   */
  public function getMachineName()
  {
    return $this->machineName;
  }
  /**
   * Output only. The list of all device level policies set for Chrome browsers
   * on this device.
   *
   * @param GoogleChromeManagementVersionsV1Policy[] $machinePolicies
   */
  public function setMachinePolicies($machinePolicies)
  {
    $this->machinePolicies = $machinePolicies;
  }
  /**
   * @return GoogleChromeManagementVersionsV1Policy[]
   */
  public function getMachinePolicies()
  {
    return $this->machinePolicies;
  }
  /**
   * Identifier. Format:
   * customers/{customer_id}/chromeBrowsers/{browser_permanent_id}
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
   * Output only. Recent policy fetch activity by Omaha. Not necessarily the
   * last fetch since this field is only updated daily.
   *
   * @param string $omahaRecentFetchTime
   */
  public function setOmahaRecentFetchTime($omahaRecentFetchTime)
  {
    $this->omahaRecentFetchTime = $omahaRecentFetchTime;
  }
  /**
   * @return string
   */
  public function getOmahaRecentFetchTime()
  {
    return $this->omahaRecentFetchTime;
  }
  /**
   * Output only. The obfuscated organizational unit ID of the browser.
   *
   * @param string $orgUnitId
   */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /**
   * @return string
   */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /**
   * Output only. Device CPU architecture.
   *
   * @param string $osArchitecture
   */
  public function setOsArchitecture($osArchitecture)
  {
    $this->osArchitecture = $osArchitecture;
  }
  /**
   * @return string
   */
  public function getOsArchitecture()
  {
    return $this->osArchitecture;
  }
  /**
   * Output only. Device Os platform.
   *
   * @param string $osPlatform
   */
  public function setOsPlatform($osPlatform)
  {
    $this->osPlatform = $osPlatform;
  }
  /**
   * @return string
   */
  public function getOsPlatform()
  {
    return $this->osPlatform;
  }
  /**
   * Output only. Device Os platform and version combined.
   *
   * @param string $osPlatformVersion
   */
  public function setOsPlatformVersion($osPlatformVersion)
  {
    $this->osPlatformVersion = $osPlatformVersion;
  }
  /**
   * @return string
   */
  public function getOsPlatformVersion()
  {
    return $this->osPlatformVersion;
  }
  /**
   * Output only. Device Os Version.
   *
   * @param string $osVersion
   */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /**
   * @return string
   */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
  /**
   * Output only. The number of distinct policies set on all the Chrome browsers
   * of this device.
   *
   * @param string $policyCount
   */
  public function setPolicyCount($policyCount)
  {
    $this->policyCount = $policyCount;
  }
  /**
   * @return string
   */
  public function getPolicyCount()
  {
    return $this->policyCount;
  }
  /**
   * Output only. The device's serial number.
   *
   * @param string $serialNumber
   */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /**
   * @return string
   */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /**
   * Output only. The initial device id sent by the first Chrome browser that
   * enrolled this device.
   *
   * @param string $virtualDeviceId
   */
  public function setVirtualDeviceId($virtualDeviceId)
  {
    $this->virtualDeviceId = $virtualDeviceId;
  }
  /**
   * @return string
   */
  public function getVirtualDeviceId()
  {
    return $this->virtualDeviceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ChromeBrowser::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ChromeBrowser');
