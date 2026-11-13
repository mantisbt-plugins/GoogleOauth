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

class Thread extends \Google\Collection
{
  /**
   * Thread state unspecified.
   */
  public const THREAD_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Thread was terminated.
   */
  public const THREAD_STATE_THREAD_STATE_TERMINATED = 'THREAD_STATE_TERMINATED';
  /**
   * Thread was runnable.
   */
  public const THREAD_STATE_THREAD_STATE_RUNNABLE = 'THREAD_STATE_RUNNABLE';
  /**
   * Thread was waiting with a timeout.
   */
  public const THREAD_STATE_THREAD_STATE_TIMED_WAITING = 'THREAD_STATE_TIMED_WAITING';
  /**
   * Thread was blocked.
   */
  public const THREAD_STATE_THREAD_STATE_BLOCKED = 'THREAD_STATE_BLOCKED';
  /**
   * Thread was waiting.
   */
  public const THREAD_STATE_THREAD_STATE_WAITING = 'THREAD_STATE_WAITING';
  /**
   * Thread was started, yet to run anything.
   */
  public const THREAD_STATE_THREAD_STATE_NEW = 'THREAD_STATE_NEW';
  /**
   * The thread was native and we could not heuristically determine that it was
   * was waiting, so assume it's runnable.
   */
  public const THREAD_STATE_THREAD_STATE_NATIVE_RUNNABLE = 'THREAD_STATE_NATIVE_RUNNABLE';
  /**
   * We heuristically determined that the thread is waiting.
   */
  public const THREAD_STATE_THREAD_STATE_NATIVE_WAITING = 'THREAD_STATE_NATIVE_WAITING';
  protected $collection_key = 'frames';
  /**
   * True when the Crashlytics analysis has determined that the stacktrace in
   * this thread is where the fault occurred.
   *
   * @var bool
   */
  public $blamed;
  /**
   * The address of the signal that caused the application to crash. Only
   * present on crashed native threads.
   *
   * @var string
   */
  public $crashAddress;
  /**
   * True when the thread has crashed.
   *
   * @var bool
   */
  public $crashed;
  protected $framesType = Frame::class;
  protected $framesDataType = 'array';
  /**
   * The name of the thread.
   *
   * @var string
   */
  public $name;
  /**
   * The queue on which the thread was running.
   *
   * @var string
   */
  public $queue;
  /**
   * The name of the signal that caused the app to crash. Only present on
   * crashed native threads.
   *
   * @var string
   */
  public $signal;
  /**
   * The code of the signal that caused the app to crash. Only present on
   * crashed native threads.
   *
   * @var string
   */
  public $signalCode;
  /**
   * The subtitle of the thread.
   *
   * @var string
   */
  public $subtitle;
  /**
   * The system id of the thread, only available for ANR threads.
   *
   * @var string
   */
  public $sysThreadId;
  /**
   * The id of the thread, only available for ANR threads.
   *
   * @var string
   */
  public $threadId;
  /**
   * Output only. The state of the thread at the time the ANR occurred.
   *
   * @var string
   */
  public $threadState;
  /**
   * The title of the thread.
   *
   * @var string
   */
  public $title;

  /**
   * True when the Crashlytics analysis has determined that the stacktrace in
   * this thread is where the fault occurred.
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
   * The address of the signal that caused the application to crash. Only
   * present on crashed native threads.
   *
   * @param string $crashAddress
   */
  public function setCrashAddress($crashAddress)
  {
    $this->crashAddress = $crashAddress;
  }
  /**
   * @return string
   */
  public function getCrashAddress()
  {
    return $this->crashAddress;
  }
  /**
   * True when the thread has crashed.
   *
   * @param bool $crashed
   */
  public function setCrashed($crashed)
  {
    $this->crashed = $crashed;
  }
  /**
   * @return bool
   */
  public function getCrashed()
  {
    return $this->crashed;
  }
  /**
   * The frames in the thread's stacktrace.
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
   * The name of the thread.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
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
   * The name of the signal that caused the app to crash. Only present on
   * crashed native threads.
   *
   * @param string $signal
   */
  public function setSignal($signal)
  {
    $this->signal = $signal;
  }
  /**
   * @return string
   */
  public function getSignal()
  {
    return $this->signal;
  }
  /**
   * The code of the signal that caused the app to crash. Only present on
   * crashed native threads.
   *
   * @param string $signalCode
   */
  public function setSignalCode($signalCode)
  {
    $this->signalCode = $signalCode;
  }
  /**
   * @return string
   */
  public function getSignalCode()
  {
    return $this->signalCode;
  }
  /**
   * The subtitle of the thread.
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
   * The system id of the thread, only available for ANR threads.
   *
   * @param string $sysThreadId
   */
  public function setSysThreadId($sysThreadId)
  {
    $this->sysThreadId = $sysThreadId;
  }
  /**
   * @return string
   */
  public function getSysThreadId()
  {
    return $this->sysThreadId;
  }
  /**
   * The id of the thread, only available for ANR threads.
   *
   * @param string $threadId
   */
  public function setThreadId($threadId)
  {
    $this->threadId = $threadId;
  }
  /**
   * @return string
   */
  public function getThreadId()
  {
    return $this->threadId;
  }
  /**
   * Output only. The state of the thread at the time the ANR occurred.
   *
   * Accepted values: STATE_UNSPECIFIED, THREAD_STATE_TERMINATED,
   * THREAD_STATE_RUNNABLE, THREAD_STATE_TIMED_WAITING, THREAD_STATE_BLOCKED,
   * THREAD_STATE_WAITING, THREAD_STATE_NEW, THREAD_STATE_NATIVE_RUNNABLE,
   * THREAD_STATE_NATIVE_WAITING
   *
   * @param self::THREAD_STATE_* $threadState
   */
  public function setThreadState($threadState)
  {
    $this->threadState = $threadState;
  }
  /**
   * @return self::THREAD_STATE_*
   */
  public function getThreadState()
  {
    return $this->threadState;
  }
  /**
   * The title of the thread.
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
class_alias(Thread::class, 'Google_Service_FirebaseCrashlytics_Thread');
