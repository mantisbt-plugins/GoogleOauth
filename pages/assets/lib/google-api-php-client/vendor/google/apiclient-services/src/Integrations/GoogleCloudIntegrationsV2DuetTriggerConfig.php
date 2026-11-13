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

class GoogleCloudIntegrationsV2DuetTriggerConfig extends \Google\Collection
{
  /**
   * Unknown.
   */
  public const TRIGGER_TYPE_TRIGGER_TYPE_UNSPECIFIED = 'TRIGGER_TYPE_UNSPECIFIED';
  /**
   * Trigger by scheduled time.
   */
  public const TRIGGER_TYPE_CRON = 'CRON';
  /**
   * Trigger by API call.
   */
  public const TRIGGER_TYPE_API = 'API';
  /**
   * Trigger by Salesforce Channel.
   */
  public const TRIGGER_TYPE_SFDC_CHANNEL = 'SFDC_CHANNEL';
  /**
   * Trigger by Pub/Sub external.
   */
  public const TRIGGER_TYPE_CLOUD_PUBSUB_EXTERNAL = 'CLOUD_PUBSUB_EXTERNAL';
  /**
   * SFDC Channel Trigger for CDC.
   */
  public const TRIGGER_TYPE_SFDC_CDC_CHANNEL = 'SFDC_CDC_CHANNEL';
  /**
   * Trigger by Cloud Scheduler job.
   */
  public const TRIGGER_TYPE_CLOUD_SCHEDULER = 'CLOUD_SCHEDULER';
  /**
   * Trigger by Connector Event
   */
  public const TRIGGER_TYPE_INTEGRATION_CONNECTOR_TRIGGER = 'INTEGRATION_CONNECTOR_TRIGGER';
  /**
   * Trigger for private workflow
   */
  public const TRIGGER_TYPE_PRIVATE_TRIGGER = 'PRIVATE_TRIGGER';
  protected $collection_key = 'startTasks';
  protected $cloudSchedulerConfigType = GoogleCloudIntegrationsV2DuetCloudSchedulerConfig::class;
  protected $cloudSchedulerConfigDataType = '';
  /**
   * Optional. User-provided description intended to give additional business
   * context about the task.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Optional Error catcher id of the error catch flow which will be
   * executed when execution error happens in the task
   *
   * @var string
   */
  public $errorCatcherId;
  protected $inputVariablesType = GoogleCloudIntegrationsV2DuetTriggerConfigVariables::class;
  protected $inputVariablesDataType = '';
  /**
   * Optional. The user created label for a particular trigger.
   *
   * @var string
   */
  public $label;
  protected $outputVariablesType = GoogleCloudIntegrationsV2DuetTriggerConfigVariables::class;
  protected $outputVariablesDataType = '';
  /**
   * Optional. Configurable properties of the trigger, not to be confused with
   * integration parameters. E.g. "name" is a property for API triggers and
   * "subscription" is a property for Pub/sub triggers.
   *
   * @var string[]
   */
  public $properties;
  protected $startTasksType = GoogleCloudIntegrationsV2DuetNextTask::class;
  protected $startTasksDataType = 'array';
  /**
   * Optional. Name of the trigger. Example: "API Trigger", "Cloud Pub Sub
   * Trigger" When set will be sent out to monitoring dashabord for tracking
   * purpose.
   *
   * @var string
   */
  public $trigger;
  /**
   * Optional. The backend trigger ID.
   *
   * @var string
   */
  public $triggerId;
  /**
   * Required. A number to uniquely identify each trigger config within the
   * integration on UI.
   *
   * @var string
   */
  public $triggerNumber;
  /**
   * Optional. Type of trigger
   *
   * @var string
   */
  public $triggerType;

