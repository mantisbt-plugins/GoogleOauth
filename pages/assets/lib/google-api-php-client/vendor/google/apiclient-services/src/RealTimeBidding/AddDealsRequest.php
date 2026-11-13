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

namespace Google\Service\RealTimeBidding;

class AddDealsRequest extends \Google\Collection
{
  protected $collection_key = 'dealIds';
  /**
   * Required. The IDs of the deals to associate with the creative. This can
   * include Programmatic Guaranteed, Private Auction, Preferred Deal, and
   * Marketplace Package deal IDs. You can associate no more than 100 deal IDs
   * per request.
   *
   * @var string[]
   */
  public $dealIds;

  /**
   * Required. The IDs of the deals to associate with the creative. This can
   * include Programmatic Guaranteed, Private Auction, Preferred Deal, and
   * Marketplace Package deal IDs. You can associate no more than 100 deal IDs
   * per request.
   *
   * @param string[] $dealIds
   */
  public function setDealIds($dealIds)
  {
    $this->dealIds = $dealIds;
  }
  /**
   * @return string[]
   */
  public function getDealIds()
  {
    return $this->dealIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddDealsRequest::class, 'Google_Service_RealTimeBidding_AddDealsRequest');
