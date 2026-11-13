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

class UpdateDropdownDefinitionPropertiesRequest extends \Google\Model
{
  /**
   * The ID of the DropdownDefinition to update.
   *
   * @var string
   */
  public $dropdownDefinitionId;
  protected $dropdownDefinitionPropertiesType = DropdownDefinitionProperties::class;
  protected $dropdownDefinitionPropertiesDataType = '';
  /**
   * The fields that should be updated. At least one field must be specified.
   * The root `dropdown_definition_properties` is implied and should not be
   * specified. A single `"*"` can be used as short-hand for listing every
   * field. When `dropdown_definition_properties.options` is included in the
   * field mask, the full, complete list of desired options must be provided in
   * `dropdown_definition_properties.options`.
   *
   * @var string
   */
  public $fields;
  /**
   * A map of option IDs to their replacements, used to automatically reassign
   * orphaned Dropdown chips when an option is deleted. The keys are the IDs of
   * the options being deleted, and the values are the IDs of their replacement
   * options. If an option being deleted is selected in one or more Dropdown
   * chips in the document, a replacement entry for that option must be provided
   * in this map, and the replacement option ID must exist in the updated
   * DropdownDefinition. If a replacement is required but not provided, a 400
   * bad request error is returned. Options being deleted that are not selected
   * in any Dropdown chips do not require a replacement. For example, if option
   * A is being replaced by option B, the map should be `{"A": "B"}`.
   *
   * @var string[]
   */
  public $selectedOptionIdReplacements;
  /**
   * The ID of the tab that contains the dropdown definition to update. When
   * omitted, the request is applied to the first tab. In a document containing
   * a single tab: - If provided, must match the singular tab's ID. - If
   * omitted, the request applies to the singular tab. In a document containing
   * multiple tabs: - If provided, the request applies to the specified tab. -
   * If omitted, the request applies to the first tab in the document.
   *
   * @var string
   */
  public $tabId;

  /**
   * The ID of the DropdownDefinition to update.
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
   * The properties to update.
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
   * The fields that should be updated. At least one field must be specified.
   * The root `dropdown_definition_properties` is implied and should not be
   * specified. A single `"*"` can be used as short-hand for listing every
   * field. When `dropdown_definition_properties.options` is included in the
   * field mask, the full, complete list of desired options must be provided in
   * `dropdown_definition_properties.options`.
   *
   * @param string $fields
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return string
   */
  public function getFields()
  {
    return $this->fields;
  }
  /**
   * A map of option IDs to their replacements, used to automatically reassign
   * orphaned Dropdown chips when an option is deleted. The keys are the IDs of
   * the options being deleted, and the values are the IDs of their replacement
   * options. If an option being deleted is selected in one or more Dropdown
   * chips in the document, a replacement entry for that option must be provided
   * in this map, and the replacement option ID must exist in the updated
   * DropdownDefinition. If a replacement is required but not provided, a 400
   * bad request error is returned. Options being deleted that are not selected
   * in any Dropdown chips do not require a replacement. For example, if option
   * A is being replaced by option B, the map should be `{"A": "B"}`.
   *
   * @param string[] $selectedOptionIdReplacements
   */
  public function setSelectedOptionIdReplacements($selectedOptionIdReplacements)
  {
    $this->selectedOptionIdReplacements = $selectedOptionIdReplacements;
  }
  /**
   * @return string[]
   */
  public function getSelectedOptionIdReplacements()
  {
    return $this->selectedOptionIdReplacements;
  }
  /**
   * The ID of the tab that contains the dropdown definition to update. When
   * omitted, the request is applied to the first tab. In a document containing
   * a single tab: - If provided, must match the singular tab's ID. - If
   * omitted, the request applies to the singular tab. In a document containing
   * multiple tabs: - If provided, the request applies to the specified tab. -
   * If omitted, the request applies to the first tab in the document.
   *
   * @param string $tabId
   */
  public function setTabId($tabId)
  {
    $this->tabId = $tabId;
  }
  /**
   * @return string
   */
  public function getTabId()
  {
    return $this->tabId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdateDropdownDefinitionPropertiesRequest::class, 'Google_Service_Docs_UpdateDropdownDefinitionPropertiesRequest');
