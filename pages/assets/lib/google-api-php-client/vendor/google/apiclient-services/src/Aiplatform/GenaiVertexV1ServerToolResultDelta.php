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

class GenaiVertexV1ServerToolResultDelta extends \Google\Model
{
  protected $codeExecutionResultType = GenaiVertexV1CodeExecutionResultDelta::class;
  protected $codeExecutionResultDataType = '';
  protected $fileSearchResultType = GenaiVertexV1FileSearchResultDelta::class;
  protected $fileSearchResultDataType = '';
  protected $googleMapsResultType = GenaiVertexV1GoogleMapsResultDelta::class;
  protected $googleMapsResultDataType = '';
  protected $googleSearchResultType = GenaiVertexV1GoogleSearchResultDelta::class;
  protected $googleSearchResultDataType = '';
  protected $processingResultType = GenaiVertexV1ProcessingResultDelta::class;
  protected $processingResultDataType = '';
  protected $retrievalResultType = GenaiVertexV1RetrievalResultDelta::class;
  protected $retrievalResultDataType = '';
  /**
   * A signature hash for backend validation.
   *
   * @var string
   */
  public $signature;
  protected $urlContextResultType = GenaiVertexV1UrlContextResultDelta::class;
  protected $urlContextResultDataType = '';

  /**
   * @param GenaiVertexV1CodeExecutionResultDelta $codeExecutionResult
   */
  public function setCodeExecutionResult(GenaiVertexV1CodeExecutionResultDelta $codeExecutionResult)
  {
    $this->codeExecutionResult = $codeExecutionResult;
  }
  /**
   * @return GenaiVertexV1CodeExecutionResultDelta
   */
  public function getCodeExecutionResult()
  {
    return $this->codeExecutionResult;
  }
  /**
   * @param GenaiVertexV1FileSearchResultDelta $fileSearchResult
   */
  public function setFileSearchResult(GenaiVertexV1FileSearchResultDelta $fileSearchResult)
  {
    $this->fileSearchResult = $fileSearchResult;
  }
  /**
   * @return GenaiVertexV1FileSearchResultDelta
   */
  public function getFileSearchResult()
  {
    return $this->fileSearchResult;
  }
  /**
   * @param GenaiVertexV1GoogleMapsResultDelta $googleMapsResult
   */
  public function setGoogleMapsResult(GenaiVertexV1GoogleMapsResultDelta $googleMapsResult)
  {
    $this->googleMapsResult = $googleMapsResult;
  }
  /**
   * @return GenaiVertexV1GoogleMapsResultDelta
   */
  public function getGoogleMapsResult()
  {
    return $this->googleMapsResult;
  }
  /**
   * @param GenaiVertexV1GoogleSearchResultDelta $googleSearchResult
   */
  public function setGoogleSearchResult(GenaiVertexV1GoogleSearchResultDelta $googleSearchResult)
  {
    $this->googleSearchResult = $googleSearchResult;
  }
  /**
   * @return GenaiVertexV1GoogleSearchResultDelta
   */
  public function getGoogleSearchResult()
  {
    return $this->googleSearchResult;
  }
  /**
   * @param GenaiVertexV1ProcessingResultDelta $processingResult
   */
  public function setProcessingResult(GenaiVertexV1ProcessingResultDelta $processingResult)
  {
    $this->processingResult = $processingResult;
  }
  /**
   * @return GenaiVertexV1ProcessingResultDelta
   */
  public function getProcessingResult()
  {
    return $this->processingResult;
  }
  /**
   * @param GenaiVertexV1RetrievalResultDelta $retrievalResult
   */
  public function setRetrievalResult(GenaiVertexV1RetrievalResultDelta $retrievalResult)
  {
    $this->retrievalResult = $retrievalResult;
  }
  /**
   * @return GenaiVertexV1RetrievalResultDelta
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
   * @param GenaiVertexV1UrlContextResultDelta $urlContextResult
   */
  public function setUrlContextResult(GenaiVertexV1UrlContextResultDelta $urlContextResult)
  {
    $this->urlContextResult = $urlContextResult;
  }
  /**
   * @return GenaiVertexV1UrlContextResultDelta
   */
  public function getUrlContextResult()
  {
    return $this->urlContextResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1ServerToolResultDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1ServerToolResultDelta');
