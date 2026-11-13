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

class SuggestedDropdownDefinitionProperties extends \Google\Model
{
  protected $dropdownDefinitionPropertiesType = DropdownDefinitionProperties::class;
  protected $dropdownDefinitionPropertiesDataType = '';
  protected $dropdownDefinitionPropertiesSuggestionStateType = DropdownDefinitionPropertiesSuggestionState::class;
  protected $dropdownDefinitionPropertiesSuggestionStateDataType = '';

  /**
   * A DropdownDefinitionProperties that only includes the changes made in this
   * suggestion. This can be used along with the
   * dropdown_definition_properties_suggestion_state to see which fields have
   * changed and their new values.
   *
   * @param DropdownDefinitionProperties $dropdownDefinitionProperties
   */
  public function setDropdownDefinitionProperties(DropdownDefinitionProperties $dropdownDefinitionProperties)
  {
    $this->dropdownDefinitionProperties = $dropdownDefinitionProperties;
  }
  /**
   * @return DropdownDefinitionProperties
   */
  public function getDropdownDefinitionProperties()
  {
    return $this->dropdownDefinitionProperties;
  }
  /**
   * A mask that indicates which of the fields on the base
   * DropdownDefinitionProperties have been changed in this suggestion.
   *
   * @param DropdownDefinitionPropertiesSuggestionState $dropdownDefinitionPropertiesSuggestionState
   */
  public function setDropdownDefinitionPropertiesSuggestionState(DropdownDefinitionPropertiesSuggestionState $dropdownDefinitionPropertiesSuggestionState)
  {
    $this->dropdownDefinitionPropertiesSuggestionState = $dropdownDefinitionPropertiesSuggestionState;
  }
  /**
   * @return DropdownDefinitionPropertiesSuggestionState
   */
  public function getDropdownDefinitionPropertiesSuggestionState()
  {
    return $this->dropdownDefinitionPropertiesSuggestionState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuggestedDropdownDefinitionProperties::class, 'Google_Service_Docs_SuggestedDropdownDefinitionProperties');
