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

class GenaiVertexV1VideoContent extends \Google\Model
{
  /**
   * Default. Uses model-specific processing (3.5 Pro+ --> AGENTIC, older models
   * --> STATIC)
   */
  public const PROCESSING_TYPE_PROCESSING_UNSPECIFIED = 'PROCESSING_UNSPECIFIED';
  /**
   * Fixed-rate frame extraction. All frames placed in context.
   */
  public const PROCESSING_TYPE_STATIC = 'STATIC';
  /**
   * Model-driven dynamic navigation.
   */
  public const PROCESSING_TYPE_AGENTIC = 'AGENTIC';
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
   * The video content.
   *
   * @var string
   */
  public $data;
  /**
   * Flexible MIME type string of the video, superseding mime_type = 1. Note:
   * Bespoke logic in the GAOS parser/serializer maps this to the "mime_type"
   * JSON key.
   *
   * @var string
   */
  public $mimeTypeString;
  /**
   * A user-defined name for this content block. Can be referenced by the model
   * in the final response.
   *
   * @var string
   */
  public $name;
  protected $processingConfigType = GenaiVertexV1VideoContentMediaProcessing::class;
  protected $processingConfigDataType = '';
  /**
   * @var string
   */
  public $processingType;
  /**
   * The resolution of the media.
   *
   * @var string
   */
  public $resolution;
  /**
   * The URI of the video.
   *
   * @var string
   */
  public $uri;

  /**
   * The video content.
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
   * Flexible MIME type string of the video, superseding mime_type = 1. Note:
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
   * A user-defined name for this content block. Can be referenced by the model
   * in the final response.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GenaiVertexV1VideoContentMediaProcessing $processingConfig
   */
  public function setProcessingConfig(GenaiVertexV1VideoContentMediaProcessing $processingConfig)
  {
    $this->processingConfig = $processingConfig;
  }
  /**
   * @return GenaiVertexV1VideoContentMediaProcessing
   */
  public function getProcessingConfig()
  {
    return $this->processingConfig;
  }
  /**
   * @param self::PROCESSING_TYPE_* $processingType
   */
  public function setProcessingType($processingType)
  {
    $this->processingType = $processingType;
  }
  /**
   * @return self::PROCESSING_TYPE_*
   */
  public function getProcessingType()
  {
    return $this->processingType;
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
   * The URI of the video.
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
class_alias(GenaiVertexV1VideoContent::class, 'Google_Service_Aiplatform_GenaiVertexV1VideoContent');
