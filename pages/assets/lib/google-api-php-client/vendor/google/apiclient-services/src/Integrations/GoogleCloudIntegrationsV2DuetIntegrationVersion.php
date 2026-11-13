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

namespace Google\Service\Integrations;

class GoogleCloudIntegrationsV2DuetIntegrationVersion extends \Google\Collection
{
  /**
   * Default.
   */
  public const STATE_INTEGRATION_STATE_UNSPECIFIED = 'INTEGRATION_STATE_UNSPECIFIED';
  /**
   * Draft.
   */
  public const STATE_DRAFT = 'DRAFT';
  /**
   * Active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Archived.
   */
  public const STATE_ARCHIVED = 'ARCHIVED';
  /**
   * Snapshot.
   */
  public const STATE_SNAPSHOT = 'SNAPSHOT';
  protected $collection_key = 'triggerConfigs';
  /**
   * Optional. The integration description.
   *
   * @var string
   */
  public $description;
  protected $errorCatcherConfigsType = GoogleCloudIntegrationsV2DuetErrorCatcherConfig::class;
  protected $errorCatcherConfigsDataType = 'array';
  protected $integrationConfigParametersType = GoogleCloudIntegrationsV2DuetIntegrationConfigParameter::class;
  protected $integrationConfigParametersDataType = 'array';
  protected $integrationParametersType = GoogleCloudIntegrationsV2DuetIntegrationParameter::class;
  protected $integrationParametersDataType = 'array';
  /**
   * Optional. Auto-generated primary key.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. An increasing sequence that is set when a new snapshot is
   * created. The last created snapshot can be identified by [workflow_name,
   * org_id latest(snapshot_number)]. However, last created snapshot need not be
   * same as the HEAD. So users should always use "HEAD" tag to identify the
   * head.
   *
   * @var string
   */
  public $snapshotNumber;
  /**
   * Output only. User should not set it as an input.
   *
   * @var string
   */
  public $state;
  protected $taskConfigsType = GoogleCloudIntegrationsV2DuetTaskConfig::class;
  protected $taskConfigsDataType = 'array';
  protected $triggerConfigsType = GoogleCloudIntegrationsV2DuetTriggerConfig::class;
  protected $triggerConfigsDataType = 'array';
  /**
   * Optional. A user-defined label that annotates an integration version.
   * Typically, this is only set when the integration version is created.
   *
   * @var string
   */
  public $userLabel;

  /**
   * Optional. The integration description.
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
   * Optional. Error Catch Task configuration for the integration. It's
   * optional.
   *
   * @param GoogleCloudIntegrationsV2DuetErrorCatcherConfig[] $errorCatcherConfigs
   */
  public function setErrorCatcherConfigs($errorCatcherConfigs)
  {
    $this->errorCatcherConfigs = $errorCatcherConfigs;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetErrorCatcherConfig[]
   */
  public function getErrorCatcherConfigs()
  {
    return $this->errorCatcherConfigs;
  }
  /**
   * Optional. Config Parameters that are expected to be passed to the
   * integration when an integration is published. This consists of all the
   * parameters that are expected to provide configuration in the integration
   * execution. This gives the user the ability to provide default values,
   * value, add information like connection url, project based configuration
   * value and also provide data types of each parameter.
   *
   * @param GoogleCloudIntegrationsV2DuetIntegrationConfigParameter[] $integrationConfigParameters
   */
  public function setIntegrationConfigParameters($integrationConfigParameters)
  {
    $this->integrationConfigParameters = $integrationConfigParameters;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetIntegrationConfigParameter[]
   */
  public function getIntegrationConfigParameters()
  {
    return $this->integrationConfigParameters;
  }
  /**
   * Optional. Parameters that are expected to be passed to the integration when
   * an event is triggered. This consists of all the parameters that are
   * expected in the integration execution. This gives the user the ability to
   * provide default values, add information like PII and also provide data
   * types of each parameter.
   *
   * @param GoogleCloudIntegrationsV2DuetIntegrationParameter[] $integrationParameters
   */
  public function setIntegrationParameters($integrationParameters)
  {
    $this->integrationParameters = $integrationParameters;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetIntegrationParameter[]
   */
  public function getIntegrationParameters()
  {
    return $this->integrationParameters;
  }
  /**
   * Optional. Auto-generated primary key.
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
   * Optional. An increasing sequence that is set when a new snapshot is
   * created. The last created snapshot can be identified by [workflow_name,
   * org_id latest(snapshot_number)]. However, last created snapshot need not be
   * same as the HEAD. So users should always use "HEAD" tag to identify the
   * head.
   *
   * @param string $snapshotNumber
   */
  public function setSnapshotNumber($snapshotNumber)
  {
    $this->snapshotNumber = $snapshotNumber;
  }
  /**
   * @return string
   */
  public function getSnapshotNumber()
  {
    return $this->snapshotNumber;
  }
  /**
   * Output only. User should not set it as an input.
   *
   * Accepted values: INTEGRATION_STATE_UNSPECIFIED, DRAFT, ACTIVE, ARCHIVED,
   * SNAPSHOT
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
   * Optional. Task configuration for the integration. It's optional, but the
   * integration doesn't do anything without task_configs.
   *
   * @param GoogleCloudIntegrationsV2DuetTaskConfig[] $taskConfigs
   */
  public function setTaskConfigs($taskConfigs)
  {
    $this->taskConfigs = $taskConfigs;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTaskConfig[]
   */
  public function getTaskConfigs()
  {
    return $this->taskConfigs;
  }
  /**
   * Optional. Trigger configurations.
   *
   * @param GoogleCloudIntegrationsV2DuetTriggerConfig[] $triggerConfigs
   */
  public function setTriggerConfigs($triggerConfigs)
  {
    $this->triggerConfigs = $triggerConfigs;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTriggerConfig[]
   */
  public function getTriggerConfigs()
  {
    return $this->triggerConfigs;
  }
  /**
   * Optional. A user-defined label that annotates an integration version.
   * Typically, this is only set when the integration version is created.
   *
   * @param string $userLabel
   */
  public function setUserLabel($userLabel)
  {
    $this->userLabel = $userLabel;
  }
  /**
   * @return string
   */
  public function getUserLabel()
  {
    return $this->userLabel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetIntegrationVersion::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetIntegrationVersion');
