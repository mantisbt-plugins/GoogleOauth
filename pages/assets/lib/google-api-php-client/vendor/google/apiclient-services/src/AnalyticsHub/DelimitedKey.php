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

namespace Google\Service\AnalyticsHub;

class DelimitedKey extends \Google\Collection
{
  protected $collection_key = 'keyFields';
  /**
   * Optional. Byte sequence used to delimit concatenated fields. Must be
   * specified if multiple key fields are used. The delimiter must contain at
   * least 1 character and at most 50 characters.
   *
   * @var string
   */
  public $delimiter;
  /**
   * Required. The key fields to construct from the row key. The fields must be
   * present in the message as a top-level field, i.e. JSON path expressions
   * will not traverse into nested objects.
   *
   * @var string[]
   */
  public $keyFields;

  /**
   * Optional. Byte sequence used to delimit concatenated fields. Must be
   * specified if multiple key fields are used. The delimiter must contain at
   * least 1 character and at most 50 characters.
   *
   * @param string $delimiter
   */
  public function setDelimiter($delimiter)
  {
    $this->delimiter = $delimiter;
  }
  /**
   * @return string
   */
  public function getDelimiter()
  {
    return $this->delimiter;
  }
  /**
   * Required. The key fields to construct from the row key. The fields must be
   * present in the message as a top-level field, i.e. JSON path expressions
   * will not traverse into nested objects.
   *
   * @param string[] $keyFields
   */
  public function setKeyFields($keyFields)
  {
    $this->keyFields = $keyFields;
  }
  /**
   * @return string[]
   */
  public function getKeyFields()
  {
    return $this->keyFields;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DelimitedKey::class, 'Google_Service_AnalyticsHub_DelimitedKey');
