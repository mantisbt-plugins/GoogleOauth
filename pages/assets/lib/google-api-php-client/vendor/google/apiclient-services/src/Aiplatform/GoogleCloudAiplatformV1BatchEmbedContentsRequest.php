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

class GoogleCloudAiplatformV1BatchEmbedContentsRequest extends \Google\Collection
{
  protected $collection_key = 'requests';
  protected $requestsType = GoogleCloudAiplatformV1EmbedContentRequest::class;
  protected $requestsDataType = 'array';

  /**
   * Required. Embed requests for the batch. The model in each of these requests
   * must either be empty or match the model specified in
   * `BatchEmbedContentsRequest.model`. All the requests in a batch must have
   * the same output dimensionality and auto truncation parameters.
   *
   * @param GoogleCloudAiplatformV1EmbedContentRequest[] $requests
   */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /**
   * @return GoogleCloudAiplatformV1EmbedContentRequest[]
   */
  public function getRequests()
  {
    return $this->requests;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1BatchEmbedContentsRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1BatchEmbedContentsRequest');
