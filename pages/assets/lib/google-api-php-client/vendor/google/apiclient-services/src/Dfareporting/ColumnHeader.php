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

namespace Google\Service\Dfareporting;

class ColumnHeader extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const TYPE_COLUMN_TYPE_UNSPECIFIED = 'COLUMN_TYPE_UNSPECIFIED';
  /**
   * Dimension.
   */
  public const TYPE_DIMENSION = 'DIMENSION';
  /**
   * Metric.
   */
  public const TYPE_METRIC = 'METRIC';
  /**
   * Output only. The column name.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The column type.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The column name.
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
   * Output only. The column type.
   *
   * Accepted values: COLUMN_TYPE_UNSPECIFIED, DIMENSION, METRIC
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ColumnHeader::class, 'Google_Service_Dfareporting_ColumnHeader');
