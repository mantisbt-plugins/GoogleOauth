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

class GenaiVertexV1Tool extends \Google\Model
{
  protected $codeExecutionType = GenaiVertexV1CodeExecution::class;
  protected $codeExecutionDataType = '';
  protected $computerUseType = GenaiVertexV1ComputerUse::class;
  protected $computerUseDataType = '';
  protected $fileSearchType = GenaiVertexV1FileSearch::class;
  protected $fileSearchDataType = '';
  protected $functionType = GenaiVertexV1Function::class;
  protected $functionDataType = '';
  protected $googleMapsType = GenaiVertexV1GoogleMaps::class;
  protected $googleMapsDataType = '';
  protected $googleSearchType = GenaiVertexV1GoogleSearch::class;
  protected $googleSearchDataType = '';
  protected $mcpServerType = GenaiVertexV1McpServer::class;
  protected $mcpServerDataType = '';
  protected $retrievalType = GenaiVertexV1Retrieval::class;
  protected $retrievalDataType = '';
  protected $urlContextType = GenaiVertexV1UrlContext::class;
  protected $urlContextDataType = '';

  /**
   * A tool that can be used by the model to execute code.
   *
   * @param GenaiVertexV1CodeExecution $codeExecution
   */
  public function setCodeExecution(GenaiVertexV1CodeExecution $codeExecution)
  {
    $this->codeExecution = $codeExecution;
  }
  /**
   * @return GenaiVertexV1CodeExecution
   */
  public function getCodeExecution()
  {
    return $this->codeExecution;
  }
  /**
   * Tool to support the model interacting directly with the computer.
   *
   * @param GenaiVertexV1ComputerUse $computerUse
   */
  public function setComputerUse(GenaiVertexV1ComputerUse $computerUse)
  {
    $this->computerUse = $computerUse;
  }
  /**
   * @return GenaiVertexV1ComputerUse
   */
  public function getComputerUse()
  {
    return $this->computerUse;
  }
  /**
   * A tool that can be used by the model to search files.
   *
   * @param GenaiVertexV1FileSearch $fileSearch
   */
  public function setFileSearch(GenaiVertexV1FileSearch $fileSearch)
  {
    $this->fileSearch = $fileSearch;
  }
  /**
   * @return GenaiVertexV1FileSearch
   */
  public function getFileSearch()
  {
    return $this->fileSearch;
  }
  /**
   * A function that can be used by the model.
   *
   * @param GenaiVertexV1Function $function
   */
  public function setFunction(GenaiVertexV1Function $function)
  {
    $this->function = $function;
  }
  /**
   * @return GenaiVertexV1Function
   */
  public function getFunction()
  {
    return $this->function;
  }
  /**
   * A tool that can be used by the model to search Google Maps.
   *
   * @param GenaiVertexV1GoogleMaps $googleMaps
   */
  public function setGoogleMaps(GenaiVertexV1GoogleMaps $googleMaps)
  {
    $this->googleMaps = $googleMaps;
  }
  /**
   * @return GenaiVertexV1GoogleMaps
   */
  public function getGoogleMaps()
  {
    return $this->googleMaps;
  }
  /**
   * A tool that can be used by the model to search Google.
   *
   * @param GenaiVertexV1GoogleSearch $googleSearch
   */
  public function setGoogleSearch(GenaiVertexV1GoogleSearch $googleSearch)
  {
    $this->googleSearch = $googleSearch;
  }
  /**
   * @return GenaiVertexV1GoogleSearch
   */
  public function getGoogleSearch()
  {
    return $this->googleSearch;
  }
  /**
   * A MCPServer is a server that can be called by the model to perform actions.
   *
   * @param GenaiVertexV1McpServer $mcpServer
   */
  public function setMcpServer(GenaiVertexV1McpServer $mcpServer)
  {
    $this->mcpServer = $mcpServer;
  }
  /**
   * @return GenaiVertexV1McpServer
   */
  public function getMcpServer()
  {
    return $this->mcpServer;
  }
  /**
   * A tool that can be used by the model to retrieve files.
   *
   * @param GenaiVertexV1Retrieval $retrieval
   */
  public function setRetrieval(GenaiVertexV1Retrieval $retrieval)
  {
    $this->retrieval = $retrieval;
  }
  /**
   * @return GenaiVertexV1Retrieval
   */
  public function getRetrieval()
  {
    return $this->retrieval;
  }
  /**
   * A tool that can be used by the model to fetch URL context.
   *
   * @param GenaiVertexV1UrlContext $urlContext
   */
  public function setUrlContext(GenaiVertexV1UrlContext $urlContext)
  {
    $this->urlContext = $urlContext;
  }
  /**
   * @return GenaiVertexV1UrlContext
   */
  public function getUrlContext()
  {
    return $this->urlContext;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1Tool::class, 'Google_Service_Aiplatform_GenaiVertexV1Tool');
