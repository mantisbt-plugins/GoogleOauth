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

class PlayTrack extends \Google\Model
{
  /**
   * Unknown.
   */
  public const TYPE_TRACK_TYPE_UNSPECIFIED = 'TRACK_TYPE_UNSPECIFIED';
  /**
   * Production.
   */
  public const TYPE_TRACK_TYPE_PROD = 'TRACK_TYPE_PROD';
  /**
   * Internal testing.
   */
  public const TYPE_TRACK_TYPE_INTERNAL = 'TRACK_TYPE_INTERNAL';
  /**
   * Open testing.
   */
  public const TYPE_TRACK_TYPE_OPEN_TESTING = 'TRACK_TYPE_OPEN_TESTING';
  /**
   * Closed testing.
   */
  public const TYPE_TRACK_TYPE_CLOSED_TESTING = 'TRACK_TYPE_CLOSED_TESTING';
  /**
   * Early access.
   */
  public const TYPE_TRACK_TYPE_EARLY_ACCESS = 'TRACK_TYPE_EARLY_ACCESS';
  /**
   * User-generated or auto-generated name of the track. PROD and INTERNAL track
   * types always have auto-generated names, e.g. "prod" and "internal"
   * respectively. Tracks of type EARLY_ACCESS always have a user-generated
   * name. Other track types do not have any guarantees, might have user-
   * generated or auto-generated names.
   *
   * @var string
   */
  public $title;
  /**
   * The type of track (prod, internal, etc...).
   *
   * @var string
   */
  public $type;

  /**
   * User-generated or auto-generated name of the track. PROD and INTERNAL track
   * types always have auto-generated names, e.g. "prod" and "internal"
   * respectively. Tracks of type EARLY_ACCESS always have a user-generated
   * name. Other track types do not have any guarantees, might have user-
   * generated or auto-generated names.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * The type of track (prod, internal, etc...).
   *
   * Accepted values: TRACK_TYPE_UNSPECIFIED, TRACK_TYPE_PROD,
   * TRACK_TYPE_INTERNAL, TRACK_TYPE_OPEN_TESTING, TRACK_TYPE_CLOSED_TESTING,
   * TRACK_TYPE_EARLY_ACCESS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlayTrack::class, 'Google_Service_FirebaseCrashlytics_PlayTrack');
