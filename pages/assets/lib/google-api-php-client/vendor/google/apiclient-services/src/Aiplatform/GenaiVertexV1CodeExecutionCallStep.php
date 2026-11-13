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

class GenaiVertexV1CodeExecutionCallStep extends \Google\Model
{
  protected $argumentsType = GenaiVertexV1CodeExecutionCallStepCodeExecutionCallStepArguments::class;
  protected $argumentsDataType = '';

  /**
   * Required. The arguments to pass to the code execution.
   *
   * @param GenaiVertexV1CodeExecutionCallStepCodeExecutionCallStepArguments $arguments
   */
  public function setArguments(GenaiVertexV1CodeExecutionCallStepCodeExecutionCallStepArguments $arguments)
  {
    $this->arguments = $arguments;
  }
  /**
   * @return GenaiVertexV1CodeExecutionCallStepCodeExecutionCallStepArguments
   */
  public function getArguments()
  {
    return $this->arguments;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1CodeExecutionCallStep::class, 'Google_Service_Aiplatform_GenaiVertexV1CodeExecutionCallStep');
