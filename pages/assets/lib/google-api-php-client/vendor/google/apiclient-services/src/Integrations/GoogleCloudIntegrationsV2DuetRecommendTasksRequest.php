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

class GoogleCloudIntegrationsV2DuetRecommendTasksRequest extends \Google\Model
{
  /**
   * Optional. User prompt.
   *
   * @var string
   */
  public $prompt;
  protected $replaceTaskRequestType = GoogleCloudIntegrationsV2DuetReplaceTaskRequest::class;
  protected $replaceTaskRequestDataType = '';

  /**
   * Optional. User prompt.
   *
   * @param string $prompt
   */
  public function setPrompt($prompt)
  {
    $this->prompt = $prompt;
  }
  /**
   * @return string
   */
  public function getPrompt()
  {
    return $this->prompt;
  }
  /**
   * Required. The current task to replace and options.
   *
   * @param GoogleCloudIntegrationsV2DuetReplaceTaskRequest $replaceTaskRequest
   */
  public function setReplaceTaskRequest(GoogleCloudIntegrationsV2DuetReplaceTaskRequest $replaceTaskRequest)
  {
    $this->replaceTaskRequest = $replaceTaskRequest;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetReplaceTaskRequest
   */
  public function getReplaceTaskRequest()
  {
    return $this->replaceTaskRequest;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetRecommendTasksRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetRecommendTasksRequest');
