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

class GoogleCloudIntegrationsV2DuetJavascriptRequest extends \Google\Model
{
  /**
   * Optional. If this request is for copilot.
   *
   * @var bool
   */
  public $copilotEnabled;
  protected $integrationVersionType = GoogleCloudIntegrationsV2DuetIntegrationVersion::class;
  protected $integrationVersionDataType = '';
  /**
   * Required. The task id of the Javascript task.
   *
   * @var string
   */
  public $taskId;
  /**
   * Optional. Whether to use the current javascript task config (JS code) to
   * generate the Javascript code.
   *
   * @var bool
   */
  public $useCurrentScript;

  /**
   * Optional. If this request is for copilot.
   *
   * @param bool $copilotEnabled
   */
  public function setCopilotEnabled($copilotEnabled)
  {
    $this->copilotEnabled = $copilotEnabled;
  }
  /**
   * @return bool
   */
  public function getCopilotEnabled()
  {
    return $this->copilotEnabled;
  }
  /**
   * Required. The integration version which contains all the integration
   * parameters, all triggers and tasks including the Javascript task.
   *
   * @param GoogleCloudIntegrationsV2DuetIntegrationVersion $integrationVersion
   */
  public function setIntegrationVersion(GoogleCloudIntegrationsV2DuetIntegrationVersion $integrationVersion)
  {
    $this->integrationVersion = $integrationVersion;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetIntegrationVersion
   */
  public function getIntegrationVersion()
  {
    return $this->integrationVersion;
  }
  /**
   * Required. The task id of the Javascript task.
   *
   * @param string $taskId
   */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /**
   * @return string
   */
  public function getTaskId()
  {
    return $this->taskId;
  }
  /**
   * Optional. Whether to use the current javascript task config (JS code) to
   * generate the Javascript code.
   *
   * @param bool $useCurrentScript
   */
  public function setUseCurrentScript($useCurrentScript)
  {
    $this->useCurrentScript = $useCurrentScript;
  }
  /**
   * @return bool
   */
  public function getUseCurrentScript()
  {
    return $this->useCurrentScript;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetJavascriptRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetJavascriptRequest');
