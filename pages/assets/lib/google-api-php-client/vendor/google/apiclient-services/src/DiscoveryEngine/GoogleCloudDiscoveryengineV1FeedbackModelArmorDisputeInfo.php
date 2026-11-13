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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1FeedbackModelArmorDisputeInfo extends \Google\Model
{
  /**
   * Optional. The expected-label reason chip selected by the user (for example,
   * "Everyday question" or "Legitimate work-related query").
   *
   * @var string
   */
  public $expectedLabel;
  /**
   * Optional. The raw Model Armor `SanitizationResult`, serialized as JSON.
   *
   * @var string
   */
  public $sanitizationResultJson;
  /**
   * Optional. Resource name of the Model Armor template that produced the
   * sanitization result, in the format
   * `projects/{project}/locations/{location}/templates/{id}`.
   *
   * @var string
   */
  public $templateName;

  /**
   * Optional. The expected-label reason chip selected by the user (for example,
   * "Everyday question" or "Legitimate work-related query").
   *
   * @param string $expectedLabel
   */
  public function setExpectedLabel($expectedLabel)
  {
    $this->expectedLabel = $expectedLabel;
  }
  /**
   * @return string
   */
  public function getExpectedLabel()
  {
    return $this->expectedLabel;
  }
  /**
   * Optional. The raw Model Armor `SanitizationResult`, serialized as JSON.
   *
   * @param string $sanitizationResultJson
   */
  public function setSanitizationResultJson($sanitizationResultJson)
  {
    $this->sanitizationResultJson = $sanitizationResultJson;
  }
  /**
   * @return string
   */
  public function getSanitizationResultJson()
  {
    return $this->sanitizationResultJson;
  }
  /**
   * Optional. Resource name of the Model Armor template that produced the
   * sanitization result, in the format
   * `projects/{project}/locations/{location}/templates/{id}`.
   *
   * @param string $templateName
   */
  public function setTemplateName($templateName)
  {
    $this->templateName = $templateName;
  }
  /**
   * @return string
   */
  public function getTemplateName()
  {
    return $this->templateName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1FeedbackModelArmorDisputeInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1FeedbackModelArmorDisputeInfo');
