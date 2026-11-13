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

namespace Google\Service\AndroidManagement;

class Target extends \Google\Model
{
  /**
   * This must not be used.
   */
  public const TARGET_TYPE_TARGET_TYPE_UNSPECIFIED = 'TARGET_TYPE_UNSPECIFIED';
  /**
   * An app on Google System services. singleApp must be set. This can be used
   * only to control an app which is a part of GOOGLE_SYSTEM_SERVICES.
   */
  public const TARGET_TYPE_SINGLE_APP = 'SINGLE_APP';
  /**
   * Google system services (https://support.google.com/product-
   * documentation/answer/14343500) updated from Google Play, such as WebView.
   */
  public const TARGET_TYPE_GOOGLE_SYSTEM_SERVICES = 'GOOGLE_SYSTEM_SERVICES';
  /**
   * Google Play System Updates. See
   * https://source.android.com/docs/core/ota/modular-system .
   */
  public const TARGET_TYPE_GOOGLE_PLAY_SYSTEM_UPDATE = 'GOOGLE_PLAY_SYSTEM_UPDATE';
  /**
   * An OS update issued by the OEM which does not change the API level of the
   * device.
   */
  public const TARGET_TYPE_OS_UPDATE_WITHOUT_API_LEVEL_CHANGE = 'OS_UPDATE_WITHOUT_API_LEVEL_CHANGE';
  /**
   * An OS update issued by the OEM which changes the API level of the device.
   */
  public const TARGET_TYPE_OS_UPDATE_WITH_API_LEVEL_CHANGE = 'OS_UPDATE_WITH_API_LEVEL_CHANGE';
  protected $singleAppType = SingleApp::class;
  protected $singleAppDataType = '';
  /**
   * Required. The type of software component that can be updated.
   *
   * @var string
   */
  public $targetType;

  /**
   * Details of an app on Google System services.
   *
   * @param SingleApp $singleApp
   */
  public function setSingleApp(SingleApp $singleApp)
  {
    $this->singleApp = $singleApp;
  }
  /**
   * @return SingleApp
   */
  public function getSingleApp()
  {
    return $this->singleApp;
  }
  /**
   * Required. The type of software component that can be updated.
   *
   * Accepted values: TARGET_TYPE_UNSPECIFIED, SINGLE_APP,
   * GOOGLE_SYSTEM_SERVICES, GOOGLE_PLAY_SYSTEM_UPDATE,
   * OS_UPDATE_WITHOUT_API_LEVEL_CHANGE, OS_UPDATE_WITH_API_LEVEL_CHANGE
   *
   * @param self::TARGET_TYPE_* $targetType
   */
  public function setTargetType($targetType)
  {
    $this->targetType = $targetType;
  }
  /**
   * @return self::TARGET_TYPE_*
   */
  public function getTargetType()
  {
    return $this->targetType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Target::class, 'Google_Service_AndroidManagement_Target');
