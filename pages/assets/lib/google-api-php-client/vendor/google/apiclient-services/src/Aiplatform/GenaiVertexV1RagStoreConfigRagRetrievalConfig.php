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

class GenaiVertexV1RagStoreConfigRagRetrievalConfig extends \Google\Model
{
  protected $filterType = GenaiVertexV1RagStoreConfigRagRetrievalConfigFilter::class;
  protected $filterDataType = '';
  protected $hybridSearchType = GenaiVertexV1RagStoreConfigRagRetrievalConfigHybridSearch::class;
  protected $hybridSearchDataType = '';
  protected $rankingType = GenaiVertexV1RagStoreConfigRagRetrievalConfigRanking::class;
  protected $rankingDataType = '';
  /**
   * Optional. The number of contexts to retrieve.
   *
   * @var int
   */
  public $topK;

  /**
   * Optional. Config for filters.
   *
   * @param GenaiVertexV1RagStoreConfigRagRetrievalConfigFilter $filter
   */
  public function setFilter(GenaiVertexV1RagStoreConfigRagRetrievalConfigFilter $filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return GenaiVertexV1RagStoreConfigRagRetrievalConfigFilter
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Optional. Config for Hybrid Search.
   *
   * @param GenaiVertexV1RagStoreConfigRagRetrievalConfigHybridSearch $hybridSearch
   */
  public function setHybridSearch(GenaiVertexV1RagStoreConfigRagRetrievalConfigHybridSearch $hybridSearch)
  {
    $this->hybridSearch = $hybridSearch;
  }
  /**
   * @return GenaiVertexV1RagStoreConfigRagRetrievalConfigHybridSearch
   */
  public function getHybridSearch()
  {
    return $this->hybridSearch;
  }
  /**
   * Optional. Config for ranking and reranking.
   *
   * @param GenaiVertexV1RagStoreConfigRagRetrievalConfigRanking $ranking
   */
  public function setRanking(GenaiVertexV1RagStoreConfigRagRetrievalConfigRanking $ranking)
  {
    $this->ranking = $ranking;
  }
  /**
   * @return GenaiVertexV1RagStoreConfigRagRetrievalConfigRanking
   */
  public function getRanking()
  {
    return $this->ranking;
  }
  /**
   * Optional. The number of contexts to retrieve.
   *
   * @param int $topK
   */
  public function setTopK($topK)
  {
    $this->topK = $topK;
  }
  /**
   * @return int
   */
  public function getTopK()
  {
    return $this->topK;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1RagStoreConfigRagRetrievalConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1RagStoreConfigRagRetrievalConfig');
