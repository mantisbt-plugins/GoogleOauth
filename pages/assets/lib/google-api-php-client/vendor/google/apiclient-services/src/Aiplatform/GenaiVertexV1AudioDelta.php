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

class GenaiVertexV1AudioDelta extends \Google\Model
{
  public const MIME_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * WAV audio format
   */
  public const MIME_TYPE_TYPE_WAV = 'TYPE_WAV';
  /**
   * MP3 audio format
   */
  public const MIME_TYPE_TYPE_MP3 = 'TYPE_MP3';
  /**
   * AIFF audio format
   */
  public const MIME_TYPE_TYPE_AIFF = 'TYPE_AIFF';
  /**
   * AAC audio format
   */
  public const MIME_TYPE_TYPE_AAC = 'TYPE_AAC';
  /**
   * OGG audio format
   */
  public const MIME_TYPE_TYPE_OGG = 'TYPE_OGG';
  /**
   * FLAC audio format
   */
  public const MIME_TYPE_TYPE_FLAC = 'TYPE_FLAC';
  /**
   * MPEG audio format
   */
  public const MIME_TYPE_TYPE_MPEG = 'TYPE_MPEG';
  /**
   * M4A audio format
   */
  public const MIME_TYPE_TYPE_M4A = 'TYPE_M4A';
  /**
   * L16 audio format
   */
  public const MIME_TYPE_TYPE_L16 = 'TYPE_L16';
  /**
   * OPUS audio format
   */
  public const MIME_TYPE_TYPE_OPUS = 'TYPE_OPUS';
  /**
   * ALAW audio format
   */
  public const MIME_TYPE_TYPE_ALAW = 'TYPE_ALAW';
  /**
   * MULAW audio format
   */
  public const MIME_TYPE_TYPE_MULAW = 'TYPE_MULAW';
  /**
   * WEBM audio format
   */
  public const MIME_TYPE_TYPE_WEBM = 'TYPE_WEBM';
  /**
   * The number of audio channels.
   *
   * @var int
   */
  public $channels;
  /**
   * @var string
   */
  public $data;
  /**
   * @var string
   */
  public $mimeType;
  /**
   * The sample rate of the audio.
   *
   * @var int
   */
  public $sampleRate;
  /**
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
   * @param self::MIME_TYPE_* $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return self::MIME_TYPE_*
   */
  public function getMimeType()
  {
    return $this->mimeType;
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
class_alias(GenaiVertexV1AudioDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1AudioDelta');
