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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1IngestionDirectContentsSourceEvent extends \Google\Model
{
  protected $contentType = GoogleCloudAiplatformV1Content::class;
  protected $contentDataType = '';
  /**
   * Optional. A unique identifier for the event. If an event with the same
   * event_id is ingested multiple times, it will be de-duplicated.
   *
   * @var string
   */
  public $eventId;
  /**
   * Optional. The time at which the event occurred. If provided, this timestamp
   * will be used for ordering events within a stream. If not provided, the
   * server-side ingestion time will be used.
   *
   * @var string
   */
  public $eventTime;

  /**
   * Required. The content of the event.
   *
   * @param GoogleCloudAiplatformV1Content $content
   */
  public function setContent(GoogleCloudAiplatformV1Content $content)
  {
    $this->content = $content;
  }
  /**
   * @return GoogleCloudAiplatformV1Content
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Optional. A unique identifier for the event. If an event with the same
   * event_id is ingested multiple times, it will be de-duplicated.
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
   * Optional. The time at which the event occurred. If provided, this timestamp
   * will be used for ordering events within a stream. If not provided, the
   * server-side ingestion time will be used.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1IngestionDirectContentsSourceEvent::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1IngestionDirectContentsSourceEvent');
