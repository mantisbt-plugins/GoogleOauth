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

class GenaiVertexV1ThoughtStep extends \Google\Collection
{
  protected $collection_key = 'summary';
  /**
   * A signature hash for backend validation.
   *
   * @var string
   */
  public $signature;
  protected $summaryType = GenaiVertexV1Content::class;
  protected $summaryDataType = 'array';

  /**
   * A signature hash for backend validation.
   *
   * @param string $signature
   */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /**
   * @return string
   */
  public function getSignature()
  {
    return $this->signature;
  }
  /**
   * A summary of the thought.
   *
   * @param GenaiVertexV1Content[] $summary
   */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return GenaiVertexV1Content[]
   */
  public function getSummary()
  {
    return $this->summary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ThoughtStep::class, 'Google_Service_Aiplatform_GenaiVertexV1ThoughtStep');
