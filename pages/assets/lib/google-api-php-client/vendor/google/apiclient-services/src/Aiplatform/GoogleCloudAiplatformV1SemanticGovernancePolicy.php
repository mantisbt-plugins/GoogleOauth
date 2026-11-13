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

class GoogleCloudAiplatformV1SemanticGovernancePolicy extends \Google\Collection
{
  protected $collection_key = 'mcpTools';
  /**
   * Required. The name of the agent in Agent Registry that is affected by this
   * policy. Format: `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @var string
   */
  public $agent;
  /**
   * Output only. Represents the principal of the agent, used by the Policy
   * Decision Point (PDP) for governance checks. For more information, see
   * https://docs.cloud.google.com/agent-builder/agent-engine/agent-identity
   * Format: `principal://TRUST_DOMAIN/NAMESPACE/AGENT_NAME` Example:
   * `principal://agents.global.org-ORGANIZATION_ID.system.id.goog/resources/aip
   * latform/projects/PROJECT_NUMBER/locations/LOCATION/reasoningEngines/AGENT_E
   * NGINE_ID`
   *
   * @var string
   */
  public $agentIdentity;
  protected $agentResponseCustomizationType = GoogleCloudAiplatformV1AgentResponseCustomization::class;
  protected $agentResponseCustomizationDataType = '';
  /**
   * Output only. Timestamp when this SemanticGovernancePolicy was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The description of the SemanticGovernancePolicy.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The user-defined name of the SemanticGovernancePolicy.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. If true, this policy is evaluated and its result is reported, but
   * the policy is not enforced: a violation does not block the agent's action.
   * Use this to validate a policy against real traffic before turning
   * enforcement on. Defaults to `false`, meaning the policy is enforced. This
   * setting applies only to this policy. If the SemanticGovernancePolicyEngine
   * for the project is itself in dry run, every policy behaves as dry run
   * regardless of this field.
   *
   * @var bool
   */
  public $dryRun;
  /**
   * Optional. Used to perform consistent read-modify-write transactions. If
   * provided, the request will only succeed if the etag matches the current
   * value. Otherwise, an ABORTED error will be returned.
   *
   * @var string
   */
  public $etag;
  protected $mcpToolsType = GoogleCloudAiplatformV1SemanticGovernancePolicyMcpTool::class;
  protected $mcpToolsDataType = 'array';
  /**
   * Identifier. Resource name of the SemanticGovernancePolicy.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The natural language constraint of the SemanticGovernancePolicy.
   *
   * @var string
   */
  public $naturalLanguageConstraint;
  /**
   * Output only. Timestamp when this SemanticGovernancePolicy was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The name of the agent in Agent Registry that is affected by this
   * policy. Format: `projects/{project}/locations/{location}/agents/{agent}`
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
   * Output only. Represents the principal of the agent, used by the Policy
   * Decision Point (PDP) for governance checks. For more information, see
   * https://docs.cloud.google.com/agent-builder/agent-engine/agent-identity
   * Format: `principal://TRUST_DOMAIN/NAMESPACE/AGENT_NAME` Example:
   * `principal://agents.global.org-ORGANIZATION_ID.system.id.goog/resources/aip
   * latform/projects/PROJECT_NUMBER/locations/LOCATION/reasoningEngines/AGENT_E
   * NGINE_ID`
   *
   * @param string $agentIdentity
   */
  public function setAgentIdentity($agentIdentity)
  {
    $this->agentIdentity = $agentIdentity;
  }
  /**
   * @return string
   */
  public function getAgentIdentity()
  {
    return $this->agentIdentity;
  }
  /**
   * Optional. Settings for customizing the agent's response to end users when
   * this policy is evaluated, such as messages displayed when the policy denies
   * a request.
   *
   * @param GoogleCloudAiplatformV1AgentResponseCustomization $agentResponseCustomization
   */
  public function setAgentResponseCustomization(GoogleCloudAiplatformV1AgentResponseCustomization $agentResponseCustomization)
  {
    $this->agentResponseCustomization = $agentResponseCustomization;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentResponseCustomization
   */
  public function getAgentResponseCustomization()
  {
    return $this->agentResponseCustomization;
  }
  /**
   * Output only. Timestamp when this SemanticGovernancePolicy was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The description of the SemanticGovernancePolicy.
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
   * Optional. The user-defined name of the SemanticGovernancePolicy.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. If true, this policy is evaluated and its result is reported, but
   * the policy is not enforced: a violation does not block the agent's action.
   * Use this to validate a policy against real traffic before turning
   * enforcement on. Defaults to `false`, meaning the policy is enforced. This
   * setting applies only to this policy. If the SemanticGovernancePolicyEngine
   * for the project is itself in dry run, every policy behaves as dry run
   * regardless of this field.
   *
   * @param bool $dryRun
   */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /**
   * @return bool
   */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /**
   * Optional. Used to perform consistent read-modify-write transactions. If
   * provided, the request will only succeed if the etag matches the current
   * value. Otherwise, an ABORTED error will be returned.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. The McpTools that are affected by this policy.
   *
   * @param GoogleCloudAiplatformV1SemanticGovernancePolicyMcpTool[] $mcpTools
   */
  public function setMcpTools($mcpTools)
  {
    $this->mcpTools = $mcpTools;
  }
  /**
   * @return GoogleCloudAiplatformV1SemanticGovernancePolicyMcpTool[]
   */
  public function getMcpTools()
  {
    return $this->mcpTools;
  }
  /**
   * Identifier. Resource name of the SemanticGovernancePolicy.
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
   * Required. The natural language constraint of the SemanticGovernancePolicy.
   *
   * @param string $naturalLanguageConstraint
   */
  public function setNaturalLanguageConstraint($naturalLanguageConstraint)
  {
    $this->naturalLanguageConstraint = $naturalLanguageConstraint;
  }
  /**
   * @return string
   */
  public function getNaturalLanguageConstraint()
  {
    return $this->naturalLanguageConstraint;
  }
  /**
   * Output only. Timestamp when this SemanticGovernancePolicy was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SemanticGovernancePolicy::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SemanticGovernancePolicy');
