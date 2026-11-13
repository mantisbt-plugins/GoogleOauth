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

namespace Google\Service\AndroidPublisher;

class DeviceCompatibilityRequirements extends \Google\Collection
{
  /**
   * Unspecified 32-bit ABI usage.
   */
  public const USE32_BIT_ABI_USE_32_BIT_ABI_UNSPECIFIED = 'USE_32_BIT_ABI_UNSPECIFIED';
  /**
   * Value of use32BitAbi is set to "true".
   */
  public const USE32_BIT_ABI_USE_32_BIT_ABI_TRUE = 'USE_32_BIT_ABI_TRUE';
  /**
   * Value of use32BitAbi is not set or set to something other than "true".
   */
  public const USE32_BIT_ABI_USE_32_BIT_ABI_OTHER = 'USE_32_BIT_ABI_OTHER';
  protected $collection_key = 'usesConfigurations';
  protected $compatibleScreensType = CompatibleScreen::class;
  protected $compatibleScreensDataType = 'array';
  /**
   * Required version of OpenGL ES.
   *
   * @var int
   */
  public $glEsVersion;
  /**
   * Specifies if the app requires a screen.
   *
   * @var bool
   */
  public $isScreenRequired;
  /**
   * List of required ABIs (Application Binary Interface), e.g. `armeabi` or
   * `x86`.
   *
   * @var string[]
   */
  public $nativePlatforms;
  /**
   * List of required libraries as declared in the `uses-library` manifest tag.
   *
   * @var string[]
   */
  public $requiredSoftwareLibraries;
  /**
   * The system features that the app requires. A device must have all of the
   * system features to be considered compatible with the app.
   *
   * @var string[]
   */
  public $requiredSystemFeatures;
  /**
   * Specifies the minimum smallest width required of the screen.
   *
   * @var string
   */
  public $requiresSmallestWidthDp;
  protected $sdkVersionType = CatalogSdkVersion::class;
  protected $sdkVersionDataType = '';
  /**
   * Supported gl textures as specified by the `supported-gl-texture` Manifest
   * tag.
   *
   * @var string[]
   */
  public $supportedGlTextures;
  /**
   * Compatible screens as listed in the `supports-screens` Manifest tag.
   *
   * @var string[]
   */
  public $supportedScreens;
  /**
   * Value of `android:use32BitAbi` flag retrieved from the Manifest.
   *
   * @var string
   */
  public $use32BitAbi;
  protected $usesConfigurationsType = UsesConfiguration::class;
  protected $usesConfigurationsDataType = 'array';

