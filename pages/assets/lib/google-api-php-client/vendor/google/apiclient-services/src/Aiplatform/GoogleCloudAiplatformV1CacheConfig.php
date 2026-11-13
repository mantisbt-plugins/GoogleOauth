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

class GoogleCloudAiplatformV1CacheConfig extends \Google\Model
{
  /**
   * If set to true, disables GenAI caching. Otherwise caching is enabled.
   *
   * @var bool
   */
  public $disableCache;
  /**
   * Identifier. Name of the cache config. Format: -
   * `projects/{project}/cacheConfig`.
   *
   * @var string
   */
  public $name;
  protected $retentionConfigType = GoogleCloudAiplatformV1CacheConfigRetentionConfig::class;
  protected $retentionConfigDataType = '';

  /**
   * If set to true, disables GenAI caching. Otherwise caching is enabled.
   *
   * @param bool $disableCache
   */
  public function setDisableCache($disableCache)
  {
    $this->disableCache = $disableCache;
  }
  /**
   * @return bool
   */
  public function getDisableCache()
  {
    return $this->disableCache;
  }
  /**
   * Identifier. Name of the cache config. Format: -
   * `projects/{project}/cacheConfig`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Project-level retention type for implicit caching. On
   * `GetCacheConfig` this is populated with the retention the project gets: a
   * project that has stated no preference reports `DURABLE`. On
   * `UpdateCacheConfig`, leaving it unset means the project states no
   * preference. Whether that clears an existing preference depends on
   * `update_mask`; see that field.
   *
   * @param GoogleCloudAiplatformV1CacheConfigRetentionConfig $retentionConfig
   */
  public function setRetentionConfig(GoogleCloudAiplatformV1CacheConfigRetentionConfig $retentionConfig)
  {
    $this->retentionConfig = $retentionConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1CacheConfigRetentionConfig
   */
  public function getRetentionConfig()
  {
    return $this->retentionConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1CacheConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1CacheConfig');
