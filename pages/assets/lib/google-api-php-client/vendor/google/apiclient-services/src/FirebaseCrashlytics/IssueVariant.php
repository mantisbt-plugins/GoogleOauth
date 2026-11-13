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

class IssueVariant extends \Google\Model
{
  /**
   * Output only. Immutable. Distinct identifier for the variant.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resource name for a sample event in this variant.
   *
   * @var string
   */
  public $sampleEvent;
  /**
   * Output only. Provides a link to the variant on the Firebase console. When
   * this variant is obtained as part of a Report, then the link will be
   * configured with the same time interval and filters as the request.
   *
   * @var string
   */
  public $uri;

  /**
   * Output only. Immutable. Distinct identifier for the variant.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The resource name for a sample event in this variant.
   *
   * @param string $sampleEvent
   */
  public function setSampleEvent($sampleEvent)
  {
    $this->sampleEvent = $sampleEvent;
  }
  /**
   * @return string
   */
  public function getSampleEvent()
  {
    return $this->sampleEvent;
  }
  /**
   * Output only. Provides a link to the variant on the Firebase console. When
   * this variant is obtained as part of a Report, then the link will be
   * configured with the same time interval and filters as the request.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IssueVariant::class, 'Google_Service_FirebaseCrashlytics_IssueVariant');
