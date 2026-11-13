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

namespace Google\Service\MapsPlaces;

class GoogleMapsPlacesV1PlaceNavigationPoint extends \Google\Collection
{
  protected $collection_key = 'usages';
  protected $displayNameType = GoogleTypeLocalizedText::class;
  protected $displayNameDataType = '';
  protected $locationType = GoogleTypeLatLng::class;
  protected $locationDataType = '';
  /**
   * A token that can be used to identify this navigation point.
   *
   * @var string
   */
  public $navigationPointToken;
  /**
   * Travel modes that are appropriate for this navigation point.
   *
   * @var string[]
   */
  public $travelModes;
  /**
   * Lists `usages` supported by this navigation point. If empty, it does not
   * necessarily mean its usage is restricted in any way. All navigation points
   * can be used for general navigation.
   *
   * @var string[]
   */
  public $usages;

  /**
   * The display name of this navigation point. For example, "5th Ave" or "Gate
   * B".
   *
   * @param GoogleTypeLocalizedText $displayName
   */
  public function setDisplayName(GoogleTypeLocalizedText $displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return GoogleTypeLocalizedText
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * A point next to the road segment where navigation should end. The point is
   * intentionally slightly offset from the road's centerline to clearly mark
   * the side of the road where the place is located.
   *
   * @param GoogleTypeLatLng $location
   */
  public function setLocation(GoogleTypeLatLng $location)
  {
    $this->location = $location;
  }
  /**
   * @return GoogleTypeLatLng
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * A token that can be used to identify this navigation point.
   *
   * @param string $navigationPointToken
   */
  public function setNavigationPointToken($navigationPointToken)
  {
    $this->navigationPointToken = $navigationPointToken;
  }
  /**
   * @return string
   */
  public function getNavigationPointToken()
  {
    return $this->navigationPointToken;
  }
  /**
   * Travel modes that are appropriate for this navigation point.
   *
   * @param string[] $travelModes
   */
  public function setTravelModes($travelModes)
  {
    $this->travelModes = $travelModes;
  }
  /**
   * @return string[]
   */
  public function getTravelModes()
  {
    return $this->travelModes;
  }
  /**
   * Lists `usages` supported by this navigation point. If empty, it does not
   * necessarily mean its usage is restricted in any way. All navigation points
   * can be used for general navigation.
   *
   * @param string[] $usages
   */
  public function setUsages($usages)
  {
    $this->usages = $usages;
  }
  /**
   * @return string[]
   */
  public function getUsages()
  {
    return $this->usages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleMapsPlacesV1PlaceNavigationPoint::class, 'Google_Service_MapsPlaces_GoogleMapsPlacesV1PlaceNavigationPoint');
