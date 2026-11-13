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

namespace Google\Service\Playdeveloperreporting;

class ApiservingMcpMcpToolVisibilityFieldVisibility extends \Google\Model
{
  /**
   * The visibility restriction labels for this field (comma-separated).
   *
   * @var string
   */
  public $restriction;
  /**
   * The name of the parameter in the input_schema or output_schema.
   *
   * @var string
   */
  public $selector;

  /**
   * The visibility restriction labels for this field (comma-separated).
   *
   * @param string $restriction
   */
  public function setRestriction($restriction)
  {
    $this->restriction = $restriction;
  }
  /**
   * @return string
   */
  public function getRestriction()
  {
    return $this->restriction;
  }
  /**
   * The name of the parameter in the input_schema or output_schema.
   *
   * @param string $selector
   */
  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
  /**
   * @return string
   */
  public function getSelector()
  {
    return $this->selector;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiservingMcpMcpToolVisibilityFieldVisibility::class, 'Google_Service_Playdeveloperreporting_ApiservingMcpMcpToolVisibilityFieldVisibility');
