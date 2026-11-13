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

class GenaiVertexV1GoogleSearchCallStep extends \Google\Model
{
  /**
   * Unspecified search type. This value should not be used.
   */
  public const SEARCH_TYPE_SEARCH_TYPE_UNSPECIFIED = 'SEARCH_TYPE_UNSPECIFIED';
  /**
   * Setting this field enables web search. Only text results are returned.
   */
  public const SEARCH_TYPE_SEARCH_TYPE_WEB_SEARCH = 'SEARCH_TYPE_WEB_SEARCH';
  /**
   * Setting this field enables image search. Image bytes are returned.
   */
  public const SEARCH_TYPE_SEARCH_TYPE_IMAGE_SEARCH = 'SEARCH_TYPE_IMAGE_SEARCH';
  /**
   * Setting this field enables enterprise web search.
   */
  public const SEARCH_TYPE_SEARCH_TYPE_ENTERPRISE_WEB_SEARCH = 'SEARCH_TYPE_ENTERPRISE_WEB_SEARCH';
  protected $argumentsType = GenaiVertexV1GoogleSearchCallStepGoogleSearchCallStepArguments::class;
  protected $argumentsDataType = '';
  /**
   * The type of search grounding enabled.
   *
   * @var string
   */
  public $searchType;

  /**
   * Required. The arguments to pass to Google Search.
   *
   * @param GenaiVertexV1GoogleSearchCallStepGoogleSearchCallStepArguments $arguments
   */
  public function setArguments(GenaiVertexV1GoogleSearchCallStepGoogleSearchCallStepArguments $arguments)
  {
    $this->arguments = $arguments;
  }
  /**
   * @return GenaiVertexV1GoogleSearchCallStepGoogleSearchCallStepArguments
   */
  public function getArguments()
  {
    return $this->arguments;
  }
  /**
   * The type of search grounding enabled.
   *
   * Accepted values: SEARCH_TYPE_UNSPECIFIED, SEARCH_TYPE_WEB_SEARCH,
   * SEARCH_TYPE_IMAGE_SEARCH, SEARCH_TYPE_ENTERPRISE_WEB_SEARCH
   *
   * @param self::SEARCH_TYPE_* $searchType
   */
  public function setSearchType($searchType)
  {
    $this->searchType = $searchType;
  }
  /**
   * @return self::SEARCH_TYPE_*
   */
  public function getSearchType()
  {
    return $this->searchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1GoogleSearchCallStep::class, 'Google_Service_Aiplatform_GenaiVertexV1GoogleSearchCallStep');
