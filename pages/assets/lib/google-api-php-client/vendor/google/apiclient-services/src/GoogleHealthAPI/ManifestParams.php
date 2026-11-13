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

namespace Google\Service\GoogleHealthAPI;

class ManifestParams extends \Google\Model
{
  /**
   * Optional. Integer upper bound on the length of embedded payloads
   *
   * @var int
   */
  public $embeddedLengthMax;
  /**
   * Optional.
   *
   * @var string
   */
  public $passcode;
  /**
   * Required. A string describing the recipient (e.g.,the name of an
   * organization or person) suitable for display to the Receiving User
   *
   * @var string
   */
  public $recipient;

  /**
   * Optional. Integer upper bound on the length of embedded payloads
   *
   * @param int $embeddedLengthMax
   */
  public function setEmbeddedLengthMax($embeddedLengthMax)
  {
    $this->embeddedLengthMax = $embeddedLengthMax;
  }
  /**
   * @return int
   */
  public function getEmbeddedLengthMax()
  {
    return $this->embeddedLengthMax;
  }
  /**
   * Optional.
   *
   * @param string $passcode
   */
  public function setPasscode($passcode)
  {
    $this->passcode = $passcode;
  }
  /**
   * @return string
   */
  public function getPasscode()
  {
    return $this->passcode;
  }
  /**
   * Required. A string describing the recipient (e.g.,the name of an
   * organization or person) suitable for display to the Receiving User
   *
   * @param string $recipient
   */
  public function setRecipient($recipient)
  {
    $this->recipient = $recipient;
  }
  /**
   * @return string
   */
  public function getRecipient()
  {
    return $this->recipient;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManifestParams::class, 'Google_Service_GoogleHealthAPI_ManifestParams');
