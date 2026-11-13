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

class SetDraftEntityDdlRequest extends \Google\Model
{
  /**
   * The kind of the DDL is unknown.
   */
  public const BASED_ON_DDL_KIND_DDL_KIND_UNSPECIFIED = 'DDL_KIND_UNSPECIFIED';
  /**
   * DDL of the source entity
   */
  public const BASED_ON_DDL_KIND_SOURCE = 'SOURCE';
  /**
   * Deterministic converted DDL
   */
  public const BASED_ON_DDL_KIND_DETERMINISTIC = 'DETERMINISTIC';
  /**
   * Gemini AI converted DDL
   */
  public const BASED_ON_DDL_KIND_AI = 'AI';
  /**
   * User edited DDL
   */
  public const BASED_ON_DDL_KIND_USER_EDIT = 'USER_EDIT';
  /**
   * The kind of the DDL is unknown.
   */
  public const DDL_KIND_DDL_KIND_UNSPECIFIED = 'DDL_KIND_UNSPECIFIED';
  /**
   * DDL of the source entity
   */
  public const DDL_KIND_SOURCE = 'SOURCE';
  /**
   * Deterministic converted DDL
   */
  public const DDL_KIND_DETERMINISTIC = 'DETERMINISTIC';
  /**
   * Gemini AI converted DDL
   */
  public const DDL_KIND_AI = 'AI';
  /**
   * User edited DDL
   */
  public const DDL_KIND_USER_EDIT = 'USER_EDIT';
  /**
   * Unspecified database entity type.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_UNSPECIFIED = 'DATABASE_ENTITY_TYPE_UNSPECIFIED';
  /**
   * Schema.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_SCHEMA = 'DATABASE_ENTITY_TYPE_SCHEMA';
  /**
   * Table.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_TABLE = 'DATABASE_ENTITY_TYPE_TABLE';
  /**
   * Column.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_COLUMN = 'DATABASE_ENTITY_TYPE_COLUMN';
  /**
   * Constraint.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_CONSTRAINT = 'DATABASE_ENTITY_TYPE_CONSTRAINT';
  /**
   * Index.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_INDEX = 'DATABASE_ENTITY_TYPE_INDEX';
  /**
   * Trigger.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_TRIGGER = 'DATABASE_ENTITY_TYPE_TRIGGER';
  /**
   * View.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_VIEW = 'DATABASE_ENTITY_TYPE_VIEW';
  /**
   * Sequence.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_SEQUENCE = 'DATABASE_ENTITY_TYPE_SEQUENCE';
  /**
   * Stored Procedure.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_STORED_PROCEDURE = 'DATABASE_ENTITY_TYPE_STORED_PROCEDURE';
  /**
   * Function.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_FUNCTION = 'DATABASE_ENTITY_TYPE_FUNCTION';
  /**
   * Synonym.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_SYNONYM = 'DATABASE_ENTITY_TYPE_SYNONYM';
  /**
   * Package.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_DATABASE_PACKAGE = 'DATABASE_ENTITY_TYPE_DATABASE_PACKAGE';
  /**
   * UDT.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_UDT = 'DATABASE_ENTITY_TYPE_UDT';
  /**
   * Materialized View.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW = 'DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW';
  /**
   * Database.
   */
  public const ENTITY_TYPE_DATABASE_ENTITY_TYPE_DATABASE = 'DATABASE_ENTITY_TYPE_DATABASE';
  /**
   * Optional. Which DDL (Deterministic/AI) the updated DDL is based on.
   * Defaults to DETERMINISTIC if not specified.
   *
   * @var string
   */
  public $basedOnDdlKind;
  /**
   * Required. The DDL to set.
   *
   * @var string
   */
  public $ddl;
  /**
   * Optional. The updated DDL Kind. Can be either USER_EDIT (default) or AI.
   *
   * @var string
   */
  public $ddlKind;
  /**
   * Required. The draft entity full name from the tree. .
   *
   * @var string
   */
  public $entityName;
  /**
   * Required. The type of the database entity (table, view, index, ...).
   *
   * @var string
   */
  public $entityType;
  /**
   * Optional. An optional explanation of the generated DDL if ddl_kind is AI.
   *
   * @var string
   */
  public $explanation;

  /**
   * Optional. Which DDL (Deterministic/AI) the updated DDL is based on.
   * Defaults to DETERMINISTIC if not specified.
   *
   * Accepted values: DDL_KIND_UNSPECIFIED, SOURCE, DETERMINISTIC, AI, USER_EDIT
   *
   * @param self::BASED_ON_DDL_KIND_* $basedOnDdlKind
   */
  public function setBasedOnDdlKind($basedOnDdlKind)
  {
    $this->basedOnDdlKind = $basedOnDdlKind;
  }
  /**
   * @return self::BASED_ON_DDL_KIND_*
   */
  public function getBasedOnDdlKind()
  {
    return $this->basedOnDdlKind;
  }
  /**
   * Required. The DDL to set.
   *
   * @param string $ddl
   */
  public function setDdl($ddl)
  {
    $this->ddl = $ddl;
  }
  /**
   * @return string
   */
  public function getDdl()
  {
    return $this->ddl;
  }
  /**
   * Optional. The updated DDL Kind. Can be either USER_EDIT (default) or AI.
   *
   * Accepted values: DDL_KIND_UNSPECIFIED, SOURCE, DETERMINISTIC, AI, USER_EDIT
   *
   * @param self::DDL_KIND_* $ddlKind
   */
  public function setDdlKind($ddlKind)
  {
    $this->ddlKind = $ddlKind;
  }
  /**
   * @return self::DDL_KIND_*
   */
  public function getDdlKind()
  {
    return $this->ddlKind;
  }
  /**
   * Required. The draft entity full name from the tree. .
   *
   * @param string $entityName
   */
  public function setEntityName($entityName)
  {
    $this->entityName = $entityName;
  }
  /**
   * @return string
   */
  public function getEntityName()
  {
    return $this->entityName;
  }
  /**
   * Required. The type of the database entity (table, view, index, ...).
   *
   * Accepted values: DATABASE_ENTITY_TYPE_UNSPECIFIED,
   * DATABASE_ENTITY_TYPE_SCHEMA, DATABASE_ENTITY_TYPE_TABLE,
   * DATABASE_ENTITY_TYPE_COLUMN, DATABASE_ENTITY_TYPE_CONSTRAINT,
   * DATABASE_ENTITY_TYPE_INDEX, DATABASE_ENTITY_TYPE_TRIGGER,
   * DATABASE_ENTITY_TYPE_VIEW, DATABASE_ENTITY_TYPE_SEQUENCE,
   * DATABASE_ENTITY_TYPE_STORED_PROCEDURE, DATABASE_ENTITY_TYPE_FUNCTION,
   * DATABASE_ENTITY_TYPE_SYNONYM, DATABASE_ENTITY_TYPE_DATABASE_PACKAGE,
   * DATABASE_ENTITY_TYPE_UDT, DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW,
   * DATABASE_ENTITY_TYPE_DATABASE
   *
   * @param self::ENTITY_TYPE_* $entityType
   */
  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }
  /**
   * @return self::ENTITY_TYPE_*
   */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /**
   * Optional. An optional explanation of the generated DDL if ddl_kind is AI.
   *
   * @param string $explanation
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SetDraftEntityDdlRequest::class, 'Google_Service_DatabaseMigrationService_SetDraftEntityDdlRequest');
