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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1DeprovisionSemanticGovernancePolicyEngineRequest;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "semanticGovernancePolicyEngine" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $semanticGovernancePolicyEngine = $aiplatformService->projects_locations_semanticGovernancePolicyEngine;
 *  </code>
 */
class ProjectsLocationsSemanticGovernancePolicyEngine extends \Google\Service\Resource
{
  /**
   * Deprovisions the SemanticGovernancePolicyEngine, tearing down the associated
   * tenant project, GKE cluster, and PSC service attachments. This operation is
   * irreversible. Returns a long-running operation; poll for completion. The
   * response contains the SemanticGovernancePolicyEngine in DEPROVISIONING state.
   * (semanticGovernancePolicyEngine.deprovision)
   *
   * @param string $name Required. The resource name of the
   * SemanticGovernancePolicyEngine to deprovision. Format:
   * projects/{project}/locations/{location}/semanticGovernancePolicyEngine
   * @param GoogleCloudAiplatformV1DeprovisionSemanticGovernancePolicyEngineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function deprovision($name, GoogleCloudAiplatformV1DeprovisionSemanticGovernancePolicyEngineRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('deprovision', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSemanticGovernancePolicyEngine::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsSemanticGovernancePolicyEngine');
