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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1StreamAssistResponseConnectorAuthError extends \Google\Model
{
  /**
   * Resource name of the data connector that failed authentication.
   *
   * @var string
   */
  public $dataConnector;
  /**
   * Human-readable error message describing the auth failure.
   *
   * @var string
   */
  public $errorMessage;

  /**
   * Resource name of the data connector that failed authentication.
   *
   * @param string $dataConnector
   */
  public function setDataConnector($dataConnector)
  {
    $this->dataConnector = $dataConnector;
  }
  /**
   * @return string
   */
  public function getDataConnector()
  {
    return $this->dataConnector;
  }
  /**
   * Human-readable error message describing the auth failure.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1StreamAssistResponseConnectorAuthError::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1StreamAssistResponseConnectorAuthError');