  /**
   * Optional. Cloud Scheduler Trigger related metadata
   *
   * @param GoogleCloudIntegrationsV2DuetCloudSchedulerConfig $cloudSchedulerConfig
   */
  public function setCloudSchedulerConfig(GoogleCloudIntegrationsV2DuetCloudSchedulerConfig $cloudSchedulerConfig)
  {
    $this->cloudSchedulerConfig = $cloudSchedulerConfig;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetCloudSchedulerConfig
   */
  public function getCloudSchedulerConfig()
  {
    return $this->cloudSchedulerConfig;
  }
  /**
   * Optional. User-provided description intended to give additional business
   * context about the task.
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
   * Optional. Optional Error catcher id of the error catch flow which will be
   * executed when execution error happens in the task
   *
   * @param string $errorCatcherId
   */
  public function setErrorCatcherId($errorCatcherId)
  {
    $this->errorCatcherId = $errorCatcherId;
  }
  /**
   * @return string
   */
  public function getErrorCatcherId()
  {
    return $this->errorCatcherId;
  }
  /**
   * Optional. List of input variables for the api trigger.
   *
   * @param GoogleCloudIntegrationsV2DuetTriggerConfigVariables $inputVariables
   */
  public function setInputVariables(GoogleCloudIntegrationsV2DuetTriggerConfigVariables $inputVariables)
  {
    $this->inputVariables = $inputVariables;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTriggerConfigVariables
   */
  public function getInputVariables()
  {
    return $this->inputVariables;
  }
  /**
   * Optional. The user created label for a particular trigger.
   *
   * @param string $label
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * Optional. List of output variables for the api trigger.
   *
   * @param GoogleCloudIntegrationsV2DuetTriggerConfigVariables $outputVariables
   */
  public function setOutputVariables(GoogleCloudIntegrationsV2DuetTriggerConfigVariables $outputVariables)
  {
    $this->outputVariables = $outputVariables;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetTriggerConfigVariables
   */
  public function getOutputVariables()
  {
    return $this->outputVariables;
  }
  /**
   * Optional. Configurable properties of the trigger, not to be confused with
   * integration parameters. E.g. "name" is a property for API triggers and
   * "subscription" is a property for Pub/sub triggers.
   *
   * @param string[] $properties
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return string[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * Optional. Set of tasks numbers from where the integration execution is
   * started by this trigger. If this is empty, then integration is executed
   * with default start tasks. In the list of start tasks, none of two tasks can
   * have direct ancestor-descendant relationships (i.e. in a same integration
   * execution graph).
   *
   * @param GoogleCloudIntegrationsV2DuetNextTask[] $startTasks
   */
  public function setStartTasks($startTasks)
  {
    $this->startTasks = $startTasks;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetNextTask[]
   */
  public function getStartTasks()
  {
    return $this->startTasks;
  }
  /**
   * Optional. Name of the trigger. Example: "API Trigger", "Cloud Pub Sub
   * Trigger" When set will be sent out to monitoring dashabord for tracking
   * purpose.
   *
   * @param string $trigger
   */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /**
   * @return string
   */
  public function getTrigger()
  {
    return $this->trigger;
  }
  /**
   * Optional. The backend trigger ID.
   *
   * @param string $triggerId
   */
  public function setTriggerId($triggerId)
  {
    $this->triggerId = $triggerId;
  }
  /**
   * @return string
   */
  public function getTriggerId()
  {
    return $this->triggerId;
  }
  /**
   * Required. A number to uniquely identify each trigger config within the
   * integration on UI.
   *
   * @param string $triggerNumber
   */
  public function setTriggerNumber($triggerNumber)
  {
    $this->triggerNumber = $triggerNumber;
  }
  /**
   * @return string
   */
  public function getTriggerNumber()
  {
    return $this->triggerNumber;
  }
  /**
   * Optional. Type of trigger
   *
   * Accepted values: TRIGGER_TYPE_UNSPECIFIED, CRON, API, SFDC_CHANNEL,
   * CLOUD_PUBSUB_EXTERNAL, SFDC_CDC_CHANNEL, CLOUD_SCHEDULER,
   * INTEGRATION_CONNECTOR_TRIGGER, PRIVATE_TRIGGER
   *
   * @param self::TRIGGER_TYPE_* $triggerType
   */
  public function setTriggerType($triggerType)
  {
    $this->triggerType = $triggerType;
  }
  /**
   * @return self::TRIGGER_TYPE_*
   */
  public function getTriggerType()
  {
    return $this->triggerType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetTriggerConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetTriggerConfig');
