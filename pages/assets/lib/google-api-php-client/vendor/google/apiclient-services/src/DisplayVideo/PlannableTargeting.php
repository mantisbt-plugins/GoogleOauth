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

class PlannableTargeting extends \Google\Collection
{
  protected $collection_key = 'youtubeSelectLineups';
  /**
   * Output only. Allowed plannable age ranges for the product. Actual targeting
   * is computed by mapping this age range onto standard Google age targeting.
   *
   * @var string[]
   */
  public $ageRanges;
  protected $defaultYoutubeSelectLineupType = YouTubeSelectLineUp::class;
  protected $defaultYoutubeSelectLineupDataType = '';
  /**
   * Output only. Targetable devices for the ad product.
   *
   * @var string[]
   */
  public $devices;
  /**
   * Output only. Targetable genders for the ad product.
   *
   * @var string[]
   */
  public $genders;
  /**
   * Output only. Targetable networks for the ad product.
   *
   * @var string[]
   */
  public $networks;
  protected $surfaceTargetingCombinationsType = SurfaceTargetingCombinations::class;
  protected $surfaceTargetingCombinationsDataType = '';
  protected $youtubeSelectLineupsType = YouTubeSelectLineUp::class;
  protected $youtubeSelectLineupsDataType = 'array';

  /**
   * Output only. Allowed plannable age ranges for the product. Actual targeting
   * is computed by mapping this age range onto standard Google age targeting.
   *
   * @param string[] $ageRanges
   */
  public function setAgeRanges($ageRanges)
  {
    $this->ageRanges = $ageRanges;
  }
  /**
   * @return string[]
   */
  public function getAgeRanges()
  {
    return $this->ageRanges;
  }
  /**
   * Output only. The default YouTube Select Lineup for this product, if
   * applicable.
   *
   * @param YouTubeSelectLineUp $defaultYoutubeSelectLineup
   */
  public function setDefaultYoutubeSelectLineup(YouTubeSelectLineUp $defaultYoutubeSelectLineup)
  {
    $this->defaultYoutubeSelectLineup = $defaultYoutubeSelectLineup;
  }
  /**
   * @return YouTubeSelectLineUp
   */
  public function getDefaultYoutubeSelectLineup()
  {
    return $this->defaultYoutubeSelectLineup;
  }
  /**
   * Output only. Targetable devices for the ad product.
   *
   * @param string[] $devices
   */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /**
   * @return string[]
   */
  public function getDevices()
  {
    return $this->devices;
  }
  /**
   * Output only. Targetable genders for the ad product.
   *
   * @param string[] $genders
   */
  public function setGenders($genders)
  {
    $this->genders = $genders;
  }
  /**
   * @return string[]
   */
  public function getGenders()
  {
    return $this->genders;
  }
  /**
   * Output only. Targetable networks for the ad product.
   *
   * @param string[] $networks
   */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /**
   * @return string[]
   */
  public function getNetworks()
  {
    return $this->networks;
  }
  /**
   * Output only. Targetable surface combinations for the ad product.
   *
   * @param SurfaceTargetingCombinations $surfaceTargetingCombinations
   */
  public function setSurfaceTargetingCombinations(SurfaceTargetingCombinations $surfaceTargetingCombinations)
  {
    $this->surfaceTargetingCombinations = $surfaceTargetingCombinations;
  }
  /**
   * @return SurfaceTargetingCombinations
   */
  public function getSurfaceTargetingCombinations()
  {
    return $this->surfaceTargetingCombinations;
  }
  /**
   * Output only. Targetable YouTube Select Lineups for the ad product.
   *
   * @param YouTubeSelectLineUp[] $youtubeSelectLineups
   */
  public function setYoutubeSelectLineups($youtubeSelectLineups)
  {
    $this->youtubeSelectLineups = $youtubeSelectLineups;
  }
  /**
   * @return YouTubeSelectLineUp[]
   */
  public function getYoutubeSelectLineups()
  {
    return $this->youtubeSelectLineups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannableTargeting::class, 'Google_Service_DisplayVideo_PlannableTargeting');
