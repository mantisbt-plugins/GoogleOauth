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

namespace Google\Service\AgentIdentity;

class IdTokenProcessingConfig extends \Google\Model
{
  protected $agentIdentityPoolType = AgentIdentityPool::class;
  protected $agentIdentityPoolDataType = '';
  /**
   * Optional. Optional additional claims to include when fetching an ID-JAG.
   *
   * @var array[]
   */
  public $idJagAdditionalClaims;
  /**
   * The resource name of the ID-JAG auth provider. Format:
   * "projects/{project}/locations/{location}/authProviders/{auth_provider}"
   *
   * @var string
   */
  public $idJagAuthProvider;

  /**
   * Indicates the managed Agent Identity pool should be used to fetch the ID-
   * JAG.
   *
   * @param AgentIdentityPool $agentIdentityPool
   */
  public function setAgentIdentityPool(AgentIdentityPool $agentIdentityPool)
  {
    $this->agentIdentityPool = $agentIdentityPool;
  }
  /**
   * @return AgentIdentityPool
   */
  public function getAgentIdentityPool()
  {
    return $this->agentIdentityPool;
  }
  /**
   * Optional. Optional additional claims to include when fetching an ID-JAG.
   *
   * @param array[] $idJagAdditionalClaims
   */
  public function setIdJagAdditionalClaims($idJagAdditionalClaims)
  {
    $this->idJagAdditionalClaims = $idJagAdditionalClaims;
  }
  /**
   * @return array[]
   */
  public function getIdJagAdditionalClaims()
  {
    return $this->idJagAdditionalClaims;
  }
  /**
   * The resource name of the ID-JAG auth provider. Format:
   * "projects/{project}/locations/{location}/authProviders/{auth_provider}"
   *
   * @param string $idJagAuthProvider
   */
  public function setIdJagAuthProvider($idJagAuthProvider)
  {
    $this->idJagAuthProvider = $idJagAuthProvider;
  }
  /**
   * @return string
   */
  public function getIdJagAuthProvider()
  {
    return $this->idJagAuthProvider;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdTokenProcessingConfig::class, 'Google_Service_AgentIdentity_IdTokenProcessingConfig');
