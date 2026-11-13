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

class DropdownDefinition extends \Google\Model
{
  /**
   * The ID of this dropdown definition. If you specify an ID, it must be unique
   * among all IDs in the tab. The ID must start with `kix.` and match regex
   * `^kix\.[a-zA-Z0-9_-]{2,14}$` (length 6-18 chars). If you don't specify an
   * ID, a unique one is generated.
   *
   * @var string
   */
  public $dropdownDefinitionId;
  protected $dropdownDefinitionPropertiesType = DropdownDefinitionProperties::class;
  protected $dropdownDefinitionPropertiesDataType = '';
  /**
   * ID for suggestion that deletes this dropdown definition.
   *
   * @var string
   */
  public $suggestedDeletionId;
  protected $suggestedDropdownDefinitionPropertiesChangesType = SuggestedDropdownDefinitionProperties::class;
  protected $suggestedDropdownDefinitionPropertiesChangesDataType = 'map';
  /**
   * ID for suggestion that inserts this dropdown definition.
   *
   * @var string
   */
  public $suggestedInsertionId;

  /**
   * The ID of this dropdown definition. If you specify an ID, it must be unique
   * among all IDs in the tab. The ID must start with `kix.` and match regex
   * `^kix\.[a-zA-Z0-9_-]{2,14}$` (length 6-18 chars). If you don't specify an
   * ID, a unique one is generated.
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
   * The properties of this dropdown definition.
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
   * ID for suggestion that deletes this dropdown definition.
   *
   * @param string $suggestedDeletionId
   */
  public function setSuggestedDeletionId($suggestedDeletionId)
  {
    $this->suggestedDeletionId = $suggestedDeletionId;
  }
  /**
   * @return string
   */
  public function getSuggestedDeletionId()
  {
    return $this->suggestedDeletionId;
  }
  /**
   * Suggested property changes to this definition, keyed by suggestion ID.
   *
   * @param SuggestedDropdownDefinitionProperties[] $suggestedDropdownDefinitionPropertiesChanges
   */
  public function setSuggestedDropdownDefinitionPropertiesChanges($suggestedDropdownDefinitionPropertiesChanges)
  {
    $this->suggestedDropdownDefinitionPropertiesChanges = $suggestedDropdownDefinitionPropertiesChanges;
  }
  /**
   * @return SuggestedDropdownDefinitionProperties[]
   */
  public function getSuggestedDropdownDefinitionPropertiesChanges()
  {
    return $this->suggestedDropdownDefinitionPropertiesChanges;
  }
  /**
   * ID for suggestion that inserts this dropdown definition.
   *
   * @param string $suggestedInsertionId
   */
  public function setSuggestedInsertionId($suggestedInsertionId)
  {
    $this->suggestedInsertionId = $suggestedInsertionId;
  }
  /**
   * @return string
   */
  public function getSuggestedInsertionId()
  {
    return $this->suggestedInsertionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DropdownDefinition::class, 'Google_Service_Docs_DropdownDefinition');
