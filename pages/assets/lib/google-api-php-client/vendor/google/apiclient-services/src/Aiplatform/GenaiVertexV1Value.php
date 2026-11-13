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

class GenaiVertexV1Value extends \Google\Model
{
  /**
   * Null value.
   */
  public const NULL_VALUE_NULL_VALUE = 'NULL_VALUE';
  /**
   * Represents a boolean value.
   *
   * @var bool
   */
  public $boolValue;
  protected $contentValueType = GenaiVertexV1Content::class;
  protected $contentValueDataType = '';
  protected $listValueType = GenaiVertexV1ListValue::class;
  protected $listValueDataType = '';
  /**
   * Represents a null value.
   *
   * @var string
   */
  public $nullValue;
  /**
   * Represents a double value.
   *
   * @var 
   */
  public $numberValue;
  /**
   * Represents a string value.
   *
   * @var string
   */
  public $stringValue;
  protected $structValueType = GenaiVertexV1Struct::class;
  protected $structValueDataType = '';

  /**
   * Represents a boolean value.
   *
   * @param bool $boolValue
   */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /**
   * @return bool
   */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /**
   * Represents rich content (text, image, etc.).
   *
   * @param GenaiVertexV1Content $contentValue
   */
  public function setContentValue(GenaiVertexV1Content $contentValue)
  {
    $this->contentValue = $contentValue;
  }
  /**
   * @return GenaiVertexV1Content
   */
  public function getContentValue()
  {
    return $this->contentValue;
  }
  /**
   * Represents a repeated `Value`.
   *
   * @param GenaiVertexV1ListValue $listValue
   */
  public function setListValue(GenaiVertexV1ListValue $listValue)
  {
    $this->listValue = $listValue;
  }
  /**
   * @return GenaiVertexV1ListValue
   */
  public function getListValue()
  {
    return $this->listValue;
  }
  /**
   * Represents a null value.
   *
   * Accepted values: NULL_VALUE
   *
   * @param self::NULL_VALUE_* $nullValue
   */
  public function setNullValue($nullValue)
  {
    $this->nullValue = $nullValue;
  }
  /**
   * @return self::NULL_VALUE_*
   */
  public function getNullValue()
  {
    return $this->nullValue;
  }
  public function setNumberValue($numberValue)
  {
    $this->numberValue = $numberValue;
  }
  public function getNumberValue()
  {
    return $this->numberValue;
  }
  /**
   * Represents a string value.
   *
   * @param string $stringValue
   */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return string
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
  /**
   * Represents a structured value.
   *
   * @param GenaiVertexV1Struct $structValue
   */
  public function setStructValue(GenaiVertexV1Struct $structValue)
  {
    $this->structValue = $structValue;
  }
  /**
   * @return GenaiVertexV1Struct
   */
  public function getStructValue()
  {
    return $this->structValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Value::class, 'Google_Service_Aiplatform_GenaiVertexV1Value');
