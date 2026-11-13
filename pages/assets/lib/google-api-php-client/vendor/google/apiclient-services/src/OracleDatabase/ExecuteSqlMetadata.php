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

namespace Google\Service\OracleDatabase;

class ExecuteSqlMetadata extends \Google\Model
{
  /**
   * Default value. Not returned by the service.
   */
  public const STATUS_STATUS_UNSPECIFIED = 'STATUS_UNSPECIFIED';
  /**
   * No error during SQL execution i.e. All SQL statements ran to completion.
   * The "message" will be empty.
   */
  public const STATUS_OK = 'OK';
  /**
   * Same as OK, except indicates that only partial results were returned. The
   * "message" field will contain details on why results were truncated.
   * `partial_result` is true if and only if `status` is `PARTIAL`.
   */
  public const STATUS_PARTIAL = 'PARTIAL';
  /**
   * The database returned an error while executing the SQL statement. `message`
   * contains the error text returned by Oracle. `sql_results` is empty. The
   * statement runs in autocommit mode; which changes are committed or rolled
   * back follows Oracle Database behavior. Authentication failures, database
   * availability errors, network errors, and timeouts are returned as API
   * errors (AIP-193), not as ERROR.
   */
  public const STATUS_ERROR = 'ERROR';
  /**
   * The time duration taken to execute the sql statement.
   *
   * @var string
   */
  public $executionDuration;
  /**
   * Message related to SQL execution. This field can be used to convey size
   * limit related message.
   *
   * @var string
   */
  public $message;
  /**
   * Set to true if SQL returned a result set larger than the acceptable
   * response size limits and the result was truncated.
   *
   * @var bool
   */
  public $partialResult;
  /**
   * Output only. Status of SQL execution.
   *
   * @var string
   */
  public $status;

  /**
   * The time duration taken to execute the sql statement.
   *
   * @param string $executionDuration
   */
  public function setExecutionDuration($executionDuration)
  {
    $this->executionDuration = $executionDuration;
  }
  /**
   * @return string
   */
  public function getExecutionDuration()
  {
    return $this->executionDuration;
  }
  /**
   * Message related to SQL execution. This field can be used to convey size
   * limit related message.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Set to true if SQL returned a result set larger than the acceptable
   * response size limits and the result was truncated.
   *
   * @param bool $partialResult
   */
  public function setPartialResult($partialResult)
  {
    $this->partialResult = $partialResult;
  }
  /**
   * @return bool
   */
  public function getPartialResult()
  {
    return $this->partialResult;
  }
  /**
   * Output only. Status of SQL execution.
   *
   * Accepted values: STATUS_UNSPECIFIED, OK, PARTIAL, ERROR
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteSqlMetadata::class, 'Google_Service_OracleDatabase_ExecuteSqlMetadata');
