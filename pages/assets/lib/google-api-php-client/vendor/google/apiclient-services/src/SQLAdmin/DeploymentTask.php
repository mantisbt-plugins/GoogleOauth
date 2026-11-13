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

namespace Google\Service\SQLAdmin;

class DeploymentTask extends \Google\Model
{
  /**
   * The state of the task is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The task is pending.
   */
  public const STATE_PENDING = 'PENDING';
  /**
   * The task is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The task has succeeded.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The task has failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The default value. This value is used if the type is omitted.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Provisions the green environment, which includes creating the target
   * instance.
   */
  public const TYPE_PROVISION = 'PROVISION';
  /**
   * Upgrades the green environment, for example, performing a major version
   * upgrade on the target instance.
   */
  public const TYPE_UPGRADE = 'UPGRADE';
  /**
   * Promotes the target instance and then demotes the source instance for this
   * pair.
   */
  public const TYPE_SWITCHOVER = 'SWITCHOVER';
  /**
   * Deletes the blue-green deployment, including underlying resources.
   */
  public const TYPE_DELETE = 'DELETE';
  /**
   * Post-switchover operations, including cleaning up resources of the old
   * instance, taking final backups, and updating metadata.
   */
  public const TYPE_POST_SWITCHOVER_OPERATIONS = 'POST_SWITCHOVER_OPERATIONS';
  /**
   * Output only. Task end time (if completed).
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. Optional error details if the task state is `FAILED`.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Output only. Task start time.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The current state of the task.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The type of the task.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Task end time (if completed).
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. Optional error details if the task state is `FAILED`.
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
   * Output only. Task start time.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. The current state of the task.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING, RUNNING, SUCCEEDED, FAILED
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
   * Output only. The type of the task.
   *
   * Accepted values: TYPE_UNSPECIFIED, PROVISION, UPGRADE, SWITCHOVER, DELETE,
   * POST_SWITCHOVER_OPERATIONS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeploymentTask::class, 'Google_Service_SQLAdmin_DeploymentTask');
