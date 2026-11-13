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

class GoogleCloudDialogflowV2beta1GroundingChunk extends \Google\Model
{
  protected $retrievedContextType = GoogleCloudDialogflowV2beta1GroundingChunkRetrievedContext::class;
  protected $retrievedContextDataType = '';
  protected $webType = GoogleCloudDialogflowV2beta1GroundingChunkWeb::class;
  protected $webDataType = '';

  /**
   * @param GoogleCloudDialogflowV2beta1GroundingChunkRetrievedContext $retrievedContext
   */
  public function setRetrievedContext(GoogleCloudDialogflowV2beta1GroundingChunkRetrievedContext $retrievedContext)
  {
    $this->retrievedContext = $retrievedContext;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GroundingChunkRetrievedContext
   */
  public function getRetrievedContext()
  {
    return $this->retrievedContext;
  }
  /**
   * @param GoogleCloudDialogflowV2beta1GroundingChunkWeb $web
   */
  public function setWeb(GoogleCloudDialogflowV2beta1GroundingChunkWeb $web)
  {
    $this->web = $web;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1GroundingChunkWeb
   */
  public function getWeb()
  {
    return $this->web;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1GroundingChunk::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1GroundingChunk');
