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

class GoogleCloudAiplatformV1SpeechMetadata extends \Google\Model
{
  /**
   * Optional. Identifies which speaker is speaking this turn.
   *
   * @var string
   */
  public $speaker;
  /**
   * Optional. Natural language description of the vocal style (e.g.,
   * "cheerful").
   *
   * @var string
   */
  public $style;

  /**
   * Optional. Identifies which speaker is speaking this turn.
   *
   * @param string $speaker
   */
  public function setSpeaker($speaker)
  {
    $this->speaker = $speaker;
  }
  /**
   * @return string
   */
  public function getSpeaker()
  {
    return $this->speaker;
  }
  /**
   * Optional. Natural language description of the vocal style (e.g.,
   * "cheerful").
   *
   * @param string $style
   */
  public function setStyle($style)
  {
    $this->style = $style;
  }
  /**
   * @return string
   */
  public function getStyle()
  {
    return $this->style;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SpeechMetadata::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SpeechMetadata');
