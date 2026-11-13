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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2FileLabelInfoType extends \Google\Model
{
  protected $googleDriveLabelType = GooglePrivacyDlpV2GoogleDriveLabel::class;
  protected $googleDriveLabelDataType = '';
  protected $sensitivityLabelType = GooglePrivacyDlpV2SensitivityLabel::class;
  protected $sensitivityLabelDataType = '';

  /**
   * Google Drive labels published by Google.
   *
   * @param GooglePrivacyDlpV2GoogleDriveLabel $googleDriveLabel
   */
  public function setGoogleDriveLabel(GooglePrivacyDlpV2GoogleDriveLabel $googleDriveLabel)
  {
    $this->googleDriveLabel = $googleDriveLabel;
  }
  /**
   * @return GooglePrivacyDlpV2GoogleDriveLabel
   */
  public function getGoogleDriveLabel()
  {
    return $this->googleDriveLabel;
  }
  /**
   * Sensitivity labels published by Microsoft.
   *
   * @param GooglePrivacyDlpV2SensitivityLabel $sensitivityLabel
   */
  public function setSensitivityLabel(GooglePrivacyDlpV2SensitivityLabel $sensitivityLabel)
  {
    $this->sensitivityLabel = $sensitivityLabel;
  }
  /**
   * @return GooglePrivacyDlpV2SensitivityLabel
   */
  public function getSensitivityLabel()
  {
    return $this->sensitivityLabel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2FileLabelInfoType::class, 'Google_Service_DLP_GooglePrivacyDlpV2FileLabelInfoType');
