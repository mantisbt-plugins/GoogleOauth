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

class GoogleCloudAiplatformV1SemanticGovernancePolicyMcpTool extends \Google\Collection
{
  protected $collection_key = 'tools';
  /**
   * Required. The resource name of the McpServer in Agent Registry that is
   * affected by this policy. Format:
   * `projects/{project}/locations/{location}/mcpServers/{mcp_server}`
   *
   * @var string
   */
  public $mcpServer;
  /**
   * Required. The resource names of the tools used by the Agent that is
   * affected by this policy. Currently, exactly one tool must be specified.
   *
   * @var string[]
   */
  public $tools;

  /**
   * Required. The resource name of the McpServer in Agent Registry that is
   * affected by this policy. Format:
   * `projects/{project}/locations/{location}/mcpServers/{mcp_server}`
   *
   * @param string $mcpServer
   */
  public function setMcpServer($mcpServer)
  {
    $this->mcpServer = $mcpServer;
  }
  /**
   * @return string
   */
  public function getMcpServer()
  {
    return $this->mcpServer;
  }
  /**
   * Required. The resource names of the tools used by the Agent that is
   * affected by this policy. Currently, exactly one tool must be specified.
   *
   * @param string[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return string[]
   */
  public function getTools()
  {
    return $this->tools;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SemanticGovernancePolicyMcpTool::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SemanticGovernancePolicyMcpTool');
