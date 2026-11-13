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

namespace Google\Service\Pubsub;

class CompiledProtoSchema extends \Google\Model
{
  /**
   * Required. The compiled FileDescriptorSet binary.
   *
   * @var string
   */
  public $compiledBytes;
  /**
   * Required. The name of the root message type in the schema.
   *
   * @var string
   */
  public $rootMessage;

  /**
   * Required. The compiled FileDescriptorSet binary.
   *
   * @param string $compiledBytes
   */
  public function setCompiledBytes($compiledBytes)
  {
    $this->compiledBytes = $compiledBytes;
  }
  /**
   * @return string
   */
  public function getCompiledBytes()
  {
    return $this->compiledBytes;
  }
  /**
   * Required. The name of the root message type in the schema.
   *
   * @param string $rootMessage
   */
  public function setRootMessage($rootMessage)
  {
    $this->rootMessage = $rootMessage;
  }
  /**
   * @return string
   */
  public function getRootMessage()
  {
    return $this->rootMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompiledProtoSchema::class, 'Google_Service_Pubsub_CompiledProtoSchema');
