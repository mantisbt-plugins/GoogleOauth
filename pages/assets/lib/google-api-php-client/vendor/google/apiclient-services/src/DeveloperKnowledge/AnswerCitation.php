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

namespace Google\Service\DeveloperKnowledge;

class AnswerCitation extends \Google\Collection
{
  protected $collection_key = 'sources';
  /**
   * Output only. Indicates the end of the segment, measured in bytes (UTF-8
   * unicode), exclusive. If there are multi-byte characters, such as non-ASCII
   * characters, the index measurement is longer than the string length.
   *
   * @var int
   */
  public $endIndex;
  protected $sourcesType = CitationSource::class;
  protected $sourcesDataType = 'array';
  /**
   * Output only. Indicates the start of the segment, measured in bytes (UTF-8
   * unicode), inclusive. If there are multi-byte characters, such as non-ASCII
   * characters, the index measurement is longer than the string length.
   *
   * @var int
   */
  public $startIndex;

  /**
   * Output only. Indicates the end of the segment, measured in bytes (UTF-8
   * unicode), exclusive. If there are multi-byte characters, such as non-ASCII
   * characters, the index measurement is longer than the string length.
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
   * Output only. Contains citation sources for the attributed segment.
   *
   * @param CitationSource[] $sources
   */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /**
   * @return CitationSource[]
   */
  public function getSources()
  {
    return $this->sources;
  }
  /**
   * Output only. Indicates the start of the segment, measured in bytes (UTF-8
   * unicode), inclusive. If there are multi-byte characters, such as non-ASCII
   * characters, the index measurement is longer than the string length.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnswerCitation::class, 'Google_Service_DeveloperKnowledge_AnswerCitation');
