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

class IssueSignals extends \Google\Model
{
  /**
   * Default.
   */
  public const SIGNAL_SIGNAL_UNSPECIFIED = 'SIGNAL_UNSPECIFIED';
  /**
   * Indicates an issue that is impacting end users early in the app session.
   */
  public const SIGNAL_SIGNAL_EARLY = 'SIGNAL_EARLY';
  /**
   * Indicates newly detected issues.
   */
  public const SIGNAL_SIGNAL_FRESH = 'SIGNAL_FRESH';
  /**
   * Indicates previously closed issues which have been detected again.
   */
  public const SIGNAL_SIGNAL_REGRESSED = 'SIGNAL_REGRESSED';
  /**
   * Indicates issues impacting some end users multiple times.
   */
  public const SIGNAL_SIGNAL_REPETITIVE = 'SIGNAL_REPETITIVE';
  /**
   * Output only. Supporting detail information.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The signal name.
   *
   * @var string
   */
  public $signal;

  /**
   * Output only. Supporting detail information.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The signal name.
   *
   * Accepted values: SIGNAL_UNSPECIFIED, SIGNAL_EARLY, SIGNAL_FRESH,
   * SIGNAL_REGRESSED, SIGNAL_REPETITIVE
   *
   * @param self::SIGNAL_* $signal
   */
  public function setSignal($signal)
  {
    $this->signal = $signal;
  }
  /**
   * @return self::SIGNAL_*
   */
  public function getSignal()
  {
    return $this->signal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IssueSignals::class, 'Google_Service_FirebaseCrashlytics_IssueSignals');
