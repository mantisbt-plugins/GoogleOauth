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

namespace Google\Service\Games\Resource;

use Google\Service\Games\BatchRecordEventsRequest;
use Google\Service\Games\BatchRecordEventsResponse;

/**
 * The "gameStats" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google\Service\Games(...);
 *   $gameStats = $gamesService->gameStats;
 *  </code>
 */
class GameStats extends \Google\Service\Resource
{
  /**
   * Records a batch of player game events for a specific player. This method
   * allows sending multiple events in a single request.
   * (gameStats.batchRecordEvents)
   *
   * @param string $playerId Required. The player ID of the player that performed
   * the events.
   * @param BatchRecordEventsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BatchRecordEventsResponse
   * @throws \Google\Service\Exception
   */
  public function batchRecordEvents($playerId, BatchRecordEventsRequest $postBody, $optParams = [])
  {
    $params = ['playerId' => $playerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchRecordEvents', [$params], BatchRecordEventsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GameStats::class, 'Google_Service_Games_Resource_GameStats');
