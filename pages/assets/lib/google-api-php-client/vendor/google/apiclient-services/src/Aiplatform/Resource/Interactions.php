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

use Google\Service\Aiplatform\GenaiVertexV1Interaction;
use Google\Service\Aiplatform\GenaiVertexV1InteractionStreamingEvent;

/**
 * The "interactions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $interactions = $aiplatformService->interactions;
 *  </code>
 */
class Interactions extends \Google\Service\Resource
{
  /**
   * Cancels an interaction. (interactions.cancel)
   *
   * @param string $name Required. The name of the interaction to cancel. Format:
   * `interactions/{interaction}`.
   * @param array $optParams Optional parameters.
   * @return GenaiVertexV1Interaction
   * @throws \Google\Service\Exception
   */
  public function cancel($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('cancel', [$params], GenaiVertexV1Interaction::class);
  }
  /**
   * Fully typed proto, unary version of GetInteraction that returns Interaction
   * proto. (interactions.getPoll)
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
   * @return GenaiVertexV1Interaction
   * @throws \Google\Service\Exception
   */
  public function getPoll($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getPoll', [$params], GenaiVertexV1Interaction::class);
  }
  /**
   * Fully typed proto, streaming version of GetInteraction that returns
   * Interaction proto. (interactions.getStream)
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
   * @return GenaiVertexV1InteractionStreamingEvent
   * @throws \Google\Service\Exception
   */
  public function getStream($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getStream', [$params], GenaiVertexV1InteractionStreamingEvent::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Interactions::class, 'Google_Service_Aiplatform_Resource_Interactions');
