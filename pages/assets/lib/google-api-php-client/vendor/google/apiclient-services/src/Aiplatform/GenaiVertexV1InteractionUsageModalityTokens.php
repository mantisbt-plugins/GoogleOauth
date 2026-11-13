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

class GenaiVertexV1InteractionUsageModalityTokens extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const MODALITY_RESPONSE_MODALITY_UNSPECIFIED = 'RESPONSE_MODALITY_UNSPECIFIED';
  /**
   * Indicates the model should return text.
   */
  public const MODALITY_TEXT = 'TEXT';
  /**
   * Indicates the model should return images.
   */
  public const MODALITY_IMAGE = 'IMAGE';
  /**
   * Indicates the model should return audio.
   */
  public const MODALITY_AUDIO = 'AUDIO';
  /**
   * Indicates the model should return video.
   */
  public const MODALITY_VIDEO = 'VIDEO';
  /**
   * Indicates the model should return documents.
   */
  public const MODALITY_DOCUMENT = 'DOCUMENT';
  /**
   * The modality associated with the token count.
   *
   * @var string
   */
  public $modality;
  /**
   * Number of tokens for the modality.
   *
   * @var int
   */
  public $tokens;

  /**
   * The modality associated with the token count.
   *
   * Accepted values: RESPONSE_MODALITY_UNSPECIFIED, TEXT, IMAGE, AUDIO, VIDEO,
   * DOCUMENT
   *
   * @param self::MODALITY_* $modality
   */
  public function setModality($modality)
  {
    $this->modality = $modality;
  }
  /**
   * @return self::MODALITY_*
   */
  public function getModality()
  {
    return $this->modality;
  }
  /**
   * Number of tokens for the modality.
   *
   * @param int $tokens
   */
  public function setTokens($tokens)
  {
    $this->tokens = $tokens;
  }
  /**
   * @return int
   */
  public function getTokens()
  {
    return $this->tokens;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1InteractionUsageModalityTokens::class, 'Google_Service_Aiplatform_GenaiVertexV1InteractionUsageModalityTokens');
