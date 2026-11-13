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

class GenaiVertexV1ToolResultStep extends \Google\Model
{
  /**
   * Required. ID to match the ID from the function call block.
   *
   * @var string
   */
  public $callId;
  protected $codeExecutionResultType = GenaiVertexV1CodeExecutionResultStep::class;
  protected $codeExecutionResultDataType = '';
  protected $fileSearchResultType = GenaiVertexV1FileSearchResultStep::class;
  protected $fileSearchResultDataType = '';
  protected $functionResultType = GenaiVertexV1FunctionResultStep::class;
  protected $functionResultDataType = '';
  protected $googleMapsResultType = GenaiVertexV1GoogleMapsResultStep::class;
  protected $googleMapsResultDataType = '';
  protected $googleSearchResultType = GenaiVertexV1GoogleSearchResultStep::class;
  protected $googleSearchResultDataType = '';
  protected $processingResultType = GenaiVertexV1ProcessingResultStep::class;
  protected $processingResultDataType = '';
  protected $retrievalResultType = GenaiVertexV1RetrievalResultStep::class;
  protected $retrievalResultDataType = '';
  /**
   * A signature hash for backend validation.
   *
   * @var string
   */
  public $signature;
  protected $urlContextResultType = GenaiVertexV1UrlContextResultStep::class;
  protected $urlContextResultDataType = '';

  /**
   * Required. ID to match the ID from the function call block.
   *
   * @param string $callId
   */
  public function setCallId($callId)
  {
    $this->callId = $callId;
  }
  /**
   * @return string
   */
  public function getCallId()
  {
    return $this->callId;
  }
  /**
   * @param GenaiVertexV1CodeExecutionResultStep $codeExecutionResult
   */
  public function setCodeExecutionResult(GenaiVertexV1CodeExecutionResultStep $codeExecutionResult)
  {
    $this->codeExecutionResult = $codeExecutionResult;
  }
  /**
   * @return GenaiVertexV1CodeExecutionResultStep
   */
  public function getCodeExecutionResult()
  {
    return $this->codeExecutionResult;
  }
  /**
   * @param GenaiVertexV1FileSearchResultStep $fileSearchResult
   */
  public function setFileSearchResult(GenaiVertexV1FileSearchResultStep $fileSearchResult)
  {
    $this->fileSearchResult = $fileSearchResult;
  }
  /**
   * @return GenaiVertexV1FileSearchResultStep
   */
  public function getFileSearchResult()
  {
    return $this->fileSearchResult;
  }
  /**
   * @param GenaiVertexV1FunctionResultStep $functionResult
   */
  public function setFunctionResult(GenaiVertexV1FunctionResultStep $functionResult)
  {
    $this->functionResult = $functionResult;
  }
  /**
   * @return GenaiVertexV1FunctionResultStep
   */
  public function getFunctionResult()
  {
    return $this->functionResult;
  }
  /**
   * @param GenaiVertexV1GoogleMapsResultStep $googleMapsResult
   */
  public function setGoogleMapsResult(GenaiVertexV1GoogleMapsResultStep $googleMapsResult)
  {
    $this->googleMapsResult = $googleMapsResult;
  }
  /**
   * @return GenaiVertexV1GoogleMapsResultStep
   */
  public function getGoogleMapsResult()
  {
    return $this->googleMapsResult;
  }
  /**
   * @param GenaiVertexV1GoogleSearchResultStep $googleSearchResult
   */
  public function setGoogleSearchResult(GenaiVertexV1GoogleSearchResultStep $googleSearchResult)
  {
    $this->googleSearchResult = $googleSearchResult;
  }
  /**
   * @return GenaiVertexV1GoogleSearchResultStep
   */
  public function getGoogleSearchResult()
  {
    return $this->googleSearchResult;
  }
  /**
   * @param GenaiVertexV1ProcessingResultStep $processingResult
   */
  public function setProcessingResult(GenaiVertexV1ProcessingResultStep $processingResult)
  {
    $this->processingResult = $processingResult;
  }
  /**
   * @return GenaiVertexV1ProcessingResultStep
   */
  public function getProcessingResult()
  {
    return $this->processingResult;
  }
  /**
   * @param GenaiVertexV1RetrievalResultStep $retrievalResult
   */
  public function setRetrievalResult(GenaiVertexV1RetrievalResultStep $retrievalResult)
  {
    $this->retrievalResult = $retrievalResult;
  }
  /**
   * @return GenaiVertexV1RetrievalResultStep
   */
  public function getRetrievalResult()
  {
    return $this->retrievalResult;
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
   * @param GenaiVertexV1UrlContextResultStep $urlContextResult
   */
  public function setUrlContextResult(GenaiVertexV1UrlContextResultStep $urlContextResult)
  {
    $this->urlContextResult = $urlContextResult;
  }
  /**
   * @return GenaiVertexV1UrlContextResultStep
   */
  public function getUrlContextResult()
  {
    return $this->urlContextResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ToolResultStep::class, 'Google_Service_Aiplatform_GenaiVertexV1ToolResultStep');
