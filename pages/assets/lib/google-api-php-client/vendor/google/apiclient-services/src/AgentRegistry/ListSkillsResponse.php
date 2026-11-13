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

namespace Google\Service\AgentRegistry;

class ListSkillsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * Page continuation continuation token.
   *
   * @var string
   */
  public $nextPageToken;
  protected $skillsType = Skill::class;
  protected $skillsDataType = 'array';
  /**
   * Unreachable locations or failures.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * Page continuation continuation token.
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
  /**
   * Returned container list.
   *
   * @param Skill[] $skills
   */
  public function setSkills($skills)
  {
    $this->skills = $skills;
  }
  /**
   * @return Skill[]
   */
  public function getSkills()
  {
    return $this->skills;
  }
  /**
   * Unreachable locations or failures.
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListSkillsResponse::class, 'Google_Service_AgentRegistry_ListSkillsResponse');
