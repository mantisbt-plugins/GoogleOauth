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

class GenaiVertexV1WordInfo extends \Google\Model
{
  /**
   * End offset in time of the word relative to the start of the audio. Present
   * when timestamp_granularities contains "word".
   *
   * @var string
   */
  public $endOffset;
  /**
   * Optional. Speaker label for this word (e.g. "spk_1", "spk_2"). Present when
   * diarization_mode is set in TranscriptionConfig.
   *
   * @var string
   */
  public $speaker;
  /**
   * Start offset in time of the word relative to the start of the audio.
   * Present when timestamp_granularities contains "word".
   *
   * @var string
   */
  public $startOffset;
  /**
   * The transcribed word.
   *
   * @var string
   */
  public $text;

  /**
   * End offset in time of the word relative to the start of the audio. Present
   * when timestamp_granularities contains "word".
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
  /**
   * Optional. Speaker label for this word (e.g. "spk_1", "spk_2"). Present when
   * diarization_mode is set in TranscriptionConfig.
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
   * Start offset in time of the word relative to the start of the audio.
   * Present when timestamp_granularities contains "word".
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
  /**
   * The transcribed word.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1WordInfo::class, 'Google_Service_Aiplatform_GenaiVertexV1WordInfo');
