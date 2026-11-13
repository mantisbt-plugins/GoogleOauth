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

namespace Google\Service\Backupdr;

class KeyValuePair extends \Google\Collection
{
  protected $collection_key = 'values';
  /**
   * Required. The key of the label to match. This must be in the format
   * `{label_key}`. The key must match the regex Format:`\p{Ll}\p{Lo}{0,62}`.
   *
   * @var string
   */
  public $key;
  /**
   * Required. The values of the label to match. There will be explicit “OR”
   * between values of array. Each value must be in the format `{label_value}`.
   * The value must match the regex Format: `[\\p{Ll}\\p{Lo}\\p{N}_-]{1,63}`.
   *
   * @var string[]
   */
  public $values;

  /**
   * Required. The key of the label to match. This must be in the format
   * `{label_key}`. The key must match the regex Format:`\p{Ll}\p{Lo}{0,62}`.
   *
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * Required. The values of the label to match. There will be explicit “OR”
   * between values of array. Each value must be in the format `{label_value}`.
   * The value must match the regex Format: `[\\p{Ll}\\p{Lo}\\p{N}_-]{1,63}`.
   *
   * @param string[] $values
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return string[]
   */
  public function getValues()
  {
    return $this->values;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyValuePair::class, 'Google_Service_Backupdr_KeyValuePair');
