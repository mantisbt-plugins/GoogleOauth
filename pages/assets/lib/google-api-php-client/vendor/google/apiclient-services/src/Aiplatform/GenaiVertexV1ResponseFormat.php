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

class GenaiVertexV1ResponseFormat extends \Google\Model
{
  protected $audioType = GenaiVertexV1AudioResponseFormat::class;
  protected $audioDataType = '';
  protected $imageType = GenaiVertexV1ImageResponseFormat::class;
  protected $imageDataType = '';
  protected $structValueType = GenaiVertexV1Struct::class;
  protected $structValueDataType = '';
  protected $textType = GenaiVertexV1TextResponseFormat::class;
  protected $textDataType = '';
  protected $videoType = GenaiVertexV1VideoResponseFormat::class;
  protected $videoDataType = '';

  /**
   * @param GenaiVertexV1AudioResponseFormat $audio
   */
  public function setAudio(GenaiVertexV1AudioResponseFormat $audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return GenaiVertexV1AudioResponseFormat
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * @param GenaiVertexV1ImageResponseFormat $image
   */
  public function setImage(GenaiVertexV1ImageResponseFormat $image)
  {
    $this->image = $image;
  }
  /**
   * @return GenaiVertexV1ImageResponseFormat
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Multi-discriminator values is already enabled in GAOS
   *
   * @param GenaiVertexV1Struct $structValue
   */
  public function setStructValue(GenaiVertexV1Struct $structValue)
  {
    $this->structValue = $structValue;
  }
  /**
   * @return GenaiVertexV1Struct
   */
  public function getStructValue()
  {
    return $this->structValue;
  }
  /**
   * @param GenaiVertexV1TextResponseFormat $text
   */
  public function setText(GenaiVertexV1TextResponseFormat $text)
  {
    $this->text = $text;
  }
  /**
   * @return GenaiVertexV1TextResponseFormat
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param GenaiVertexV1VideoResponseFormat $video
   */
  public function setVideo(GenaiVertexV1VideoResponseFormat $video)
  {
    $this->video = $video;
  }
  /**
   * @return GenaiVertexV1VideoResponseFormat
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ResponseFormat::class, 'Google_Service_Aiplatform_GenaiVertexV1ResponseFormat');
