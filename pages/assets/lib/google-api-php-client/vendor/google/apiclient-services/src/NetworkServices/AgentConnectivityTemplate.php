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

namespace Google\Service\NetworkServices;

class AgentConnectivityTemplate extends \Google\Collection
{
  /**
   * Unspecified access path.
   */
  public const ACCESS_PATH_ACCESS_PATH_UNSPECIFIED = 'ACCESS_PATH_UNSPECIFIED';
  /**
   * Protect connection to Agent or Tool.
   */
  public const ACCESS_PATH_CLIENT_TO_AGENT = 'CLIENT_TO_AGENT';
  /**
   * Govern agent connections to destinations.
   */
  public const ACCESS_PATH_AGENT_TO_ANYWHERE = 'AGENT_TO_ANYWHERE';
  /**
   * Unspecified compute type.
   */
  public const AGENT_COMPUTE_AGENT_COMPUTE_UNSPECIFIED = 'AGENT_COMPUTE_UNSPECIFIED';
  /**
   * Google Kubernetes Engine.
   */
  public const AGENT_COMPUTE_GKE = 'GKE';
  /**
   * Google Cloud Run.
   */
  public const AGENT_COMPUTE_CLOUD_RUN = 'CLOUD_RUN';
  /**
   * Google Borg (for 1P producers).
   */
  public const AGENT_COMPUTE_BORG = 'BORG';
  /**
   * Google Compute Engine VM.
   */
  public const AGENT_COMPUTE_GCE_VM = 'GCE_VM';
  /**
   * Unspecified deployment model.
   */
  public const DEPLOYMENT_MODEL_DEPLOYMENT_MODEL_UNSPECIFIED = 'DEPLOYMENT_MODEL_UNSPECIFIED';
  /**
   * Centralized deployment.
   */
  public const DEPLOYMENT_MODEL_CENTRALIZED = 'CENTRALIZED';
  /**
   * Ambient deployment.
   */
  public const DEPLOYMENT_MODEL_AMBIENT = 'AMBIENT';
  protected $collection_key = 'accessTypes';
  /**
   * Optional. Immutable. The path of the access. Maps roughly to
   * ingress/egress, though we keep CLIENT_TO_AGENT and AGENT_TO_ANYWHERE as
   * carryovers from Agent Gateway's original resource model. The path is
   * immutable once set. Exactly one path can be set.
   *
   * @var string
   */
  public $accessPath;
  /**
   * Optional. The types of network access provided to the gateway. Both PUBLIC
   * and PRIVATE can be configured.
   *
   * @var string[]
   */
  public $accessTypes;
  /**
   * Optional. The compute environment where the agent is hosted. Exactly one
   * type of compute must be chosen.
   *
   * @var string
   */
  public $agentCompute;
  /**
   * Output only. The timestamp when the resource was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The deployment model for the gateway.
   *
   * @var string
   */
  public $deploymentModel;
  /**
   * Optional. A free-text description of the resource. Max length 1024
   * characters.
   *
   * @var string
   */
  public $description;
  protected $egressNetworkConfigType = EgressNetworkConfig::class;
  protected $egressNetworkConfigDataType = '';
  /**
   * Optional. Etag of the resource. If this is provided, it must match the
   * server's etag. If the provided etag does not match the server's etag, the
   * request will fail with a 409 ABORTED error.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. Set of label tags associated with the AgentConnectivityTemplate
   * resource.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. Name of the AgentConnectivityTemplate resource. It matches
   * pattern `projects/locations/agentConnectivityTemplates/`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The timestamp when the resource was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Immutable. The path of the access. Maps roughly to
   * ingress/egress, though we keep CLIENT_TO_AGENT and AGENT_TO_ANYWHERE as
   * carryovers from Agent Gateway's original resource model. The path is
   * immutable once set. Exactly one path can be set.
   *
   * Accepted values: ACCESS_PATH_UNSPECIFIED, CLIENT_TO_AGENT,
   * AGENT_TO_ANYWHERE
   *
   * @param self::ACCESS_PATH_* $accessPath
   */
  public function setAccessPath($accessPath)
  {
    $this->accessPath = $accessPath;
  }
  /**
   * @return self::ACCESS_PATH_*
   */
  public function getAccessPath()
  {
    return $this->accessPath;
  }
  /**
   * Optional. The types of network access provided to the gateway. Both PUBLIC
   * and PRIVATE can be configured.
   *
   * @param string[] $accessTypes
   */
  public function setAccessTypes($accessTypes)
  {
    $this->accessTypes = $accessTypes;
  }
  /**
   * @return string[]
   */
  public function getAccessTypes()
  {
    return $this->accessTypes;
  }
  /**
   * Optional. The compute environment where the agent is hosted. Exactly one
   * type of compute must be chosen.
   *
   * Accepted values: AGENT_COMPUTE_UNSPECIFIED, GKE, CLOUD_RUN, BORG, GCE_VM
   *
   * @param self::AGENT_COMPUTE_* $agentCompute
   */
  public function setAgentCompute($agentCompute)
  {
    $this->agentCompute = $agentCompute;
  }
  /**
   * @return self::AGENT_COMPUTE_*
   */
  public function getAgentCompute()
  {
    return $this->agentCompute;
  }
  /**
   * Output only. The timestamp when the resource was created.
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
   * Optional. The deployment model for the gateway.
   *
   * Accepted values: DEPLOYMENT_MODEL_UNSPECIFIED, CENTRALIZED, AMBIENT
   *
   * @param self::DEPLOYMENT_MODEL_* $deploymentModel
   */
  public function setDeploymentModel($deploymentModel)
  {
    $this->deploymentModel = $deploymentModel;
  }
  /**
   * @return self::DEPLOYMENT_MODEL_*
   */
  public function getDeploymentModel()
  {
    return $this->deploymentModel;
  }
  /**
   * Optional. A free-text description of the resource. Max length 1024
   * characters.
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
   * Optional. Configuration for egress network traffic.
   *
   * @param EgressNetworkConfig $egressNetworkConfig
   */
  public function setEgressNetworkConfig(EgressNetworkConfig $egressNetworkConfig)
  {
    $this->egressNetworkConfig = $egressNetworkConfig;
  }
  /**
   * @return EgressNetworkConfig
   */
  public function getEgressNetworkConfig()
  {
    return $this->egressNetworkConfig;
  }
  /**
   * Optional. Etag of the resource. If this is provided, it must match the
   * server's etag. If the provided etag does not match the server's etag, the
   * request will fail with a 409 ABORTED error.
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
   * Optional. Set of label tags associated with the AgentConnectivityTemplate
   * resource.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. Name of the AgentConnectivityTemplate resource. It matches
   * pattern `projects/locations/agentConnectivityTemplates/`.
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
   * Output only. The timestamp when the resource was updated.
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
class_alias(AgentConnectivityTemplate::class, 'Google_Service_NetworkServices_AgentConnectivityTemplate');
