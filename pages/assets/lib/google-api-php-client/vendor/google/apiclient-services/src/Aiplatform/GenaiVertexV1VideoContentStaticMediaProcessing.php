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

class GenaiVertexV1VideoContentStaticMediaProcessing extends \Google\Model
{
  /**
   * Optional. Segment end time. Specified as a decimal number of seconds
   * followed by an 's' suffix, e.g., "30s". Must be non-negative and greater
   * than `start_offset` if `start_offset` is set.
   *
   * @var string
   */
  public $endOffset;
  /**
   * Optional. Video frame-rate sampling density.
   *
   * @var 
   */
  public $fps;
  /**
   * Optional. Segment start time. Specified as a decimal number of seconds
   * followed by an 's' suffix, e.g., "10.5s". Must be non-negative.
   *
   * @var string
   */
  public $startOffset;

  /**
   * Optional. Segment end time. Specified as a decimal number of seconds
   * followed by an 's' suffix, e.g., "30s". Must be non-negative and greater
   * than `start_offset` if `start_offset` is set.
   *
   * @param string $endOffset
   */
  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }
  /**
   * @return string
   */
  public function getEndOffset()
  {
    return $this->endOffset;
  }
  public function setFps($fps)
  {
    $this->fps = $fps;
  }
  public function getFps()
  {
    return $this->fps;
  }
  /**
   * Optional. Segment start time. Specified as a decimal number of seconds
   * followed by an 's' suffix, e.g., "10.5s". Must be non-negative.
   *
   * @param string $startOffset
   */
  public function setStartOffset($startOffset)
  {
    $this->startOffset = $startOffset;
  }
  /**
   * @return string
   */
  public function getStartOffset()
  {
    return $this->startOffset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1VideoContentStaticMediaProcessing::class, 'Google_Service_Aiplatform_GenaiVertexV1VideoContentStaticMediaProcessing');
