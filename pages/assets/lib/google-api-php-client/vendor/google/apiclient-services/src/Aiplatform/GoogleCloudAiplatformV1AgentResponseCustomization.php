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

class GoogleCloudAiplatformV1AgentResponseCustomization extends \Google\Model
{
  /**
   * Optional. Custom message shown to the end user when the policy check
   * results in a denial. Use this to explain the rationale to the user. Max
   * 1000 characters.
   *
   * @var string
   */
  public $denialMessage;

  /**
   * Optional. Custom message shown to the end user when the policy check
   * results in a denial. Use this to explain the rationale to the user. Max
   * 1000 characters.
   *
   * @param string $denialMessage
   */
  public function setDenialMessage($denialMessage)
  {
    $this->denialMessage = $denialMessage;
  }
  /**
   * @return string
   */
  public function getDenialMessage()
  {
    return $this->denialMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentResponseCustomization::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentResponseCustomization');
