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

class GenaiVertexV1AudioResponseFormat extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const DELIVERY_DELIVERY_UNSPECIFIED = 'DELIVERY_UNSPECIFIED';
  /**
   * Audio data is returned inline in the response.
   */
  public const DELIVERY_INLINE = 'INLINE';
  /**
   * Audio data is returned as a URI.
   */
  public const DELIVERY_URI = 'URI';
  /**
   * Default value. This value is unused.
   */
  public const MIME_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * MP3 audio format.
   */
  public const MIME_TYPE_TYPE_MP3 = 'TYPE_MP3';
  /**
   * OGG Opus audio format.
   */
  public const MIME_TYPE_TYPE_OGG_OPUS = 'TYPE_OGG_OPUS';
  /**
   * Raw PCM (L16) audio format.
   */
  public const MIME_TYPE_TYPE_L16 = 'TYPE_L16';
  /**
   * WAV audio format.
   */
  public const MIME_TYPE_TYPE_WAV = 'TYPE_WAV';
  /**
   * A-law audio format.
   */
  public const MIME_TYPE_TYPE_ALAW = 'TYPE_ALAW';
  /**
   * Mu-law audio format.
   */
  public const MIME_TYPE_TYPE_MULAW = 'TYPE_MULAW';
  /**
   * Bit rate in bits per second (bps). Only applicable for compressed formats
   * (MP3, Opus).
   *
   * @var int
   */
  public $bitRate;
  /**
   * The delivery mode for the audio output.
   *
   * @var string
   */
  public $delivery;
  /**
   * The MIME type of the audio output.
   *
   * @var string
   */
  public $mimeType;
  /**
   * Sample rate in Hz.
   *
   * @var int
   */
  public $sampleRate;

  /**
   * Bit rate in bits per second (bps). Only applicable for compressed formats
   * (MP3, Opus).
   *
   * @param int $bitRate
   */
  public function setBitRate($bitRate)
  {
    $this->bitRate = $bitRate;
  }
  /**
   * @return int
   */
  public function getBitRate()
  {
    return $this->bitRate;
  }
  /**
   * The delivery mode for the audio output.
   *
   * Accepted values: DELIVERY_UNSPECIFIED, INLINE, URI
   *
   * @param self::DELIVERY_* $delivery
   */
  public function setDelivery($delivery)
  {
    $this->delivery = $delivery;
  }
  /**
   * @return self::DELIVERY_*
   */
  public function getDelivery()
  {
    return $this->delivery;
  }
  /**
   * The MIME type of the audio output.
   *
   * Accepted values: TYPE_UNSPECIFIED, TYPE_MP3, TYPE_OGG_OPUS, TYPE_L16,
   * TYPE_WAV, TYPE_ALAW, TYPE_MULAW
   *
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
   * Sample rate in Hz.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1AudioResponseFormat::class, 'Google_Service_Aiplatform_GenaiVertexV1AudioResponseFormat');
