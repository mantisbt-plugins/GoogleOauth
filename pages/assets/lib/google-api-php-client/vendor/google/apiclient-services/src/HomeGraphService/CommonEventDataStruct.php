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

class CommonEventDataStruct extends \Google\Model
{
  protected $mediaUrlsType = MediaUrlsStruct::class;
  protected $mediaUrlsDataType = '';
  /**
   * Camera event session id. Used for identifying a unique event session
   *
   * @var string
   */
  public $sessionId;
  /**
   * Id of the track this object belongs to
   *
   * @var string
   */
  public $trackId;

  /**
   * Contains media urls for the event
   *
   * @param MediaUrlsStruct $mediaUrls
   */
  public function setMediaUrls(MediaUrlsStruct $mediaUrls)
  {
    $this->mediaUrls = $mediaUrls;
  }
  /**
   * @return MediaUrlsStruct
   */
  public function getMediaUrls()
  {
    return $this->mediaUrls;
  }
  /**
   * Camera event session id. Used for identifying a unique event session
   *
   * @param string $sessionId
   */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /**
   * @return string
   */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /**
   * Id of the track this object belongs to
   *
   * @param string $trackId
   */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /**
   * @return string
   */
  public function getTrackId()
  {
    return $this->trackId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommonEventDataStruct::class, 'Google_Service_HomeGraphService_CommonEventDataStruct');
