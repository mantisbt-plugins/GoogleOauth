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

namespace Google\Service\NetAppFiles;

class SplitStatus extends \Google\Model
{
  /**
   * State is not specified.
   */
  public const SPLIT_STATE_SPLIT_STATE_UNSPECIFIED = 'SPLIT_STATE_UNSPECIFIED';
  /**
   * The volume is a thin clone, sharing blocks with its source.
   */
  public const SPLIT_STATE_SPLIT_STATE_NOT_SPLITTING = 'SPLIT_STATE_NOT_SPLITTING';
  /**
   * A split operation is currently active and in progress.
   */
  public const SPLIT_STATE_SPLIT_STATE_IN_PROGRESS = 'SPLIT_STATE_IN_PROGRESS';
  /**
   * The attempt to split the volume failed.
   */
  public const SPLIT_STATE_SPLIT_STATE_FAILED = 'SPLIT_STATE_FAILED';
  /**
   * Output only. The estimated progress percentage of the split operation
   * (0-100). This is meaningful primarily when split_state is IN_PROGRESS.
   *
   * @var int
   */
  public $progressPercent;
  /**
   * Output only. The current state of the clone split operation.
   *
   * @var string
   */
  public $splitState;
  /**
   * Output only. Human-readable details about the current state. Mostly used
   * for displaying error messages during split failure Examples: "Split in
   * progress", "Error: insufficient capacity".
   *
   * @var string
   */
  public $stateDetails;

  /**
   * Output only. The estimated progress percentage of the split operation
   * (0-100). This is meaningful primarily when split_state is IN_PROGRESS.
   *
   * @param int $progressPercent
   */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /**
   * @return int
   */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /**
   * Output only. The current state of the clone split operation.
   *
   * Accepted values: SPLIT_STATE_UNSPECIFIED, SPLIT_STATE_NOT_SPLITTING,
   * SPLIT_STATE_IN_PROGRESS, SPLIT_STATE_FAILED
   *
   * @param self::SPLIT_STATE_* $splitState
   */
  public function setSplitState($splitState)
  {
    $this->splitState = $splitState;
  }
  /**
   * @return self::SPLIT_STATE_*
   */
  public function getSplitState()
  {
    return $this->splitState;
  }
  /**
   * Output only. Human-readable details about the current state. Mostly used
   * for displaying error messages during split failure Examples: "Split in
   * progress", "Error: insufficient capacity".
   *
   * @param string $stateDetails
   */
  public function setStateDetails($stateDetails)
  {
    $this->stateDetails = $stateDetails;
  }
  /**
   * @return string
   */
  public function getStateDetails()
  {
    return $this->stateDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SplitStatus::class, 'Google_Service_NetAppFiles_SplitStatus');
