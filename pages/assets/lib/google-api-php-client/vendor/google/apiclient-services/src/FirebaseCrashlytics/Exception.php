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

class Exception extends \Google\Collection
{
  protected $collection_key = 'frames';
  /**
   * True when the Crashlytics analysis has determined that this thread is where
   * the fault occurred.
   *
   * @var bool
   */
  public $blamed;
  /**
   * A message associated with the exception.
   *
   * @var string
   */
  public $exceptionMessage;
  protected $framesType = Frame::class;
  protected $framesDataType = 'array';
  /**
   * True for all but the last-thrown exception (i.e. the first record).
   *
   * @var bool
   */
  public $nested;
  /**
   * The subtitle of the exception.
   *
   * @var string
   */
  public $subtitle;
  /**
   * The title of the exception.
   *
   * @var string
   */
  public $title;
  /**
   * The exception type e.g. java.lang.IllegalStateException.
   *
   * @var string
   */
  public $type;

  /**
   * True when the Crashlytics analysis has determined that this thread is where
   * the fault occurred.
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
   * A message associated with the exception.
   *
   * @param string $exceptionMessage
   */
  public function setExceptionMessage($exceptionMessage)
  {
    $this->exceptionMessage = $exceptionMessage;
  }
  /**
   * @return string
   */
  public function getExceptionMessage()
  {
    return $this->exceptionMessage;
  }
  /**
   * The frames in the exception's stacktrace.
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
   * True for all but the last-thrown exception (i.e. the first record).
   *
   * @param bool $nested
   */
  public function setNested($nested)
  {
    $this->nested = $nested;
  }
  /**
   * @return bool
   */
  public function getNested()
  {
    return $this->nested;
  }
  /**
   * The subtitle of the exception.
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
   * The title of the exception.
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
   * The exception type e.g. java.lang.IllegalStateException.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Exception::class, 'Google_Service_FirebaseCrashlytics_Exception');
