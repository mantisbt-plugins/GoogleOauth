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

class GooglePrivacyDlpV2GoogleDriveLabelMetadata extends \Google\Collection
{
  protected $collection_key = 'labelFields';
  protected $labelFieldsType = GooglePrivacyDlpV2LabelFieldMetadata::class;
  protected $labelFieldsDataType = 'array';
  /**
   * The [label
   * ID](https://developers.google.com/workspace/drive/labels/guides/overview)
   * of the Google Drive label.
   *
   * @var string
   */
  public $labelId;

  /**
   * The field values of the Google Drive label
   *
   * @param GooglePrivacyDlpV2LabelFieldMetadata[] $labelFields
   */
  public function setLabelFields($labelFields)
  {
    $this->labelFields = $labelFields;
  }
  /**
   * @return GooglePrivacyDlpV2LabelFieldMetadata[]
   */
  public function getLabelFields()
  {
    return $this->labelFields;
  }
  /**
   * The [label
   * ID](https://developers.google.com/workspace/drive/labels/guides/overview)
   * of the Google Drive label.
   *
   * @param string $labelId
   */
  public function setLabelId($labelId)
  {
    $this->labelId = $labelId;
  }
  /**
   * @return string
   */
  public function getLabelId()
  {
    return $this->labelId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2GoogleDriveLabelMetadata::class, 'Google_Service_DLP_GooglePrivacyDlpV2GoogleDriveLabelMetadata');
