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

class Error extends \Google\Collection
{
  protected $collection_key = 'frames';
  /**
   * True when the Crashlytics analysis has determined that the stacktrace in
   * this error is where the fault occurred.
   *
   * @var bool
   */
  public $blamed;
  /**
   * Error code associated with the app's custom logged NSError.
   *
   * @var string
   */
  public $code;
  protected $framesType = Frame::class;
  protected $framesDataType = 'array';
  /**
   * The queue on which the thread was running.
   *
   * @var string
   */
  public $queue;
  /**
   * The subtitle of the error.
   *
   * @var string
   */
  public $subtitle;
  /**
   * The title of the error.
   *
   * @var string
   */
  public $title;

  /**
   * True when the Crashlytics analysis has determined that the stacktrace in
   * this error is where the fault occurred.
   *
   * @param bool $blamed
   */
  public function setBlamed($blamed)
  {
    $this->blamed = $blamed;
  }
  /**
   * @return bool
   */
  public function getBlamed()
  {
    return $this->blamed;
  }
  /**
   * Error code associated with the app's custom logged NSError.
   *
   * @param string $code
   */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /**
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * The frames in the error's stacktrace.
   *
   * @param Frame[] $frames
   */
  public function setFrames($frames)
  {
    $this->frames = $frames;
  }
  /**
   * @return Frame[]
   */
  public function getFrames()
  {
    return $this->frames;
  }
  /**
   * The queue on which the thread was running.
   *
   * @param string $queue
   */
  public function setQueue($queue)
  {
    $this->queue = $queue;
  }
  /**
   * @return string
   */
  public function getQueue()
  {
    return $this->queue;
  }
  /**
   * The subtitle of the error.
   *
   * @param string $subtitle
   */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /**
   * @return string
   */
  public function getSubtitle()
  {
    return $this->subtitle;
  }
  /**
   * The title of the error.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Error::class, 'Google_Service_FirebaseCrashlytics_Error');
