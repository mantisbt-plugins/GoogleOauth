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

namespace Google\Service\SecurityCommandCenter;

class AgentAnomaly extends \Google\Collection
{
  protected $collection_key = 'invocationReferences';
  public $confidenceScore;
  protected $detectorReferencesType = DetectorReference::class;
  protected $detectorReferencesDataType = 'array';
  protected $invocationReferencesType = InvocationReference::class;
  protected $invocationReferencesDataType = 'array';

  public function setConfidenceScore($confidenceScore)
  {
    $this->confidenceScore = $confidenceScore;
  }
  public function getConfidenceScore()
  {
    return $this->confidenceScore;
  }
  /**
   * @param DetectorReference[] $detectorReferences
   */
  public function setDetectorReferences($detectorReferences)
  {
    $this->detectorReferences = $detectorReferences;
  }
  /**
   * @return DetectorReference[]
   */
  public function getDetectorReferences()
  {
    return $this->detectorReferences;
  }
  /**
   * @param InvocationReference[] $invocationReferences
   */
  public function setInvocationReferences($invocationReferences)
  {
    $this->invocationReferences = $invocationReferences;
  }
  /**
   * @return InvocationReference[]
   */
  public function getInvocationReferences()
  {
    return $this->invocationReferences;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentAnomaly::class, 'Google_Service_SecurityCommandCenter_AgentAnomaly');
