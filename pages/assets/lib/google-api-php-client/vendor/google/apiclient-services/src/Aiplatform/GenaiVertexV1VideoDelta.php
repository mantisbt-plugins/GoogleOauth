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

class GenaiVertexV1VideoDelta extends \Google\Model
{
  public const MIME_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * MP4 video format
   */
  public const MIME_TYPE_TYPE_MP4 = 'TYPE_MP4';
  /**
   * MPEG video format
   */
  public const MIME_TYPE_TYPE_MPEG = 'TYPE_MPEG';
  /**
   * MPG video format
   */
  public const MIME_TYPE_TYPE_MPG = 'TYPE_MPG';
  /**
   * MOV video format
   */
  public const MIME_TYPE_TYPE_MOV = 'TYPE_MOV';
  /**
   * AVI video format
   */
  public const MIME_TYPE_TYPE_AVI = 'TYPE_AVI';
  /**
   * FLV video format
   */
  public const MIME_TYPE_TYPE_X_FLV = 'TYPE_X_FLV';
  /**
   * WebM video format
   */
  public const MIME_TYPE_TYPE_WEBM = 'TYPE_WEBM';
  /**
   * WMV video format
   */
  public const MIME_TYPE_TYPE_WMV = 'TYPE_WMV';
  /**
   * 3GPP video format
   */
  public const MIME_TYPE_TYPE_3GPP = 'TYPE_3GPP';
  /**
   * JPEG 2000 video format
   */
  public const MIME_TYPE_TYPE_JPEG2000 = 'TYPE_JPEG2000';
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
   * @var string
   */
  public $data;
  /**
   * @var string
   */
  public $mimeType;
  /**
   * The resolution of the media.
   *
   * @var string
   */
  public $resolution;
  /**
   * @var string
   */
  public $uri;

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
class_alias(GenaiVertexV1VideoDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1VideoDelta');
