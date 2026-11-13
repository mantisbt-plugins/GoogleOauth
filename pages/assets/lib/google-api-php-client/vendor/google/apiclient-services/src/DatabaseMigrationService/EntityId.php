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

class EntityId extends \Google\Model
{
  /**
   * Unspecified database entity type.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_UNSPECIFIED = 'DATABASE_ENTITY_TYPE_UNSPECIFIED';
  /**
   * Schema.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_SCHEMA = 'DATABASE_ENTITY_TYPE_SCHEMA';
  /**
   * Table.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_TABLE = 'DATABASE_ENTITY_TYPE_TABLE';
  /**
   * Column.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_COLUMN = 'DATABASE_ENTITY_TYPE_COLUMN';
  /**
   * Constraint.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_CONSTRAINT = 'DATABASE_ENTITY_TYPE_CONSTRAINT';
  /**
   * Index.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_INDEX = 'DATABASE_ENTITY_TYPE_INDEX';
  /**
   * Trigger.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_TRIGGER = 'DATABASE_ENTITY_TYPE_TRIGGER';
  /**
   * View.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_VIEW = 'DATABASE_ENTITY_TYPE_VIEW';
  /**
   * Sequence.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_SEQUENCE = 'DATABASE_ENTITY_TYPE_SEQUENCE';
  /**
   * Stored Procedure.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_STORED_PROCEDURE = 'DATABASE_ENTITY_TYPE_STORED_PROCEDURE';
  /**
   * Function.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_FUNCTION = 'DATABASE_ENTITY_TYPE_FUNCTION';
  /**
   * Synonym.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_SYNONYM = 'DATABASE_ENTITY_TYPE_SYNONYM';
  /**
   * Package.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_DATABASE_PACKAGE = 'DATABASE_ENTITY_TYPE_DATABASE_PACKAGE';
  /**
   * UDT.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_UDT = 'DATABASE_ENTITY_TYPE_UDT';
  /**
   * Materialized View.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW = 'DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW';
  /**
   * Database.
   */
  public const PARENT_TYPE_DATABASE_ENTITY_TYPE_DATABASE = 'DATABASE_ENTITY_TYPE_DATABASE';
  /**
   * Unspecified database entity type.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_UNSPECIFIED = 'DATABASE_ENTITY_TYPE_UNSPECIFIED';
  /**
   * Schema.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_SCHEMA = 'DATABASE_ENTITY_TYPE_SCHEMA';
  /**
   * Table.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_TABLE = 'DATABASE_ENTITY_TYPE_TABLE';
  /**
   * Column.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_COLUMN = 'DATABASE_ENTITY_TYPE_COLUMN';
  /**
   * Constraint.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_CONSTRAINT = 'DATABASE_ENTITY_TYPE_CONSTRAINT';
  /**
   * Index.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_INDEX = 'DATABASE_ENTITY_TYPE_INDEX';
  /**
   * Trigger.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_TRIGGER = 'DATABASE_ENTITY_TYPE_TRIGGER';
  /**
   * View.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_VIEW = 'DATABASE_ENTITY_TYPE_VIEW';
  /**
   * Sequence.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_SEQUENCE = 'DATABASE_ENTITY_TYPE_SEQUENCE';
  /**
   * Stored Procedure.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_STORED_PROCEDURE = 'DATABASE_ENTITY_TYPE_STORED_PROCEDURE';
  /**
   * Function.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_FUNCTION = 'DATABASE_ENTITY_TYPE_FUNCTION';
  /**
   * Synonym.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_SYNONYM = 'DATABASE_ENTITY_TYPE_SYNONYM';
  /**
   * Package.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_DATABASE_PACKAGE = 'DATABASE_ENTITY_TYPE_DATABASE_PACKAGE';
  /**
   * UDT.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_UDT = 'DATABASE_ENTITY_TYPE_UDT';
  /**
   * Materialized View.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW = 'DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW';
  /**
   * Database.
   */
  public const TYPE_DATABASE_ENTITY_TYPE_DATABASE = 'DATABASE_ENTITY_TYPE_DATABASE';
  /**
   * The parent entity full name.
   *
   * @var string
   */
  public $parentName;
  /**
   * The type of the database entity (schema, table, view, ...).
   *
   * @var string
   */
  public $parentType;
  /**
   * The short name (e.g. table name) of the entity.
   *
   * @var string
   */
  public $shortName;
  /**
   * The type of the database entity (schema, table, view, index, ...).
   *
   * @var string
   */
  public $type;

  /**
   * The parent entity full name.
   *
   * @param string $parentName
   */
  public function setParentName($parentName)
  {
    $this->parentName = $parentName;
  }
  /**
   * @return string
   */
  public function getParentName()
  {
    return $this->parentName;
  }
  /**
   * The type of the database entity (schema, table, view, ...).
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
   * @param self::PARENT_TYPE_* $parentType
   */
  public function setParentType($parentType)
  {
    $this->parentType = $parentType;
  }
  /**
   * @return self::PARENT_TYPE_*
   */
  public function getParentType()
  {
    return $this->parentType;
  }
  /**
   * The short name (e.g. table name) of the entity.
   *
   * @param string $shortName
   */
  public function setShortName($shortName)
  {
    $this->shortName = $shortName;
  }
  /**
   * @return string
   */
  public function getShortName()
  {
    return $this->shortName;
  }
  /**
   * The type of the database entity (schema, table, view, index, ...).
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
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityId::class, 'Google_Service_DatabaseMigrationService_EntityId');
