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

namespace Google\Service\StorageBatchOperations;

class ObjectRetention extends \Google\Model
{
  /**
   * The retention mode isn't specified.
   */
  public const RETENTION_MODE_RETENTION_MODE_UNSPECIFIED = 'RETENTION_MODE_UNSPECIFIED';
  /**
   * When the retention mode is `LOCKED`, the `retainUntilTime` can't be removed
   * or reduced.
   */
  public const RETENTION_MODE_LOCKED = 'LOCKED';
  /**
   * When the retention mode is `UNLOCKED`, the `retainUntilTime` can be removed
   * or modified.
   */
  public const RETENTION_MODE_UNLOCKED = 'UNLOCKED';
  /**
   * Required. The object's retention expiration time, during which, the object
   * is protected from being deleted or overwritten. The time must be specified
   * in RFC 3339 format, for example `YYYY-MM-DD'T'HH:MM:SS'Z'` or `YYYY-MM-
   * DD'T'HH:MM:SS.SS'Z'`. To clear an object's retention, both `retentionMode`
   * and `retainUntilTime` must be left unset (omitted). Setting `retentionMode`
   * to `RETENTION_MODE_UNSPECIFIED` is treated as a no-op. Unlike an unset
   * field, it doesn't modify or clear the retention settings.
   *
   * @var string
   */
  public $retainUntilTime;
  /**
   * Required. The retention mode.
   *
   * @var string
   */
  public $retentionMode;

  /**
   * Required. The object's retention expiration time, during which, the object
   * is protected from being deleted or overwritten. The time must be specified
   * in RFC 3339 format, for example `YYYY-MM-DD'T'HH:MM:SS'Z'` or `YYYY-MM-
   * DD'T'HH:MM:SS.SS'Z'`. To clear an object's retention, both `retentionMode`
   * and `retainUntilTime` must be left unset (omitted). Setting `retentionMode`
   * to `RETENTION_MODE_UNSPECIFIED` is treated as a no-op. Unlike an unset
   * field, it doesn't modify or clear the retention settings.
   *
   * @param string $retainUntilTime
   */
  public function setRetainUntilTime($retainUntilTime)
  {
    $this->retainUntilTime = $retainUntilTime;
  }
  /**
   * @return string
   */
  public function getRetainUntilTime()
  {
    return $this->retainUntilTime;
  }
  /**
   * Required. The retention mode.
   *
   * Accepted values: RETENTION_MODE_UNSPECIFIED, LOCKED, UNLOCKED
   *
   * @param self::RETENTION_MODE_* $retentionMode
   */
  public function setRetentionMode($retentionMode)
  {
    $this->retentionMode = $retentionMode;
  }
  /**
   * @return self::RETENTION_MODE_*
   */
  public function getRetentionMode()
  {
    return $this->retentionMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ObjectRetention::class, 'Google_Service_StorageBatchOperations_ObjectRetention');
