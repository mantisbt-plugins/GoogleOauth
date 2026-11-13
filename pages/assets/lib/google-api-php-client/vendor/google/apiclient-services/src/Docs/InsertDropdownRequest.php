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

namespace Google\Service\Docs;

class InsertDropdownRequest extends \Google\Model
{
  /**
   * Required. The DropdownDefinition ID.
   *
   * @var string
   */
  public $dropdownDefinitionId;
  protected $endOfSegmentLocationType = EndOfSegmentLocation::class;
  protected $endOfSegmentLocationDataType = '';
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /**
   * Optional initial value for the dropdown. If this field is not specified,
   * the new dropdown will default to selecting the first option defined in the
   * dropdown definition. If this field is specified but does not reference a
   * valid option in the dropdown definition, a 400 bad request error is
   * returned.
   *
   * @var string
   */
  public $selectedOptionId;

  /**
   * Required. The DropdownDefinition ID.
   *
   * @param string $dropdownDefinitionId
   */
  public function setDropdownDefinitionId($dropdownDefinitionId)
  {
    $this->dropdownDefinitionId = $dropdownDefinitionId;
  }
  /**
   * @return string
   */
  public function getDropdownDefinitionId()
  {
    return $this->dropdownDefinitionId;
  }
  /**
   * The EndOfSegmentLocation in the document to insert the dropdown at.
   *
   * @param EndOfSegmentLocation $endOfSegmentLocation
   */
  public function setEndOfSegmentLocation(EndOfSegmentLocation $endOfSegmentLocation)
  {
    $this->endOfSegmentLocation = $endOfSegmentLocation;
  }
  /**
   * @return EndOfSegmentLocation
   */
  public function getEndOfSegmentLocation()
  {
    return $this->endOfSegmentLocation;
  }
  /**
   * The Location in the document to insert the dropdown at.
   *
   * @param Location $location
   */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /**
   * @return Location
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Optional initial value for the dropdown. If this field is not specified,
   * the new dropdown will default to selecting the first option defined in the
   * dropdown definition. If this field is specified but does not reference a
   * valid option in the dropdown definition, a 400 bad request error is
   * returned.
   *
   * @param string $selectedOptionId
   */
  public function setSelectedOptionId($selectedOptionId)
  {
    $this->selectedOptionId = $selectedOptionId;
  }
  /**
   * @return string
   */
  public function getSelectedOptionId()
  {
    return $this->selectedOptionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsertDropdownRequest::class, 'Google_Service_Docs_InsertDropdownRequest');
