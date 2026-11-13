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

namespace Google\Service\AndroidPublisher;

class RamSelector extends \Google\Model
{
  /**
   * This will match any device that has less than or equal
   * ram_mb_less_than_or_equal mb of RAM.
   *
   * @var string
   */
  public $ramMbLessThanOrEqual;

  /**
   * This will match any device that has less than or equal
   * ram_mb_less_than_or_equal mb of RAM.
   *
   * @param string $ramMbLessThanOrEqual
   */
  public function setRamMbLessThanOrEqual($ramMbLessThanOrEqual)
  {
    $this->ramMbLessThanOrEqual = $ramMbLessThanOrEqual;
  }
  /**
   * @return string
   */
  public function getRamMbLessThanOrEqual()
  {
    return $this->ramMbLessThanOrEqual;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RamSelector::class, 'Google_Service_AndroidPublisher_RamSelector');
