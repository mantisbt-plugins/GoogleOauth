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

class QueryInsightsInstanceInfo extends \Google\Model
{
  /**
   * Output only. Whether Query Insights is enabled.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Output only. Number of query execution plans captured per minute.
   *
   * @var string
   */
  public $queryPlansPerMinute;
  /**
   * Output only. Maximum query string length.
   *
   * @var string
   */
  public $queryStringLength;
  /**
   * Output only. Whether to record application tags.
   *
   * @var bool
   */
  public $recordApplicationTags;
  /**
   * Output only. Whether to record client address.
   *
   * @var bool
   */
  public $recordClientAddress;

  /**
   * Output only. Whether Query Insights is enabled.
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
   * Output only. Number of query execution plans captured per minute.
   *
   * @param string $queryPlansPerMinute
   */
  public function setQueryPlansPerMinute($queryPlansPerMinute)
  {
    $this->queryPlansPerMinute = $queryPlansPerMinute;
  }
  /**
   * @return string
   */
  public function getQueryPlansPerMinute()
  {
    return $this->queryPlansPerMinute;
  }
  /**
   * Output only. Maximum query string length.
   *
   * @param string $queryStringLength
   */
  public function setQueryStringLength($queryStringLength)
  {
    $this->queryStringLength = $queryStringLength;
  }
  /**
   * @return string
   */
  public function getQueryStringLength()
  {
    return $this->queryStringLength;
  }
  /**
   * Output only. Whether to record application tags.
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
   * Output only. Whether to record client address.
   *
   * @param bool $recordClientAddress
   */
  public function setRecordClientAddress($recordClientAddress)
  {
    $this->recordClientAddress = $recordClientAddress;
  }
  /**
   * @return bool
   */
  public function getRecordClientAddress()
  {
    return $this->recordClientAddress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryInsightsInstanceInfo::class, 'Google_Service_CloudAlloyDBAdmin_QueryInsightsInstanceInfo');
