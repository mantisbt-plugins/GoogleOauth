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

class ConnectorReferenceAuthProvider extends \Google\Collection
{
  protected $collection_key = 'authorizationDetails';
  /**
   * Optional. Rich Authorization Requests (RFC 9396) detailing targeted OAuth
   * resources/scopes, formatted as a JSON array of JSON objects.
   *
   * @var array[]
   */
  public $authorizationDetails;
  /**
   * Required. The name of the referenced connector.
   *
   * @var string
   */
  public $connector;

  /**
   * Optional. Rich Authorization Requests (RFC 9396) detailing targeted OAuth
   * resources/scopes, formatted as a JSON array of JSON objects.
   *
   * @param array[] $authorizationDetails
   */
  public function setAuthorizationDetails($authorizationDetails)
  {
    $this->authorizationDetails = $authorizationDetails;
  }
  /**
   * @return array[]
   */
  public function getAuthorizationDetails()
  {
    return $this->authorizationDetails;
  }
  /**
   * Required. The name of the referenced connector.
   *
   * @param string $connector
   */
  public function setConnector($connector)
  {
    $this->connector = $connector;
  }
  /**
   * @return string
   */
  public function getConnector()
  {
    return $this->connector;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectorReferenceAuthProvider::class, 'Google_Service_AgentIdentity_ConnectorReferenceAuthProvider');
