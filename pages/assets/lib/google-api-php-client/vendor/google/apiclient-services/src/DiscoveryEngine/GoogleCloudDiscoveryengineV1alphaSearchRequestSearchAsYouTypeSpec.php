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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaSearchRequestSearchAsYouTypeSpec extends \Google\Collection
{
  /**
   * Server behavior defaults to Condition.DISABLED.
   */
  public const CONDITION_CONDITION_UNSPECIFIED = 'CONDITION_UNSPECIFIED';
  /**
   * Disables Search As You Type.
   */
  public const CONDITION_DISABLED = 'DISABLED';
  /**
   * Enables Search As You Type.
   */
  public const CONDITION_ENABLED = 'ENABLED';
  /**
   * Automatic switching between search-as-you-type and standard search modes,
   * ideal for single-API implementations (e.g., debouncing).
   */
  public const CONDITION_AUTO = 'AUTO';
  protected $collection_key = 'fields';
  /**
   * The condition under which search as you type should occur. Default to
   * Condition.DISABLED.
   *
   * @var string
   */
  public $condition;
  protected $fieldsType = GoogleCloudDiscoveryengineV1alphaSearchRequestSearchAsYouTypeSpecField::class;
  protected $fieldsDataType = 'array';
  /**
   * Optional. Search As You Type score threshold for filtering purpose. We keep
   * the result if `score` >= `score_threshold`.
   *
   * @var 
   */
  public $scoreThreshold;

  /**
   * The condition under which search as you type should occur. Default to
   * Condition.DISABLED.
   *
   * Accepted values: CONDITION_UNSPECIFIED, DISABLED, ENABLED, AUTO
   *
   * @param self::CONDITION_* $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return self::CONDITION_*
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * Optional. The list of fields to be used for Search As You Type scoring.
   *
   * @param GoogleCloudDiscoveryengineV1alphaSearchRequestSearchAsYouTypeSpecField[] $fields
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaSearchRequestSearchAsYouTypeSpecField[]
   */
  public function getFields()
  {
    return $this->fields;
  }
  public function setScoreThreshold($scoreThreshold)
  {
    $this->scoreThreshold = $scoreThreshold;
  }
  public function getScoreThreshold()
  {
    return $this->scoreThreshold;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaSearchRequestSearchAsYouTypeSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaSearchRequestSearchAsYouTypeSpec');
