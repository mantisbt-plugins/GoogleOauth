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

class GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole extends \Google\Collection
{
  protected $collection_key = 'steps';
  /**
   * Additional URLs with more information about the steps.
   *
   * @var string[]
   */
  public $additionalLinks;
  /**
   * Links to the Google Cloud console pages where the violation can be
   * resolved.
   *
   * @var string[]
   */
  public $consoleUris;
  /**
   * The steps to resolve the violation by using the Google Cloud console.
   *
   * @var string[]
   */
  public $steps;

  /**
   * Additional URLs with more information about the steps.
   *
   * @param string[] $additionalLinks
   */
  public function setAdditionalLinks($additionalLinks)
  {
    $this->additionalLinks = $additionalLinks;
  }
  /**
   * @return string[]
   */
  public function getAdditionalLinks()
  {
    return $this->additionalLinks;
  }
  /**
   * Links to the Google Cloud console pages where the violation can be
   * resolved.
   *
   * @param string[] $consoleUris
   */
  public function setConsoleUris($consoleUris)
  {
    $this->consoleUris = $consoleUris;
  }
  /**
   * @return string[]
   */
  public function getConsoleUris()
  {
    return $this->consoleUris;
  }
  /**
   * The steps to resolve the violation by using the Google Cloud console.
   *
   * @param string[] $steps
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return string[]
   */
  public function getSteps()
  {
    return $this->steps;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ViolationRemediationInstructionsConsole');
