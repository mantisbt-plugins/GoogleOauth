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

class KeyedGroup extends \Google\Collection
{
  protected $collection_key = 'responses';
  /**
   * Required. Key for this group.
   *
   * @var string
   */
  public $key;
  protected $responsesType = NestedPolicyResponse::class;
  protected $responsesDataType = 'array';

  /**
   * Required. Key for this group.
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
  /**
   * Required. Responses in this group.
   *
   * @param NestedPolicyResponse[] $responses
   */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /**
   * @return NestedPolicyResponse[]
   */
  public function getResponses()
  {
    return $this->responses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyedGroup::class, 'Google_Service_AndroidPublisher_KeyedGroup');
