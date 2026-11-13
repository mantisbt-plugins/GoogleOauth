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

class SortBy extends \Google\Model
{
  /**
   * Ascending order.
   */
  public const SORT_ORDER_ASCENDING = 'ASCENDING';
  /**
   * Descending order.
   */
  public const SORT_ORDER_DESCENDING = 'DESCENDING';
  /**
   * Required. The dimension or metric field name to sort on.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The sort order of this column.
   *
   * @var string
   */
  public $sortOrder;

  /**
   * Required. The dimension or metric field name to sort on.
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
   * Optional. The sort order of this column.
   *
   * Accepted values: ASCENDING, DESCENDING
   *
   * @param self::SORT_ORDER_* $sortOrder
   */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /**
   * @return self::SORT_ORDER_*
   */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SortBy::class, 'Google_Service_Dfareporting_SortBy');
