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

namespace Google\Service\CustomerEngagementSuite;

class RemoteAgentTool extends \Google\Model
{
  protected $agentCardType = AgentCard::class;
  protected $agentCardDataType = '';
  protected $apiAuthenticationType = ApiAuthentication::class;
  protected $apiAuthenticationDataType = '';
  /**
   * Required. The description of the tool.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Mapping of input variable names of remote agent to GECX variable
   * names.
   *
   * @var string[]
   */
  public $inputVariableMapping;
  /**
   * Required. The name of the tool.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Mapping of output variable names of remote agent to GECX variable
   * names.
   *
   * @var string[]
   */
  public $outputVariableMapping;
  /**
   * Optional. When enabled, the interaction between the CXAS app and the remote
   * agent will share the same context. If the remote agent returns a
   * context_id, it will be persisted for the entirety of the session for this
   * remote agent tool.
   *
   * @var bool
   */
  public $statefulAgent;

  /**
   * Required. The agent card of the remote agent that this tool invokes.
   *
   * @param AgentCard $agentCard
   */
  public function setAgentCard(AgentCard $agentCard)
  {
    $this->agentCard = $agentCard;
  }
  /**
   * @return AgentCard
   */
  public function getAgentCard()
  {
    return $this->agentCard;
  }
  /**
   * Optional. Authentication configuration for calling the remote agent.
   *
   * @param ApiAuthentication $apiAuthentication
   */
  public function setApiAuthentication(ApiAuthentication $apiAuthentication)
  {
    $this->apiAuthentication = $apiAuthentication;
  }
  /**
   * @return ApiAuthentication
   */
  public function getApiAuthentication()
  {
    return $this->apiAuthentication;
  }
  /**
   * Required. The description of the tool.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. Mapping of input variable names of remote agent to GECX variable
   * names.
   *
   * @param string[] $inputVariableMapping
   */
  public function setInputVariableMapping($inputVariableMapping)
  {
    $this->inputVariableMapping = $inputVariableMapping;
  }
  /**
   * @return string[]
   */
  public function getInputVariableMapping()
  {
    return $this->inputVariableMapping;
  }
  /**
   * Required. The name of the tool.
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
   * Optional. Mapping of output variable names of remote agent to GECX variable
   * names.
   *
   * @param string[] $outputVariableMapping
   */
  public function setOutputVariableMapping($outputVariableMapping)
  {
    $this->outputVariableMapping = $outputVariableMapping;
  }
  /**
   * @return string[]
   */
  public function getOutputVariableMapping()
  {
    return $this->outputVariableMapping;
  }
  /**
   * Optional. When enabled, the interaction between the CXAS app and the remote
   * agent will share the same context. If the remote agent returns a
   * context_id, it will be persisted for the entirety of the session for this
   * remote agent tool.
   *
   * @param bool $statefulAgent
   */
  public function setStatefulAgent($statefulAgent)
  {
    $this->statefulAgent = $statefulAgent;
  }
  /**
   * @return bool
   */
  public function getStatefulAgent()
  {
    return $this->statefulAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RemoteAgentTool::class, 'Google_Service_CustomerEngagementSuite_RemoteAgentTool');
