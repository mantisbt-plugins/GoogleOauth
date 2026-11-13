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

class GenaiVertexV1RagStoreConfig extends \Google\Collection
{
  protected $collection_key = 'ragResources';
  protected $ragResourcesType = GenaiVertexV1RagStoreConfigRagResource::class;
  protected $ragResourcesDataType = 'array';
  protected $ragRetrievalConfigType = GenaiVertexV1RagStoreConfigRagRetrievalConfig::class;
  protected $ragRetrievalConfigDataType = '';

  /**
   * Optional. The representation of the rag source.
   *
   * @param GenaiVertexV1RagStoreConfigRagResource[] $ragResources
   */
  public function setRagResources($ragResources)
  {
    $this->ragResources = $ragResources;
  }
  /**
   * @return GenaiVertexV1RagStoreConfigRagResource[]
   */
  public function getRagResources()
  {
    return $this->ragResources;
  }
  /**
   * Optional. The retrieval config for the Rag query.
   *
   * @param GenaiVertexV1RagStoreConfigRagRetrievalConfig $ragRetrievalConfig
   */
  public function setRagRetrievalConfig(GenaiVertexV1RagStoreConfigRagRetrievalConfig $ragRetrievalConfig)
  {
    $this->ragRetrievalConfig = $ragRetrievalConfig;
  }
  /**
   * @return GenaiVertexV1RagStoreConfigRagRetrievalConfig
   */
  public function getRagRetrievalConfig()
  {
    return $this->ragRetrievalConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1RagStoreConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1RagStoreConfig');
