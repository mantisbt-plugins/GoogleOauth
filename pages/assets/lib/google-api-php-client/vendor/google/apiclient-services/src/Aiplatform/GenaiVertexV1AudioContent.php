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

class GenaiVertexV1AudioContent extends \Google\Model
{
  /**
   * The number of audio channels.
   *
   * @var int
   */
  public $channels;
  /**
   * The audio content.
   *
   * @var string
   */
  public $data;
  /**
   * Flexible MIME type string of the audio, superseding mime_type = 1. Note:
   * Bespoke logic in the GAOS parser/serializer maps this to the "mime_type"
   * JSON key.
   *
   * @var string
   */
  public $mimeTypeString;
  /**
   * The sample rate of the audio.
   *
   * @var int
   */
  public $sampleRate;
  /**
   * The URI of the audio.
   *
   * @var string
   */
  public $uri;

  /**
   * The number of audio channels.
   *
   * @param int $channels
   */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /**
   * @return int
   */
  public function getChannels()
  {
    return $this->channels;
  }
  /**
   * The audio content.
   *
   * @param string $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return string
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * Flexible MIME type string of the audio, superseding mime_type = 1. Note:
   * Bespoke logic in the GAOS parser/serializer maps this to the "mime_type"
   * JSON key.
   *
   * @param string $mimeTypeString
   */
  public function setMimeTypeString($mimeTypeString)
  {
    $this->mimeTypeString = $mimeTypeString;
  }
  /**
   * @return string
   */
  public function getMimeTypeString()
  {
    return $this->mimeTypeString;
  }
  /**
   * The sample rate of the audio.
   *
   * @param int $sampleRate
   */
  public function setSampleRate($sampleRate)
  {
    $this->sampleRate = $sampleRate;
  }
  /**
   * @return int
   */
  public function getSampleRate()
  {
    return $this->sampleRate;
  }
  /**
   * The URI of the audio.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1AudioContent::class, 'Google_Service_Aiplatform_GenaiVertexV1AudioContent');
