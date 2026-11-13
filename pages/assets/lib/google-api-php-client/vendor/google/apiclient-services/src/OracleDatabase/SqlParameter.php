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

namespace Google\Service\OracleDatabase;

class SqlParameter extends \Google\Model
{
  /**
   * Optional. The name of the SQL bind parameter (excluding the leading colon,
   * e.g. "id"). If omitted, parameters bind positionally based on their order
   * in the list.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Optional: Datatype hint for the parameter (e.g., "VARCHAR2",
   * "NUMBER", "DATE", "TIMESTAMP"). If omitted, the Oracle driver will infer
   * the type from the value string.
   *
   * @var string
   */
  public $typeName;
  /**
   * Required. Use protobuf.Value so clients can pass ints, bools, and strings
   * natively.
   *
   * @var array
   */
  public $value;

  /**
   * Optional. The name of the SQL bind parameter (excluding the leading colon,
   * e.g. "id"). If omitted, parameters bind positionally based on their order
   * in the list.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Optional: Datatype hint for the parameter (e.g., "VARCHAR2",
   * "NUMBER", "DATE", "TIMESTAMP"). If omitted, the Oracle driver will infer
   * the type from the value string.
   *
   * @param string $typeName
   */
  public function setTypeName($typeName)
  {
    $this->typeName = $typeName;
  }
  /**
   * @return string
   */
  public function getTypeName()
  {
    return $this->typeName;
  }
  /**
   * Required. Use protobuf.Value so clients can pass ints, bools, and strings
   * natively.
   *
   * @param array $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return array
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlParameter::class, 'Google_Service_OracleDatabase_SqlParameter');
