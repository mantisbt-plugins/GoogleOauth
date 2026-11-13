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

namespace Google\Service\HomeGraphService;

class MediaUrlsStruct extends \Google\Model
{
  /**
   * URL for a dash manifest for playback
   *
   * @var string
   */
  public $dashManifestUrl;
  /**
   * URL for a hls master playlist for playback
   *
   * @var string
   */
  public $hlsMasterPlaylistUrl;
  /**
   * URL for animated preview clip representing the event session
   *
   * @var string
   */
  public $previewUrl;
  /**
   * URL for thumbnail image representing the event session
   *
   * @var string
   */
  public $thumbnailUrl;

  /**
   * URL for a dash manifest for playback
   *
   * @param string $dashManifestUrl
   */
  public function setDashManifestUrl($dashManifestUrl)
  {
    $this->dashManifestUrl = $dashManifestUrl;
  }
  /**
   * @return string
   */
  public function getDashManifestUrl()
  {
    return $this->dashManifestUrl;
  }
  /**
   * URL for a hls master playlist for playback
   *
   * @param string $hlsMasterPlaylistUrl
   */
  public function setHlsMasterPlaylistUrl($hlsMasterPlaylistUrl)
  {
    $this->hlsMasterPlaylistUrl = $hlsMasterPlaylistUrl;
  }
  /**
   * @return string
   */
  public function getHlsMasterPlaylistUrl()
  {
    return $this->hlsMasterPlaylistUrl;
  }
  /**
   * URL for animated preview clip representing the event session
   *
   * @param string $previewUrl
   */
  public function setPreviewUrl($previewUrl)
  {
    $this->previewUrl = $previewUrl;
  }
  /**
   * @return string
   */
  public function getPreviewUrl()
  {
    return $this->previewUrl;
  }
  /**
   * URL for thumbnail image representing the event session
   *
   * @param string $thumbnailUrl
   */
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  /**
   * @return string
   */
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MediaUrlsStruct::class, 'Google_Service_HomeGraphService_MediaUrlsStruct');
