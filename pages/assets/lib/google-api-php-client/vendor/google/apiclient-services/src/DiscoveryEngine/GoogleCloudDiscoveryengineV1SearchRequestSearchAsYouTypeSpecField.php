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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1SearchRequestSearchAsYouTypeSpecField extends \Google\Model
{
  /**
   * Required. A field key that has been indexed for Search As You Type.
   *
   * @var string
   */
  public $key;
  /**
   * Optional. Weight for scores from this field. Defaults to 1.0 if not
   * specified.
   *
   * @var 
   */
  public $weight;

  /**
   * Required. A field key that has been indexed for Search As You Type.
   *
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  public function setWeight($weight)
  {
    $this->weight = $weight;
  }
  public function getWeight()
  {
    return $this->weight;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1SearchRequestSearchAsYouTypeSpecField::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1SearchRequestSearchAsYouTypeSpecField');
