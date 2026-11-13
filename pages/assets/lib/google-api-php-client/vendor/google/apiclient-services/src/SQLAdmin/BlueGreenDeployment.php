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

namespace Google\Service\SQLAdmin;

class BlueGreenDeployment extends \Google\Collection
{
  /**
   * The default value. This value is used if the state is omitted or unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The deployment is being provisioned.
   */
  public const STATE_PROVISIONING = 'PROVISIONING';
  /**
   * The deployment is ready for switchover.
   */
  public const STATE_SWITCHOVER_READY = 'SWITCHOVER_READY';
  /**
   * The deployment is not ready for switchover.
   */
  public const STATE_SWITCHOVER_NOT_READY = 'SWITCHOVER_NOT_READY';
  /**
   * The deployment is in the process of switching over.
   */
  public const STATE_SWITCHOVER_IN_PROGRESS = 'SWITCHOVER_IN_PROGRESS';
  /**
   * The deployment has completed switchover.
   */
  public const STATE_SWITCHOVER_COMPLETED = 'SWITCHOVER_COMPLETED';
  /**
   * The deployment is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $collection_key = 'deploymentMappings';
  /**
   * Output only. The time when the deployment was created. Example:
   * `2024-01-01T00:00:00Z`
   *
   * @var string
   */
  public $createTime;
  protected $deploymentMappingsType = SourceTargetPairedNode::class;
  protected $deploymentMappingsDataType = 'array';
  protected $deploymentTasksType = DeploymentTasks::class;
  protected $deploymentTasksDataType = '';
  /**
   * Optional. User-provided description for the deployment. The description can
   * be up to 255 characters long.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Provides details on why switchover is not possible. This field
   * is empty unless a switchover attempt failed or the state is
   * `SWITCHOVER_NOT_READY`. Example: "The target database version does not
   * match the source instance database version."
   *
   * @var string
   */
  public $errorDetail;
  /**
   * Output only. Identifier. The full resource name of the deployment. Format:
   * projects/{project}/locations/{location}/blueGreenDeployments/{deployment_id
   * }
   *
   * @var string
   */
  public $name;
  protected $requestedConfigType = RequestedConfig::class;
  protected $requestedConfigDataType = '';
  /**
   * Required. Immutable. Required on create, and immutable. The full resource
   * name of the source instance (the "blue" instance). Format:
   * projects/{project}/instances/{instance}
   *
   * @var string
   */
  public $sourceInstance;
  /**
   * Output only. The current state of the blue-green deployment.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The full resource name of the primary target instance (the
   * "green" instance) that will be promoted during switchover. This field is
   * always populated once the deployment is created. Format:
   * projects/{project}/instances/{instance}
   *
   * @var string
   */
  public $switchoverTargetInstance;

  /**
   * Output only. The time when the deployment was created. Example:
   * `2024-01-01T00:00:00Z`
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
   * Output only. A list representing the pairs of source and target instances
   * in the deployment.
   *
   * @param SourceTargetPairedNode[] $deploymentMappings
   */
  public function setDeploymentMappings($deploymentMappings)
  {
    $this->deploymentMappings = $deploymentMappings;
  }
  /**
   * @return SourceTargetPairedNode[]
   */
  public function getDeploymentMappings()
  {
    return $this->deploymentMappings;
  }
  /**
   * Output only. Combined list of tasks for all paired nodes.
   *
   * @param DeploymentTasks $deploymentTasks
   */
  public function setDeploymentTasks(DeploymentTasks $deploymentTasks)
  {
    $this->deploymentTasks = $deploymentTasks;
  }
  /**
   * @return DeploymentTasks
   */
  public function getDeploymentTasks()
  {
    return $this->deploymentTasks;
  }
  /**
   * Optional. User-provided description for the deployment. The description can
   * be up to 255 characters long.
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
   * Output only. Provides details on why switchover is not possible. This field
   * is empty unless a switchover attempt failed or the state is
   * `SWITCHOVER_NOT_READY`. Example: "The target database version does not
   * match the source instance database version."
   *
   * @param string $errorDetail
   */
  public function setErrorDetail($errorDetail)
  {
    $this->errorDetail = $errorDetail;
  }
  /**
   * @return string
   */
  public function getErrorDetail()
  {
    return $this->errorDetail;
  }
  /**
   * Output only. Identifier. The full resource name of the deployment. Format:
   * projects/{project}/locations/{location}/blueGreenDeployments/{deployment_id
   * }
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
   * Optional. Immutable. Optional on create, and immutable. The configuration
   * intended for the target instance(s) when the deployment was created.
   *
   * @param RequestedConfig $requestedConfig
   */
  public function setRequestedConfig(RequestedConfig $requestedConfig)
  {
    $this->requestedConfig = $requestedConfig;
  }
  /**
   * @return RequestedConfig
   */
  public function getRequestedConfig()
  {
    return $this->requestedConfig;
  }
  /**
   * Required. Immutable. Required on create, and immutable. The full resource
   * name of the source instance (the "blue" instance). Format:
   * projects/{project}/instances/{instance}
   *
   * @param string $sourceInstance
   */
  public function setSourceInstance($sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  /**
   * @return string
   */
  public function getSourceInstance()
  {
    return $this->sourceInstance;
  }
  /**
   * Output only. The current state of the blue-green deployment.
   *
   * Accepted values: STATE_UNSPECIFIED, PROVISIONING, SWITCHOVER_READY,
   * SWITCHOVER_NOT_READY, SWITCHOVER_IN_PROGRESS, SWITCHOVER_COMPLETED,
   * DELETING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The full resource name of the primary target instance (the
   * "green" instance) that will be promoted during switchover. This field is
   * always populated once the deployment is created. Format:
   * projects/{project}/instances/{instance}
   *
   * @param string $switchoverTargetInstance
   */
  public function setSwitchoverTargetInstance($switchoverTargetInstance)
  {
    $this->switchoverTargetInstance = $switchoverTargetInstance;
  }
  /**
   * @return string
   */
  public function getSwitchoverTargetInstance()
  {
    return $this->switchoverTargetInstance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BlueGreenDeployment::class, 'Google_Service_SQLAdmin_BlueGreenDeployment');
