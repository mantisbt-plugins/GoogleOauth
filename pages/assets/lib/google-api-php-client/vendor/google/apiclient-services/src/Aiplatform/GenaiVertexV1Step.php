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

class GenaiVertexV1Step extends \Google\Model
{
  protected $modelOutputType = GenaiVertexV1ModelOutputStep::class;
  protected $modelOutputDataType = '';
  protected $thoughtType = GenaiVertexV1ThoughtStep::class;
  protected $thoughtDataType = '';
  protected $toolCallType = GenaiVertexV1ToolCallStep::class;
  protected $toolCallDataType = '';
  protected $toolResultType = GenaiVertexV1ToolResultStep::class;
  protected $toolResultDataType = '';
  protected $userInputType = GenaiVertexV1UserInputStep::class;
  protected $userInputDataType = '';

  /**
   * @param GenaiVertexV1ModelOutputStep $modelOutput
   */
  public function setModelOutput(GenaiVertexV1ModelOutputStep $modelOutput)
  {
    $this->modelOutput = $modelOutput;
  }
  /**
   * @return GenaiVertexV1ModelOutputStep
   */
  public function getModelOutput()
  {
    return $this->modelOutput;
  }
  /**
   * @param GenaiVertexV1ThoughtStep $thought
   */
  public function setThought(GenaiVertexV1ThoughtStep $thought)
  {
    $this->thought = $thought;
  }
  /**
   * @return GenaiVertexV1ThoughtStep
   */
  public function getThought()
  {
    return $this->thought;
  }
  /**
   * @param GenaiVertexV1ToolCallStep $toolCall
   */
  public function setToolCall(GenaiVertexV1ToolCallStep $toolCall)
  {
    $this->toolCall = $toolCall;
  }
  /**
   * @return GenaiVertexV1ToolCallStep
   */
  public function getToolCall()
  {
    return $this->toolCall;
  }
  /**
   * @param GenaiVertexV1ToolResultStep $toolResult
   */
  public function setToolResult(GenaiVertexV1ToolResultStep $toolResult)
  {
    $this->toolResult = $toolResult;
  }
  /**
   * @return GenaiVertexV1ToolResultStep
   */
  public function getToolResult()
  {
    return $this->toolResult;
  }
  /**
   * DO NOT USE -- These are for 3P JSON only
   *
   * @param GenaiVertexV1UserInputStep $userInput
   */
  public function setUserInput(GenaiVertexV1UserInputStep $userInput)
  {
    $this->userInput = $userInput;
  }
  /**
   * @return GenaiVertexV1UserInputStep
   */
  public function getUserInput()
  {
    return $this->userInput;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Step::class, 'Google_Service_Aiplatform_GenaiVertexV1Step');
