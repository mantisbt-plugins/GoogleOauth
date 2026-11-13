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

namespace Google\Service\Backupdr;

class BindingSummary extends \Google\Model
{
  /**
   * Output only. Total count of Projects protected with this policy.
   *
   * @var string
   */
  public $projectCount;

  /**
   * Output only. Total count of Projects protected with this policy.
   *
   * @param string $projectCount
   */
  public function setProjectCount($projectCount)
  {
    $this->projectCount = $projectCount;
  }
  /**
   * @return string
   */
  public function getProjectCount()
  {
    return $this->projectCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BindingSummary::class, 'Google_Service_Backupdr_BindingSummary');
