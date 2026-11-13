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

class PersonEvent extends \Google\Collection
{
  protected $collection_key = 'zones';
  protected $commonEventDataType = CommonEventDataStruct::class;
  protected $commonEventDataDataType = '';
  protected $zonesType = ZoneStruct::class;
  protected $zonesDataType = 'array';
  /**
   * If set, zones is an empty list.
   *
   * @var bool
   */
  public $zonesIsEmpty;

  /**
   * @param CommonEventDataStruct $commonEventData
   */
  public function setCommonEventData(CommonEventDataStruct $commonEventData)
  {
    $this->commonEventData = $commonEventData;
  }
  /**
   * @return CommonEventDataStruct
   */
  public function getCommonEventData()
  {
    return $this->commonEventData;
  }
  /**
   * Zones where events are detected in.
   *
   * @param ZoneStruct[] $zones
   */
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  /**
   * @return ZoneStruct[]
   */
  public function getZones()
  {
    return $this->zones;
  }
  /**
   * If set, zones is an empty list.
   *
   * @param bool $zonesIsEmpty
   */
  public function setZonesIsEmpty($zonesIsEmpty)
  {
    $this->zonesIsEmpty = $zonesIsEmpty;
  }
  /**
   * @return bool
   */
  public function getZonesIsEmpty()
  {
    return $this->zonesIsEmpty;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PersonEvent::class, 'Google_Service_HomeGraphService_PersonEvent');
