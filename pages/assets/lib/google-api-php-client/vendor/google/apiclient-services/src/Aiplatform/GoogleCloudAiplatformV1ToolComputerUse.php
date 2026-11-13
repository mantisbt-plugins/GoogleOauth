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

class GoogleCloudAiplatformV1ToolComputerUse extends \Google\Collection
{
  /**
   * The environment is unspecified.
   */
  public const ENVIRONMENT_ENVIRONMENT_UNSPECIFIED = 'ENVIRONMENT_UNSPECIFIED';
  /**
   * The tool operates in a web browser.
   */
  public const ENVIRONMENT_ENVIRONMENT_BROWSER = 'ENVIRONMENT_BROWSER';
  /**
   * The tool operates in a mobile environment.
   */
  public const ENVIRONMENT_ENVIRONMENT_MOBILE = 'ENVIRONMENT_MOBILE';
  /**
   * The tool operates in a desktop environment.
   */
  public const ENVIRONMENT_ENVIRONMENT_DESKTOP = 'ENVIRONMENT_DESKTOP';
  protected $collection_key = 'excludedPredefinedFunctions';
  /**
   * Optional. A list of safety policies to disable for the computer use tool.
   *
   * @var string[]
   */
  public $disabledSafetyPolicies;
  /**
   * Optional. Whether to enable the prompt injection detection check on the
   * computer use request.
   *
   * @var bool
   */
  public $enablePromptInjectionDetection;
  /**
   * Required. The target environment where the computer use tool operates.
   *
   * @var string
   */
  public $environment;
  /**
   * Optional. A list of predefined functions to explicitly exclude from the
   * model call. By default, [predefined
   * functions](https://cloud.google.com/vertex-ai/generative-ai/docs/computer-
   * use#supported-actions) are included. Excluding functions allows for a more
   * restricted action space or custom definitions for predefined functions.
   *
   * @var string[]
   */
  public $excludedPredefinedFunctions;

  /**
   * Optional. A list of safety policies to disable for the computer use tool.
   *
   * @param string[] $disabledSafetyPolicies
   */
  public function setDisabledSafetyPolicies($disabledSafetyPolicies)
  {
    $this->disabledSafetyPolicies = $disabledSafetyPolicies;
  }
  /**
   * @return string[]
   */
  public function getDisabledSafetyPolicies()
  {
    return $this->disabledSafetyPolicies;
  }
  /**
   * Optional. Whether to enable the prompt injection detection check on the
   * computer use request.
   *
   * @param bool $enablePromptInjectionDetection
   */
  public function setEnablePromptInjectionDetection($enablePromptInjectionDetection)
  {
    $this->enablePromptInjectionDetection = $enablePromptInjectionDetection;
  }
  /**
   * @return bool
   */
  public function getEnablePromptInjectionDetection()
  {
    return $this->enablePromptInjectionDetection;
  }
  /**
   * Required. The target environment where the computer use tool operates.
   *
   * Accepted values: ENVIRONMENT_UNSPECIFIED, ENVIRONMENT_BROWSER,
   * ENVIRONMENT_MOBILE, ENVIRONMENT_DESKTOP
   *
   * @param self::ENVIRONMENT_* $environment
   */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /**
   * @return self::ENVIRONMENT_*
   */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /**
   * Optional. A list of predefined functions to explicitly exclude from the
   * model call. By default, [predefined
   * functions](https://cloud.google.com/vertex-ai/generative-ai/docs/computer-
   * use#supported-actions) are included. Excluding functions allows for a more
   * restricted action space or custom definitions for predefined functions.
   *
   * @param string[] $excludedPredefinedFunctions
   */
  public function setExcludedPredefinedFunctions($excludedPredefinedFunctions)
  {
    $this->excludedPredefinedFunctions = $excludedPredefinedFunctions;
  }
  /**
   * @return string[]
   */
  public function getExcludedPredefinedFunctions()
  {
    return $this->excludedPredefinedFunctions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ToolComputerUse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ToolComputerUse');
