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

namespace Google\Service\HomeGraphService;

class TraitData extends \Google\Model
{
  /**
   * Other metadata for the trait. The time the client update was committed in
   * the server.
   *
   * @var string
   */
  public $commitTime;
  protected $jsonTraitType = JsonTrait::class;
  protected $jsonTraitDataType = '';
  /**
   * The custom timestamp supplied by the provider during a
   * ReportStateAndNotification update (if provided). This field is returned as
   * part of the `QueryResponse`.
   *
   * @var string
   */
  public $providerUpdateTime;
  /**
   * The Provider Home API trait payload.
   *
   * @var array[]
   */
  public $trait;

  /**
   * Other metadata for the trait. The time the client update was committed in
   * the server.
   *
   * @param string $commitTime
   */
  public function setCommitTime($commitTime)
  {
    $this->commitTime = $commitTime;
  }
  /**
   * @return string
   */
  public function getCommitTime()
  {
    return $this->commitTime;
  }
  /**
   * Contains the dynamic JSON trait payload.
   *
   * @param JsonTrait $jsonTrait
   */
  public function setJsonTrait(JsonTrait $jsonTrait)
  {
    $this->jsonTrait = $jsonTrait;
  }
  /**
   * @return JsonTrait
   */
  public function getJsonTrait()
  {
    return $this->jsonTrait;
  }
  /**
   * The custom timestamp supplied by the provider during a
   * ReportStateAndNotification update (if provided). This field is returned as
   * part of the `QueryResponse`.
   *
   * @param string $providerUpdateTime
   */
  public function setProviderUpdateTime($providerUpdateTime)
  {
    $this->providerUpdateTime = $providerUpdateTime;
  }
  /**
   * @return string
   */
  public function getProviderUpdateTime()
  {
    return $this->providerUpdateTime;
  }
  /**
   * The Provider Home API trait payload.
   *
   * @param array[] $trait
   */
  public function setTrait($trait)
  {
    $this->trait = $trait;
  }
  /**
   * @return array[]
   */
  public function getTrait()
  {
    return $this->trait;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TraitData::class, 'Google_Service_HomeGraphService_TraitData');
