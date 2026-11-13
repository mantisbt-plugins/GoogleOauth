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

class GoogleCloudAiplatformV1SchemaPromptSpecContentMetadata extends \Google\Model
{
  protected $citationMetadataType = GoogleCloudAiplatformV1CitationMetadata::class;
  protected $citationMetadataDataType = '';
  protected $groundingMetadataType = GoogleCloudAiplatformV1GroundingMetadata::class;
  protected $groundingMetadataDataType = '';

  /**
   * Optional. Citations that apply to the content.
   *
   * @param GoogleCloudAiplatformV1CitationMetadata $citationMetadata
   */
  public function setCitationMetadata(GoogleCloudAiplatformV1CitationMetadata $citationMetadata)
  {
    $this->citationMetadata = $citationMetadata;
  }
  /**
   * @return GoogleCloudAiplatformV1CitationMetadata
   */
  public function getCitationMetadata()
  {
    return $this->citationMetadata;
  }
  /**
   * Optional. Sources used to ground the content.
   *
   * @param GoogleCloudAiplatformV1GroundingMetadata $groundingMetadata
   */
  public function setGroundingMetadata(GoogleCloudAiplatformV1GroundingMetadata $groundingMetadata)
  {
    $this->groundingMetadata = $groundingMetadata;
  }
  /**
   * @return GoogleCloudAiplatformV1GroundingMetadata
   */
  public function getGroundingMetadata()
  {
    return $this->groundingMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SchemaPromptSpecContentMetadata::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SchemaPromptSpecContentMetadata');
