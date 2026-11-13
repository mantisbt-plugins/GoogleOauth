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

class GenaiVertexV1SpeechConfig extends \Google\Model
{
  /**
   * The language of the speech.
   *
   * @var string
   */
  public $language;
  /**
   * The speaker's name, it should match the speaker name given in the prompt.
   *
   * @var string
   */
  public $speaker;
  /**
   * The voice of the speaker.
   *
   * @var string
   */
  public $voice;

  /**
   * The language of the speech.
   *
   * @param string $language
   */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /**
   * @return string
   */
  public function getLanguage()
  {
    return $this->language;
  }
  /**
   * The speaker's name, it should match the speaker name given in the prompt.
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
   * The voice of the speaker.
   *
   * @param string $voice
   */
  public function setVoice($voice)
  {
    $this->voice = $voice;
  }
  /**
   * @return string
   */
  public function getVoice()
  {
    return $this->voice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1SpeechConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1SpeechConfig');
