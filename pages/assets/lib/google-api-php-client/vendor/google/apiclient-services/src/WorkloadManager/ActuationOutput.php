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

namespace Google\Service\WorkloadManager;

class ActuationOutput extends \Google\Collection
{
  /**
   * No error code was specified.
   */
  public const ERROR_CODE_ERROR_CODE_UNSPECIFIED = 'ERROR_CODE_UNSPECIFIED';
  /**
   * General Terraform failure.
   */
  public const ERROR_CODE_TERRAFORM_FAILED = 'TERRAFORM_FAILED';
  /**
   * Permission error in Terraform.
   */
  public const ERROR_CODE_PERMISSION_DENIED_IN_TERRAFORM = 'PERMISSION_DENIED_IN_TERRAFORM';
  /**
   * Quota related error in Terraform.
   */
  public const ERROR_CODE_QUOTA_EXCEED_IN_TERRAFORM = 'QUOTA_EXCEED_IN_TERRAFORM';
  /**
   * General Ansible failure.
   */
  public const ERROR_CODE_ANSIBLE_FAILED = 'ANSIBLE_FAILED';
  /**
   * Constraint related error in Terraform.
   */
  public const ERROR_CODE_CONSTRAINT_VIOLATION_IN_TERRAFORM = 'CONSTRAINT_VIOLATION_IN_TERRAFORM';
  /**
   * Resource already exists error in Terraform.
   */
  public const ERROR_CODE_RESOURCE_ALREADY_EXISTS_IN_TERRAFORM = 'RESOURCE_ALREADY_EXISTS_IN_TERRAFORM';
  /**
   * Resource not found error in Terraform.
   */
  public const ERROR_CODE_RESOURCE_UNAVAILABLE_IN_TERRAFORM = 'RESOURCE_UNAVAILABLE_IN_TERRAFORM';
  /**
   * Permission denied error in Ansible.
   */
  public const ERROR_CODE_PERMISSION_DENIED_IN_ANSIBLE = 'PERMISSION_DENIED_IN_ANSIBLE';
  /**
   * Secret related error in Ansible.
   */
  public const ERROR_CODE_INVALID_SECRET_IN_ANSIBLE = 'INVALID_SECRET_IN_ANSIBLE';
  /**
   * General Terraform failure during deletion.
   */
  public const ERROR_CODE_TERRAFORM_DELETION_FAILED = 'TERRAFORM_DELETION_FAILED';
  /**
   * Resource in use error in Terraform deletion.
   */
  public const ERROR_CODE_RESOURCE_IN_USE_IN_TERRAFORM_DELETION = 'RESOURCE_IN_USE_IN_TERRAFORM_DELETION';
  /**
   * Startup failure in Ansible.
   */
  public const ERROR_CODE_ANSIBLE_START_FAILED = 'ANSIBLE_START_FAILED';
  protected $collection_key = 'ansibleFailedTask';
  /**
   * A link to the Cloud Storage file that stores build logs.
   *
   * @var string
   */
  public $actuateLogs;
  /**
   * Output only. Error message returned from Ansible.
   *
   * @var string
   */
  public $ansibleError;
  /**
   * Output only. Failed task name returned from Ansible.
   *
   * @var string[]
   */
  public $ansibleFailedTask;
  /**
   * Reference to the Blueprint Controller deployment and revision resource.
   *
   * @var string
   */
  public $blueprintId;
  /**
   * Cloud Build instance UUID associated with this revision, without any suffix
   * or prefix
   *
   * @var string
   */
  public $cloudbuildId;
  /**
   * Output only. Code describing any errors that may have occurred. If not
   * specified, there is no error in actuation.
   *
   * @var string
   */
  public $errorCode;
  /**
   * A link to the actuation Cloud Build log.
   *
   * @var string
   */
  public $errorLogs;
  /**
   * Output only. Whether the error message is user facing. If true, the error
   * message will be shown in the UI.
   *
   * @var bool
   */
  public $hasUserFacingErrorMsg;
  /**
   * Output only. Error message returned from Terraform.
   *
   * @var string
   */
  public $terraformError;
  /**
   * Reference to the Terraform template used.
   *
   * @var string
   */
  public $terraformTemplate;

