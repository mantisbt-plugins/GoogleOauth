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

class Dropdown extends \Google\Collection
{
  protected $collection_key = 'suggestedInsertionIds';
  /**
   * The ID of this dropdown.
   *
   * @var string
   */
  public $dropdownId;
  protected $dropdownPropertiesType = DropdownProperties::class;
  protected $dropdownPropertiesDataType = '';
  /**
   * IDs for suggestions that remove this dropdown from the document. If empty,
   * then this dropdown isn't suggested for deletion.
   *
   * @var string[]
   */
  public $suggestedDeletionIds;
  protected $suggestedDropdownPropertiesChangesType = SuggestedDropdownProperties::class;
  protected $suggestedDropdownPropertiesChangesDataType = 'map';
  /**
   * IDs for suggestions that insert this dropdown into the document. If empty,
   * then this dropdown isn't a suggested insertion.
   *
   * @var string[]
   */
  public $suggestedInsertionIds;
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';

  /**
   * The ID of this dropdown.
   *
   * @param string $dropdownId
   */
  public function setDropdownId($dropdownId)
  {
    $this->dropdownId = $dropdownId;
  }
  /**
   * @return string
   */
  public function getDropdownId()
  {
    return $this->dropdownId;
  }
  /**
   * The properties of this dropdown.
   *
   * @param DropdownProperties $dropdownProperties
   */
  public function setDropdownProperties(DropdownProperties $dropdownProperties)
  {
    $this->dropdownProperties = $dropdownProperties;
  }
  /**
   * @return DropdownProperties
   */
  public function getDropdownProperties()
  {
    return $this->dropdownProperties;
  }
  /**
   * IDs for suggestions that remove this dropdown from the document. If empty,
   * then this dropdown isn't suggested for deletion.
   *
   * @param string[] $suggestedDeletionIds
   */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /**
   * @return string[]
   */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /**
   * The suggested properties changes to this dropdown, keyed by suggestion ID.
   *
   * @param SuggestedDropdownProperties[] $suggestedDropdownPropertiesChanges
   */
  public function setSuggestedDropdownPropertiesChanges($suggestedDropdownPropertiesChanges)
  {
    $this->suggestedDropdownPropertiesChanges = $suggestedDropdownPropertiesChanges;
  }
  /**
   * @return SuggestedDropdownProperties[]
   */
  public function getSuggestedDropdownPropertiesChanges()
  {
    return $this->suggestedDropdownPropertiesChanges;
  }
  /**
   * IDs for suggestions that insert this dropdown into the document. If empty,
   * then this dropdown isn't a suggested insertion.
   *
   * @param string[] $suggestedInsertionIds
   */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /**
   * @return string[]
   */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /**
   * The suggested text style changes to this dropdown, keyed by suggestion ID.
   *
   * @param SuggestedTextStyle[] $suggestedTextStyleChanges
   */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /**
   * @return SuggestedTextStyle[]
   */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /**
   * The text style of this dropdown.
   *
   * @param TextStyle $textStyle
   */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /**
   * @return TextStyle
   */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Dropdown::class, 'Google_Service_Docs_Dropdown');
