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

namespace Google\Service\DatabaseMigrationService;

class EntityStatusView extends \Google\Collection
{
  /**
   * The kind of the DDL is unknown.
   */
  public const DRAFT_DDL_KIND_DDL_KIND_UNSPECIFIED = 'DDL_KIND_UNSPECIFIED';
  /**
   * DDL of the source entity
   */
  public const DRAFT_DDL_KIND_SOURCE = 'SOURCE';
  /**
   * Deterministic converted DDL
   */
  public const DRAFT_DDL_KIND_DETERMINISTIC = 'DETERMINISTIC';
  /**
   * Gemini AI converted DDL
   */
  public const DRAFT_DDL_KIND_AI = 'AI';
  /**
   * User edited DDL
   */
  public const DRAFT_DDL_KIND_USER_EDIT = 'USER_EDIT';
  /**
   * The kind of the DDL is unknown.
   */
  public const EDITED_DDL_KIND_DDL_KIND_UNSPECIFIED = 'DDL_KIND_UNSPECIFIED';
  /**
   * DDL of the source entity
   */
  public const EDITED_DDL_KIND_SOURCE = 'SOURCE';
  /**
   * Deterministic converted DDL
   */
  public const EDITED_DDL_KIND_DETERMINISTIC = 'DETERMINISTIC';
  /**
   * Gemini AI converted DDL
   */
  public const EDITED_DDL_KIND_AI = 'AI';
  /**
   * User edited DDL
   */
  public const EDITED_DDL_KIND_USER_EDIT = 'USER_EDIT';
  protected $collection_key = 'dependencies';
  protected $dependenciesType = EntityId::class;
  protected $dependenciesDataType = 'array';
  /**
   * The DDL Kind selected for apply. If UNSPECIFIED, the entity wasn't
   * converted yet. For SUMMARY view, this rolls up from descendants with the
   * logic of UNSPECIFIED < DETERMINISTIC < AI. USER_EDIT is not propagated.
   *
   * @var string
   */
  public $draftDdlKind;
  protected $draftEntityType = EntityId::class;
  protected $draftEntityDataType = '';
  /**
   * If ddl_kind is USER_EDIT, this holds the DDL kind of the original content -
   * DETERMINISTIC or AI. Otherwise, this is DDL_KIND_UNSPECIFIED. Relevant only
   * for FULL view.
   *
   * @var string
   */
  public $editedDdlKind;
  protected $issuesType = IssueAggregateData::class;
  protected $issuesDataType = '';
  protected $resolvedIssuesType = IssueAggregateData::class;
  protected $resolvedIssuesDataType = '';
  protected $sourceEntityType = EntityId::class;
  protected $sourceEntityDataType = '';
  /**
   * Optional. Whether the entity has successfully generated and executed
   * validation tests.
   *
   * @var bool
   */
  public $testedEntity;
  /**
   * Was the entity applied on the destination. Relevant only for FULL view.
   *
   * @var bool
   */
  public $wasApplied;

  /**
   * Optional. The set of entities that this entity directly depends on, i.e.,
   * it does not include transitive dependencies. Provided only for
   * FULL_WITH_DEPENDENCIES view. Dependencies are provided according to the
   * request tree type.
   *
   * @param EntityId[] $dependencies
   */
  public function setDependencies($dependencies)
  {
    $this->dependencies = $dependencies;
  }
  /**
   * @return EntityId[]
   */
  public function getDependencies()
  {
    return $this->dependencies;
  }
  /**
   * The DDL Kind selected for apply. If UNSPECIFIED, the entity wasn't
   * converted yet. For SUMMARY view, this rolls up from descendants with the
   * logic of UNSPECIFIED < DETERMINISTIC < AI. USER_EDIT is not propagated.
   *
   * Accepted values: DDL_KIND_UNSPECIFIED, SOURCE, DETERMINISTIC, AI, USER_EDIT
   *
   * @param self::DRAFT_DDL_KIND_* $draftDdlKind
   */
  public function setDraftDdlKind($draftDdlKind)
  {
    $this->draftDdlKind = $draftDdlKind;
  }
  /**
   * @return self::DRAFT_DDL_KIND_*
   */
  public function getDraftDdlKind()
  {
    return $this->draftDdlKind;
  }
  /**
   * The entity short name and type from the DRAFT tree.
   *
   * @param EntityId $draftEntity
   */
  public function setDraftEntity(EntityId $draftEntity)
  {
    $this->draftEntity = $draftEntity;
  }
  /**
   * @return EntityId
   */
  public function getDraftEntity()
  {
    return $this->draftEntity;
  }
  /**
   * If ddl_kind is USER_EDIT, this holds the DDL kind of the original content -
   * DETERMINISTIC or AI. Otherwise, this is DDL_KIND_UNSPECIFIED. Relevant only
   * for FULL view.
   *
   * Accepted values: DDL_KIND_UNSPECIFIED, SOURCE, DETERMINISTIC, AI, USER_EDIT
   *
   * @param self::EDITED_DDL_KIND_* $editedDdlKind
   */
  public function setEditedDdlKind($editedDdlKind)
  {
    $this->editedDdlKind = $editedDdlKind;
  }
  /**
   * @return self::EDITED_DDL_KIND_*
   */
  public function getEditedDdlKind()
  {
    return $this->editedDdlKind;
  }
  /**
   * Unresolved issues information according to the current Draft DdlKind.
   *
   * @param IssueAggregateData $issues
   */
  public function setIssues(IssueAggregateData $issues)
  {
    $this->issues = $issues;
  }
  /**
   * @return IssueAggregateData
   */
  public function getIssues()
  {
    return $this->issues;
  }
  /**
   * Resolved issues information according to the current Draft DdlKind.
   *
   * @param IssueAggregateData $resolvedIssues
   */
  public function setResolvedIssues(IssueAggregateData $resolvedIssues)
  {
    $this->resolvedIssues = $resolvedIssues;
  }
  /**
   * @return IssueAggregateData
   */
  public function getResolvedIssues()
  {
    return $this->resolvedIssues;
  }
  /**
   * The entity short name and type from the SOURCE tree.
   *
   * @param EntityId $sourceEntity
   */
  public function setSourceEntity(EntityId $sourceEntity)
  {
    $this->sourceEntity = $sourceEntity;
  }
  /**
   * @return EntityId
   */
  public function getSourceEntity()
  {
    return $this->sourceEntity;
  }
  /**
   * Optional. Whether the entity has successfully generated and executed
   * validation tests.
   *
   * @param bool $testedEntity
   */
  public function setTestedEntity($testedEntity)
  {
    $this->testedEntity = $testedEntity;
  }
  /**
   * @return bool
   */
  public function getTestedEntity()
  {
    return $this->testedEntity;
  }
  /**
   * Was the entity applied on the destination. Relevant only for FULL view.
   *
   * @param bool $wasApplied
   */
  public function setWasApplied($wasApplied)
  {
    $this->wasApplied = $wasApplied;
  }
  /**
   * @return bool
   */
  public function getWasApplied()
  {
    return $this->wasApplied;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityStatusView::class, 'Google_Service_DatabaseMigrationService_EntityStatusView');
