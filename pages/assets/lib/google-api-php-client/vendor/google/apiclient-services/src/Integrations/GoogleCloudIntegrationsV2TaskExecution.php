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

class GoogleCloudIntegrationsV2TaskExecution extends \Google\Collection
{
  protected $collection_key = 'taskExecutionDetails';
  /**
   * Identifier. Task execution resource name.
   *
   * @var string
   */
  public $name;
  protected $taskExecutionDetailsType = GoogleCloudIntegrationsV2TaskExecutionDetails::class;
  protected $taskExecutionDetailsDataType = 'array';
  protected $taskExecutionMetadataType = GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata::class;
  protected $taskExecutionMetadataDataType = '';
  /**
   * Optional. Variables used during the execution.
   *
   * @var array[]
   */
  public $variables;

  /**
   * Identifier. Task execution resource name.
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
   * Details of the task execution.
   *
   * @param GoogleCloudIntegrationsV2TaskExecutionDetails[] $taskExecutionDetails
   */
  public function setTaskExecutionDetails($taskExecutionDetails)
  {
    $this->taskExecutionDetails = $taskExecutionDetails;
  }
  /**
   * @return GoogleCloudIntegrationsV2TaskExecutionDetails[]
   */
  public function getTaskExecutionDetails()
  {
    return $this->taskExecutionDetails;
  }
  /**
   * Optional. Metadata of the task execution.
   *
   * @param GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata $taskExecutionMetadata
   */
  public function setTaskExecutionMetadata(GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata $taskExecutionMetadata)
  {
    $this->taskExecutionMetadata = $taskExecutionMetadata;
  }
  /**
   * @return GoogleCloudIntegrationsV2TaskExecutionTaskExecutionMetadata
   */
  public function getTaskExecutionMetadata()
  {
    return $this->taskExecutionMetadata;
  }
  /**
   * Optional. Variables used during the execution.
   *
   * @param array[] $variables
   */
  public function setVariables($variables)
  {
    $this->variables = $variables;
  }
  /**
   * @return array[]
   */
  public function getVariables()
  {
    return $this->variables;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2TaskExecution::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2TaskExecution');
