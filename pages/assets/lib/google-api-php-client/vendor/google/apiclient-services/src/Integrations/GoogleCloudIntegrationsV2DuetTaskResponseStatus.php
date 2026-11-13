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

class GoogleCloudIntegrationsV2DuetTaskResponseStatus extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const TASK_TYPE_TASK_TYPE_UNSPECIFIED = 'TASK_TYPE_UNSPECIFIED';
  /**
   * Connector Task.
   */
  public const TASK_TYPE_CONNECTOR_TASK = 'CONNECTOR_TASK';
  /**
   * Rest task.
   */
  public const TASK_TYPE_REST_TASK = 'REST_TASK';
  /**
   * The error message of the task response in case of failure.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * The http code of the task response.
   *
   * @var int
   */
  public $httpCode;
  /**
   * The task type.
   *
   * @var string
   */
  public $taskType;

  /**
   * The error message of the task response in case of failure.
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
   * The http code of the task response.
   *
   * @param int $httpCode
   */
  public function setHttpCode($httpCode)
  {
    $this->httpCode = $httpCode;
  }
  /**
   * @return int
   */
  public function getHttpCode()
  {
    return $this->httpCode;
  }
  /**
   * The task type.
   *
   * Accepted values: TASK_TYPE_UNSPECIFIED, CONNECTOR_TASK, REST_TASK
   *
   * @param self::TASK_TYPE_* $taskType
   */
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  /**
   * @return self::TASK_TYPE_*
   */
  public function getTaskType()
  {
    return $this->taskType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetTaskResponseStatus::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetTaskResponseStatus');
