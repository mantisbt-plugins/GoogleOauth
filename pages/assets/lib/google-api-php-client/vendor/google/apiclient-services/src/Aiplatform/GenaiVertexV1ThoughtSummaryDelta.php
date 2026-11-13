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

class GenaiVertexV1ThoughtSummaryDelta extends \Google\Model
{
  protected $contentType = GenaiVertexV1Content::class;
  protected $contentDataType = '';

  /**
   * A new summary item to be added to the thought.
   *
   * @param GenaiVertexV1Content $content
   */
  public function setContent(GenaiVertexV1Content $content)
  {
    $this->content = $content;
  }
  /**
   * @return GenaiVertexV1Content
   */
  public function getContent()
  {
    return $this->content;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ThoughtSummaryDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1ThoughtSummaryDelta');
