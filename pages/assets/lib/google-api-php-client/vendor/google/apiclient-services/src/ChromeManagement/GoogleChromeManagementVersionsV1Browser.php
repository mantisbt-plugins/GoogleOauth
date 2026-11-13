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

class GoogleChromeManagementVersionsV1Browser extends \Google\Collection
{
  /**
   * Represents an unspecified channel.
   */
  public const CHANNEL_CHANNEL_UNSPECIFIED = 'CHANNEL_UNSPECIFIED';
  /**
   * Represents a stable channel.
   */
  public const CHANNEL_CHANNEL_STABLE = 'CHANNEL_STABLE';
  /**
   * Represents a beta channel.
   */
  public const CHANNEL_CHANNEL_BETA = 'CHANNEL_BETA';
  /**
   * Represents a dev channel.
   */
  public const CHANNEL_CHANNEL_DEV = 'CHANNEL_DEV';
  /**
   * Represents a canary channel.
   */
  public const CHANNEL_CHANNEL_CANARY = 'CHANNEL_CANARY';
  protected $collection_key = 'profiles';
  /**
   * Output only. Browser version installed.
   *
   * @var string
   */
  public $browserVersion;
  /**
   * Output only. The channel of the browser installed.
   *
   * @var string
   */
  public $channel;
  /**
   * Output only. The path to the Chrome.exe executable for this browser.
   *
   * @var string
   */
  public $executablePath;
  /**
   * Output only. The time when the last request to fetch policies succeeded on
   * this Chrome browser.
   *
   * @var string
   */
  public $lastPolicyFetchTime;
  /**
   * Output only. The time when the last report was received from this Chrome
   * browser.
   *
   * @var string
   */
  public $lastStatusReportTime;
  /**
   * Output only. Pending version of a browser is installed. This field is only
   * set when the current active browser has a different version as in
   * "browser_version".
   *
   * @var string
   */
  public $pendingInstallVersion;
  protected $pluginsType = GoogleChromeManagementVersionsV1Plugin::class;
  protected $pluginsDataType = 'array';
  protected $profilesType = GoogleChromeManagementVersionsV1Profile::class;
  protected $profilesDataType = 'array';

  /**
   * Output only. Browser version installed.
   *
   * @param string $browserVersion
   */
  public function setBrowserVersion($browserVersion)
  {
    $this->browserVersion = $browserVersion;
  }
  /**
   * @return string
   */
  public function getBrowserVersion()
  {
    return $this->browserVersion;
  }
  /**
   * Output only. The channel of the browser installed.
   *
   * Accepted values: CHANNEL_UNSPECIFIED, CHANNEL_STABLE, CHANNEL_BETA,
   * CHANNEL_DEV, CHANNEL_CANARY
   *
   * @param self::CHANNEL_* $channel
   */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /**
   * @return self::CHANNEL_*
   */
  public function getChannel()
  {
    return $this->channel;
  }
  /**
   * Output only. The path to the Chrome.exe executable for this browser.
   *
   * @param string $executablePath
   */
  public function setExecutablePath($executablePath)
  {
    $this->executablePath = $executablePath;
  }
  /**
   * @return string
   */
  public function getExecutablePath()
  {
    return $this->executablePath;
  }
  /**
   * Output only. The time when the last request to fetch policies succeeded on
   * this Chrome browser.
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
   * Output only. The time when the last report was received from this Chrome
   * browser.
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
   * Output only. Pending version of a browser is installed. This field is only
   * set when the current active browser has a different version as in
   * "browser_version".
   *
   * @param string $pendingInstallVersion
   */
  public function setPendingInstallVersion($pendingInstallVersion)
  {
    $this->pendingInstallVersion = $pendingInstallVersion;
  }
  /**
   * @return string
   */
  public function getPendingInstallVersion()
  {
    return $this->pendingInstallVersion;
  }
  /**
   * Output only. List of all plugins installed on this Chrome browser.
   *
   * @param GoogleChromeManagementVersionsV1Plugin[] $plugins
   */
  public function setPlugins($plugins)
  {
    $this->plugins = $plugins;
  }
  /**
   * @return GoogleChromeManagementVersionsV1Plugin[]
   */
  public function getPlugins()
  {
    return $this->plugins;
  }
  /**
   * Output only. The list of profiles for this browser.
   *
   * @param GoogleChromeManagementVersionsV1Profile[] $profiles
   */
  public function setProfiles($profiles)
  {
    $this->profiles = $profiles;
  }
  /**
   * @return GoogleChromeManagementVersionsV1Profile[]
   */
  public function getProfiles()
  {
    return $this->profiles;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1Browser::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1Browser');
