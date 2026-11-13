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

class GoogleCloudIntegrationsV2TaskExecutionDetails extends \Google\Collection
{
  /**
   * Default value.
   */
  public const TASK_EXECUTION_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Task is under processing.
   */
  public const TASK_EXECUTION_STATE_IN_PROCESS = 'IN_PROCESS';
  /**
   * Task execution successfully finished. There are no more changes after this
   * state.
   */
  public const TASK_EXECUTION_STATE_SUCCEED = 'SUCCEED';
  /**
   * Task execution failed. There's no more change after this state.
   */
  public const TASK_EXECUTION_STATE_FAILED = 'FAILED';
  /**
   * Task execution failed and cause the whole integration execution to fail
   * immediately. There's no more change after this state.
   */
  public const TASK_EXECUTION_STATE_FATAL = 'FATAL';
  /**
   * Task execution failed and is waiting for retry.
   */
  public const TASK_EXECUTION_STATE_RETRY_ON_HOLD = 'RETRY_ON_HOLD';
  /**
   * Task execution cancelled when in progress. This happens when integration
   * execution was cancelled or any other task fell into a fatal state.
   */
  public const TASK_EXECUTION_STATE_CANCELLED = 'CANCELLED';
  /**
   * Task is a SuspensionTask which has executed once, creating a pending
   * suspension.
   */
  public const TASK_EXECUTION_STATE_SUSPENDED = 'SUSPENDED';
  protected $collection_key = 'taskAttemptStats';
  protected $taskAttemptStatsType = GoogleCloudIntegrationsV2AttemptStats::class;
  protected $taskAttemptStatsDataType = 'array';
  /**
   * Output only. The execution state of this task.
   *
   * @var string
   */
  public $taskExecutionState;
  /**
   * Pointer to the task config it used for execution.
   *
   * @var string
   */
  public $taskNumber;

  /**
   * List for the current task execution attempts.
   *
   * @param GoogleCloudIntegrationsV2AttemptStats[] $taskAttemptStats
   */
  public function setTaskAttemptStats($taskAttemptStats)
  {
    $this->taskAttemptStats = $taskAttemptStats;
  }
  /**
   * @return GoogleCloudIntegrationsV2AttemptStats[]
   */
  public function getTaskAttemptStats()
  {
    return $this->taskAttemptStats;
  }
  /**
   * Output only. The execution state of this task.
   *
   * Accepted values: STATE_UNSPECIFIED, IN_PROCESS, SUCCEED, FAILED, FATAL,
   * RETRY_ON_HOLD, CANCELLED, SUSPENDED
   *
   * @param self::TASK_EXECUTION_STATE_* $taskExecutionState
   */
  public function setTaskExecutionState($taskExecutionState)
  {
    $this->taskExecutionState = $taskExecutionState;
  }
  /**
   * @return self::TASK_EXECUTION_STATE_*
   */
  public function getTaskExecutionState()
  {
    return $this->taskExecutionState;
  }
  /**
   * Pointer to the task config it used for execution.
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
class_alias(GoogleCloudIntegrationsV2TaskExecutionDetails::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2TaskExecutionDetails');
