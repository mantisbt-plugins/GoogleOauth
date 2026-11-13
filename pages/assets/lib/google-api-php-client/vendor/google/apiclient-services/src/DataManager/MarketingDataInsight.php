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

namespace Google\Service\DataManager;

class MarketingDataInsight extends \Google\Collection
{
  public const DIMENSION_AUDIENCE_INSIGHTS_DIMENSION_UNSPECIFIED = 'AUDIENCE_INSIGHTS_DIMENSION_UNSPECIFIED';
  public const DIMENSION_AUDIENCE_INSIGHTS_DIMENSION_UNKNOWN = 'AUDIENCE_INSIGHTS_DIMENSION_UNKNOWN';
  public const DIMENSION_AFFINITY_USER_INTEREST = 'AFFINITY_USER_INTEREST';
  public const DIMENSION_IN_MARKET_USER_INTEREST = 'IN_MARKET_USER_INTEREST';
  public const DIMENSION_AGE_RANGE = 'AGE_RANGE';
  public const DIMENSION_GENDER = 'GENDER';
  protected $collection_key = 'attributes';
  protected $attributesType = MarketingDataInsightsAttribute::class;
  protected $attributesDataType = 'array';
  /**
   * @var string
   */
  public $dimension;

  /**
   * @param MarketingDataInsightsAttribute[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return MarketingDataInsightsAttribute[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * @param self::DIMENSION_* $dimension
   */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return self::DIMENSION_*
   */
  public function getDimension()
  {
    return $this->dimension;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MarketingDataInsight::class, 'Google_Service_DataManager_MarketingDataInsight');
