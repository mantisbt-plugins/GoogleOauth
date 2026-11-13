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

namespace Google\Service\Integrations;

class GoogleCloudIntegrationsV2DuetTroubleshootExecutionResponse extends \Google\Model
{
  /**
   * Detailed explanation of the root cause of the integration execution
   * failure.
   *
   * @var string
   */
  public $detailedExplanation;
  /**
   * Display message to be shown to the user. Example - If integration execution
   * succeeded, this field value can be "Integration execution succeeded. No
   * troubleshooting needed.".
   *
   * @var string
   */
  public $displayMessage;
  /**
   * Error message of the integration execution, if the execution failed.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * The execution id of the integration execution to be troubleshooted.
   *
   * @var string
   */
  public $executionId;
  /**
   * Root cause of the integration execution failure.
   *
   * @var string
   */
  public $rootCause;

  /**
   * Detailed explanation of the root cause of the integration execution
   * failure.
   *
   * @param string $detailedExplanation
   */
  public function setDetailedExplanation($detailedExplanation)
  {
    $this->detailedExplanation = $detailedExplanation;
  }
  /**
   * @return string
   */
  public function getDetailedExplanation()
  {
    return $this->detailedExplanation;
  }
  /**
   * Display message to be shown to the user. Example - If integration execution
   * succeeded, this field value can be "Integration execution succeeded. No
   * troubleshooting needed.".
   *
   * @param string $displayMessage
   */
  public function setDisplayMessage($displayMessage)
  {
    $this->displayMessage = $displayMessage;
  }
  /**
   * @return string
   */
  public function getDisplayMessage()
  {
    return $this->displayMessage;
  }
  /**
   * Error message of the integration execution, if the execution failed.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * The execution id of the integration execution to be troubleshooted.
   *
   * @param string $executionId
   */
  public function setExecutionId($executionId)
  {
    $this->executionId = $executionId;
  }
  /**
   * @return string
   */
  public function getExecutionId()
  {
    return $this->executionId;
  }
  /**
   * Root cause of the integration execution failure.
   *
   * @param string $rootCause
   */
  public function setRootCause($rootCause)
  {
    $this->rootCause = $rootCause;
  }
  /**
   * @return string
   */
  public function getRootCause()
  {
    return $this->rootCause;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetTroubleshootExecutionResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetTroubleshootExecutionResponse');
