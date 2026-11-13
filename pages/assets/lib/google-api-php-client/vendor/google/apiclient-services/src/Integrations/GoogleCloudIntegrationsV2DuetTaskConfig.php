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

class GoogleCloudIntegrationsV2DuetTaskConfig extends \Google\Collection
{
  /**
   * Default value. External task type is not specified
   */
  public const EXTERNAL_TASK_TYPE_EXTERNAL_TASK_TYPE_UNSPECIFIED = 'EXTERNAL_TASK_TYPE_UNSPECIFIED';
  /**
   * Tasks belongs to the normal task flows
   */
  public const EXTERNAL_TASK_TYPE_NORMAL_TASK = 'NORMAL_TASK';
  /**
   * Task belongs to the error catch task flows
   */
  public const EXTERNAL_TASK_TYPE_ERROR_TASK = 'ERROR_TASK';
  protected $collection_key = 'nextTasks';
  /**
   * Optional. User-provided description intended to give additional business
   * context about the task.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. User-provided label that is attached to this TaskConfig in the
   * UI.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. Optional Error catcher id of the error catch flow which will be
   * executed when execution error happens in the task
   *
   * @var string
   */
  public $errorCatcherId;
  /**
   * Optional. External task type of the task
   *
   * @var string
   */
  public $externalTaskType;
  protected $nextTasksType = GoogleCloudIntegrationsV2DuetNextTask::class;
  protected $nextTasksDataType = 'array';
  protected $parametersType = GoogleCloudIntegrationsV2DuetEventParameter::class;
  protected $parametersDataType = 'map';
  /**
   * Optional. The name for the task.
   *
   * @var string
   */
  public $task;
  /**
   * Required. The identifier of this task within its parent event config,
   * specified by the client. This should be unique among all the tasks belong
   * to the same event config. We use this field as the identifier to find next
   * tasks (via field `next_tasks.task_id`).
   *
   * @var string
   */
  public $taskId;

  /**
   * Optional. User-provided description intended to give additional business
   * context about the task.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. User-provided label that is attached to this TaskConfig in the
   * UI.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Optional Error catcher id of the error catch flow which will be
   * executed when execution error happens in the task
   *
   * @param string $errorCatcherId
   */
  public function setErrorCatcherId($errorCatcherId)
  {
    $this->errorCatcherId = $errorCatcherId;
  }
  /**
   * @return string
   */
  public function getErrorCatcherId()
  {
    return $this->errorCatcherId;
  }
  /**
   * Optional. External task type of the task
   *
   * Accepted values: EXTERNAL_TASK_TYPE_UNSPECIFIED, NORMAL_TASK, ERROR_TASK
   *
   * @param self::EXTERNAL_TASK_TYPE_* $externalTaskType
   */
  public function setExternalTaskType($externalTaskType)
  {
    $this->externalTaskType = $externalTaskType;
  }
  /**
   * @return self::EXTERNAL_TASK_TYPE_*
   */
  public function getExternalTaskType()
  {
    return $this->externalTaskType;
  }
  /**
   * Optional. The set of tasks that are next in line to be executed as per the
   * execution graph defined for the parent event, specified by
   * `event_config_id`. Each of these next tasks are executed only if the
   * condition associated with them evaluates to true.
   *
   * @param GoogleCloudIntegrationsV2DuetNextTask[] $nextTasks
   */
  public function setNextTasks($nextTasks)
  {
    $this->nextTasks = $nextTasks;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetNextTask[]
   */
  public function getNextTasks()
  {
    return $this->nextTasks;
  }
  /**
   * Optional. The customized parameters the user can pass to this task.
   *
   * @param GoogleCloudIntegrationsV2DuetEventParameter[] $parameters
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetEventParameter[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Optional. The name for the task.
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
   * Required. The identifier of this task within its parent event config,
   * specified by the client. This should be unique among all the tasks belong
   * to the same event config. We use this field as the identifier to find next
   * tasks (via field `next_tasks.task_id`).
   *
   * @param string $taskId
   */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /**
   * @return string
   */
  public function getTaskId()
  {
    return $this->taskId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetTaskConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetTaskConfig');
