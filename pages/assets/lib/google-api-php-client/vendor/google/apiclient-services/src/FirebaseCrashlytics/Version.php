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

class Version extends \Google\Collection
{
  protected $collection_key = 'tracks';
  /**
   * Mobile only. One display_version can have many build_version. On Android,
   * strictly the same as "version code". On iOS, strictly the same as "build
   * number" or CFBundleVersion.
   *
   * @var string
   */
  public $buildVersion;
  /**
   * Compound readable string containing both display and build versions.
   * Format: "display_version (build_version)" e.g. "1.2.3 (456)". This string
   * can be used for filtering with the VersionFilter.display_name field.
   *
   * @var string
   */
  public $displayName;
  /**
   * Readable version string, e.g. "1.2.3". On Android, strictly the same as
   * "version name". On iOS, strictly the same as "version number" or
   * CFBundleShortVersionString.
   *
   * @var string
   */
  public $displayVersion;
  protected $tracksType = PlayTrack::class;
  protected $tracksDataType = 'array';

  /**
   * Mobile only. One display_version can have many build_version. On Android,
   * strictly the same as "version code". On iOS, strictly the same as "build
   * number" or CFBundleVersion.
   *
   * @param string $buildVersion
   */
  public function setBuildVersion($buildVersion)
  {
    $this->buildVersion = $buildVersion;
  }
  /**
   * @return string
   */
  public function getBuildVersion()
  {
    return $this->buildVersion;
  }
  /**
   * Compound readable string containing both display and build versions.
   * Format: "display_version (build_version)" e.g. "1.2.3 (456)". This string
   * can be used for filtering with the VersionFilter.display_name field.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Readable version string, e.g. "1.2.3". On Android, strictly the same as
   * "version name". On iOS, strictly the same as "version number" or
   * CFBundleShortVersionString.
   *
   * @param string $displayVersion
   */
  public function setDisplayVersion($displayVersion)
  {
    $this->displayVersion = $displayVersion;
  }
  /**
   * @return string
   */
  public function getDisplayVersion()
  {
    return $this->displayVersion;
  }
  /**
   * Indicates releases which have artifacts that are currently available in the
   * Play Store to the target audience of the track. Versions may be available
   * in multiple tracks.
   *
   * @param PlayTrack[] $tracks
   */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /**
   * @return PlayTrack[]
   */
  public function getTracks()
  {
    return $this->tracks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Version::class, 'Google_Service_FirebaseCrashlytics_Version');
