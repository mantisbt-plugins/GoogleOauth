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

class GenaiVertexV1McpServer extends \Google\Collection
{
  protected $collection_key = 'allowedTools';
  protected $allowedToolsType = GenaiVertexV1AllowedTools::class;
  protected $allowedToolsDataType = 'array';
  /**
   * Optional: Fields for authentication headers, timeouts, etc., if needed.
   *
   * @var string[]
   */
  public $headers;
  /**
   * The name of the MCPServer.
   *
   * @var string
   */
  public $name;
  /**
   * The full URL for the MCPServer endpoint. Example:
   * "https://api.example.com/mcp"
   *
   * @var string
   */
  public $url;

  /**
   * The allowed tools.
   *
   * @param GenaiVertexV1AllowedTools[] $allowedTools
   */
  public function setAllowedTools($allowedTools)
  {
    $this->allowedTools = $allowedTools;
  }
  /**
   * @return GenaiVertexV1AllowedTools[]
   */
  public function getAllowedTools()
  {
    return $this->allowedTools;
  }
  /**
   * Optional: Fields for authentication headers, timeouts, etc., if needed.
   *
   * @param string[] $headers
   */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /**
   * @return string[]
   */
  public function getHeaders()
  {
    return $this->headers;
  }
  /**
   * The name of the MCPServer.
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
   * The full URL for the MCPServer endpoint. Example:
   * "https://api.example.com/mcp"
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1McpServer::class, 'Google_Service_Aiplatform_GenaiVertexV1McpServer');
