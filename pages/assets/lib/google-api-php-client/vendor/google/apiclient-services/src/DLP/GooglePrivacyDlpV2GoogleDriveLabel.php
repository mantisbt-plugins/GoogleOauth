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

class GooglePrivacyDlpV2GoogleDriveLabel extends \Google\Collection
{
  protected $collection_key = 'labelFieldsToMatch';
  protected $labelFieldsToMatchType = GooglePrivacyDlpV2LabelField::class;
  protected $labelFieldsToMatchDataType = 'array';
  /**
   * The [label
   * ID](https://developers.google.com/workspace/drive/labels/guides/overview)
   * of the Google Drive label.
   *
   * @var string
   */
  public $labelId;

  /**
   * The field values of the Google Drive label to match.
   *
   * @param GooglePrivacyDlpV2LabelField[] $labelFieldsToMatch
   */
  public function setLabelFieldsToMatch($labelFieldsToMatch)
  {
    $this->labelFieldsToMatch = $labelFieldsToMatch;
  }
  /**
   * @return GooglePrivacyDlpV2LabelField[]
   */
  public function getLabelFieldsToMatch()
  {
    return $this->labelFieldsToMatch;
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
class_alias(GooglePrivacyDlpV2GoogleDriveLabel::class, 'Google_Service_DLP_GooglePrivacyDlpV2GoogleDriveLabel');
