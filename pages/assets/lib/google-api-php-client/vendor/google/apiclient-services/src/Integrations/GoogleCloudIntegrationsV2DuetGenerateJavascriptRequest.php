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

class GoogleCloudIntegrationsV2DuetGenerateJavascriptRequest extends \Google\Model
{
  protected $javascriptRequestType = GoogleCloudIntegrationsV2DuetJavascriptRequest::class;
  protected $javascriptRequestDataType = '';
  /**
   * Optional. User prompt.
   *
   * @var string
   */
  public $prompt;

  /**
   * Required. The javascript request payload.
   *
   * @param GoogleCloudIntegrationsV2DuetJavascriptRequest $javascriptRequest
   */
  public function setJavascriptRequest(GoogleCloudIntegrationsV2DuetJavascriptRequest $javascriptRequest)
  {
    $this->javascriptRequest = $javascriptRequest;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetJavascriptRequest
   */
  public function getJavascriptRequest()
  {
    return $this->javascriptRequest;
  }
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetGenerateJavascriptRequest::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetGenerateJavascriptRequest');
