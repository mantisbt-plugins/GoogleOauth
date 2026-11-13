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

namespace Google\Service\AnalyticsHub;

class ColumnFamilyMapping extends \Google\Model
{
  protected $delimitedKeyType = DelimitedKey::class;
  protected $delimitedKeyDataType = '';
  protected $rowKeySchemaType = RowKeySchema::class;
  protected $rowKeySchemaDataType = '';

  /**
   * Optional. If set, the row key is constructed from the given key fields and
   * delimiter. All key fields must be present in the message; otherwise, the
   * message remains in the subscription backlog.
   *
   * @param DelimitedKey $delimitedKey
   */
  public function setDelimitedKey(DelimitedKey $delimitedKey)
  {
    $this->delimitedKey = $delimitedKey;
  }
  /**
   * @return DelimitedKey
   */
  public function getDelimitedKey()
  {
    return $this->delimitedKey;
  }
  /**
   * Optional. If set, the row key is constructed from the field names of the
   * table's [structured row key](https://cloud.google.com/bigtable/docs/manage-
   * row-key-schemas). Note that if the field is nullable in the structured row
   * key, then it need not be present in the message; `null` will be used
   * instead.
   *
   * @param RowKeySchema $rowKeySchema
   */
  public function setRowKeySchema(RowKeySchema $rowKeySchema)
  {
    $this->rowKeySchema = $rowKeySchema;
  }
  /**
   * @return RowKeySchema
   */
  public function getRowKeySchema()
  {
    return $this->rowKeySchema;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ColumnFamilyMapping::class, 'Google_Service_AnalyticsHub_ColumnFamilyMapping');
