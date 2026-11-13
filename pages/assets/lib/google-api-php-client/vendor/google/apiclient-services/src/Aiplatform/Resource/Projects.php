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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1CacheConfig;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $projects = $aiplatformService->projects;
 *  </code>
 */
class Projects extends \Google\Service\Resource
{
  /**
   * Gets a GenAI cache config. (projects.getCacheConfig)
   *
   * @param string $name Required. Name of the cache config. Format: -
   * `projects/{project}/cacheConfig`.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1CacheConfig
   * @throws \Google\Service\Exception
   */
  public function getCacheConfig($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getCacheConfig', [$params], GoogleCloudAiplatformV1CacheConfig::class);
  }
  /**
   * Updates a cache config. (projects.updateCacheConfig)
   *
   * @param string $name Identifier. Name of the cache config. Format: -
   * `projects/{project}/cacheConfig`.
   * @param GoogleCloudAiplatformV1CacheConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields of `cache_config`
   * to update. Supported paths are `disable_cache`, `retention_config` (and its
   * subfields such as `retention_config.retention_type`), and the special value
   * `*`; any other path returns `INVALID_ARGUMENT`. Fields not covered by the
   * mask keep their stored value. If the mask is omitted, it is treated as an
   * implied mask covering the fields populated in `cache_config`, so updating one
   * field never clears another. `retention_config` is covered only when the
   * request carries it. `disable_cache` is always covered: it is a bare `bool`,
   * so the server cannot tell a request that omits it from one that sets it to
   * `false`. `*` requests full replacement of the resource: every settable field
   * is written from the request, clearing `retention_config` when the request
   * omits it. It cannot be combined with other paths. Prefer naming fields
   * explicitly -- a caller that sends `*` without knowing about a field added to
   * `CacheConfig` later would silently reset that field.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function updateCacheConfig($name, GoogleCloudAiplatformV1CacheConfig $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateCacheConfig', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Projects::class, 'Google_Service_Aiplatform_Resource_Projects');
