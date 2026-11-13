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

class GenaiVertexV1ToolCallStep extends \Google\Model
{
  protected $codeExecutionCallType = GenaiVertexV1CodeExecutionCallStep::class;
  protected $codeExecutionCallDataType = '';
  protected $fileSearchCallType = GenaiVertexV1FileSearchCallStep::class;
  protected $fileSearchCallDataType = '';
  protected $functionCallType = GenaiVertexV1FunctionCallStep::class;
  protected $functionCallDataType = '';
  protected $googleMapsCallType = GenaiVertexV1GoogleMapsCallStep::class;
  protected $googleMapsCallDataType = '';
  protected $googleSearchCallType = GenaiVertexV1GoogleSearchCallStep::class;
  protected $googleSearchCallDataType = '';
  /**
   * Required. A unique ID for this specific tool call.
   *
   * @var string
   */
  public $id;
  protected $processingCallType = GenaiVertexV1ProcessingCallStep::class;
  protected $processingCallDataType = '';
  protected $retrievalCallType = GenaiVertexV1RetrievalCallStep::class;
  protected $retrievalCallDataType = '';
  /**
   * A signature hash for backend validation.
   *
   * @var string
   */
  public $signature;
  protected $urlContextCallType = GenaiVertexV1UrlContextCallStep::class;
  protected $urlContextCallDataType = '';

  /**
   * @param GenaiVertexV1CodeExecutionCallStep $codeExecutionCall
   */
  public function setCodeExecutionCall(GenaiVertexV1CodeExecutionCallStep $codeExecutionCall)
  {
    $this->codeExecutionCall = $codeExecutionCall;
  }
  /**
   * @return GenaiVertexV1CodeExecutionCallStep
   */
  public function getCodeExecutionCall()
  {
    return $this->codeExecutionCall;
  }
  /**
   * @param GenaiVertexV1FileSearchCallStep $fileSearchCall
   */
  public function setFileSearchCall(GenaiVertexV1FileSearchCallStep $fileSearchCall)
  {
    $this->fileSearchCall = $fileSearchCall;
  }
  /**
   * @return GenaiVertexV1FileSearchCallStep
   */
  public function getFileSearchCall()
  {
    return $this->fileSearchCall;
  }
  /**
   * @param GenaiVertexV1FunctionCallStep $functionCall
   */
  public function setFunctionCall(GenaiVertexV1FunctionCallStep $functionCall)
  {
    $this->functionCall = $functionCall;
  }
  /**
   * @return GenaiVertexV1FunctionCallStep
   */
  public function getFunctionCall()
  {
    return $this->functionCall;
  }
  /**
   * @param GenaiVertexV1GoogleMapsCallStep $googleMapsCall
   */
  public function setGoogleMapsCall(GenaiVertexV1GoogleMapsCallStep $googleMapsCall)
  {
    $this->googleMapsCall = $googleMapsCall;
  }
  /**
   * @return GenaiVertexV1GoogleMapsCallStep
   */
  public function getGoogleMapsCall()
  {
    return $this->googleMapsCall;
  }
  /**
   * @param GenaiVertexV1GoogleSearchCallStep $googleSearchCall
   */
  public function setGoogleSearchCall(GenaiVertexV1GoogleSearchCallStep $googleSearchCall)
  {
    $this->googleSearchCall = $googleSearchCall;
  }
  /**
   * @return GenaiVertexV1GoogleSearchCallStep
   */
  public function getGoogleSearchCall()
  {
    return $this->googleSearchCall;
  }
  /**
   * Required. A unique ID for this specific tool call.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param GenaiVertexV1ProcessingCallStep $processingCall
   */
  public function setProcessingCall(GenaiVertexV1ProcessingCallStep $processingCall)
  {
    $this->processingCall = $processingCall;
  }
  /**
   * @return GenaiVertexV1ProcessingCallStep
   */
  public function getProcessingCall()
  {
    return $this->processingCall;
  }
  /**
   * @param GenaiVertexV1RetrievalCallStep $retrievalCall
   */
  public function setRetrievalCall(GenaiVertexV1RetrievalCallStep $retrievalCall)
  {
    $this->retrievalCall = $retrievalCall;
  }
  /**
   * @return GenaiVertexV1RetrievalCallStep
   */
  public function getRetrievalCall()
  {
    return $this->retrievalCall;
  }
  /**
   * A signature hash for backend validation.
   *
   * @param string $signature
   */
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  /**
   * @return string
   */
  public function getSignature()
  {
    return $this->signature;
  }
  /**
   * @param GenaiVertexV1UrlContextCallStep $urlContextCall
   */
  public function setUrlContextCall(GenaiVertexV1UrlContextCallStep $urlContextCall)
  {
    $this->urlContextCall = $urlContextCall;
  }
  /**
   * @return GenaiVertexV1UrlContextCallStep
   */
  public function getUrlContextCall()
  {
    return $this->urlContextCall;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ToolCallStep::class, 'Google_Service_Aiplatform_GenaiVertexV1ToolCallStep');
