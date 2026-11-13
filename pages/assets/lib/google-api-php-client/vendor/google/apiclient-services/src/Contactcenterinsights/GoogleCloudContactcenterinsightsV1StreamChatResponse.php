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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1StreamChatResponse extends \Google\Model
{
  protected $chunkType = GoogleCloudContactcenterinsightsV1AssistantChunk::class;
  protected $chunkDataType = '';
  /**
   * The unique ID of the event.
   *
   * @var string
   */
  public $eventId;
  /**
   * The time when the event occurred.
   *
   * @var string
   */
  public $eventTime;
  /**
   * A status message.
   *
   * @var string
   */
  public $statusMessage;

  /**
   * A chunk of the assistant response message.
   *
   * @param GoogleCloudContactcenterinsightsV1AssistantChunk $chunk
   */
  public function setChunk(GoogleCloudContactcenterinsightsV1AssistantChunk $chunk)
  {
    $this->chunk = $chunk;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1AssistantChunk
   */
  public function getChunk()
  {
    return $this->chunk;
  }
  /**
   * The unique ID of the event.
   *
   * @param string $eventId
   */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /**
   * @return string
   */
  public function getEventId()
  {
    return $this->eventId;
  }
  /**
   * The time when the event occurred.
   *
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * A status message.
   *
   * @param string $statusMessage
   */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /**
   * @return string
   */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1StreamChatResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1StreamChatResponse');
