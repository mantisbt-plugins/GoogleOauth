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

class GenaiVertexV1Retrieval extends \Google\Collection
{
  protected $collection_key = 'retrievalTypes';
  protected $exaAiSearchConfigType = GenaiVertexV1ExaAISearchConfig::class;
  protected $exaAiSearchConfigDataType = '';
  protected $parallelAiSearchConfigType = GenaiVertexV1ParallelAISearchConfig::class;
  protected $parallelAiSearchConfigDataType = '';
  protected $ragStoreConfigType = GenaiVertexV1RagStoreConfig::class;
  protected $ragStoreConfigDataType = '';
  /**
   * The types of file retrieval to enable.
   *
   * @var string[]
   */
  public $retrievalTypes;
  protected $vertexAiSearchConfigType = GenaiVertexV1VertexAISearchConfig::class;
  protected $vertexAiSearchConfigDataType = '';

  /**
   * Used to specify configuration for ExaAISearch.
   *
   * @param GenaiVertexV1ExaAISearchConfig $exaAiSearchConfig
   */
  public function setExaAiSearchConfig(GenaiVertexV1ExaAISearchConfig $exaAiSearchConfig)
  {
    $this->exaAiSearchConfig = $exaAiSearchConfig;
  }
  /**
   * @return GenaiVertexV1ExaAISearchConfig
   */
  public function getExaAiSearchConfig()
  {
    return $this->exaAiSearchConfig;
  }
  /**
   * Used to specify configuration for ParallelAISearch.
   *
   * @param GenaiVertexV1ParallelAISearchConfig $parallelAiSearchConfig
   */
  public function setParallelAiSearchConfig(GenaiVertexV1ParallelAISearchConfig $parallelAiSearchConfig)
  {
    $this->parallelAiSearchConfig = $parallelAiSearchConfig;
  }
  /**
   * @return GenaiVertexV1ParallelAISearchConfig
   */
  public function getParallelAiSearchConfig()
  {
    return $this->parallelAiSearchConfig;
  }
  /**
   * Used to specify configuration for RagStore.
   *
   * @param GenaiVertexV1RagStoreConfig $ragStoreConfig
   */
  public function setRagStoreConfig(GenaiVertexV1RagStoreConfig $ragStoreConfig)
  {
    $this->ragStoreConfig = $ragStoreConfig;
  }
  /**
   * @return GenaiVertexV1RagStoreConfig
   */
  public function getRagStoreConfig()
  {
    return $this->ragStoreConfig;
  }
  /**
   * The types of file retrieval to enable.
   *
   * @param string[] $retrievalTypes
   */
  public function setRetrievalTypes($retrievalTypes)
  {
    $this->retrievalTypes = $retrievalTypes;
  }
  /**
   * @return string[]
   */
  public function getRetrievalTypes()
  {
    return $this->retrievalTypes;
  }
  /**
   * Used to specify configuration for VertexAISearch.
   *
   * @param GenaiVertexV1VertexAISearchConfig $vertexAiSearchConfig
   */
  public function setVertexAiSearchConfig(GenaiVertexV1VertexAISearchConfig $vertexAiSearchConfig)
  {
    $this->vertexAiSearchConfig = $vertexAiSearchConfig;
  }
  /**
   * @return GenaiVertexV1VertexAISearchConfig
   */
  public function getVertexAiSearchConfig()
  {
    return $this->vertexAiSearchConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Retrieval::class, 'Google_Service_Aiplatform_GenaiVertexV1Retrieval');
