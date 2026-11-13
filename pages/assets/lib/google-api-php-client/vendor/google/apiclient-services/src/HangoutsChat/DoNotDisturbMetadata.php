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

namespace Google\Service\HangoutsChat;

class DoNotDisturbMetadata extends \Google\Model
{
  /**
   * Output only. Timestamp until which the user should be marked as
   * DO_NOT_DISTURB. This can be maximum of 1 year in the future.
   *
   * @var string
   */
  public $expirationTime;

  /**
   * Output only. Timestamp until which the user should be marked as
   * DO_NOT_DISTURB. This can be maximum of 1 year in the future.
   *
   * @param string $expirationTime
   */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /**
   * @return string
   */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DoNotDisturbMetadata::class, 'Google_Service_HangoutsChat_DoNotDisturbMetadata');
