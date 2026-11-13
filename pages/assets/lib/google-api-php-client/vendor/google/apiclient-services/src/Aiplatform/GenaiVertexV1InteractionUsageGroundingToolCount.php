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

class GenaiVertexV1InteractionUsageGroundingToolCount extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Grounding with Google Web Search and Image Search, & Web Grounding for
   * Enterprise.
   */
  public const TYPE_GOOGLE_SEARCH = 'GOOGLE_SEARCH';
  /**
   * Grounding with Google Maps.
   */
  public const TYPE_GOOGLE_MAPS = 'GOOGLE_MAPS';
  /**
   * Grounding with customer's data, for example, VertexAISearch.
   */
  public const TYPE_RETRIEVAL = 'RETRIEVAL';
  /**
   * The number of grounding tool counts.
   *
   * @var int
   */
  public $count;
  /**
   * The grounding tool type associated with the count.
   *
   * @var string
   */
  public $type;

  /**
   * The number of grounding tool counts.
   *
   * @param int $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return int
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * The grounding tool type associated with the count.
   *
   * Accepted values: TYPE_UNSPECIFIED, GOOGLE_SEARCH, GOOGLE_MAPS, RETRIEVAL
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1InteractionUsageGroundingToolCount::class, 'Google_Service_Aiplatform_GenaiVertexV1InteractionUsageGroundingToolCount');
