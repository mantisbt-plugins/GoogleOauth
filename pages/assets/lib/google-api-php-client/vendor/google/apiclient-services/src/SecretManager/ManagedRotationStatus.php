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

namespace Google\Service\SecretManager;

class ManagedRotationStatus extends \Google\Model
{
  /**
   * Not specified. This value is unused and invalid.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Indicates that the Managed rotation is ACTIVE.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Indicates that the Managed rotation is INACTIVE.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Output only. Indicates whether the Managed Rotation is active or not.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Displays customer-facing issues that occurred during an
   * asynchronous managed rotation. For example, if there are some permission
   * errors.
   *
   * @param Status $error
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * Output only. Indicates whether the Managed Rotation is active or not.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, INACTIVE
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManagedRotationStatus::class, 'Google_Service_SecretManager_ManagedRotationStatus');
