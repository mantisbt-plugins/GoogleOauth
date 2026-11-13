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

class GenaiVertexV1UserInputStep extends \Google\Model
{
  protected $contentListType = GenaiVertexV1ContentList::class;
  protected $contentListDataType = '';
  /**
   * The content of the step. A single string.
   *
   * @var string
   */
  public $contentString;

  /**
   * The content of the step. An array of Content objects.
   *
   * @param GenaiVertexV1ContentList $contentList
   */
  public function setContentList(GenaiVertexV1ContentList $contentList)
  {
    $this->contentList = $contentList;
  }
  /**
   * @return GenaiVertexV1ContentList
   */
  public function getContentList()
  {
    return $this->contentList;
  }
  /**
   * The content of the step. A single string.
   *
   * @param string $contentString
   */
  public function setContentString($contentString)
  {
    $this->contentString = $contentString;
  }
  /**
   * @return string
   */
  public function getContentString()
  {
    return $this->contentString;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1UserInputStep::class, 'Google_Service_Aiplatform_GenaiVertexV1UserInputStep');