  /**
   * A link to the Cloud Storage file that stores build logs.
   *
   * @param string $actuateLogs
   */
  public function setActuateLogs($actuateLogs)
  {
    $this->actuateLogs = $actuateLogs;
  }
  /**
   * @return string
   */
  public function getActuateLogs()
  {
    return $this->actuateLogs;
  }
  /**
   * Output only. Error message returned from Ansible.
   *
   * @param string $ansibleError
   */
  public function setAnsibleError($ansibleError)
  {
    $this->ansibleError = $ansibleError;
  }
  /**
   * @return string
   */
  public function getAnsibleError()
  {
    return $this->ansibleError;
  }
  /**
   * Output only. Failed task name returned from Ansible.
   *
   * @param string[] $ansibleFailedTask
   */
  public function setAnsibleFailedTask($ansibleFailedTask)
  {
    $this->ansibleFailedTask = $ansibleFailedTask;
  }
  /**
   * @return string[]
   */
  public function getAnsibleFailedTask()
  {
    return $this->ansibleFailedTask;
  }
  /**
   * Reference to the Blueprint Controller deployment and revision resource.
   *
   * @param string $blueprintId
   */
  public function setBlueprintId($blueprintId)
  {
    $this->blueprintId = $blueprintId;
  }
  /**
   * @return string
   */
  public function getBlueprintId()
  {
    return $this->blueprintId;
  }
  /**
   * Cloud Build instance UUID associated with this revision, without any suffix
   * or prefix
   *
   * @param string $cloudbuildId
   */
  public function setCloudbuildId($cloudbuildId)
  {
    $this->cloudbuildId = $cloudbuildId;
  }
  /**
   * @return string
   */
  public function getCloudbuildId()
  {
    return $this->cloudbuildId;
  }
  /**
   * Output only. Code describing any errors that may have occurred. If not
   * specified, there is no error in actuation.
   *
   * Accepted values: ERROR_CODE_UNSPECIFIED, TERRAFORM_FAILED,
   * PERMISSION_DENIED_IN_TERRAFORM, QUOTA_EXCEED_IN_TERRAFORM, ANSIBLE_FAILED,
   * CONSTRAINT_VIOLATION_IN_TERRAFORM, RESOURCE_ALREADY_EXISTS_IN_TERRAFORM,
   * RESOURCE_UNAVAILABLE_IN_TERRAFORM, PERMISSION_DENIED_IN_ANSIBLE,
   * INVALID_SECRET_IN_ANSIBLE, TERRAFORM_DELETION_FAILED,
   * RESOURCE_IN_USE_IN_TERRAFORM_DELETION, ANSIBLE_START_FAILED
   *
   * @param self::ERROR_CODE_* $errorCode
   */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /**
   * @return self::ERROR_CODE_*
   */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /**
   * A link to the actuation Cloud Build log.
   *
   * @param string $errorLogs
   */
  public function setErrorLogs($errorLogs)
  {
    $this->errorLogs = $errorLogs;
  }
  /**
   * @return string
   */
  public function getErrorLogs()
  {
    return $this->errorLogs;
  }
  /**
   * Output only. Whether the error message is user facing. If true, the error
   * message will be shown in the UI.
   *
   * @param bool $hasUserFacingErrorMsg
   */
  public function setHasUserFacingErrorMsg($hasUserFacingErrorMsg)
  {
    $this->hasUserFacingErrorMsg = $hasUserFacingErrorMsg;
  }
  /**
   * @return bool
   */
  public function getHasUserFacingErrorMsg()
  {
    return $this->hasUserFacingErrorMsg;
  }
  /**
   * Output only. Error message returned from Terraform.
   *
   * @param string $terraformError
   */
  public function setTerraformError($terraformError)
  {
    $this->terraformError = $terraformError;
  }
  /**
   * @return string
   */
  public function getTerraformError()
  {
    return $this->terraformError;
  }
  /**
   * Reference to the Terraform template used.
   *
   * @param string $terraformTemplate
   */
  public function setTerraformTemplate($terraformTemplate)
  {
    $this->terraformTemplate = $terraformTemplate;
  }
  /**
   * @return string
   */
  public function getTerraformTemplate()
  {
    return $this->terraformTemplate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActuationOutput::class, 'Google_Service_WorkloadManager_ActuationOutput');
