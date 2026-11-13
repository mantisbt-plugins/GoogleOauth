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

class GenaiVertexV1ServerToolCallDelta extends \Google\Model
{
  protected $codeExecutionCallType = GenaiVertexV1CodeExecutionCallDelta::class;
  protected $codeExecutionCallDataType = '';
  protected $fileSearchCallType = GenaiVertexV1FileSearchCallDelta::class;
  protected $fileSearchCallDataType = '';
  protected $googleMapsCallType = GenaiVertexV1GoogleMapsCallDelta::class;
  protected $googleMapsCallDataType = '';
  protected $googleSearchCallType = GenaiVertexV1GoogleSearchCallDelta::class;
  protected $googleSearchCallDataType = '';
  protected $processingCallType = GenaiVertexV1ProcessingCallDelta::class;
  protected $processingCallDataType = '';
  protected $retrievalCallType = GenaiVertexV1RetrievalCallDelta::class;
  protected $retrievalCallDataType = '';
  /**
   * A signature hash for backend validation.
   *
   * @var string
   */
  public $signature;
  protected $urlContextCallType = GenaiVertexV1UrlContextCallDelta::class;
  protected $urlContextCallDataType = '';

  /**
   * @param GenaiVertexV1CodeExecutionCallDelta $codeExecutionCall
   */
  public function setCodeExecutionCall(GenaiVertexV1CodeExecutionCallDelta $codeExecutionCall)
  {
    $this->codeExecutionCall = $codeExecutionCall;
  }
  /**
   * @return GenaiVertexV1CodeExecutionCallDelta
   */
  public function getCodeExecutionCall()
  {
    return $this->codeExecutionCall;
  }
  /**
   * @param GenaiVertexV1FileSearchCallDelta $fileSearchCall
   */
  public function setFileSearchCall(GenaiVertexV1FileSearchCallDelta $fileSearchCall)
  {
    $this->fileSearchCall = $fileSearchCall;
  }
  /**
   * @return GenaiVertexV1FileSearchCallDelta
   */
  public function getFileSearchCall()
  {
    return $this->fileSearchCall;
  }
  /**
   * @param GenaiVertexV1GoogleMapsCallDelta $googleMapsCall
   */
  public function setGoogleMapsCall(GenaiVertexV1GoogleMapsCallDelta $googleMapsCall)
  {
    $this->googleMapsCall = $googleMapsCall;
  }
  /**
   * @return GenaiVertexV1GoogleMapsCallDelta
   */
  public function getGoogleMapsCall()
  {
    return $this->googleMapsCall;
  }
  /**
   * @param GenaiVertexV1GoogleSearchCallDelta $googleSearchCall
   */
  public function setGoogleSearchCall(GenaiVertexV1GoogleSearchCallDelta $googleSearchCall)
  {
    $this->googleSearchCall = $googleSearchCall;
  }
  /**
   * @return GenaiVertexV1GoogleSearchCallDelta
   */
  public function getGoogleSearchCall()
  {
    return $this->googleSearchCall;
  }
  /**
   * @param GenaiVertexV1ProcessingCallDelta $processingCall
   */
  public function setProcessingCall(GenaiVertexV1ProcessingCallDelta $processingCall)
  {
    $this->processingCall = $processingCall;
  }
  /**
   * @return GenaiVertexV1ProcessingCallDelta
   */
  public function getProcessingCall()
  {
    return $this->processingCall;
  }
  /**
   * @param GenaiVertexV1RetrievalCallDelta $retrievalCall
   */
  public function setRetrievalCall(GenaiVertexV1RetrievalCallDelta $retrievalCall)
  {
    $this->retrievalCall = $retrievalCall;
  }
  /**
   * @return GenaiVertexV1RetrievalCallDelta
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
   * @param GenaiVertexV1UrlContextCallDelta $urlContextCall
   */
  public function setUrlContextCall(GenaiVertexV1UrlContextCallDelta $urlContextCall)
  {
    $this->urlContextCall = $urlContextCall;
  }
  /**
   * @return GenaiVertexV1UrlContextCallDelta
   */
  public function getUrlContextCall()
  {
    return $this->urlContextCall;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ServerToolCallDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1ServerToolCallDelta');
