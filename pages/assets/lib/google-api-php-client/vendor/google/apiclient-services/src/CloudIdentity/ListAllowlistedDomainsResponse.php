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

namespace Google\Service\CloudIdentity;

class ListAllowlistedDomainsResponse extends \Google\Collection
{
  protected $collection_key = 'allowlistedDomains';
  protected $allowlistedDomainsType = AllowlistedDomain::class;
  protected $allowlistedDomainsDataType = 'array';
  /**
   * Contains the next page token if the result is not exhaustive. If there are
   * no more results, this token is empty.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * Contains the list of domains in the allowlist. There is no defined ordering
   * of domains within a result.
   *
   * @param AllowlistedDomain[] $allowlistedDomains
   */
  public function setAllowlistedDomains($allowlistedDomains)
  {
    $this->allowlistedDomains = $allowlistedDomains;
  }
  /**
   * @return AllowlistedDomain[]
   */
  public function getAllowlistedDomains()
  {
    return $this->allowlistedDomains;
  }
  /**
   * Contains the next page token if the result is not exhaustive. If there are
   * no more results, this token is empty.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListAllowlistedDomainsResponse::class, 'Google_Service_CloudIdentity_ListAllowlistedDomainsResponse');
