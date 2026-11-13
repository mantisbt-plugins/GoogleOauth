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

namespace Google\Service\ServiceControl;

class CallerAgent extends \Google\Model
{
  /**
   * Default value. Should not be used.
   */
  public const AUTHORITY_AUTHORITY_TYPE_UNSPECIFIED = 'AUTHORITY_TYPE_UNSPECIFIED';
  /**
   * Acts under its own authority.
   */
  public const AUTHORITY_SELF = 'SELF';
  /**
   * Acts on behalf of another authority.
   */
  public const AUTHORITY_ON_BEHALF_OF = 'ON_BEHALF_OF';
  /**
   * The type of authority for the caller agent.
   *
   * @var string
   */
  public $authority;
  /**
   * The agent identifier of the caller agent. This is a globally unique,
   * immutable name in Uniform Resource Name (URN) format. Example:
   * 'urn:agent:projects-123456789:projects:123456789:locations:us-
   * central1:aiplatform:reasoningEngines:987654321'
   *
   * @var string
   */
  public $id;

  /**
   * The type of authority for the caller agent.
   *
   * Accepted values: AUTHORITY_TYPE_UNSPECIFIED, SELF, ON_BEHALF_OF
   *
   * @param self::AUTHORITY_* $authority
   */
  public function setAuthority($authority)
  {
    $this->authority = $authority;
  }
  /**
   * @return self::AUTHORITY_*
   */
  public function getAuthority()
  {
    return $this->authority;
  }
  /**
   * The agent identifier of the caller agent. This is a globally unique,
   * immutable name in Uniform Resource Name (URN) format. Example:
   * 'urn:agent:projects-123456789:projects:123456789:locations:us-
   * central1:aiplatform:reasoningEngines:987654321'
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CallerAgent::class, 'Google_Service_ServiceControl_CallerAgent');
