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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1GroundingMetadata extends \Google\Collection
{
  protected $collection_key = 'webSearchQueries';
  protected $groundingChunksType = GoogleCloudDialogflowV2beta1GroundingChunk::class;
  protected $groundingChunksDataType = 'array';
  protected $groundingSupportsType = GoogleCloudDialogflowV2beta1GroundingSupport::class;
  protected $groundingSupportsDataType = 'array';
  protected $searchEntryPointType = GoogleCloudDialogflowV2beta1SearchEntryPoint::class;
  protected $searchEntryPointDataType = '';
  /**
   * @var string[]
   */
  public $webSearchQueries;

  /**
   * @param GoogleCloudDialogflowV2beta1GroundingChunk[] $groundingChunks
   */
  public function setGroundingChunks($groundingChunks)
  {
    $this->groundingChunks = $groundingChunks;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GroundingChunk[]
   */
  public function getGroundingChunks()
  {
    return $this->groundingChunks;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1GroundingSupport[] $groundingSupports
   */
  public function setGroundingSupports($groundingSupports)
  {
    $this->groundingSupports = $groundingSupports;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GroundingSupport[]
   */
  public function getGroundingSupports()
  {
    return $this->groundingSupports;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1SearchEntryPoint $searchEntryPoint
   */
  public function setSearchEntryPoint(GoogleCloudDialogflowV2beta1SearchEntryPoint $searchEntryPoint)
  {
    $this->searchEntryPoint = $searchEntryPoint;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1SearchEntryPoint
   */
  public function getSearchEntryPoint()
  {
    return $this->searchEntryPoint;
  }
  /**
   * @param string[] $webSearchQueries
   */
  public function setWebSearchQueries($webSearchQueries)
  {
    $this->webSearchQueries = $webSearchQueries;
  }
  /**
   * @return string[]
   */
  public function getWebSearchQueries()
  {
    return $this->webSearchQueries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1GroundingMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1GroundingMetadata');
