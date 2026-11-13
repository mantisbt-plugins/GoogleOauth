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

class GoogleCloudContactcenterinsightsV1AssistantSession extends \Google\Collection
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Agent is working.
   */
  public const STATE_PROCESSING = 'PROCESSING';
  /**
   * Waiting for user input.
   */
  public const STATE_IDLE = 'IDLE';
  protected $collection_key = 'messages';
  /**
   * Output only. The time the session was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The display name of the session.
   *
   * @var string
   */
  public $displayName;
  protected $messagesType = GoogleCloudContactcenterinsightsV1AssistantMessage::class;
  protected $messagesDataType = 'array';
  /**
   * Identifier. Resource name of the session. Format: projects/{project}/locati
   * ons/{location}/assistantSessions/{assistant_session}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The user who initiated the session.
   *
   * @var string
   */
  public $requester;
  /**
   * Output only. The status of the session.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time the session was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time the session was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The display name of the session.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. History of messages in the session.
   *
   * @param GoogleCloudContactcenterinsightsV1AssistantMessage[] $messages
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1AssistantMessage[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * Identifier. Resource name of the session. Format: projects/{project}/locati
   * ons/{location}/assistantSessions/{assistant_session}
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
   * Output only. The user who initiated the session.
   *
   * @param string $requester
   */
  public function setRequester($requester)
  {
    $this->requester = $requester;
  }
  /**
   * @return string
   */
  public function getRequester()
  {
    return $this->requester;
  }
  /**
   * Output only. The status of the session.
   *
   * Accepted values: STATE_UNSPECIFIED, PROCESSING, IDLE
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The time the session was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1AssistantSession::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AssistantSession');
