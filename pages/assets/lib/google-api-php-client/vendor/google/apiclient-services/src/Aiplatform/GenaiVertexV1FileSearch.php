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

class GenaiVertexV1FileSearch extends \Google\Collection
{
  protected $collection_key = 'fileSearchStoreNames';
  /**
   * The file search store names to search.
   *
   * @var string[]
   */
  public $fileSearchStoreNames;
  /**
   * Metadata filter to apply to the semantic retrieval documents and chunks.
   *
   * @var string
   */
  public $metadataFilter;
  /**
   * The number of semantic retrieval chunks to retrieve.
   *
   * @var int
   */
  public $topK;

  /**
   * The file search store names to search.
   *
   * @param string[] $fileSearchStoreNames
   */
  public function setFileSearchStoreNames($fileSearchStoreNames)
  {
    $this->fileSearchStoreNames = $fileSearchStoreNames;
  }
  /**
   * @return string[]
   */
  public function getFileSearchStoreNames()
  {
    return $this->fileSearchStoreNames;
  }
  /**
   * Metadata filter to apply to the semantic retrieval documents and chunks.
   *
   * @param string $metadataFilter
   */
  public function setMetadataFilter($metadataFilter)
  {
    $this->metadataFilter = $metadataFilter;
  }
  /**
   * @return string
   */
  public function getMetadataFilter()
  {
    return $this->metadataFilter;
  }
  /**
   * The number of semantic retrieval chunks to retrieve.
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
class_alias(GenaiVertexV1FileSearch::class, 'Google_Service_Aiplatform_GenaiVertexV1FileSearch');
