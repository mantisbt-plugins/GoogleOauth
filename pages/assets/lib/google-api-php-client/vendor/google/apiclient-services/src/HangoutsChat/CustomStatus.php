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

class CustomStatus extends \Google\Model
{
  protected $emojiType = Emoji::class;
  protected $emojiDataType = '';
  /**
   * The timestamp when the custom status expires.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Required. The text of the custom status. This will be a string with maximum
   * length of 64.
   *
   * @var string
   */
  public $text;
  /**
   * Input only. The time-to-live duration after which the custom status
   * expires.
   *
   * @var string
   */
  public $ttl;

  /**
   * Required. The emoji of the custom status. Only Unicode emojis are
   * supported; custom emojis are not supported.
   *
   * @param Emoji $emoji
   */
  public function setEmoji(Emoji $emoji)
  {
    $this->emoji = $emoji;
  }
  /**
   * @return Emoji
   */
  public function getEmoji()
  {
    return $this->emoji;
  }
  /**
   * The timestamp when the custom status expires.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Required. The text of the custom status. This will be a string with maximum
   * length of 64.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Input only. The time-to-live duration after which the custom status
   * expires.
   *
   * @param string $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return string
   */
  public function getTtl()
  {
    return $this->ttl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomStatus::class, 'Google_Service_HangoutsChat_CustomStatus');
