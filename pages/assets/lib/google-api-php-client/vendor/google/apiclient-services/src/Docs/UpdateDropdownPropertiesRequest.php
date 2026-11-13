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

class UpdateDropdownPropertiesRequest extends \Google\Model
{
  /**
   * Required. The Dropdown ID.
   *
   * @var string
   */
  public $dropdownId;
  protected $dropdownPropertiesType = DropdownProperties::class;
  protected $dropdownPropertiesDataType = '';
  /**
   * The fields that should be updated. At least one field must be specified.
   * The root `dropdown_properties` is implied and should not be specified. A
   * single `"*"` can be used as short-hand for listing every field.
   *
   * @var string
   */
  public $fields;
  /**
   * The ID of the tab that contains the dropdown to update. When omitted, the
   * request is applied to the first tab. In a document containing a single tab:
   * - If provided, must match the singular tab's ID. - If omitted, the request
   * applies to the singular tab. In a document containing multiple tabs: - If
   * provided, the request applies to the specified tab. - If omitted, the
   * request applies to the first tab in the document.
   *
   * @var string
   */
  public $tabId;

  /**
   * Required. The Dropdown ID.
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
   * The properties to update.
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
   * The fields that should be updated. At least one field must be specified.
   * The root `dropdown_properties` is implied and should not be specified. A
   * single `"*"` can be used as short-hand for listing every field.
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
   * The ID of the tab that contains the dropdown to update. When omitted, the
   * request is applied to the first tab. In a document containing a single tab:
   * - If provided, must match the singular tab's ID. - If omitted, the request
   * applies to the singular tab. In a document containing multiple tabs: - If
   * provided, the request applies to the specified tab. - If omitted, the
   * request applies to the first tab in the document.
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
class_alias(UpdateDropdownPropertiesRequest::class, 'Google_Service_Docs_UpdateDropdownPropertiesRequest');
