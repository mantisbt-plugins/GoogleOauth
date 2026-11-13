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

class GoogleChromeManagementVersionsV1Extension extends \Google\Collection
{
  /**
   * Represents an unspecified extension type.
   */
  public const APP_TYPE_EXTENSION_TYPE_UNSPECIFIED = 'EXTENSION_TYPE_UNSPECIFIED';
  /**
   * Represents an extension.
   */
  public const APP_TYPE_EXTENSION = 'EXTENSION';
  /**
   * Represents an app.
   */
  public const APP_TYPE_APP = 'APP';
  /**
   * Represents a theme.
   */
  public const APP_TYPE_THEME = 'THEME';
  /**
   * Represents a hosted app.
   */
  public const APP_TYPE_HOSTED_APP = 'HOSTED_APP';
  /**
   * Represents an unspecified configured app policy.
   */
  public const CONFIGURED_APP_POLICY_CONFIGURED_APP_POLICY_UNSPECIFIED = 'CONFIGURED_APP_POLICY_UNSPECIFIED';
  /**
   * Represents no configured app policy.
   */
  public const CONFIGURED_APP_POLICY_CONFIGURED_APP_POLICY_NONE = 'CONFIGURED_APP_POLICY_NONE';
  /**
   * Represents an extension that should be forced.
   */
  public const CONFIGURED_APP_POLICY_CONFIGURED_APP_POLICY_SHOULD_FORCE = 'CONFIGURED_APP_POLICY_SHOULD_FORCE';
  /**
   * Represents an extension that should be blocked.
   */
  public const CONFIGURED_APP_POLICY_CONFIGURED_APP_POLICY_SHOULD_BLOCK = 'CONFIGURED_APP_POLICY_SHOULD_BLOCK';
  /**
   * Represents an unspecified installation type.
   */
  public const INSTALL_TYPE_INSTALLATION_TYPE_UNSPECIFIED = 'INSTALLATION_TYPE_UNSPECIFIED';
  /**
   * Represents instances of the extension having mixed installation types.
   */
  public const INSTALL_TYPE_MULTIPLE = 'MULTIPLE';
  /**
   * Represents a normal installation type.
   */
  public const INSTALL_TYPE_NORMAL = 'NORMAL';
  /**
   * Represents an installation by admin.
   */
  public const INSTALL_TYPE_ADMIN = 'ADMIN';
  /**
   * Represents a development installation type.
   */
  public const INSTALL_TYPE_DEVELOPMENT = 'DEVELOPMENT';
  /**
   * Represents a sideload installation type.
   */
  public const INSTALL_TYPE_SIDELOAD = 'SIDELOAD';
  /**
   * Represents an installation type that is not covered in the other options.
   */
  public const INSTALL_TYPE_OTHER = 'OTHER';
  protected $collection_key = 'permissions';
  /**
   * Output only. The type of the extension.
   *
   * @var string
   */
  public $appType;
  /**
   * Output only. If the extension is controlled by a browser policy.
   *
   * @var string
   */
  public $configuredAppPolicy;
  /**
   * Output only. The localized description of this extension.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Whether the extension is disabled.
   *
   * @var bool
   */
  public $disabled;
  /**
   * Output only. The id of the extension.
   *
   * @var string
   */
  public $extensionId;
  /**
   * Output only. The localized name of this extension as reported by Chrome.
   *
   * @var string
   */
  public $extensionName;
  /**
   * Output only. The URL of the homepage for this extension.
   *
   * @var string
   */
  public $homepageUri;
  protected $iconsType = GoogleChromeManagementVersionsV1ExtensionIcon::class;
  protected $iconsDataType = 'array';
  /**
   * Output only. The way the extension was installed.
   *
   * @var string
   */
  public $installType;
  /**
   * Output only. The manifest version of this extension.
   *
   * @var int
   */
  public $manifestVersion;
  /**
   * Output only. The list of permissions required for this extension.
   *
   * @var string[]
   */
  public $permissions;
  /**
   * Output only. The version of the extension.
   *
   * @var string
   */
  public $version;

  /**
   * Output only. The type of the extension.
   *
   * Accepted values: EXTENSION_TYPE_UNSPECIFIED, EXTENSION, APP, THEME,
   * HOSTED_APP
   *
   * @param self::APP_TYPE_* $appType
   */
  public function setAppType($appType)
  {
    $this->appType = $appType;
  }
  /**
   * @return self::APP_TYPE_*
   */
  public function getAppType()
  {
    return $this->appType;
  }
  /**
   * Output only. If the extension is controlled by a browser policy.
   *
   * Accepted values: CONFIGURED_APP_POLICY_UNSPECIFIED,
   * CONFIGURED_APP_POLICY_NONE, CONFIGURED_APP_POLICY_SHOULD_FORCE,
   * CONFIGURED_APP_POLICY_SHOULD_BLOCK
   *
   * @param self::CONFIGURED_APP_POLICY_* $configuredAppPolicy
   */
  public function setConfiguredAppPolicy($configuredAppPolicy)
  {
    $this->configuredAppPolicy = $configuredAppPolicy;
  }
  /**
   * @return self::CONFIGURED_APP_POLICY_*
   */
  public function getConfiguredAppPolicy()
  {
    return $this->configuredAppPolicy;
  }
  /**
   * Output only. The localized description of this extension.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. Whether the extension is disabled.
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * Output only. The id of the extension.
   *
   * @param string $extensionId
   */
  public function setExtensionId($extensionId)
  {
    $this->extensionId = $extensionId;
  }
  /**
   * @return string
   */
  public function getExtensionId()
  {
    return $this->extensionId;
  }
  /**
   * Output only. The localized name of this extension as reported by Chrome.
   *
   * @param string $extensionName
   */
  public function setExtensionName($extensionName)
  {
    $this->extensionName = $extensionName;
  }
  /**
   * @return string
   */
  public function getExtensionName()
  {
    return $this->extensionName;
  }
  /**
   * Output only. The URL of the homepage for this extension.
   *
   * @param string $homepageUri
   */
  public function setHomepageUri($homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  /**
   * @return string
   */
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  /**
   * Output only. The list of icons available for this extension.
   *
   * @param GoogleChromeManagementVersionsV1ExtensionIcon[] $icons
   */
  public function setIcons($icons)
  {
    $this->icons = $icons;
  }
  /**
   * @return GoogleChromeManagementVersionsV1ExtensionIcon[]
   */
  public function getIcons()
  {
    return $this->icons;
  }
  /**
   * Output only. The way the extension was installed.
   *
   * Accepted values: INSTALLATION_TYPE_UNSPECIFIED, MULTIPLE, NORMAL, ADMIN,
   * DEVELOPMENT, SIDELOAD, OTHER
   *
   * @param self::INSTALL_TYPE_* $installType
   */
  public function setInstallType($installType)
  {
    $this->installType = $installType;
  }
  /**
   * @return self::INSTALL_TYPE_*
   */
  public function getInstallType()
  {
    return $this->installType;
  }
  /**
   * Output only. The manifest version of this extension.
   *
   * @param int $manifestVersion
   */
  public function setManifestVersion($manifestVersion)
  {
    $this->manifestVersion = $manifestVersion;
  }
  /**
   * @return int
   */
  public function getManifestVersion()
  {
    return $this->manifestVersion;
  }
  /**
   * Output only. The list of permissions required for this extension.
   *
   * @param string[] $permissions
   */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /**
   * @return string[]
   */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /**
   * Output only. The version of the extension.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1Extension::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1Extension');
