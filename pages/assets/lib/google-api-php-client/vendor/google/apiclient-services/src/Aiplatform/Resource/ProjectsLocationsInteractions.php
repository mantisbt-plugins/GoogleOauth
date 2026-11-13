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

use Google\Service\Aiplatform\GenaiVertexV1CreateInteractionRequest;
use Google\Service\Aiplatform\GenaiVertexV1DeleteInteractionResponse;
use Google\Service\Aiplatform\GenaiVertexV1Interaction;
use Google\Service\Aiplatform\GenaiVertexV1InteractionStreamingEvent;

/**
 * The "interactions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $interactions = $aiplatformService->projects_locations_interactions;
 *  </code>
 */
class ProjectsLocationsInteractions extends \Google\Service\Resource
{
  /**
   * Creates an interaction. (interactions.create)
   *
   * @param string $projectsId
   * @param string $locationsId
   * @param GenaiVertexV1CreateInteractionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GenaiVertexV1Interaction
   * @throws \Google\Service\Exception
   */
  public function create($projectsId, $locationsId, GenaiVertexV1CreateInteractionRequest $postBody, $optParams = [])
  {
    $params = ['projectsId' => $projectsId, 'locationsId' => $locationsId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GenaiVertexV1Interaction::class);
  }
  /**
   * Creates an interaction and streams the response. (interactions.createStream)
   *
   * @param string $projectsId
   * @param string $locationsId
   * @param GenaiVertexV1CreateInteractionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GenaiVertexV1InteractionStreamingEvent
   * @throws \Google\Service\Exception
   */
  public function createStream($projectsId, $locationsId, GenaiVertexV1CreateInteractionRequest $postBody, $optParams = [])
  {
    $params = ['projectsId' => $projectsId, 'locationsId' => $locationsId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('createStream', [$params], GenaiVertexV1InteractionStreamingEvent::class);
  }
  /**
   * Deletes an interaction. (interactions.delete)
   *
   * @param string $name Required. The name of the interaction to delete. Format:
   * interactions/{interaction}
   * @param array $optParams Optional parameters.
   * @return GenaiVertexV1DeleteInteractionResponse
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GenaiVertexV1DeleteInteractionResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsInteractions::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsInteractions');
