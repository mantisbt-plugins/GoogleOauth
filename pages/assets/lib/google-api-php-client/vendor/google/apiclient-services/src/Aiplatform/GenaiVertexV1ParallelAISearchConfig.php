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

class GenaiVertexV1ParallelAISearchConfig extends \Google\Model
{
  /**
   * Optional. The API key for ParallelAiSearch.
   *
   * @var string
   */
  public $apiKey;
  /**
   * Optional. Custom configs for ParallelAiSearch.
   *
   * @var array[]
   */
  public $customConfig;

  /**
   * Optional. The API key for ParallelAiSearch.
   *
   * @param string $apiKey
   */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /**
   * @return string
   */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /**
   * Optional. Custom configs for ParallelAiSearch.
   *
   * @param array[] $customConfig
   */
  public function setCustomConfig($customConfig)
  {
    $this->customConfig = $customConfig;
  }
  /**
   * @return array[]
   */
  public function getCustomConfig()
  {
    return $this->customConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ParallelAISearchConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1ParallelAISearchConfig');
