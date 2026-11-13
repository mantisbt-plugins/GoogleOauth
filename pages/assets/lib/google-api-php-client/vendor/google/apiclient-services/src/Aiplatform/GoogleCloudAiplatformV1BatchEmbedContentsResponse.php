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

class GoogleCloudAiplatformV1BatchEmbedContentsResponse extends \Google\Collection
{
  protected $collection_key = 'embeddings';
  protected $embeddingsType = GoogleCloudAiplatformV1BatchEmbedContentsResponseEmbedding::class;
  protected $embeddingsDataType = 'array';
  protected $usageMetadataType = GoogleCloudAiplatformV1UsageMetadata::class;
  protected $usageMetadataDataType = '';

  /**
   * The embeddings for each request, in the same order as provided in the batch
   * request.
   *
   * @param GoogleCloudAiplatformV1BatchEmbedContentsResponseEmbedding[] $embeddings
   */
  public function setEmbeddings($embeddings)
  {
    $this->embeddings = $embeddings;
  }
  /**
   * @return GoogleCloudAiplatformV1BatchEmbedContentsResponseEmbedding[]
   */
  public function getEmbeddings()
  {
    return $this->embeddings;
  }
  /**
   * Usage metadata about the response(s).
   *
   * @param GoogleCloudAiplatformV1UsageMetadata $usageMetadata
   */
  public function setUsageMetadata(GoogleCloudAiplatformV1UsageMetadata $usageMetadata)
  {
    $this->usageMetadata = $usageMetadata;
  }
  /**
   * @return GoogleCloudAiplatformV1UsageMetadata
   */
  public function getUsageMetadata()
  {
    return $this->usageMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1BatchEmbedContentsResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1BatchEmbedContentsResponse');
