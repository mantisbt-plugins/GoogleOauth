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

class ExecutionPlan extends \Google\Model
{
  /**
   * The action is unspecified.
   */
  public const ACTION_ACTION_UNSPECIFIED = 'ACTION_UNSPECIFIED';
  /**
   * Resource missing; will be created.
   */
  public const ACTION_CREATE = 'CREATE';
  /**
   * Resource exists at the target, but differs from the source; will be
   * updated.
   */
  public const ACTION_UPDATE = 'UPDATE';
  /**
   * Resource exists at the target; no changes will be made.
   */
  public const ACTION_SKIP = 'SKIP';
  /**
   * Resource cannot be migrated due to a dependency failure (e.g., parent
   * resource missing).
   */
  public const ACTION_DEPENDENCY_FAILURE = 'DEPENDENCY_FAILURE';
  /**
   * Resource cannot be migrated due to an error during discovery.
   */
  public const ACTION_ERROR = 'ERROR';
  /**
   * The action that will be taken for a resource during migration.
   *
   * @var string
   */
  public $action;
  protected $diffsType = ValueDiff::class;
  protected $diffsDataType = 'map';
  /**
   * A human-readable string explaining why the action was chosen.
   *
   * @var string
   */
  public $reason;

  /**
   * The action that will be taken for a resource during migration.
   *
   * Accepted values: ACTION_UNSPECIFIED, CREATE, UPDATE, SKIP,
   * DEPENDENCY_FAILURE, ERROR
   *
   * @param self::ACTION_* $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return self::ACTION_*
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * A map of field names to their respective value diff.
   *
   * @param ValueDiff[] $diffs
   */
  public function setDiffs($diffs)
  {
    $this->diffs = $diffs;
  }
  /**
   * @return ValueDiff[]
   */
  public function getDiffs()
  {
    return $this->diffs;
  }
  /**
   * A human-readable string explaining why the action was chosen.
   *
   * @param string $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return string
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutionPlan::class, 'Google_Service_DataprocMetastore_ExecutionPlan');
