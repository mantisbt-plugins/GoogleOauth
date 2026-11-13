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

namespace Google\Service\AlertCenter;

class AlertDetail extends \Google\Collection
{
  protected $collection_key = 'fieldValues';
  /**
   * Audit data key
   *
   * @var string
   */
  public $fieldName;
  protected $fieldValuesType = SystemDefinedAlertDataAlertDetailFieldValue::class;
  protected $fieldValuesDataType = 'array';

  /**
   * Audit data key
   *
   * @param string $fieldName
   */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /**
   * @return string
   */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /**
   * Audit data values
   *
   * @param SystemDefinedAlertDataAlertDetailFieldValue[] $fieldValues
   */
  public function setFieldValues($fieldValues)
  {
    $this->fieldValues = $fieldValues;
  }
  /**
   * @return SystemDefinedAlertDataAlertDetailFieldValue[]
   */
  public function getFieldValues()
  {
    return $this->fieldValues;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlertDetail::class, 'Google_Service_AlertCenter_AlertDetail');
