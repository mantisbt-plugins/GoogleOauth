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

class GenaiVertexV1ImageContent extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const RESOLUTION_MEDIA_RESOLUTION_UNSPECIFIED = 'MEDIA_RESOLUTION_UNSPECIFIED';
  /**
   * Low resolution.
   */
  public const RESOLUTION_LOW = 'LOW';
  /**
   * Medium resolution.
   */
  public const RESOLUTION_MEDIUM = 'MEDIUM';
  /**
   * High resolution.
   */
  public const RESOLUTION_HIGH = 'HIGH';
  /**
   * Ultra high resolution.
   */
  public const RESOLUTION_ULTRA_HIGH = 'ULTRA_HIGH';
  /**
   * The image content.
   *
   * @var string
   */
  public $data;
  /**
   * Flexible MIME type string of the image, superseding mime_type = 1. Note:
   * Bespoke logic in the GAOS parser/serializer maps this to the "mime_type"
   * JSON key.
   *
   * @var string
   */
  public $mimeTypeString;
  /**
   * The resolution of the media.
   *
   * @var string
   */
  public $resolution;
  /**
   * The URI of the image.
   *
   * @var string
   */
  public $uri;

  /**
   * The image content.
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
   * Flexible MIME type string of the image, superseding mime_type = 1. Note:
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
   * The resolution of the media.
   *
   * Accepted values: MEDIA_RESOLUTION_UNSPECIFIED, LOW, MEDIUM, HIGH,
   * ULTRA_HIGH
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
  /**
   * The URI of the image.
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
class_alias(GenaiVertexV1ImageContent::class, 'Google_Service_Aiplatform_GenaiVertexV1ImageContent');
