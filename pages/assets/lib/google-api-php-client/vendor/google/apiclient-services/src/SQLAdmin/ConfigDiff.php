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

namespace Google\Service\SQLAdmin;

class ConfigDiff extends \Google\Model
{
  /**
   * Output only. The name of the field that differs in the blue and green
   * instances, fully-qualified. Example: `settings.tier`
   *
   * @var string
   */
  public $field;
  /**
   * Output only. The value on the source instance.
   *
   * @var string
   */
  public $sourceValue;
  /**
   * Output only. The value on the target instance.
   *
   * @var string
   */
  public $targetValue;

  /**
   * Output only. The name of the field that differs in the blue and green
   * instances, fully-qualified. Example: `settings.tier`
   *
   * @param string $field
   */
  public function setField($field)
  {
    $this->field = $field;
  }
  /**
   * @return string
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * Output only. The value on the source instance.
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
   * Output only. The value on the target instance.
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
class_alias(ConfigDiff::class, 'Google_Service_SQLAdmin_ConfigDiff');
