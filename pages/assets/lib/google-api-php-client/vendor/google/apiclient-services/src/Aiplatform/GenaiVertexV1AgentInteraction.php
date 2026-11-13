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

class GenaiVertexV1AgentInteraction extends \Google\Model
{
  /**
   * The name of the `Agent` used for generating the completion.
   *
   * @var string
   */
  public $agent;
  protected $antigravityConfigType = GenaiVertexV1AntigravityAgentConfig::class;
  protected $antigravityConfigDataType = '';
  protected $codeMenderConfigType = GenaiVertexV1CodeMenderAgentConfig::class;
  protected $codeMenderConfigDataType = '';
  protected $deepResearchConfigType = GenaiVertexV1DeepResearchAgentConfig::class;
  protected $deepResearchConfigDataType = '';
  protected $dynamicConfigType = GenaiVertexV1DynamicAgentConfig::class;
  protected $dynamicConfigDataType = '';

  /**
   * The name of the `Agent` used for generating the completion.
   *
   * @param string $agent
   */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /**
   * @return string
   */
  public function getAgent()
  {
    return $this->agent;
  }
  /**
   * Antigravity agent configuration. This configuration is session-level
   * settings that are passed to the agent runtime on a per-request basis.
   *
   * @param GenaiVertexV1AntigravityAgentConfig $antigravityConfig
   */
  public function setAntigravityConfig(GenaiVertexV1AntigravityAgentConfig $antigravityConfig)
  {
    $this->antigravityConfig = $antigravityConfig;
  }
  /**
   * @return GenaiVertexV1AntigravityAgentConfig
   */
  public function getAntigravityConfig()
  {
    return $this->antigravityConfig;
  }
  /**
   * @param GenaiVertexV1CodeMenderAgentConfig $codeMenderConfig
   */
  public function setCodeMenderConfig(GenaiVertexV1CodeMenderAgentConfig $codeMenderConfig)
  {
    $this->codeMenderConfig = $codeMenderConfig;
  }
  /**
   * @return GenaiVertexV1CodeMenderAgentConfig
   */
  public function getCodeMenderConfig()
  {
    return $this->codeMenderConfig;
  }
  /**
   * @param GenaiVertexV1DeepResearchAgentConfig $deepResearchConfig
   */
  public function setDeepResearchConfig(GenaiVertexV1DeepResearchAgentConfig $deepResearchConfig)
  {
    $this->deepResearchConfig = $deepResearchConfig;
  }
  /**
   * @return GenaiVertexV1DeepResearchAgentConfig
   */
  public function getDeepResearchConfig()
  {
    return $this->deepResearchConfig;
  }
  /**
   * @param GenaiVertexV1DynamicAgentConfig $dynamicConfig
   */
  public function setDynamicConfig(GenaiVertexV1DynamicAgentConfig $dynamicConfig)
  {
    $this->dynamicConfig = $dynamicConfig;
  }
  /**
   * @return GenaiVertexV1DynamicAgentConfig
   */
  public function getDynamicConfig()
  {
    return $this->dynamicConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1AgentInteraction::class, 'Google_Service_Aiplatform_GenaiVertexV1AgentInteraction');
