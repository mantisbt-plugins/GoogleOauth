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

class GenaiVertexV1TextContentAnnotation extends \Google\Model
{
  /**
   * End of the attributed segment, exclusive.
   *
   * @var int
   */
  public $endIndex;
  protected $fileCitationType = GenaiVertexV1FileCitation::class;
  protected $fileCitationDataType = '';
  protected $placeCitationType = GenaiVertexV1PlaceCitation::class;
  protected $placeCitationDataType = '';
  protected $speechMetadataType = GenaiVertexV1SpeechAnnotation::class;
  protected $speechMetadataDataType = '';
  /**
   * Start of segment of the response that is attributed to this source. Index
   * indicates the start of the segment, measured in bytes.
   *
   * @var int
   */
  public $startIndex;
  protected $urlCitationType = GenaiVertexV1UrlCitation::class;
  protected $urlCitationDataType = '';
  protected $wordInfoType = GenaiVertexV1WordInfo::class;
  protected $wordInfoDataType = '';

  /**
   * End of the attributed segment, exclusive.
   *
   * @param int $endIndex
   */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /**
   * @return int
   */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /**
   * A file citation annotation.
   *
   * @param GenaiVertexV1FileCitation $fileCitation
   */
  public function setFileCitation(GenaiVertexV1FileCitation $fileCitation)
  {
    $this->fileCitation = $fileCitation;
  }
  /**
   * @return GenaiVertexV1FileCitation
   */
  public function getFileCitation()
  {
    return $this->fileCitation;
  }
  /**
   * A place citation annotation.
   *
   * @param GenaiVertexV1PlaceCitation $placeCitation
   */
  public function setPlaceCitation(GenaiVertexV1PlaceCitation $placeCitation)
  {
    $this->placeCitation = $placeCitation;
  }
  /**
   * @return GenaiVertexV1PlaceCitation
   */
  public function getPlaceCitation()
  {
    return $this->placeCitation;
  }
  /**
   * Speech annotation for text content.
   *
   * @param GenaiVertexV1SpeechAnnotation $speechMetadata
   */
  public function setSpeechMetadata(GenaiVertexV1SpeechAnnotation $speechMetadata)
  {
    $this->speechMetadata = $speechMetadata;
  }
  /**
   * @return GenaiVertexV1SpeechAnnotation
   */
  public function getSpeechMetadata()
  {
    return $this->speechMetadata;
  }
  /**
   * Start of segment of the response that is attributed to this source. Index
   * indicates the start of the segment, measured in bytes.
   *
   * @param int $startIndex
   */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /**
   * @return int
   */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /**
   * NOTE: We use these instead of the Citation message for historical reasons.
   * A URL citation annotation.
   *
   * @param GenaiVertexV1UrlCitation $urlCitation
   */
  public function setUrlCitation(GenaiVertexV1UrlCitation $urlCitation)
  {
    $this->urlCitation = $urlCitation;
  }
  /**
   * @return GenaiVertexV1UrlCitation
   */
  public function getUrlCitation()
  {
    return $this->urlCitation;
  }
  /**
   * Word-level ASR annotation with timing and speaker info.
   *
   * @param GenaiVertexV1WordInfo $wordInfo
   */
  public function setWordInfo(GenaiVertexV1WordInfo $wordInfo)
  {
    $this->wordInfo = $wordInfo;
  }
  /**
   * @return GenaiVertexV1WordInfo
   */
  public function getWordInfo()
  {
    return $this->wordInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1TextContentAnnotation::class, 'Google_Service_Aiplatform_GenaiVertexV1TextContentAnnotation');
