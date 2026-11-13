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

class CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig extends \Google\Model
{
  protected $targetAudioType = CloudAiLargeModelsVisionGenerateVideoRequestAudio::class;
  protected $targetAudioDataType = '';
  /**
   * Optional. When true, uses the audio track from the input video as the
   * target audio instead of regenerating it. Mutually exclusive with
   * `target_audio` below. Requires the input to be a video file, not an image
   * sequence.
   *
   * @var bool
   */
  public $useTargetAudioFromVideo;

  /**
   * Optional. Audio file to use as the target audio input to Omni. Only used
   * when `use_target_audio_from_video` is false. Cannot be set simultaneously
   * with `use_target_audio_from_video = true`.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoRequestAudio $targetAudio
   */
  public function setTargetAudio(CloudAiLargeModelsVisionGenerateVideoRequestAudio $targetAudio)
  {
    $this->targetAudio = $targetAudio;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoRequestAudio
   */
  public function getTargetAudio()
  {
    return $this->targetAudio;
  }
  /**
   * Optional. When true, uses the audio track from the input video as the
   * target audio instead of regenerating it. Mutually exclusive with
   * `target_audio` below. Requires the input to be a video file, not an image
   * sequence.
   *
   * @param bool $useTargetAudioFromVideo
   */
  public function setUseTargetAudioFromVideo($useTargetAudioFromVideo)
  {
    $this->useTargetAudioFromVideo = $useTargetAudioFromVideo;
  }
  /**
   * @return bool
   */
  public function getUseTargetAudioFromVideo()
  {
    return $this->useTargetAudioFromVideo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig');
