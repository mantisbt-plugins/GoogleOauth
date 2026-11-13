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

namespace Google\Service\HomeGraphService;

class ZoneStruct extends \Google\Model
{
  /**
   * Name of the zone.
   *
   * @var string
   */
  public $label;
  /**
   * Id of the zone
   *
   * @var string
   */
  public $zoneId;

  /**
   * Name of the zone.
   *
   * @param string $label
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * Id of the zone
   *
   * @param string $zoneId
   */
  public function setZoneId($zoneId)
  {
    $this->zoneId = $zoneId;
  }
  /**
   * @return string
   */
  public function getZoneId()
  {
    return $this->zoneId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ZoneStruct::class, 'Google_Service_HomeGraphService_ZoneStruct');
