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

class GenaiVertexV1Content extends \Google\Model
{
  protected $audioType = GenaiVertexV1AudioContent::class;
  protected $audioDataType = '';
  protected $documentType = GenaiVertexV1DocumentContent::class;
  protected $documentDataType = '';
  protected $imageType = GenaiVertexV1ImageContent::class;
  protected $imageDataType = '';
  protected $textType = GenaiVertexV1TextContent::class;
  protected $textDataType = '';
  protected $videoType = GenaiVertexV1VideoContent::class;
  protected $videoDataType = '';

  /**
   * @param GenaiVertexV1AudioContent $audio
   */
  public function setAudio(GenaiVertexV1AudioContent $audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return GenaiVertexV1AudioContent
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * @param GenaiVertexV1DocumentContent $document
   */
  public function setDocument(GenaiVertexV1DocumentContent $document)
  {
    $this->document = $document;
  }
  /**
   * @return GenaiVertexV1DocumentContent
   */
  public function getDocument()
  {
    return $this->document;
  }
  /**
   * @param GenaiVertexV1ImageContent $image
   */
  public function setImage(GenaiVertexV1ImageContent $image)
  {
    $this->image = $image;
  }
  /**
   * @return GenaiVertexV1ImageContent
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * @param GenaiVertexV1TextContent $text
   */
  public function setText(GenaiVertexV1TextContent $text)
  {
    $this->text = $text;
  }
  /**
   * @return GenaiVertexV1TextContent
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param GenaiVertexV1VideoContent $video
   */
  public function setVideo(GenaiVertexV1VideoContent $video)
  {
    $this->video = $video;
  }
  /**
   * @return GenaiVertexV1VideoContent
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Content::class, 'Google_Service_Aiplatform_GenaiVertexV1Content');
