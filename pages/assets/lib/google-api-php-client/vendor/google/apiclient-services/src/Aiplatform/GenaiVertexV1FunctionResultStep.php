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

class GenaiVertexV1FunctionResultStep extends \Google\Model
{
  /**
   * Whether the tool call resulted in an error.
   *
   * @var bool
   */
  public $isError;
  /**
   * The name of the tool that was called.
   *
   * @var string
   */
  public $name;
  protected $resultType = GenaiVertexV1Value::class;
  protected $resultDataType = '';

  /**
   * Whether the tool call resulted in an error.
   *
   * @param bool $isError
   */
  public function setIsError($isError)
  {
    $this->isError = $isError;
  }
  /**
   * @return bool
   */
  public function getIsError()
  {
    return $this->isError;
  }
  /**
   * The name of the tool that was called.
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
   * Required. The result of the tool call.
   *
   * @param GenaiVertexV1Value $result
   */
  public function setResult(GenaiVertexV1Value $result)
  {
    $this->result = $result;
  }
  /**
   * @return GenaiVertexV1Value
   */
  public function getResult()
  {
    return $this->result;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1FunctionResultStep::class, 'Google_Service_Aiplatform_GenaiVertexV1FunctionResultStep');
