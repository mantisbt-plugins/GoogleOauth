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

namespace Google\Service\DisplayVideo;

class EffectiveFrequencyBreakdown extends \Google\Model
{
  /**
   * The number of unique individuals, including co-viewers, exactly matching
   * the targeting that were served the ad at least the number of times dictated
   * by the effective_frequency.
   *
   * @var string
   */
  public $effectiveCoviewReach;
  /**
   * The set effective frequency.
   *
   * @var int
   */
  public $effectiveFrequency;
  /**
   * The total number of unique individuals, including co-viewers that were
   * served the ad at least the number of times dictated by the
   * effective_frequency. This includes individuals that may fall outside of
   * targeting.
   *
   * @var string
   */
  public $onTargetEffectiveCoviewReach;
  /**
   * The number of unique individuals exactly matching the targeting that were
   * served the ad at least the number of times dictated by the
   * effective_frequency.
   *
   * @var string
   */
  public $onTargetReach;
  /**
   * The total number of unique individuals that were served the ad at least the
   * number of times dictated by the effective_frequency. This includes
   * individuals that may fall outside of targeting.
   *
   * @var string
   */
  public $totalReach;

  /**
   * The number of unique individuals, including co-viewers, exactly matching
   * the targeting that were served the ad at least the number of times dictated
   * by the effective_frequency.
   *
   * @param string $effectiveCoviewReach
   */
  public function setEffectiveCoviewReach($effectiveCoviewReach)
  {
    $this->effectiveCoviewReach = $effectiveCoviewReach;
  }
  /**
   * @return string
   */
  public function getEffectiveCoviewReach()
  {
    return $this->effectiveCoviewReach;
  }
  /**
   * The set effective frequency.
   *
   * @param int $effectiveFrequency
   */
  public function setEffectiveFrequency($effectiveFrequency)
  {
    $this->effectiveFrequency = $effectiveFrequency;
  }
  /**
   * @return int
   */
  public function getEffectiveFrequency()
  {
    return $this->effectiveFrequency;
  }
  /**
   * The total number of unique individuals, including co-viewers that were
   * served the ad at least the number of times dictated by the
   * effective_frequency. This includes individuals that may fall outside of
   * targeting.
   *
   * @param string $onTargetEffectiveCoviewReach
   */
  public function setOnTargetEffectiveCoviewReach($onTargetEffectiveCoviewReach)
  {
    $this->onTargetEffectiveCoviewReach = $onTargetEffectiveCoviewReach;
  }
  /**
   * @return string
   */
  public function getOnTargetEffectiveCoviewReach()
  {
    return $this->onTargetEffectiveCoviewReach;
  }
  /**
   * The number of unique individuals exactly matching the targeting that were
   * served the ad at least the number of times dictated by the
   * effective_frequency.
   *
   * @param string $onTargetReach
   */
  public function setOnTargetReach($onTargetReach)
  {
    $this->onTargetReach = $onTargetReach;
  }
  /**
   * @return string
   */
  public function getOnTargetReach()
  {
    return $this->onTargetReach;
  }
  /**
   * The total number of unique individuals that were served the ad at least the
   * number of times dictated by the effective_frequency. This includes
   * individuals that may fall outside of targeting.
   *
   * @param string $totalReach
   */
  public function setTotalReach($totalReach)
  {
    $this->totalReach = $totalReach;
  }
  /**
   * @return string
   */
  public function getTotalReach()
  {
    return $this->totalReach;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EffectiveFrequencyBreakdown::class, 'Google_Service_DisplayVideo_EffectiveFrequencyBreakdown');
