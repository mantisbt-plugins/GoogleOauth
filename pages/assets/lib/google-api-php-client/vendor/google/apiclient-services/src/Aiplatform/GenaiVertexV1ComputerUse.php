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

class GenaiVertexV1ComputerUse extends \Google\Collection
{
  /**
   * Defaults to browser.
   */
  public const ENVIRONMENT_ENVIRONMENT_UNSPECIFIED = 'ENVIRONMENT_UNSPECIFIED';
  /**
   * Operates in a web browser.
   */
  public const ENVIRONMENT_BROWSER = 'BROWSER';
  /**
   * Operates in a mobile environment.
   */
  public const ENVIRONMENT_MOBILE = 'MOBILE';
  /**
   * Operates in a desktop environment.
   */
  public const ENVIRONMENT_DESKTOP = 'DESKTOP';
  protected $collection_key = 'excludedPredefinedFunctions';
  /**
   * Optional. Disabled safety policies for computer use.
   *
   * @var string[]
   */
  public $disabledSafetyPolicies;
  /**
   * Whether enable the prompt injection detection check on computer-use
   * request.
   *
   * @var bool
   */
  public $enablePromptInjectionDetection;
  /**
   * The environment being operated.
   *
   * @var string
   */
  public $environment;
  /**
   * The list of predefined functions that are excluded from the model call.
   *
   * @var string[]
   */
  public $excludedPredefinedFunctions;

  /**
   * Optional. Disabled safety policies for computer use.
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
   * Whether enable the prompt injection detection check on computer-use
   * request.
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
   * The environment being operated.
   *
   * Accepted values: ENVIRONMENT_UNSPECIFIED, BROWSER, MOBILE, DESKTOP
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
   * The list of predefined functions that are excluded from the model call.
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
class_alias(GenaiVertexV1ComputerUse::class, 'Google_Service_Aiplatform_GenaiVertexV1ComputerUse');
