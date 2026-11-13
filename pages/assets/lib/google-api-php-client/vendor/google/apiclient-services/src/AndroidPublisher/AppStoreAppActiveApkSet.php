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

class AppStoreAppActiveApkSet extends \Google\Collection
{
  protected $collection_key = 'splitApkId';
  /**
   * Optional. Whether all APKs referenced in this active APK set are published
   * on Play Store (or derived from an app bundle published on Play Store). When
   * this is set, version_code must be provided.
   *
   * @var bool
   */
  public $alreadyPublishedOnPlay;
  /**
   * Required. The ID for the main base application module. Example: base.apk or
   * app.apk.
   *
   * @var string
   */
  public $baseApkId;
  /**
   * Optional. IDs for split modules that might be installed in combination with
   * the base APK. Can be empty if app bundles (or a similar technology) are not
   * used. Example: config.en.apk.
   *
   * @var string[]
   */
  public $splitApkId;
  /**
   * Optional. Version code for the version this APK set represents.
   *
   * @var string
   */
  public $versionCode;

  /**
   * Optional. Whether all APKs referenced in this active APK set are published
   * on Play Store (or derived from an app bundle published on Play Store). When
   * this is set, version_code must be provided.
   *
   * @param bool $alreadyPublishedOnPlay
   */
  public function setAlreadyPublishedOnPlay($alreadyPublishedOnPlay)
  {
    $this->alreadyPublishedOnPlay = $alreadyPublishedOnPlay;
  }
  /**
   * @return bool
   */
  public function getAlreadyPublishedOnPlay()
  {
    return $this->alreadyPublishedOnPlay;
  }
  /**
   * Required. The ID for the main base application module. Example: base.apk or
   * app.apk.
   *
   * @param string $baseApkId
   */
  public function setBaseApkId($baseApkId)
  {
    $this->baseApkId = $baseApkId;
  }
  /**
   * @return string
   */
  public function getBaseApkId()
  {
    return $this->baseApkId;
  }
  /**
   * Optional. IDs for split modules that might be installed in combination with
   * the base APK. Can be empty if app bundles (or a similar technology) are not
   * used. Example: config.en.apk.
   *
   * @param string[] $splitApkId
   */
  public function setSplitApkId($splitApkId)
  {
    $this->splitApkId = $splitApkId;
  }
  /**
   * @return string[]
   */
  public function getSplitApkId()
  {
    return $this->splitApkId;
  }
  /**
   * Optional. Version code for the version this APK set represents.
   *
   * @param string $versionCode
   */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /**
   * @return string
   */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppStoreAppActiveApkSet::class, 'Google_Service_AndroidPublisher_AppStoreAppActiveApkSet');
