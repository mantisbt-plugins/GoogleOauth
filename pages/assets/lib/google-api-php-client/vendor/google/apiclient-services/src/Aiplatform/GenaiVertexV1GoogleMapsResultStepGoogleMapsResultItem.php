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

class GenaiVertexV1GoogleMapsResultStepGoogleMapsResultItem extends \Google\Collection
{
  protected $collection_key = 'places';
  protected $placesType = GenaiVertexV1GoogleMapsResultStepGoogleMapsResultItemGoogleMapsResultPlaces::class;
  protected $placesDataType = 'array';
  /**
   * @var string
   */
  public $widgetContextToken;

  /**
   * @param GenaiVertexV1GoogleMapsResultStepGoogleMapsResultItemGoogleMapsResultPlaces[] $places
   */
  public function setPlaces($places)
  {
    $this->places = $places;
  }
  /**
   * @return GenaiVertexV1GoogleMapsResultStepGoogleMapsResultItemGoogleMapsResultPlaces[]
   */
  public function getPlaces()
  {
    return $this->places;
  }
  /**
   * @param string $widgetContextToken
   */
  public function setWidgetContextToken($widgetContextToken)
  {
    $this->widgetContextToken = $widgetContextToken;
  }
  /**
   * @return string
   */
  public function getWidgetContextToken()
  {
    return $this->widgetContextToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1GoogleMapsResultStepGoogleMapsResultItem::class, 'Google_Service_Aiplatform_GenaiVertexV1GoogleMapsResultStepGoogleMapsResultItem');
