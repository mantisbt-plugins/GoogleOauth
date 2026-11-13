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

class DropdownProperties extends \Google\Model
{
  /**
   * The human-readable display text of the currently selected item. This field
   * is populated by the server based on the dropdown definition and the
   * selected option ID. It may differ from `DropdownOption.display_value` if
   * the underlying option definition was modified or deleted, or during pending
   * suggested changes.
   *
   * @var string
   */
  public $displayValue;
  /**
   * The ID of the DropdownDefinition that defines the options for this
   * dropdown.
   *
   * @var string
   */
  public $dropdownDefinitionId;
  /**
   * The ID of the selected option in this dropdown.
   *
   * @var string
   */
  public $selectedOptionId;

  /**
   * The human-readable display text of the currently selected item. This field
   * is populated by the server based on the dropdown definition and the
   * selected option ID. It may differ from `DropdownOption.display_value` if
   * the underlying option definition was modified or deleted, or during pending
   * suggested changes.
   *
   * @param string $displayValue
   */
  public function setDisplayValue($displayValue)
  {
    $this->displayValue = $displayValue;
  }
  /**
   * @return string
   */
  public function getDisplayValue()
  {
    return $this->displayValue;
  }
  /**
   * The ID of the DropdownDefinition that defines the options for this
   * dropdown.
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
   * The ID of the selected option in this dropdown.
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
class_alias(DropdownProperties::class, 'Google_Service_Docs_DropdownProperties');
