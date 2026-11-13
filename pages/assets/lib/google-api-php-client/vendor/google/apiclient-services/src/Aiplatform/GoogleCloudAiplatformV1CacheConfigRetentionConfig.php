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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1CacheConfigRetentionConfig extends \Google\Model
{
  /**
   * Unspecified. Treated the same as `DURABLE`.
   */
  public const RETENTION_TYPE_RETENTION_TYPE_UNSPECIFIED = 'RETENTION_TYPE_UNSPECIFIED';
  /**
   * Restricts implicit caching to ephemeral, volatile-memory-backed retention
   * only.
   */
  public const RETENTION_TYPE_EPHEMERAL = 'EPHEMERAL';
  /**
   * Allows implicit caching to use long-lived, durable-storage-backed
   * retention.
   */
  public const RETENTION_TYPE_DURABLE = 'DURABLE';
  /**
   * Optional. Retention type applied to implicit cache traffic for this
   * project.
   *
   * @var string
   */
  public $retentionType;

  /**
   * Optional. Retention type applied to implicit cache traffic for this
   * project.
   *
   * Accepted values: RETENTION_TYPE_UNSPECIFIED, EPHEMERAL, DURABLE
   *
   * @param self::RETENTION_TYPE_* $retentionType
   */
  public function setRetentionType($retentionType)
  {
    $this->retentionType = $retentionType;
  }
  /**
   * @return self::RETENTION_TYPE_*
   */
  public function getRetentionType()
  {
    return $this->retentionType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1CacheConfigRetentionConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1CacheConfigRetentionConfig');
