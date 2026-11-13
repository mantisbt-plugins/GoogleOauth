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

class MatchingCondition extends \Google\Model
{
  protected $labelConditionType = KeyValuePair::class;
  protected $labelConditionDataType = '';

  /**
   * Optional. A condition that matches resources based on their labels. For
   * MVP, this is limited to a single label match.
   *
   * @param KeyValuePair $labelCondition
   */
  public function setLabelCondition(KeyValuePair $labelCondition)
  {
    $this->labelCondition = $labelCondition;
  }
  /**
   * @return KeyValuePair
   */
  public function getLabelCondition()
  {
    return $this->labelCondition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MatchingCondition::class, 'Google_Service_Backupdr_MatchingCondition');
