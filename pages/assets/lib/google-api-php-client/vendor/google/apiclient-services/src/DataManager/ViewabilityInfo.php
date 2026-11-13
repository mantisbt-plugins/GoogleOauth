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

namespace Google\Service\DataManager;

class ViewabilityInfo extends \Google\Model
{
  public const MEDIA_QUARTILE_MEDIA_QUARTILE_UNSPECIFIED = 'MEDIA_QUARTILE_UNSPECIFIED';
  public const MEDIA_QUARTILE_MEDIA_QUARTILE_START = 'MEDIA_QUARTILE_START';
  public const MEDIA_QUARTILE_MEDIA_QUARTILE_FIRST_QUARTILE = 'MEDIA_QUARTILE_FIRST_QUARTILE';
  public const MEDIA_QUARTILE_MEDIA_QUARTILE_MIDPOINT = 'MEDIA_QUARTILE_MIDPOINT';
  public const MEDIA_QUARTILE_MEDIA_QUARTILE_THIRD_QUARTILE = 'MEDIA_QUARTILE_THIRD_QUARTILE';
  public const MEDIA_QUARTILE_MEDIA_QUARTILE_COMPLETE = 'MEDIA_QUARTILE_COMPLETE';
  public const VIEW_TYPE_VIEW_TYPE_UNSPECIFIED = 'VIEW_TYPE_UNSPECIFIED';
  public const VIEW_TYPE_VIEW_TYPE_MRC_VIEWED = 'VIEW_TYPE_MRC_VIEWED';
  public const VIEW_TYPE_VIEW_TYPE_MRC_RENDERED = 'VIEW_TYPE_MRC_RENDERED';
  /**
   * @var string
   */
  public $mediaDuration;
  /**
   * @var string
   */
  public $mediaQuartile;
  /**
   * @var bool
   */
  public $mediaSkippable;
  /**
   * @var int
   */
  public $mediaVolumePercent;
  /**
   * @var string
   */
  public $playbackDuration;
  /**
   * @var string
   */
  public $viewType;
  /**
   * @var string
   */
  public $viewableDuration;
  /**
   * @var int
   */
  public $viewablePercent;

  /**
   * @param string $mediaDuration
   */
  public function setMediaDuration($mediaDuration)
  {
    $this->mediaDuration = $mediaDuration;
  }
  /**
   * @return string
   */
  public function getMediaDuration()
  {
    return $this->mediaDuration;
  }
  /**
   * @param self::MEDIA_QUARTILE_* $mediaQuartile
   */
  public function setMediaQuartile($mediaQuartile)
  {
    $this->mediaQuartile = $mediaQuartile;
  }
  /**
   * @return self::MEDIA_QUARTILE_*
   */
  public function getMediaQuartile()
  {
    return $this->mediaQuartile;
  }
  /**
   * @param bool $mediaSkippable
   */
  public function setMediaSkippable($mediaSkippable)
  {
    $this->mediaSkippable = $mediaSkippable;
  }
  /**
   * @return bool
   */
  public function getMediaSkippable()
  {
    return $this->mediaSkippable;
  }
  /**
   * @param int $mediaVolumePercent
   */
  public function setMediaVolumePercent($mediaVolumePercent)
  {
    $this->mediaVolumePercent = $mediaVolumePercent;
  }
  /**
   * @return int
   */
  public function getMediaVolumePercent()
  {
    return $this->mediaVolumePercent;
  }
  /**
   * @param string $playbackDuration
   */
  public function setPlaybackDuration($playbackDuration)
  {
    $this->playbackDuration = $playbackDuration;
  }
  /**
   * @return string
   */
  public function getPlaybackDuration()
  {
    return $this->playbackDuration;
  }
  /**
   * @param self::VIEW_TYPE_* $viewType
   */
  public function setViewType($viewType)
  {
    $this->viewType = $viewType;
  }
  /**
   * @return self::VIEW_TYPE_*
   */
  public function getViewType()
  {
    return $this->viewType;
  }
  /**
   * @param string $viewableDuration
   */
  public function setViewableDuration($viewableDuration)
  {
    $this->viewableDuration = $viewableDuration;
  }
  /**
   * @return string
   */
  public function getViewableDuration()
  {
    return $this->viewableDuration;
  }
  /**
   * @param int $viewablePercent
   */
  public function setViewablePercent($viewablePercent)
  {
    $this->viewablePercent = $viewablePercent;
  }
  /**
   * @return int
   */
  public function getViewablePercent()
  {
    return $this->viewablePercent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ViewabilityInfo::class, 'Google_Service_DataManager_ViewabilityInfo');
