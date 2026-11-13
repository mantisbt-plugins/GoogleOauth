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

class GoogleCloudAiplatformV1AgentModelConfig extends \Google\Model
{
  /**
   * Optional. Publisher model resource name (an
   * `aiplatform.googleapis.com/PublisherModel`) of the form
   * "publishers/{publisher}/models/{model}", e.g.
   * "publishers/anthropic/models/claude-opus-4-8" or
   * "publishers/google/models/gemini-3-flash". Empty means the agent's default
   * gemini model.
   *
   * @var string
   */
  public $model;
  /**
   * Optional. Sampling temperature for the model's generation config (valid
   * range (0.0, 2.0]); a value outside that range leaves the backend default
   * standing.
   *
   * @var float
   */
  public $temperature;

  /**
   * Optional. Publisher model resource name (an
   * `aiplatform.googleapis.com/PublisherModel`) of the form
   * "publishers/{publisher}/models/{model}", e.g.
   * "publishers/anthropic/models/claude-opus-4-8" or
   * "publishers/google/models/gemini-3-flash". Empty means the agent's default
   * gemini model.
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
  /**
   * Optional. Sampling temperature for the model's generation config (valid
   * range (0.0, 2.0]); a value outside that range leaves the backend default
   * standing.
   *
   * @param float $temperature
   */
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  /**
   * @return float
   */
  public function getTemperature()
  {
    return $this->temperature;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentModelConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentModelConfig');
