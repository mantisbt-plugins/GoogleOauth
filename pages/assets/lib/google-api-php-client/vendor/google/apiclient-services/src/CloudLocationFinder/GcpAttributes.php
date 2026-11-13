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

namespace Google\Service\CloudLocationFinder;

class GcpAttributes extends \Google\Model
{
  /**
   * Default value. Unspecified zone type.
   */
  public const ZONE_TYPE_GCP_ZONE_TYPE_UNSPECIFIED = 'GCP_ZONE_TYPE_UNSPECIFIED';
  /**
   * General purpose zone type.
   */
  public const ZONE_TYPE_GENERAL_PURPOSE = 'GENERAL_PURPOSE';
  /**
   * AI zone type.
   */
  public const ZONE_TYPE_AI_ZONE = 'AI_ZONE';
  /**
   * Optional. The type of the cloud zone.
   *
   * @var string
   */
  public $zoneType;

  /**
   * Optional. The type of the cloud zone.
   *
   * Accepted values: GCP_ZONE_TYPE_UNSPECIFIED, GENERAL_PURPOSE, AI_ZONE
   *
   * @param self::ZONE_TYPE_* $zoneType
   */
  public function setZoneType($zoneType)
  {
    $this->zoneType = $zoneType;
  }
  /**
   * @return self::ZONE_TYPE_*
   */
  public function getZoneType()
  {
    return $this->zoneType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GcpAttributes::class, 'Google_Service_CloudLocationFinder_GcpAttributes');
