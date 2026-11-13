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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1EntryLinkTypeEvent extends \Google\Model
{
  /**
   * An unspecified event type.
   */
  public const EVENT_TYPE_EVENT_TYPE_UNSPECIFIED = 'EVENT_TYPE_UNSPECIFIED';
  /**
   * EntryLinkType create event.
   */
  public const EVENT_TYPE_ENTRY_LINK_TYPE_CREATE = 'ENTRY_LINK_TYPE_CREATE';
  /**
   * EntryLinkType update event.
   */
  public const EVENT_TYPE_ENTRY_LINK_TYPE_UPDATE = 'ENTRY_LINK_TYPE_UPDATE';
  /**
   * EntryLinkType delete event.
   */
  public const EVENT_TYPE_ENTRY_LINK_TYPE_DELETE = 'ENTRY_LINK_TYPE_DELETE';
  /**
   * Name of the resource.
   *
   * @var string
   */
  public $entryLinkTypeId;
  /**
   * The type of the event.
   *
   * @var string
   */
  public $eventType;
  /**
   * The log message.
   *
   * @var string
   */
  public $message;

  /**
   * Name of the resource.
   *
   * @param string $entryLinkTypeId
   */
  public function setEntryLinkTypeId($entryLinkTypeId)
  {
    $this->entryLinkTypeId = $entryLinkTypeId;
  }
  /**
   * @return string
   */
  public function getEntryLinkTypeId()
  {
    return $this->entryLinkTypeId;
  }
  /**
   * The type of the event.
   *
   * Accepted values: EVENT_TYPE_UNSPECIFIED, ENTRY_LINK_TYPE_CREATE,
   * ENTRY_LINK_TYPE_UPDATE, ENTRY_LINK_TYPE_DELETE
   *
   * @param self::EVENT_TYPE_* $eventType
   */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /**
   * @return self::EVENT_TYPE_*
   */
  public function getEventType()
  {
    return $this->eventType;
  }
  /**
   * The log message.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1EntryLinkTypeEvent::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EntryLinkTypeEvent');
