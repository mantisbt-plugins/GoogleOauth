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

class WorkloadCapture extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const WORKLOAD_CAPTURE_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Workload capture is currently running.
   */
  public const WORKLOAD_CAPTURE_STATE_RUNNING = 'RUNNING';
  /**
   * Workload capture completed successfully. This state is set when the user
   * explicitly stops the capture.
   */
  public const WORKLOAD_CAPTURE_STATE_COMPLETED = 'COMPLETED';
  /**
   * Workload capture failed.
   */
  public const WORKLOAD_CAPTURE_STATE_FAILED = 'FAILED';
  /**
   * Workload capture was terminated automatically. This state is set when Cloud
   * SQL automatically stops the capture due to a conflicting operation or when
   * the maximum duration is reached.
   */
  public const WORKLOAD_CAPTURE_STATE_TERMINATED = 'TERMINATED';
  /**
   * Output only. The base backup ID associated with the workload capture.
   *
   * @var string
   */
  public $backupId;
  /**
   * Output only. The end time of the workload capture.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The name of the replay instance, if live replay was enabled.
   *
   * @var string
   */
  public $replayInstance;
  /**
   * Output only. The retention period in days for the captured workload.
   *
   * @var int
   */
  public $retentionDays;
  /**
   * Output only. The name of the source instance.
   *
   * @var string
   */
  public $sourceInstance;
  /**
   * Output only. The start time of the workload capture.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The state of the workload capture.
   *
   * @var string
   */
  public $workloadCaptureState;
  /**
   * Output only. The ID of the captured workload.
   *
   * @var string
   */
  public $workloadId;

  /**
   * Output only. The base backup ID associated with the workload capture.
   *
   * @param string $backupId
   */
  public function setBackupId($backupId)
  {
    $this->backupId = $backupId;
  }
  /**
   * @return string
   */
  public function getBackupId()
  {
    return $this->backupId;
  }
  /**
   * Output only. The end time of the workload capture.
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
   * Output only. The name of the replay instance, if live replay was enabled.
   *
   * @param string $replayInstance
   */
  public function setReplayInstance($replayInstance)
  {
    $this->replayInstance = $replayInstance;
  }
  /**
   * @return string
   */
  public function getReplayInstance()
  {
    return $this->replayInstance;
  }
  /**
   * Output only. The retention period in days for the captured workload.
   *
   * @param int $retentionDays
   */
  public function setRetentionDays($retentionDays)
  {
    $this->retentionDays = $retentionDays;
  }
  /**
   * @return int
   */
  public function getRetentionDays()
  {
    return $this->retentionDays;
  }
  /**
   * Output only. The name of the source instance.
   *
   * @param string $sourceInstance
   */
  public function setSourceInstance($sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  /**
   * @return string
   */
  public function getSourceInstance()
  {
    return $this->sourceInstance;
  }
  /**
   * Output only. The start time of the workload capture.
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
   * Output only. The state of the workload capture.
   *
   * Accepted values: STATE_UNSPECIFIED, RUNNING, COMPLETED, FAILED, TERMINATED
   *
   * @param self::WORKLOAD_CAPTURE_STATE_* $workloadCaptureState
   */
  public function setWorkloadCaptureState($workloadCaptureState)
  {
    $this->workloadCaptureState = $workloadCaptureState;
  }
  /**
   * @return self::WORKLOAD_CAPTURE_STATE_*
   */
  public function getWorkloadCaptureState()
  {
    return $this->workloadCaptureState;
  }
  /**
   * Output only. The ID of the captured workload.
   *
   * @param string $workloadId
   */
  public function setWorkloadId($workloadId)
  {
    $this->workloadId = $workloadId;
  }
  /**
   * @return string
   */
  public function getWorkloadId()
  {
    return $this->workloadId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkloadCapture::class, 'Google_Service_SQLAdmin_WorkloadCapture');
