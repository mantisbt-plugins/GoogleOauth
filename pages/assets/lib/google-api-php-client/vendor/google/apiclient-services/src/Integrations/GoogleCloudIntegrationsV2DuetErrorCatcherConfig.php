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

class GoogleCloudIntegrationsV2DuetErrorCatcherConfig extends \Google\Collection
{
  protected $collection_key = 'startErrorTasks';
  /**
   * Optional. User-provided description intended to give more business context
   * about the error catcher config.
   *
   * @var string
   */
  public $description;
  /**
   * Required. An error catcher id is string representation for the error
   * catcher config. Within a workflow, error_catcher_id uniquely identifies an
   * error catcher config among all error catcher configs for the workflow
   *
   * @var string
   */
  public $errorCatcherId;
  /**
   * Required. A number to uniquely identify each error catcher config within
   * the workflow on UI.
   *
   * @var string
   */
  public $errorCatcherNumber;
  /**
   * Optional. The user created label for a particular error catcher. Optional.
   *
   * @var string
   */
  public $label;
  protected $startErrorTasksType = GoogleCloudIntegrationsV2DuetNextTask::class;
  protected $startErrorTasksDataType = 'array';

  /**
   * Optional. User-provided description intended to give more business context
   * about the error catcher config.
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
   * Required. An error catcher id is string representation for the error
   * catcher config. Within a workflow, error_catcher_id uniquely identifies an
   * error catcher config among all error catcher configs for the workflow
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
   * Required. A number to uniquely identify each error catcher config within
   * the workflow on UI.
   *
   * @param string $errorCatcherNumber
   */
  public function setErrorCatcherNumber($errorCatcherNumber)
  {
    $this->errorCatcherNumber = $errorCatcherNumber;
  }
  /**
   * @return string
   */
  public function getErrorCatcherNumber()
  {
    return $this->errorCatcherNumber;
  }
  /**
   * Optional. The user created label for a particular error catcher. Optional.
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
   * Required. The set of start tasks that are to be executed for the error
   * catch flow
   *
   * @param GoogleCloudIntegrationsV2DuetNextTask[] $startErrorTasks
   */
  public function setStartErrorTasks($startErrorTasks)
  {
    $this->startErrorTasks = $startErrorTasks;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetNextTask[]
   */
  public function getStartErrorTasks()
  {
    return $this->startErrorTasks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetErrorCatcherConfig::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetErrorCatcherConfig');
