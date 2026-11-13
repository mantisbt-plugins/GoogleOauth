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

use Google\Service\Aiplatform\GenaiVertexV1CreateInteractionHttpRequest;
use Google\Service\Aiplatform\GoogleApiHttpBody;

/**
 * The "interactionsHttp" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $interactionsHttp = $aiplatformService->projects_locations_interactionsHttp;
 *  </code>
 */
class ProjectsLocationsInteractionsHttp extends \Google\Service\Resource
{
  /**
   * Cancels an interaction by id. This only applies to background interactions
   * that are still running. (interactionsHttp.cancel)
   *
   * @param string $name Required. The name of the interaction to cancel. Format:
   * `interactions/{interaction}`.
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function cancel($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('cancel', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Creates a new interaction. (interactionsHttp.create)
   *
   * @param string $parent Required. The parent resource where this interaction
   * will be created. Format: `projects/{project}/locations/{location}` Supported
   * only by the Vertex API only.
   * @param GenaiVertexV1CreateInteractionHttpRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function create($parent, GenaiVertexV1CreateInteractionHttpRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Retrieves the full details of a single interaction based on its
   * `Interaction.id`. (interactionsHttp.get)
   *
   * @param string $name Required. The name of the interaction to retrieve.
   * Format: interactions/{interaction}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string lastEventId If set, resumes the interaction stream from the
   * chunk after the event marked by the event id. Can only be used if `stream` is
   * true.
   * @opt_param bool stream If true, streams the interaction events as Server-Sent
   * Events.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleApiHttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsInteractionsHttp::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsInteractionsHttp');
