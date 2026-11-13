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

class DropdownOption extends \Google\Model
{
  /**
   * The display value of this dropdown option.
   *
   * @var string
   */
  public $displayValue;
  /**
   * The ID of this dropdown option. If you specify an ID, it must be unique
   * among all options in this dropdown definition. The ID must start with
   * `dropdownItem.` and match regex `^dropdownItem\.[a-zA-Z0-9_-]{2,14}$`
   * (length 15-27 chars). If you don't specify an ID, a unique one is
   * generated.
   *
   * @var string
   */
  public $optionId;
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';

  /**
   * The display value of this dropdown option.
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
   * The ID of this dropdown option. If you specify an ID, it must be unique
   * among all options in this dropdown definition. The ID must start with
   * `dropdownItem.` and match regex `^dropdownItem\.[a-zA-Z0-9_-]{2,14}$`
   * (length 15-27 chars). If you don't specify an ID, a unique one is
   * generated.
   *
   * @param string $optionId
   */
  public function setOptionId($optionId)
  {
    $this->optionId = $optionId;
  }
  /**
   * @return string
   */
  public function getOptionId()
  {
    return $this->optionId;
  }
  /**
   * The text style of this dropdown option. Currently, only the
   * `foreground_color` and `background_color` properties are supported. If
   * other properties are set, a 400 bad request error is returned.
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
class_alias(DropdownOption::class, 'Google_Service_Docs_DropdownOption');
