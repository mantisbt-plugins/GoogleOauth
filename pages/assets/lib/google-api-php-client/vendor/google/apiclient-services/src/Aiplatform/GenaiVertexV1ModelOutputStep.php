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

class GenaiVertexV1ModelOutputStep extends \Google\Collection
{
  protected $collection_key = 'content';
  protected $contentType = GenaiVertexV1Content::class;
  protected $contentDataType = 'array';
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';

  /**
   * @param GenaiVertexV1Content[] $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return GenaiVertexV1Content[]
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * The error result of the operation in case of failure or cancellation.
   *
   * @deprecated
   * @param GoogleRpcStatus $error
   */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /**
   * @deprecated
   * @return GoogleRpcStatus
   */
  public function getError()
  {
    return $this->error;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ModelOutputStep::class, 'Google_Service_Aiplatform_GenaiVertexV1ModelOutputStep');
