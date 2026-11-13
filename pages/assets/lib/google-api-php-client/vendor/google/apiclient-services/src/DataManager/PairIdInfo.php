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

namespace Google\Service\DataManager;

class PairIdInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $advertiserIdentifierCount;
  /**
   * @var string
   */
  public $cleanRoomIdentifier;
  /**
   * @var int
   */
  public $matchRatePercentage;
  /**
   * @var string
   */
  public $publisherId;
  /**
   * @var string
   */
  public $publisherName;

  /**
   * @param string $advertiserIdentifierCount
   */
  public function setAdvertiserIdentifierCount($advertiserIdentifierCount)
  {
    $this->advertiserIdentifierCount = $advertiserIdentifierCount;
  }
  /**
   * @return string
   */
  public function getAdvertiserIdentifierCount()
  {
    return $this->advertiserIdentifierCount;
  }
  /**
   * @param string $cleanRoomIdentifier
   */
  public function setCleanRoomIdentifier($cleanRoomIdentifier)
  {
    $this->cleanRoomIdentifier = $cleanRoomIdentifier;
  }
  /**
   * @return string
   */
  public function getCleanRoomIdentifier()
  {
    return $this->cleanRoomIdentifier;
  }
  /**
   * @param int $matchRatePercentage
   */
  public function setMatchRatePercentage($matchRatePercentage)
  {
    $this->matchRatePercentage = $matchRatePercentage;
  }
  /**
   * @return int
   */
  public function getMatchRatePercentage()
  {
    return $this->matchRatePercentage;
  }
  /**
   * @param string $publisherId
   */
  public function setPublisherId($publisherId)
  {
    $this->publisherId = $publisherId;
  }
  /**
   * @return string
   */
  public function getPublisherId()
  {
    return $this->publisherId;
  }
  /**
   * @param string $publisherName
   */
  public function setPublisherName($publisherName)
  {
    $this->publisherName = $publisherName;
  }
  /**
   * @return string
   */
  public function getPublisherName()
  {
    return $this->publisherName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PairIdInfo::class, 'Google_Service_DataManager_PairIdInfo');
