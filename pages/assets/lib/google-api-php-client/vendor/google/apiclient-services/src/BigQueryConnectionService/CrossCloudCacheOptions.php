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

namespace Google\Service\BigQueryConnectionService;

class CrossCloudCacheOptions extends \Google\Model
{
  /**
   * Optional. Whether cross-cloud caching is enabled. This only affects queries
   * through BigQuery. If this value is `true`, read data and metadata are
   * stored in a cache, which can increase performance and decrease network
   * egress costs for cross-cloud queries. If this value is `false`, cross-cloud
   * caching is disabled.
   *
   * @var bool
   */
  public $enabled;

  /**
   * Optional. Whether cross-cloud caching is enabled. This only affects queries
   * through BigQuery. If this value is `true`, read data and metadata are
   * stored in a cache, which can increase performance and decrease network
   * egress costs for cross-cloud queries. If this value is `false`, cross-cloud
   * caching is disabled.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CrossCloudCacheOptions::class, 'Google_Service_BigQueryConnectionService_CrossCloudCacheOptions');
