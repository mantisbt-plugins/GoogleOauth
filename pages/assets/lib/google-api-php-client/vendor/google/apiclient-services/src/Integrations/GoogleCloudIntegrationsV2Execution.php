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

class GoogleCloudIntegrationsV2Execution extends \Google\Collection
{
  /**
   * Default.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Execution is scheduled and awaiting to be triggered.
   */
  public const STATE_ON_HOLD = 'ON_HOLD';
  /**
   * Execution is processing.
   */
  public const STATE_IN_PROCESS = 'IN_PROCESS';
  /**
   * Execution successfully finished. There are no more changes after this
   * state.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Execution failed. There's no more change after this state.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Execution is cancelled. There's no more change after this state.
   */
  public const STATE_CANCELLED = 'CANCELLED';
  /**
   * Execution failed and is waiting for retry.
   */
  public const STATE_RETRY_ON_HOLD = 'RETRY_ON_HOLD';
  /**
   * Execution suspended and waiting for manual intervention.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  protected $collection_key = 'taskExecutions';
  protected $cloudLoggingDetailsType = GoogleCloudIntegrationsV2CloudLoggingDetails::class;
  protected $cloudLoggingDetailsDataType = '';
  /**
   * Indicates if the task execution contains variables.
   *
   * @var bool
   */
  public $containTaskVariables;
  /**
   * Output only. Time the execution is created.
   *
   * @var string
   */
  public $createTime;
  protected $executionAttemptStatsType = GoogleCloudIntegrationsV2AttemptStats::class;
  protected $executionAttemptStatsDataType = 'array';
  /**
   * Indicates which snapshot of integration is used for this execution.
   *
   * @var string
   */
  public $integrationVersionNumber;
  /**
   * Optional. User-defined label that annotates the executed integration
   * version.
   *
   * @var string
   */
  public $integrationVersionUserLabel;
  /**
   * Identifier. Execution resource name.
   *
   * @var string
   */
  public $name;
  protected $replayInfoType = GoogleCloudIntegrationsV2ExecutionReplayInfo::class;
  protected $replayInfoDataType = '';
  /**
   * Optional. Variables provided in the request.
   *
   * @var array[]
   */
  public $requestVariables;
  /**
   * Optional. Variables returned as part of the response.
   *
   * @var array[]
   */
  public $responseVariables;
  /**
   * Output only. Status of the execution.
   *
   * @var string
   */
  public $state;
  protected $taskExecutionsType = GoogleCloudIntegrationsV2TaskExecution::class;
  protected $taskExecutionsDataType = 'array';
  /**
   * The ID of the trigger invoked at the start of the execution.
   *
   * @var string
   */
  public $triggerId;
  /**
   * Output only. Time the execution is recently updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Cloud Logging details for the integration version
   *
   * @param GoogleCloudIntegrationsV2CloudLoggingDetails $cloudLoggingDetails
   */
  public function setCloudLoggingDetails(GoogleCloudIntegrationsV2CloudLoggingDetails $cloudLoggingDetails)
  {
    $this->cloudLoggingDetails = $cloudLoggingDetails;
  }
  /**
   * @return GoogleCloudIntegrationsV2CloudLoggingDetails
   */
  public function getCloudLoggingDetails()
  {
    return $this->cloudLoggingDetails;
  }
  /**
   * Indicates if the task execution contains variables.
   *
   * @param bool $containTaskVariables
   */
  public function setContainTaskVariables($containTaskVariables)
  {
    $this->containTaskVariables = $containTaskVariables;
  }
  /**
   * @return bool
   */
  public function getContainTaskVariables()
  {
    return $this->containTaskVariables;
  }
  /**
   * Output only. Time the execution is created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Start and end time of each execution attempt.
   *
   * @param GoogleCloudIntegrationsV2AttemptStats[] $executionAttemptStats
   */
  public function setExecutionAttemptStats($executionAttemptStats)
  {
    $this->executionAttemptStats = $executionAttemptStats;
  }
  /**
   * @return GoogleCloudIntegrationsV2AttemptStats[]
   */
  public function getExecutionAttemptStats()
  {
    return $this->executionAttemptStats;
  }
  /**
   * Indicates which snapshot of integration is used for this execution.
   *
   * @param string $integrationVersionNumber
   */
  public function setIntegrationVersionNumber($integrationVersionNumber)
  {
    $this->integrationVersionNumber = $integrationVersionNumber;
  }
  /**
   * @return string
   */
  public function getIntegrationVersionNumber()
  {
    return $this->integrationVersionNumber;
  }
  /**
   * Optional. User-defined label that annotates the executed integration
   * version.
   *
   * @param string $integrationVersionUserLabel
   */
  public function setIntegrationVersionUserLabel($integrationVersionUserLabel)
  {
    $this->integrationVersionUserLabel = $integrationVersionUserLabel;
  }
  /**
   * @return string
   */
  public function getIntegrationVersionUserLabel()
  {
    return $this->integrationVersionUserLabel;
  }
  /**
   * Identifier. Execution resource name.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Replay info for the execution
   *
   * @param GoogleCloudIntegrationsV2ExecutionReplayInfo $replayInfo
   */
  public function setReplayInfo(GoogleCloudIntegrationsV2ExecutionReplayInfo $replayInfo)
  {
    $this->replayInfo = $replayInfo;
  }
  /**
   * @return GoogleCloudIntegrationsV2ExecutionReplayInfo
   */
  public function getReplayInfo()
  {
    return $this->replayInfo;
  }
  /**
   * Optional. Variables provided in the request.
   *
   * @param array[] $requestVariables
   */
  public function setRequestVariables($requestVariables)
  {
    $this->requestVariables = $requestVariables;
  }
  /**
   * @return array[]
   */
  public function getRequestVariables()
  {
    return $this->requestVariables;
  }
  /**
   * Optional. Variables returned as part of the response.
   *
   * @param array[] $responseVariables
   */
  public function setResponseVariables($responseVariables)
  {
    $this->responseVariables = $responseVariables;
  }
  /**
   * @return array[]
   */
  public function getResponseVariables()
  {
    return $this->responseVariables;
  }
  /**
   * Output only. Status of the execution.
   *
   * Accepted values: STATE_UNSPECIFIED, ON_HOLD, IN_PROCESS, SUCCEEDED, FAILED,
   * CANCELLED, RETRY_ON_HOLD, SUSPENDED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. List of task executions.
   *
   * @param GoogleCloudIntegrationsV2TaskExecution[] $taskExecutions
   */
  public function setTaskExecutions($taskExecutions)
  {
    $this->taskExecutions = $taskExecutions;
  }
  /**
   * @return GoogleCloudIntegrationsV2TaskExecution[]
   */
  public function getTaskExecutions()
  {
    return $this->taskExecutions;
  }
  /**
   * The ID of the trigger invoked at the start of the execution.
   *
   * @param string $triggerId
   */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /**
   * @return string
   */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /**
   * Output only. Time the execution is recently updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2Execution::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2Execution');
