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

class GenaiVertexV1RetrievalCallDelta extends \Google\Model
{
  public const RETRIEVAL_TYPE_RETRIEVAL_TYPE_UNSPECIFIED = 'RETRIEVAL_TYPE_UNSPECIFIED';
  public const RETRIEVAL_TYPE_RETRIEVAL_TYPE_VERTEX_AI_SEARCH = 'RETRIEVAL_TYPE_VERTEX_AI_SEARCH';
  public const RETRIEVAL_TYPE_RETRIEVAL_TYPE_RAG_STORE = 'RETRIEVAL_TYPE_RAG_STORE';
  public const RETRIEVAL_TYPE_RETRIEVAL_TYPE_EXA_AI_SEARCH = 'RETRIEVAL_TYPE_EXA_AI_SEARCH';
  public const RETRIEVAL_TYPE_RETRIEVAL_TYPE_PARALLEL_AI_SEARCH = 'RETRIEVAL_TYPE_PARALLEL_AI_SEARCH';
  protected $argumentsType = GenaiVertexV1RetrievalCallStepRetrievalStepArguments::class;
  protected $argumentsDataType = '';
  /**
   * The type of retrieval tools.
   *
   * @var string
   */
  public $retrievalType;

  /**
   * Required. The arguments to pass to the Retrieval tool.
   *
   * @param GenaiVertexV1RetrievalCallStepRetrievalStepArguments $arguments
   */
  public function setArguments(GenaiVertexV1RetrievalCallStepRetrievalStepArguments $arguments)
  {
    $this->arguments = $arguments;
  }
  /**
   * @return GenaiVertexV1RetrievalCallStepRetrievalStepArguments
   */
  public function getArguments()
  {
    return $this->arguments;
  }
  /**
   * The type of retrieval tools.
   *
   * Accepted values: RETRIEVAL_TYPE_UNSPECIFIED,
   * RETRIEVAL_TYPE_VERTEX_AI_SEARCH, RETRIEVAL_TYPE_RAG_STORE,
   * RETRIEVAL_TYPE_EXA_AI_SEARCH, RETRIEVAL_TYPE_PARALLEL_AI_SEARCH
   *
   * @param self::RETRIEVAL_TYPE_* $retrievalType
   */
  public function setRetrievalType($retrievalType)
  {
    $this->retrievalType = $retrievalType;
  }
  /**
   * @return self::RETRIEVAL_TYPE_*
   */
  public function getRetrievalType()
  {
    return $this->retrievalType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1RetrievalCallDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1RetrievalCallDelta');
