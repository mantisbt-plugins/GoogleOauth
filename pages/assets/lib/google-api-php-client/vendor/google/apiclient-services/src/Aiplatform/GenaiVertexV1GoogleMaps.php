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

class GenaiVertexV1GoogleMaps extends \Google\Model
{
  /**
   * Whether to return a widget context token in the tool call result of the
   * response.
   *
   * @var bool
   */
  public $enableWidget;
  /**
   * The latitude of the user's location.
   *
   * @var 
   */
  public $latitude;
  /**
   * The longitude of the user's location.
   *
   * @var 
   */
  public $longitude;

  /**
   * Whether to return a widget context token in the tool call result of the
   * response.
   *
   * @param bool $enableWidget
   */
  public function setEnableWidget($enableWidget)
  {
    $this->enableWidget = $enableWidget;
  }
  /**
   * @return bool
   */
  public function getEnableWidget()
  {
    return $this->enableWidget;
  }
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1GoogleMaps::class, 'Google_Service_Aiplatform_GenaiVertexV1GoogleMaps');
