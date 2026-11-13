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

namespace Google\Service\FirebaseCrashlytics;

class Breadcrumb extends \Google\Model
{
  /**
   * Device timestamp for the event.
   *
   * @var string
   */
  public $eventTime;
  /**
   * Event parameters.
   *
   * @var string[]
   */
  public $params;
  /**
   * Analytic event name.
   *
   * @var string
   */
  public $title;

  /**
   * Device timestamp for the event.
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
   * Event parameters.
   *
   * @param string[] $params
   */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /**
   * @return string[]
   */
  public function getParams()
  {
    return $this->params;
  }
  /**
   * Analytic event name.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Breadcrumb::class, 'Google_Service_FirebaseCrashlytics_Breadcrumb');
