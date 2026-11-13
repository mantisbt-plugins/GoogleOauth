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

class GoogleCloudIntegrationsV2DuetIntegrationSkeleton extends \Google\Model
{
  /**
   * Explanation of why this integration was generated.
   *
   * @var string
   */
  public $explanation;
  protected $integrationVersionType = GoogleCloudIntegrationsV2DuetIntegrationVersion::class;
  protected $integrationVersionDataType = '';
  /**
   * The name of the integration.
   *
   * @var string
   */
  public $name;
  /**
   * Indicate the strategy/methodology used to generate the integration.
   *
   * @var string
   */
  public $tag;

  /**
   * Explanation of why this integration was generated.
   *
   * @param string $explanation
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
  /**
   * The integration version containing basic triggers and tasks.
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
   * The name of the integration.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Indicate the strategy/methodology used to generate the integration.
   *
   * @param string $tag
   */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /**
   * @return string
   */
  public function getTag()
  {
    return $this->tag;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudIntegrationsV2DuetIntegrationSkeleton::class, 'Google_Service_Integrations_GoogleCloudIntegrationsV2DuetIntegrationSkeleton');
