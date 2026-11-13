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

class CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform extends \Google\Model
{
  protected $initializationVideoType = CloudAiLargeModelsVisionGenerateVideoRequestVideo::class;
  protected $initializationVideoDataType = '';
  protected $maskType = CloudAiLargeModelsVisionGenerateVideoRequestVideo::class;
  protected $maskDataType = '';
  /**
   * Optional. Noise strength for video transform.
   *
   * @var float
   */
  public $noiseStrength;

  /**
   * Optional. Input for video transform (sdedit, diffdiff). Note the input
   * video from the main GenerateVideoRequest will be used as the conditioning.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoRequestVideo $initializationVideo
   */
  public function setInitializationVideo(CloudAiLargeModelsVisionGenerateVideoRequestVideo $initializationVideo)
  {
    $this->initializationVideo = $initializationVideo;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoRequestVideo
   */
  public function getInitializationVideo()
  {
    return $this->initializationVideo;
  }
  /**
   * Optional. Mask for video transform (diffdiff).
   *
   * @param CloudAiLargeModelsVisionGenerateVideoRequestVideo $mask
   */
  public function setMask(CloudAiLargeModelsVisionGenerateVideoRequestVideo $mask)
  {
    $this->mask = $mask;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoRequestVideo
   */
  public function getMask()
  {
    return $this->mask;
  }
  /**
   * Optional. Noise strength for video transform.
   *
   * @param float $noiseStrength
   */
  public function setNoiseStrength($noiseStrength)
  {
    $this->noiseStrength = $noiseStrength;
  }
  /**
   * @return float
   */
  public function getNoiseStrength()
  {
    return $this->noiseStrength;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform');
