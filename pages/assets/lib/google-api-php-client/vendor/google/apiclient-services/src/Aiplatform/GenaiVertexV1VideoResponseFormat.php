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

class GenaiVertexV1VideoResponseFormat extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const ASPECT_RATIO_ASPECT_RATIO_UNSPECIFIED = 'ASPECT_RATIO_UNSPECIFIED';
  /**
   * 16:9 aspect ratio.
   */
  public const ASPECT_RATIO_ASPECT_RATIO_SIXTEEN_BY_NINE = 'ASPECT_RATIO_SIXTEEN_BY_NINE';
  /**
   * 9:16 aspect ratio.
   */
  public const ASPECT_RATIO_ASPECT_RATIO_NINE_BY_SIXTEEN = 'ASPECT_RATIO_NINE_BY_SIXTEEN';
  /**
   * Default value. This value is unused.
   */
  public const DELIVERY_DELIVERY_UNSPECIFIED = 'DELIVERY_UNSPECIFIED';
  /**
   * Video data is returned inline in the response.
   */
  public const DELIVERY_INLINE = 'INLINE';
  /**
   * Video data is returned as a URI.
   */
  public const DELIVERY_URI = 'URI';
  /**
   * Default value. This value is unused.
   */
  public const RESOLUTION_RESOLUTION_UNSPECIFIED = 'RESOLUTION_UNSPECIFIED';
  /**
   * 360p resolution.
   */
  public const RESOLUTION_RESOLUTION_THREE_SIXTY_P = 'RESOLUTION_THREE_SIXTY_P';
  /**
   * 720p resolution.
   */
  public const RESOLUTION_RESOLUTION_SEVEN_TWENTY_P = 'RESOLUTION_SEVEN_TWENTY_P';
  /**
   * 1080p resolution.
   */
  public const RESOLUTION_RESOLUTION_TEN_EIGHTY_P = 'RESOLUTION_TEN_EIGHTY_P';
  /**
   * 4K resolution.
   */
  public const RESOLUTION_RESOLUTION_FOUR_K = 'RESOLUTION_FOUR_K';
  /**
   * The aspect ratio for the video output.
   *
   * @var string
   */
  public $aspectRatio;
  /**
   * The delivery mode for the video output.
   *
   * @var string
   */
  public $delivery;
  /**
   * The duration for the video output.
   *
   * @var string
   */
  public $duration;
  /**
   * The Cloud Storage URI to store the video output. Required for Vertex if
   * delivery mode is URI.
   *
   * @var string
   */
  public $gcsUri;
  /**
   * The video output resolution. Defaults to 720p.
   *
   * @var string
   */
  public $resolution;

  /**
   * The aspect ratio for the video output.
   *
   * Accepted values: ASPECT_RATIO_UNSPECIFIED, ASPECT_RATIO_SIXTEEN_BY_NINE,
   * ASPECT_RATIO_NINE_BY_SIXTEEN
   *
   * @param self::ASPECT_RATIO_* $aspectRatio
   */
  public function setAspectRatio($aspectRatio)
  {
    $this->aspectRatio = $aspectRatio;
  }
  /**
   * @return self::ASPECT_RATIO_*
   */
  public function getAspectRatio()
  {
    return $this->aspectRatio;
  }
  /**
   * The delivery mode for the video output.
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
   * The duration for the video output.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * The Cloud Storage URI to store the video output. Required for Vertex if
   * delivery mode is URI.
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * The video output resolution. Defaults to 720p.
   *
   * Accepted values: RESOLUTION_UNSPECIFIED, RESOLUTION_THREE_SIXTY_P,
   * RESOLUTION_SEVEN_TWENTY_P, RESOLUTION_TEN_EIGHTY_P, RESOLUTION_FOUR_K
   *
   * @param self::RESOLUTION_* $resolution
   */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /**
   * @return self::RESOLUTION_*
   */
  public function getResolution()
  {
    return $this->resolution;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1VideoResponseFormat::class, 'Google_Service_Aiplatform_GenaiVertexV1VideoResponseFormat');
