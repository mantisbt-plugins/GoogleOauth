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

class GoogleCloudDialogflowV2GroundingMetadata extends \Google\Collection
{
  protected $collection_key = 'webSearchQueries';
  protected $groundingChunksType = GoogleCloudDialogflowV2GroundingChunk::class;
  protected $groundingChunksDataType = 'array';
  protected $groundingSupportsType = GoogleCloudDialogflowV2GroundingSupport::class;
  protected $groundingSupportsDataType = 'array';
  protected $searchEntryPointType = GoogleCloudDialogflowV2SearchEntryPoint::class;
  protected $searchEntryPointDataType = '';
  /**
   * @var string[]
   */
  public $webSearchQueries;

  /**
   * @param GoogleCloudDialogflowV2GroundingChunk[] $groundingChunks
   */
  public function setGroundingChunks($groundingChunks)
  {
    $this->groundingChunks = $groundingChunks;
  }
  /**
   * @return GoogleCloudDialogflowV2GroundingChunk[]
   */
  public function getGroundingChunks()
  {
    return $this->groundingChunks;
  }
  /**
   * @param GoogleCloudDialogflowV2GroundingSupport[] $groundingSupports
   */
  public function setGroundingSupports($groundingSupports)
  {
    $this->groundingSupports = $groundingSupports;
  }
  /**
   * @return GoogleCloudDialogflowV2GroundingSupport[]
   */
  public function getGroundingSupports()
  {
    return $this->groundingSupports;
  }
  /**
   * @param GoogleCloudDialogflowV2SearchEntryPoint $searchEntryPoint
   */
  public function setSearchEntryPoint(GoogleCloudDialogflowV2SearchEntryPoint $searchEntryPoint)
  {
    $this->searchEntryPoint = $searchEntryPoint;
  }
  /**
   * @return GoogleCloudDialogflowV2SearchEntryPoint
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
class_alias(GoogleCloudDialogflowV2GroundingMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2GroundingMetadata');
