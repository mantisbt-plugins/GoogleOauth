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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails extends \Google\Collection
{
  protected $collection_key = 'manualCloudControlGuide';
  /**
   * The guide for assessing a cloud control manually.
   *
   * @var string[]
   */
  public $manualCloudControlGuide;

  /**
   * The guide for assessing a cloud control manually.
   *
   * @param string[] $manualCloudControlGuide
   */
  public function setManualCloudControlGuide($manualCloudControlGuide)
  {
    $this->manualCloudControlGuide = $manualCloudControlGuide;
  }
  /**
   * @return string[]
   */
  public function getManualCloudControlGuide()
  {
    return $this->manualCloudControlGuide;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails');
