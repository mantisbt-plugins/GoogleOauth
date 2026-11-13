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

namespace Google\Service\AgentRegistry\Resource;

use Google\Service\AgentRegistry\ListSkillRevisionsResponse;
use Google\Service\AgentRegistry\Operation;
use Google\Service\AgentRegistry\SkillRevision;

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentregistryService = new Google\Service\AgentRegistry(...);
 *   $revisions = $agentregistryService->projects_locations_skills_revisions;
 *  </code>
 */
class ProjectsLocationsSkillsRevisions extends \Google\Service\Resource
{
  /**
   * Creates a new immutable revision and triggers validation pipelines.
   * (revisions.create)
   *
   * @param string $parent Required. Parent logical container name.
   * @param SkillRevision $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. Signed UUID request idempotency token.
   * @opt_param string skillRevisionId Optional. Custom, user-defined unique
   * revision identifier. Format: 4-63 characters, matching regex
   * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, SkillRevision $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a specific revision (restricted to admins to purge accidentally
   * committed secrets). (revisions.delete)
   *
   * @param string $name Required. Target revision name to remove.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. Signed UUID request idempotency token.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets details of a single immutable Revision. (revisions.get)
   *
   * @param string $name Required. Target revision name.
   * @param array $optParams Optional parameters.
   * @return SkillRevision
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SkillRevision::class);
  }
  /**
   * Lists all revisions belonging to a parent Skill.
   * (revisions.listProjectsLocationsSkillsRevisions)
   *
   * @param string $parent Required. Parent logical container name to query.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Page limit size.
   * @opt_param string pageToken Optional. Page offset token.
   * @return ListSkillRevisionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSkillsRevisions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSkillRevisionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSkillsRevisions::class, 'Google_Service_AgentRegistry_Resource_ProjectsLocationsSkillsRevisions');
