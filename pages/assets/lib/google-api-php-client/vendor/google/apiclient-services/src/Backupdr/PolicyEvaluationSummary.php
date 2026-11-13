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

class PolicyEvaluationSummary extends \Google\Model
{
  /**
   * Output only. The number of matching resources whose protection failed
   * during job run.
   *
   * @var string
   */
  public $failedResourceCount;
  /**
   * Output only. The number of resources that currently match the policy's
   * criteria.
   *
   * @var string
   */
  public $matchingResourceCount;
  /**
   * Output only. The number of matching resources that are successfully
   * protected.
   *
   * @var string
   */
  public $protectedResourceCount;

  /**
   * Output only. The number of matching resources whose protection failed
   * during job run.
   *
   * @param string $failedResourceCount
   */
  public function setFailedResourceCount($failedResourceCount)
  {
    $this->failedResourceCount = $failedResourceCount;
  }
  /**
   * @return string
   */
  public function getFailedResourceCount()
  {
    return $this->failedResourceCount;
  }
  /**
   * Output only. The number of resources that currently match the policy's
   * criteria.
   *
   * @param string $matchingResourceCount
   */
  public function setMatchingResourceCount($matchingResourceCount)
  {
    $this->matchingResourceCount = $matchingResourceCount;
  }
  /**
   * @return string
   */
  public function getMatchingResourceCount()
  {
    return $this->matchingResourceCount;
  }
  /**
   * Output only. The number of matching resources that are successfully
   * protected.
   *
   * @param string $protectedResourceCount
   */
  public function setProtectedResourceCount($protectedResourceCount)
  {
    $this->protectedResourceCount = $protectedResourceCount;
  }
  /**
   * @return string
   */
  public function getProtectedResourceCount()
  {
    return $this->protectedResourceCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PolicyEvaluationSummary::class, 'Google_Service_Backupdr_PolicyEvaluationSummary');
