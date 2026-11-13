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

class GoogleCloudIntegrationsV2DuetGenerateJavascriptResponse extends \Google\Collection
{
  protected $collection_key = 'recommendations';
  protected $recommendationsType = GoogleCloudIntegrationsV2DuetJavascriptRecommendation::class;
  protected $recommendationsDataType = 'array';

  /**
   * List of the Javascript recommendations.
   *
   * @param GoogleCloudIntegrationsV2DuetJavascriptRecommendation[] $recommendations
   */
  public function setRecommendations($recommendations)
  {
    $this->recommendations = $recommendations;
  }
  /**
   * @return GoogleCloudIntegrationsV2DuetJavascriptRecommendation[]
   */
  public function getRecommendations()
  {
    return $this->recommendations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetGenerateJavascriptResponse::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetGenerateJavascriptResponse');
