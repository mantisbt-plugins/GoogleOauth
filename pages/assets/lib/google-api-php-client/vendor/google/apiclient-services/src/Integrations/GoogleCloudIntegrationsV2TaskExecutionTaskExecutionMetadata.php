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

class GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata extends \Google\Collection
{
  protected $collection_key = 'ancestorTaskNumbers';
  /**
   * Optional. Ancestor iteration number for the task (it will only be non-empty
   * if the task is under 'private integration').
   *
   * @var string[]
   */
  public $ancestorIterationNumbers;
  /**
   * Optional. Ancestor task number for the task (it will only be non-empty if
   * the task is under 'private integration').
   *
   * @var string[]
   */
  public $ancestorTaskNumbers;
  /**
   * The execution attempt number this execution belongs to.
   *
   * @var int
   */
  public $executionAttempt;
  /**
   * Optional. The direct integration which the execution belongs to.
   *
   * @var string
   */
  public $privateIntegrationName;
  /**
   * The task name associated with this execution.
   *
   * @var string
   */
  public $task;
  /**
   * The task attempt number this execution belongs to.
   *
   * @var int
   */
  public $taskAttempt;
  /**
   * The task label associated with this execution.
   *
   * @var string
   */
  public $taskLabel;
  /**
   * The task number associated with this execution.
   *
   * @var string
   */
  public $taskNumber;

  /**
   * Optional. Ancestor iteration number for the task (it will only be non-empty
   * if the task is under 'private integration').
   *
   * @param string[] $ancestorIterationNumbers
   */
  public function setAncestorIterationNumbers($ancestorIterationNumbers)
  {
    $this->ancestorIterationNumbers = $ancestorIterationNumbers;
  }
  /**
   * @return string[]
   */
  public function getAncestorIterationNumbers()
  {
    return $this->ancestorIterationNumbers;
  }
  /**
   * Optional. Ancestor task number for the task (it will only be non-empty if
   * the task is under 'private integration').
   *
   * @param string[] $ancestorTaskNumbers
   */
  public function setAncestorTaskNumbers($ancestorTaskNumbers)
  {
    $this->ancestorTaskNumbers = $ancestorTaskNumbers;
  }
  /**
   * @return string[]
   */
  public function getAncestorTaskNumbers()
  {
    return $this->ancestorTaskNumbers;
  }
  /**
   * The execution attempt number this execution belongs to.
   *
   * @param int $executionAttempt
   */
  public function setExecutionAttempt($executionAttempt)
  {
    $this->executionAttempt = $executionAttempt;
  }
  /**
   * @return int
   */
  public function getExecutionAttempt()
  {
    return $this->executionAttempt;
  }
  /**
   * Optional. The direct integration which the execution belongs to.
   *
   * @param string $privateIntegrationName
   */
  public function setPrivateIntegrationName($privateIntegrationName)
  {
    $this->privateIntegrationName = $privateIntegrationName;
  }
  /**
   * @return string
   */
  public function getPrivateIntegrationName()
  {
    return $this->privateIntegrationName;
  }
  /**
   * The task name associated with this execution.
   *
   * @param string $task
   */
  public function setTask($task)
  {
    $this->task = $task;
  }
  /**
   * @return string
   */
  public function getTask()
  {
    return $this->task;
  }
  /**
   * The task attempt number this execution belongs to.
   *
   * @param int $taskAttempt
   */
  public function setTaskAttempt($taskAttempt)
  {
    $this->taskAttempt = $taskAttempt;
  }
  /**
   * @return int
   */
  public function getTaskAttempt()
  {
    return $this->taskAttempt;
  }
  /**
   * The task label associated with this execution.
   *
   * @param string $taskLabel
   */
  public function setTaskLabel($taskLabel)
  {
    $this->taskLabel = $taskLabel;
  }
  /**
   * @return string
   */
  public function getTaskLabel()
  {
    return $this->taskLabel;
  }
  /**
   * The task number associated with this execution.
   *
   * @param string $taskNumber
   */
  public function setTaskNumber($taskNumber)
  {
    $this->taskNumber = $taskNumber;
  }
  /**
   * @return string
   */
  public function getTaskNumber()
  {
    return $this->taskNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata');
