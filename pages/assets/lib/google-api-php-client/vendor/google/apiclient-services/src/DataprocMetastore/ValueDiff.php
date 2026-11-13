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

namespace Google\Service\DataprocMetastore;

class ValueDiff extends \Google\Model
{
  /**
   * The value of the field at the source.
   *
   * @var string
   */
  public $sourceValue;
  /**
   * The value of the field at the target.
   *
   * @var string
   */
  public $targetValue;

  /**
   * The value of the field at the source.
   *
   * @param string $sourceValue
   */
  public function setSourceValue($sourceValue)
  {
    $this->sourceValue = $sourceValue;
  }
  /**
   * @return string
   */
  public function getSourceValue()
  {
    return $this->sourceValue;
  }
  /**
   * The value of the field at the target.
   *
   * @param string $targetValue
   */
  public function setTargetValue($targetValue)
  {
    $this->targetValue = $targetValue;
  }
  /**
   * @return string
   */
  public function getTargetValue()
  {
    return $this->targetValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueDiff::class, 'Google_Service_DataprocMetastore_ValueDiff');
