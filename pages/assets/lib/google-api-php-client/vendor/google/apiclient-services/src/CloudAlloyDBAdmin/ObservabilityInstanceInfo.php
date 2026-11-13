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

namespace Google\Service\CloudAlloyDBAdmin;

class ObservabilityInstanceInfo extends \Google\Model
{
  /**
   * Output only. Observability feature status for an instance.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Output only. Query string length. The default value is 10k.
   *
   * @var int
   */
  public $maxQueryStringLength;
  /**
   * Output only. Preserve comments in query string for an instance.
   *
   * @var bool
   */
  public $preserveComments;
  /**
   * Output only. Number of query execution plans captured by Insights per
   * minute for all queries combined.
   *
   * @var int
   */
  public $queryPlansPerMinute;
  /**
   * Output only. Record application tags for an instance.
   *
   * @var bool
   */
  public $recordApplicationTags;
  /**
   * Output only. Track actively running queries on the instance.
   *
   * @var bool
   */
  public $trackActiveQueries;
  /**
   * Output only. Track wait event types during query execution for an instance.
   *
   * @var bool
   */
  public $trackWaitEventTypes;
  /**
   * Output only. Track wait events during query execution for an instance.
   *
   * @var bool
   */
  public $trackWaitEvents;

  /**
   * Output only. Observability feature status for an instance.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Output only. Query string length. The default value is 10k.
   *
   * @param int $maxQueryStringLength
   */
  public function setMaxQueryStringLength($maxQueryStringLength)
  {
    $this->maxQueryStringLength = $maxQueryStringLength;
  }
  /**
   * @return int
   */
  public function getMaxQueryStringLength()
  {
    return $this->maxQueryStringLength;
  }
  /**
   * Output only. Preserve comments in query string for an instance.
   *
   * @param bool $preserveComments
   */
  public function setPreserveComments($preserveComments)
  {
    $this->preserveComments = $preserveComments;
  }
  /**
   * @return bool
   */
  public function getPreserveComments()
  {
    return $this->preserveComments;
  }
  /**
   * Output only. Number of query execution plans captured by Insights per
   * minute for all queries combined.
   *
   * @param int $queryPlansPerMinute
   */
  public function setQueryPlansPerMinute($queryPlansPerMinute)
  {
    $this->queryPlansPerMinute = $queryPlansPerMinute;
  }
  /**
   * @return int
   */
  public function getQueryPlansPerMinute()
  {
    return $this->queryPlansPerMinute;
  }
  /**
   * Output only. Record application tags for an instance.
   *
   * @param bool $recordApplicationTags
   */
  public function setRecordApplicationTags($recordApplicationTags)
  {
    $this->recordApplicationTags = $recordApplicationTags;
  }
  /**
   * @return bool
   */
  public function getRecordApplicationTags()
  {
    return $this->recordApplicationTags;
  }
  /**
   * Output only. Track actively running queries on the instance.
   *
   * @param bool $trackActiveQueries
   */
  public function setTrackActiveQueries($trackActiveQueries)
  {
    $this->trackActiveQueries = $trackActiveQueries;
  }
  /**
   * @return bool
   */
  public function getTrackActiveQueries()
  {
    return $this->trackActiveQueries;
  }
  /**
   * Output only. Track wait event types during query execution for an instance.
   *
   * @param bool $trackWaitEventTypes
   */
  public function setTrackWaitEventTypes($trackWaitEventTypes)
  {
    $this->trackWaitEventTypes = $trackWaitEventTypes;
  }
  /**
   * @return bool
   */
  public function getTrackWaitEventTypes()
  {
    return $this->trackWaitEventTypes;
  }
  /**
   * Output only. Track wait events during query execution for an instance.
   *
   * @param bool $trackWaitEvents
   */
  public function setTrackWaitEvents($trackWaitEvents)
  {
    $this->trackWaitEvents = $trackWaitEvents;
  }
  /**
   * @return bool
   */
  public function getTrackWaitEvents()
  {
    return $this->trackWaitEvents;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ObservabilityInstanceInfo::class, 'Google_Service_CloudAlloyDBAdmin_ObservabilityInstanceInfo');
