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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1mainGcsSource extends \Google\Collection
{
  protected $collection_key = 'audioUris';
  /**
   * Immutable. Deprecated: Use `audio_uris` instead. Cloud Storage URI that
   * points to a file that contains the conversation audio.
   *
   * @deprecated
   * @var string
   */
  public $audioUri;
  /**
   * Immutable. Cloud Storage URIs that point to files that contain the
   * conversation audio. Supports both single audio files and multi-leg session
   * recordings (e.g., call transfers, rolling recording buffers).
   *
   * @var string[]
   */
  public $audioUris;
  /**
   * Immutable. Cloud Storage URI that points to a file that contains the
   * conversation transcript.
   *
   * @var string
   */
  public $transcriptUri;

  /**
   * Immutable. Deprecated: Use `audio_uris` instead. Cloud Storage URI that
   * points to a file that contains the conversation audio.
   *
   * @deprecated
   * @param string $audioUri
   */
  public function setAudioUri($audioUri)
  {
    $this->audioUri = $audioUri;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getAudioUri()
  {
    return $this->audioUri;
  }
  /**
   * Immutable. Cloud Storage URIs that point to files that contain the
   * conversation audio. Supports both single audio files and multi-leg session
   * recordings (e.g., call transfers, rolling recording buffers).
   *
   * @param string[] $audioUris
   */
  public function setAudioUris($audioUris)
  {
    $this->audioUris = $audioUris;
  }
  /**
   * @return string[]
   */
  public function getAudioUris()
  {
    return $this->audioUris;
  }
  /**
   * Immutable. Cloud Storage URI that points to a file that contains the
   * conversation transcript.
   *
   * @param string $transcriptUri
   */
  public function setTranscriptUri($transcriptUri)
  {
    $this->transcriptUri = $transcriptUri;
  }
  /**
   * @return string
   */
  public function getTranscriptUri()
  {
    return $this->transcriptUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainGcsSource::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainGcsSource');
