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

namespace Google\Service\Playdeveloperreporting;

class ApiservingMcpMcpToolVisibility extends \Google\Collection
{
  /**
   * Default. Equivalent to COMBINE.
   */
  public const VISIBILITY_ENFORCEMENT_STRATEGY_VISIBILITY_ENFORCEMENT_STRATEGY_UNSPECIFIED = 'VISIBILITY_ENFORCEMENT_STRATEGY_UNSPECIFIED';
  /**
   * The principal must satisfy both API-level tool-level) visibility
   * restrictions.
   */
  public const VISIBILITY_ENFORCEMENT_STRATEGY_COMBINE = 'COMBINE';
  /**
   * Bypasses the API-level visibility restrictions check; access is determined
   * solely by the tool-level visibility restrictions.
   */
  public const VISIBILITY_ENFORCEMENT_STRATEGY_OVERRIDE = 'OVERRIDE';
  protected $collection_key = 'fieldVisibility';
  protected $fieldVisibilityType = ApiservingMcpMcpToolVisibilityFieldVisibility::class;
  protected $fieldVisibilityDataType = 'array';
  /**
   * The strategy used to enforce visibility restrictions. DO NOT USE. This
   * field is not yet implemented.
   *
   * @var string
   */
  public $visibilityEnforcementStrategy;
  /**
   * The visibility restriction labels for the tool itself (e.g.,
   * "PRODUCER_DEFINED_PREVIEW"). Multiple labels can be provided as a comma-
   * separated string.
   *
   * @var string
   */
  public $visibilityRestriction;

  /**
   * A list of field-level visibility restrictions.
   *
   * @param ApiservingMcpMcpToolVisibilityFieldVisibility[] $fieldVisibility
   */
  public function setFieldVisibility($fieldVisibility)
  {
    $this->fieldVisibility = $fieldVisibility;
  }
  /**
   * @return ApiservingMcpMcpToolVisibilityFieldVisibility[]
   */
  public function getFieldVisibility()
  {
    return $this->fieldVisibility;
  }
  /**
   * The strategy used to enforce visibility restrictions. DO NOT USE. This
   * field is not yet implemented.
   *
   * Accepted values: VISIBILITY_ENFORCEMENT_STRATEGY_UNSPECIFIED, COMBINE,
   * OVERRIDE
   *
   * @param self::VISIBILITY_ENFORCEMENT_STRATEGY_* $visibilityEnforcementStrategy
   */
  public function setVisibilityEnforcementStrategy($visibilityEnforcementStrategy)
  {
    $this->visibilityEnforcementStrategy = $visibilityEnforcementStrategy;
  }
  /**
   * @return self::VISIBILITY_ENFORCEMENT_STRATEGY_*
   */
  public function getVisibilityEnforcementStrategy()
  {
    return $this->visibilityEnforcementStrategy;
  }
  /**
   * The visibility restriction labels for the tool itself (e.g.,
   * "PRODUCER_DEFINED_PREVIEW"). Multiple labels can be provided as a comma-
   * separated string.
   *
   * @param string $visibilityRestriction
   */
  public function setVisibilityRestriction($visibilityRestriction)
  {
    $this->visibilityRestriction = $visibilityRestriction;
  }
  /**
   * @return string
   */
  public function getVisibilityRestriction()
  {
    return $this->visibilityRestriction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiservingMcpMcpToolVisibility::class, 'Google_Service_Playdeveloperreporting_ApiservingMcpMcpToolVisibility');
