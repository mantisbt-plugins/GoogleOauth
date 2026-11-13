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

namespace Google\Service\DataprocMetastore;

class ExecutionResult extends \Google\Model
{
  /**
   * The state is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The resource was migrated successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The resource failed to migrate.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The resource was skipped and will not be migrated.
   */
  public const STATE_SKIPPED = 'SKIPPED';
  /**
   * Description of the error if the state is FAILED.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Remediation steps for the error if the state is FAILED.
   *
   * @var string
   */
  public $remediation;
  /**
   * Output only. The state of the migration for a resource.
   *
   * @var string
   */
  public $state;

  /**
   * Description of the error if the state is FAILED.
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
   * Remediation steps for the error if the state is FAILED.
   *
   * @param string $remediation
   */
  public function setRemediation($remediation)
  {
    $this->remediation = $remediation;
  }
  /**
   * @return string
   */
  public function getRemediation()
  {
    return $this->remediation;
  }
  /**
   * Output only. The state of the migration for a resource.
   *
   * Accepted values: STATE_UNSPECIFIED, SUCCEEDED, FAILED, SKIPPED
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
class_alias(ExecutionResult::class, 'Google_Service_DataprocMetastore_ExecutionResult');
