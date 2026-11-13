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

class GoogleCloudContactcenterinsightsV1AssistantMessage extends \Google\Collection
{
  /**
   * Default value for unspecified.
   */
  public const ROLE_ROLE_UNSPECIFIED = 'ROLE_UNSPECIFIED';
  /**
   * The user role.
   */
  public const ROLE_USER = 'USER';
  /**
   * The model role.
   */
  public const ROLE_MODEL = 'MODEL';
  protected $collection_key = 'chunks';
  protected $chunksType = GoogleCloudContactcenterinsightsV1AssistantChunk::class;
  protected $chunksDataType = 'array';
  /**
   * Required. Timestamp when the message was sent or received.
   *
   * @var string
   */
  public $eventTime;
  /**
   * Required. Role within the conversation.
   *
   * @var string
   */
  public $role;

  /**
   * Required. Content of the message.
   *
   * @param GoogleCloudContactcenterinsightsV1AssistantChunk[] $chunks
   */
  public function setChunks($chunks)
  {
    $this->chunks = $chunks;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1AssistantChunk[]
   */
  public function getChunks()
  {
    return $this->chunks;
  }
  /**
   * Required. Timestamp when the message was sent or received.
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
   * Required. Role within the conversation.
   *
   * Accepted values: ROLE_UNSPECIFIED, USER, MODEL
   *
   * @param self::ROLE_* $role
   */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /**
   * @return self::ROLE_*
   */
  public function getRole()
  {
    return $this->role;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1AssistantMessage::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AssistantMessage');