  /**
   * Compatible screens as listed in the `compatible-screens` Manifest tag.
   *
   * @param CompatibleScreen[] $compatibleScreens
   */
  public function setCompatibleScreens($compatibleScreens)
  {
    $this->compatibleScreens = $compatibleScreens;
  }
  /**
   * @return CompatibleScreen[]
   */
  public function getCompatibleScreens()
  {
    return $this->compatibleScreens;
  }
  /**
   * Required version of OpenGL ES.
   *
   * @param int $glEsVersion
   */
  public function setGlEsVersion($glEsVersion)
  {
    $this->glEsVersion = $glEsVersion;
  }
  /**
   * @return int
   */
  public function getGlEsVersion()
  {
    return $this->glEsVersion;
  }
  /**
   * Specifies if the app requires a screen.
   *
   * @param bool $isScreenRequired
   */
  public function setIsScreenRequired($isScreenRequired)
  {
    $this->isScreenRequired = $isScreenRequired;
  }
  /**
   * @return bool
   */
  public function getIsScreenRequired()
  {
    return $this->isScreenRequired;
  }
  /**
   * List of required ABIs (Application Binary Interface), e.g. `armeabi` or
   * `x86`.
   *
   * @param string[] $nativePlatforms
   */
  public function setNativePlatforms($nativePlatforms)
  {
    $this->nativePlatforms = $nativePlatforms;
  }
  /**
   * @return string[]
   */
  public function getNativePlatforms()
  {
    return $this->nativePlatforms;
  }
  /**
   * List of required libraries as declared in the `uses-library` manifest tag.
   *
   * @param string[] $requiredSoftwareLibraries
   */
  public function setRequiredSoftwareLibraries($requiredSoftwareLibraries)
  {
    $this->requiredSoftwareLibraries = $requiredSoftwareLibraries;
  }
  /**
   * @return string[]
   */
  public function getRequiredSoftwareLibraries()
  {
    return $this->requiredSoftwareLibraries;
  }
  /**
   * The system features that the app requires. A device must have all of the
   * system features to be considered compatible with the app.
   *
   * @param string[] $requiredSystemFeatures
   */
  public function setRequiredSystemFeatures($requiredSystemFeatures)
  {
    $this->requiredSystemFeatures = $requiredSystemFeatures;
  }
  /**
   * @return string[]
   */
  public function getRequiredSystemFeatures()
  {
    return $this->requiredSystemFeatures;
  }
  /**
   * Specifies the minimum smallest width required of the screen.
   *
   * @param string $requiresSmallestWidthDp
   */
  public function setRequiresSmallestWidthDp($requiresSmallestWidthDp)
  {
    $this->requiresSmallestWidthDp = $requiresSmallestWidthDp;
  }
  /**
   * @return string
   */
  public function getRequiresSmallestWidthDp()
  {
    return $this->requiresSmallestWidthDp;
  }
  /**
   * Defines a range of SDK versions that the app is compatible with.
   *
   * @param CatalogSdkVersion $sdkVersion
   */
  public function setSdkVersion(CatalogSdkVersion $sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }
  /**
   * @return CatalogSdkVersion
   */
  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }
  /**
   * Supported gl textures as specified by the `supported-gl-texture` Manifest
   * tag.
   *
   * @param string[] $supportedGlTextures
   */
  public function setSupportedGlTextures($supportedGlTextures)
  {
    $this->supportedGlTextures = $supportedGlTextures;
  }
  /**
   * @return string[]
   */
  public function getSupportedGlTextures()
  {
    return $this->supportedGlTextures;
  }
  /**
   * Compatible screens as listed in the `supports-screens` Manifest tag.
   *
   * @param string[] $supportedScreens
   */
  public function setSupportedScreens($supportedScreens)
  {
    $this->supportedScreens = $supportedScreens;
  }
  /**
   * @return string[]
   */
  public function getSupportedScreens()
  {
    return $this->supportedScreens;
  }
  /**
   * Value of `android:use32BitAbi` flag retrieved from the Manifest.
   *
   * Accepted values: USE_32_BIT_ABI_UNSPECIFIED, USE_32_BIT_ABI_TRUE,
   * USE_32_BIT_ABI_OTHER
   *
   * @param self::USE32_BIT_ABI_* $use32BitAbi
   */
  public function setUse32BitAbi($use32BitAbi)
  {
    $this->use32BitAbi = $use32BitAbi;
  }
  /**
   * @return self::USE32_BIT_ABI_*
   */
  public function getUse32BitAbi()
  {
    return $this->use32BitAbi;
  }
  /**
   * Lists all configurations marked as required by use of the `uses-
   * configuration` manifest tag. Each instance of this proto represents a
   * single `uses-configuration` entry. See
   * http://developer.android.com/guide/topics/manifest/uses-configuration-
   * element.html
   *
   * @param UsesConfiguration[] $usesConfigurations
   */
  public function setUsesConfigurations($usesConfigurations)
  {
    $this->usesConfigurations = $usesConfigurations;
  }
  /**
   * @return UsesConfiguration[]
   */
  public function getUsesConfigurations()
  {
    return $this->usesConfigurations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceCompatibilityRequirements::class, 'Google_Service_AndroidPublisher_DeviceCompatibilityRequirements');
