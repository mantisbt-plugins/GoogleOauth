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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1DataStoreFederatedSearchConfigNotebooklmConfig extends \Google\Collection
{
  protected $collection_key = 'notebooks';
  /**
   * Optional. Restricts this data store to the given notebooks. When empty, the
   * data store covers every notebook the querying user can access, which is the
   * existing behaviour. Each entry is a full notebook resource name, such as
   * `projects/locations/notebooks`. Scoping is enforced on results as well as
   * requested upstream, so a notebook outside this list cannot appear in a
   * search response through this data store even if the backend returns one.
   *
   * @var string[]
   */
  public $notebooks;
  /**
   * Required. Search config name. Format:
   * projects/locations/global/notebookLmSearchConfigs
   *
   * @var string
   */
  public $searchConfig;

  /**
   * Optional. Restricts this data store to the given notebooks. When empty, the
   * data store covers every notebook the querying user can access, which is the
   * existing behaviour. Each entry is a full notebook resource name, such as
   * `projects/locations/notebooks`. Scoping is enforced on results as well as
   * requested upstream, so a notebook outside this list cannot appear in a
   * search response through this data store even if the backend returns one.
   *
   * @param string[] $notebooks
   */
  public function setNotebooks($notebooks)
  {
    $this->notebooks = $notebooks;
  }
  /**
   * @return string[]
   */
  public function getNotebooks()
  {
    return $this->notebooks;
  }
  /**
   * Required. Search config name. Format:
   * projects/locations/global/notebookLmSearchConfigs
   *
   * @param string $searchConfig
   */
  public function setSearchConfig($searchConfig)
  {
    $this->searchConfig = $searchConfig;
  }
  /**
   * @return string
   */
  public function getSearchConfig()
  {
    return $this->searchConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1DataStoreFederatedSearchConfigNotebooklmConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1DataStoreFederatedSearchConfigNotebooklmConfig');
