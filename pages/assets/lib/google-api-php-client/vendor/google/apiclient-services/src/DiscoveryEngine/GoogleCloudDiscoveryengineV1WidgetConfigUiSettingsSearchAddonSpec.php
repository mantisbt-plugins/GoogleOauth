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

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsSearchAddonSpec extends \Google\Model
{
  /**
   * Optional. If true, generative answer add-on is disabled. Generative answer
   * add-on includes natural language to filters and simple answers.
   *
   * @var bool
   */
  public $generativeAnswerAddOnDisabled;
  /**
   * Optional. If true, disables event re-ranking and personalization to
   * optimize KPIs & personalize results.
   *
   * @var bool
   */
  public $kpiPersonalizationAddOnDisabled;
  /**
   * Optional. If true, semantic add-on is disabled. Semantic add-on includes
   * embeddings and jetstream.
   *
   * @var bool
   */
  public $semanticAddOnDisabled;

  /**
   * Optional. If true, generative answer add-on is disabled. Generative answer
   * add-on includes natural language to filters and simple answers.
   *
   * @param bool $generativeAnswerAddOnDisabled
   */
  public function setGenerativeAnswerAddOnDisabled($generativeAnswerAddOnDisabled)
  {
    $this->generativeAnswerAddOnDisabled = $generativeAnswerAddOnDisabled;
  }
  /**
   * @return bool
   */
  public function getGenerativeAnswerAddOnDisabled()
  {
    return $this->generativeAnswerAddOnDisabled;
  }
  /**
   * Optional. If true, disables event re-ranking and personalization to
   * optimize KPIs & personalize results.
   *
   * @param bool $kpiPersonalizationAddOnDisabled
   */
  public function setKpiPersonalizationAddOnDisabled($kpiPersonalizationAddOnDisabled)
  {
    $this->kpiPersonalizationAddOnDisabled = $kpiPersonalizationAddOnDisabled;
  }
  /**
   * @return bool
   */
  public function getKpiPersonalizationAddOnDisabled()
  {
    return $this->kpiPersonalizationAddOnDisabled;
  }
  /**
   * Optional. If true, semantic add-on is disabled. Semantic add-on includes
   * embeddings and jetstream.
   *
   * @param bool $semanticAddOnDisabled
   */
  public function setSemanticAddOnDisabled($semanticAddOnDisabled)
  {
    $this->semanticAddOnDisabled = $semanticAddOnDisabled;
  }
  /**
   * @return bool
   */
  public function getSemanticAddOnDisabled()
  {
    return $this->semanticAddOnDisabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsSearchAddonSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsSearchAddonSpec');
