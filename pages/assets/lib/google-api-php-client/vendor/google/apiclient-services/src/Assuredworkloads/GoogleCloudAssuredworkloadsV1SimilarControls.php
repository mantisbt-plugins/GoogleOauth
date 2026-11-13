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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1SimilarControls extends \Google\Model
{
  /**
   * The ID of the control.
   *
   * @var string
   */
  public $controlId;
  /**
   * The name of the framework.
   *
   * @var string
   */
  public $framework;

  /**
   * The ID of the control.
   *
   * @param string $controlId
   */
  public function setControlId($controlId)
  {
    $this->controlId = $controlId;
  }
  /**
   * @return string
   */
  public function getControlId()
  {
    return $this->controlId;
  }
  /**
   * The name of the framework.
   *
   * @param string $framework
   */
  public function setFramework($framework)
  {
    $this->framework = $framework;
  }
  /**
   * @return string
   */
  public function getFramework()
  {
    return $this->framework;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1SimilarControls::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1SimilarControls');
