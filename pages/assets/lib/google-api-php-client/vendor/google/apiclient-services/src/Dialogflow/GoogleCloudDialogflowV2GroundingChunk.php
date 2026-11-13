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

class GoogleCloudDialogflowV2GroundingChunk extends \Google\Model
{
  protected $retrievedContextType = GoogleCloudDialogflowV2GroundingChunkRetrievedContext::class;
  protected $retrievedContextDataType = '';
  protected $webType = GoogleCloudDialogflowV2GroundingChunkWeb::class;
  protected $webDataType = '';

  /**
   * @param GoogleCloudDialogflowV2GroundingChunkRetrievedContext $retrievedContext
   */
  public function setRetrievedContext(GoogleCloudDialogflowV2GroundingChunkRetrievedContext $retrievedContext)
  {
    $this->retrievedContext = $retrievedContext;
  }
  /**
   * @return GoogleCloudDialogflowV2GroundingChunkRetrievedContext
   */
  public function getRetrievedContext()
  {
    return $this->retrievedContext;
  }
  /**
   * @param GoogleCloudDialogflowV2GroundingChunkWeb $web
   */
  public function setWeb(GoogleCloudDialogflowV2GroundingChunkWeb $web)
  {
    $this->web = $web;
  }
  /**
   * @return GoogleCloudDialogflowV2GroundingChunkWeb
   */
  public function getWeb()
  {
    return $this->web;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2GroundingChunk::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2GroundingChunk');
