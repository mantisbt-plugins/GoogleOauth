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

class Issue extends \Google\Model
{
  /**
   * Unspecified issue category ID.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_UNSPECIFIED = 'ISSUE_CATEGORY_ID_UNSPECIFIED';
  /**
   * General conversion issues.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW00 = 'ISSUE_CATEGORY_ID_CW00';
  /**
   * Input issues.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW01 = 'ISSUE_CATEGORY_ID_CW01';
  /**
   * Source functionality not supported.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW02 = 'ISSUE_CATEGORY_ID_CW02';
  /**
   * Source feature not supported.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW03 = 'ISSUE_CATEGORY_ID_CW03';
  /**
   * Unsupported syntax.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW04 = 'ISSUE_CATEGORY_ID_CW04';
  /**
   * Data types and conversion.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW05 = 'ISSUE_CATEGORY_ID_CW05';
  /**
   * Potential functional nuances.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW06 = 'ISSUE_CATEGORY_ID_CW06';
  /**
   * Functional review recommended.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW07 = 'ISSUE_CATEGORY_ID_CW07';
  /**
   * Refactoring required.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW08 = 'ISSUE_CATEGORY_ID_CW08';
  /**
   * Gemini review recommendations.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_CW99 = 'ISSUE_CATEGORY_ID_CW99';
  /**
   * Quality assessment findings.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_QA00 = 'ISSUE_CATEGORY_ID_QA00';
  /**
   * General apply issues.
   */
  public const CATEGORY_ID_ISSUE_CATEGORY_ID_AP00 = 'ISSUE_CATEGORY_ID_AP00';
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
   * Unspecified issue group ID.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_UNSPECIFIED = 'ISSUE_GROUP_ID_UNSPECIFIED';
  /**
   * General conversion issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0000 = 'ISSUE_GROUP_ID_CW_OP0000';
  /**
   * Metadata conversion issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0001 = 'ISSUE_GROUP_ID_CW_OP0001';
  /**
   * Contact your support team.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0002 = 'ISSUE_GROUP_ID_CW_OP0002';
  /**
   * Invalid source code.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0101 = 'ISSUE_GROUP_ID_CW_OP0101';
  /**
   * Missing referenced objects.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0102 = 'ISSUE_GROUP_ID_CW_OP0102';
  /**
   * Missing primary key.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0103 = 'ISSUE_GROUP_ID_CW_OP0103';
  /**
   * Source functionality not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0200 = 'ISSUE_GROUP_ID_CW_OP0200';
  /**
   * SQLCODE not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0201 = 'ISSUE_GROUP_ID_CW_OP0201';
  /**
   * Oracle data dictionary object not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0202 = 'ISSUE_GROUP_ID_CW_OP0202';
  /**
   * Oracle SQL function not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0203 = 'ISSUE_GROUP_ID_CW_OP0203';
  /**
   * Oracle PL/SQL package not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0204 = 'ISSUE_GROUP_ID_CW_OP0204';
  /**
   * Data type not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0205 = 'ISSUE_GROUP_ID_CW_OP0205';
  /**
   * Naming conflict.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0206 = 'ISSUE_GROUP_ID_CW_OP0206';
  /**
   * Source feature not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0300 = 'ISSUE_GROUP_ID_CW_OP0300';
  /**
   * Schema objects or attributes not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0301 = 'ISSUE_GROUP_ID_CW_OP0301';
  /**
   * Synonyms not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0315 = 'ISSUE_GROUP_ID_CW_OP0315';
  /**
   * Bulk binding not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0303 = 'ISSUE_GROUP_ID_CW_OP0303';
  /**
   * Collections not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0304 = 'ISSUE_GROUP_ID_CW_OP0304';
  /**
   * Pipelined functions not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0305 = 'ISSUE_GROUP_ID_CW_OP0305';
  /**
   * Dynamic SQL not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0306 = 'ISSUE_GROUP_ID_CW_OP0306';
  /**
   * CONNECT BY option not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0307 = 'ISSUE_GROUP_ID_CW_OP0307';
  /**
   * Locking and transactions issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0308 = 'ISSUE_GROUP_ID_CW_OP0308';
  /**
   * JSON not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0309 = 'ISSUE_GROUP_ID_CW_OP0309';
  /**
   * XML not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0310 = 'ISSUE_GROUP_ID_CW_OP0310';
  /**
   * MERGE not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0311 = 'ISSUE_GROUP_ID_CW_OP0311';
  /**
   * PIVOT not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0312 = 'ISSUE_GROUP_ID_CW_OP0312';
  /**
   * ALTER statement option not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0313 = 'ISSUE_GROUP_ID_CW_OP0313';
  /**
   * SQL feature not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0314 = 'ISSUE_GROUP_ID_CW_OP0314';
  /**
   * PL/SQL feature not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0302 = 'ISSUE_GROUP_ID_CW_OP0302';
  /**
   * Unsupported syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0400 = 'ISSUE_GROUP_ID_CW_OP0400';
  /**
   * Unsupported SQL syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0401 = 'ISSUE_GROUP_ID_CW_OP0401';
  /**
   * Unsupported PL/SQL syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0402 = 'ISSUE_GROUP_ID_CW_OP0402';
  /**
   * Unsupported date and timestamp syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0403 = 'ISSUE_GROUP_ID_CW_OP0403';
  /**
   * Unsupported exceptions syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0404 = 'ISSUE_GROUP_ID_CW_OP0404';
  /**
   * Data types and conversion issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0500 = 'ISSUE_GROUP_ID_CW_OP0500';
  /**
   * Date format model issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0501 = 'ISSUE_GROUP_ID_CW_OP0501';
  /**
   * Numeric format model issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0502 = 'ISSUE_GROUP_ID_CW_OP0502';
  /**
   * Casting issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0503 = 'ISSUE_GROUP_ID_CW_OP0503';
  /**
   * Comparison issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0504 = 'ISSUE_GROUP_ID_CW_OP0504';
  /**
   * Review date format model.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0601 = 'ISSUE_GROUP_ID_CW_OP0601';
  /**
   * Review numeric format model.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0602 = 'ISSUE_GROUP_ID_CW_OP0602';
  /**
   * Review exception code.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0603 = 'ISSUE_GROUP_ID_CW_OP0603';
  /**
   * Review exception message.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0604 = 'ISSUE_GROUP_ID_CW_OP0604';
  /**
   * Review Oracle built-in function emulation.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0605 = 'ISSUE_GROUP_ID_CW_OP0605';
  /**
   * Review foreign key column data type.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0606 = 'ISSUE_GROUP_ID_CW_OP0606';
  /**
   * Functional review recommended.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0701 = 'ISSUE_GROUP_ID_CW_OP0701';
  /**
   * Review Oracle built-in function emulation.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0702 = 'ISSUE_GROUP_ID_CW_OP0702';
  /**
   * Autonomous transactions refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0801 = 'ISSUE_GROUP_ID_CW_OP0801';
  /**
   * Database links refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0802 = 'ISSUE_GROUP_ID_CW_OP0802';
  /**
   * Advanced queuing refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0803 = 'ISSUE_GROUP_ID_CW_OP0803';
  /**
   * Database email refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0804 = 'ISSUE_GROUP_ID_CW_OP0804';
  /**
   * Jobs and scheduling refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0805 = 'ISSUE_GROUP_ID_CW_OP0805';
  /**
   * File I/O refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0806 = 'ISSUE_GROUP_ID_CW_OP0806';
  /**
   * Synonyms refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0807 = 'ISSUE_GROUP_ID_CW_OP0807';
  /**
   * Global temporary tables refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_OP0808 = 'ISSUE_GROUP_ID_CW_OP0808';
  /**
   * Functional equivalence assessment findings.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_QA_OP0000 = 'ISSUE_GROUP_ID_QA_OP0000';
  /**
   * General conversion issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0000 = 'ISSUE_GROUP_ID_CW_SP0000';
  /**
   * Metadata conversion issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0001 = 'ISSUE_GROUP_ID_CW_SP0001';
  /**
   * Contact your support team.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0002 = 'ISSUE_GROUP_ID_CW_SP0002';
  /**
   * Invalid source code.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0101 = 'ISSUE_GROUP_ID_CW_SP0101';
  /**
   * Missing referenced objects.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0102 = 'ISSUE_GROUP_ID_CW_SP0102';
  /**
   * Missing primary key.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0103 = 'ISSUE_GROUP_ID_CW_SP0103';
  /**
   * Source functionality not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0200 = 'ISSUE_GROUP_ID_CW_SP0200';
  /**
   * SQL Server system view not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0201 = 'ISSUE_GROUP_ID_CW_SP0201';
  /**
   * SQL Server SQL function not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0202 = 'ISSUE_GROUP_ID_CW_SP0202';
  /**
   * SQL Server T-SQL object not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0203 = 'ISSUE_GROUP_ID_CW_SP0203';
  /**
   * Missing SQL Server system View
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0204 = 'ISSUE_GROUP_ID_CW_SP0204';
  /**
   * Naming conflict.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0205 = 'ISSUE_GROUP_ID_CW_SP0205';
  /**
   * Source feature not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0300 = 'ISSUE_GROUP_ID_CW_SP0300';
  /**
   * T-SQL feature not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0302 = 'ISSUE_GROUP_ID_CW_SP0302';
  /**
   * Dynamic SQL not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0306 = 'ISSUE_GROUP_ID_CW_SP0306';
  /**
   * JSON not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0308 = 'ISSUE_GROUP_ID_CW_SP0308';
  /**
   * Locking and transactions issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0309 = 'ISSUE_GROUP_ID_CW_SP0309';
  /**
   * XML not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0310 = 'ISSUE_GROUP_ID_CW_SP0310';
  /**
   * MERGE not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0311 = 'ISSUE_GROUP_ID_CW_SP0311';
  /**
   * PIVOT not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0312 = 'ISSUE_GROUP_ID_CW_SP0312';
  /**
   * ALTER statement option not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0313 = 'ISSUE_GROUP_ID_CW_SP0313';
  /**
   * SQL feature not supported.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0314 = 'ISSUE_GROUP_ID_CW_SP0314';
  /**
   * Unsupported syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0400 = 'ISSUE_GROUP_ID_CW_SP0400';
  /**
   * Unsupported SQL syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0401 = 'ISSUE_GROUP_ID_CW_SP0401';
  /**
   * Unsupported T-SQL syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0402 = 'ISSUE_GROUP_ID_CW_SP0402';
  /**
   * Unsupported date and timestamp syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0403 = 'ISSUE_GROUP_ID_CW_SP0403';
  /**
   * Unsupported exceptions syntax.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0404 = 'ISSUE_GROUP_ID_CW_SP0404';
  /**
   * Data types and conversion issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0500 = 'ISSUE_GROUP_ID_CW_SP0500';
  /**
   * Date format model issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0501 = 'ISSUE_GROUP_ID_CW_SP0501';
  /**
   * Numeric format model issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0502 = 'ISSUE_GROUP_ID_CW_SP0502';
  /**
   * Casting issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0503 = 'ISSUE_GROUP_ID_CW_SP0503';
  /**
   * Comparison issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0504 = 'ISSUE_GROUP_ID_CW_SP0504';
  /**
   * Review date format model.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0601 = 'ISSUE_GROUP_ID_CW_SP0601';
  /**
   * Review numeric format model.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0602 = 'ISSUE_GROUP_ID_CW_SP0602';
  /**
   * Review exception message.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0604 = 'ISSUE_GROUP_ID_CW_SP0604';
  /**
   * Functional review recommended.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0701 = 'ISSUE_GROUP_ID_CW_SP0701';
  /**
   * Database links refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0802 = 'ISSUE_GROUP_ID_CW_SP0802';
  /**
   * Synonyms refactoring required.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_SP0807 = 'ISSUE_GROUP_ID_CW_SP0807';
  /**
   * Functional equivalence assessment findings.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_QA_SP0000 = 'ISSUE_GROUP_ID_QA_SP0000';
  /**
   * Review Gemini suggestions.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_AI9900 = 'ISSUE_GROUP_ID_CW_AI9900';
  /**
   * Review AI-augmented code.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_AI9901 = 'ISSUE_GROUP_ID_CW_AI9901';
  /**
   * Citations for AI-augmented code.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_AI9902 = 'ISSUE_GROUP_ID_CW_AI9902';
  /**
   * General apply issues.
   */
  public const GROUP_ID_ISSUE_GROUP_ID_CW_AP0000 = 'ISSUE_GROUP_ID_CW_AP0000';
  /**
   * Unspecified issue origin.
   */
  public const ISSUE_ORIGIN_ISSUE_ORIGIN_UNSPECIFIED = 'ISSUE_ORIGIN_UNSPECIFIED';
  /**
   * Issue originated from the deterministic conversion engine.
   */
  public const ISSUE_ORIGIN_ISSUE_ORIGIN_DETERMINISTIC = 'ISSUE_ORIGIN_DETERMINISTIC';
  /**
   * Issue originated from the AI conversion engine.
   */
  public const ISSUE_ORIGIN_ISSUE_ORIGIN_AI = 'ISSUE_ORIGIN_AI';
  /**
   * CODE_CONVERSION/CST issues that were carried over to the Gemini conversion,
   */
  public const ISSUE_ORIGIN_ISSUE_ORIGIN_AI_FROM_DETERMINISTIC = 'ISSUE_ORIGIN_AI_FROM_DETERMINISTIC';
  /**
   * Unspecified issue state.
   */
  public const ISSUE_STATE_ISSUE_STATE_UNSPECIFIED = 'ISSUE_STATE_UNSPECIFIED';
  /**
   * Issue is open.
   */
  public const ISSUE_STATE_ISSUE_STATE_OPEN = 'ISSUE_STATE_OPEN';
  /**
   * Issue is resolved.
   */
  public const ISSUE_STATE_ISSUE_STATE_RESOLVED = 'ISSUE_STATE_RESOLVED';
  /**
   * Unspecified issue severity.
   */
  public const SEVERITY_ISSUE_SEVERITY_UNSPECIFIED = 'ISSUE_SEVERITY_UNSPECIFIED';
  /**
   * Info.
   */
  public const SEVERITY_ISSUE_SEVERITY_INFO = 'ISSUE_SEVERITY_INFO';
  /**
   * Warning.
   */
  public const SEVERITY_ISSUE_SEVERITY_WARNING = 'ISSUE_SEVERITY_WARNING';
  /**
   * Error.
   */
  public const SEVERITY_ISSUE_SEVERITY_ERROR = 'ISSUE_SEVERITY_ERROR';
  /**
   * Unspecified issue type.
   */
  public const TYPE_ISSUE_TYPE_UNSPECIFIED = 'ISSUE_TYPE_UNSPECIFIED';
  /**
   * Issue originated from the conversion process.
   */
  public const TYPE_ISSUE_TYPE_CONVERSION = 'ISSUE_TYPE_CONVERSION';
  /**
   * Issue originated from the pull schema process.
   */
  public const TYPE_ISSUE_TYPE_PULL_SCHEMA = 'ISSUE_TYPE_PULL_SCHEMA';
  /**
   * Issue originated from the apply process.
   */
  public const TYPE_ISSUE_TYPE_APPLY = 'ISSUE_TYPE_APPLY';
  /**
   * The category ID.
   *
   * @var string
   */
  public $categoryId;
  /**
   * Entity full name.
   *
   * @var string
   */
  public $entityFullName;
  /**
   * The entity type (if the DDL is for a sub entity).
   *
   * @var string
   */
  public $entityType;
  /**
   * The group ID.
   *
   * @var string
   */
  public $groupId;
  /**
   * Unique Issue ID. Use this ID when referencing a specific issue in other API
   * calls, such as DataMigrationService.SetIssuesState.
   *
   * @var string
   */
  public $id;
  /**
   * The source of the issue (deterministic, gemini, etc).
   *
   * @var string
   */
  public $issueOrigin;
  /**
   * Output only. The state of the issue (open, resolved, etc).
   *
   * @var string
   */
  public $issueState;
  /**
   * Issue detailed message.
   *
   * @var string
   */
  public $message;
  protected $positionType = FetchIssuesResponseIssuePosition::class;
  protected $positionDataType = '';
  /**
   * Severity of the issue.
   *
   * @var string
   */
  public $severity;
  /**
   * The type of the issue.
   *
   * @var string
   */
  public $type;

  /**
   * The category ID.
   *
   * Accepted values: ISSUE_CATEGORY_ID_UNSPECIFIED, ISSUE_CATEGORY_ID_CW00,
   * ISSUE_CATEGORY_ID_CW01, ISSUE_CATEGORY_ID_CW02, ISSUE_CATEGORY_ID_CW03,
   * ISSUE_CATEGORY_ID_CW04, ISSUE_CATEGORY_ID_CW05, ISSUE_CATEGORY_ID_CW06,
   * ISSUE_CATEGORY_ID_CW07, ISSUE_CATEGORY_ID_CW08, ISSUE_CATEGORY_ID_CW99,
   * ISSUE_CATEGORY_ID_QA00, ISSUE_CATEGORY_ID_AP00
   *
   * @param self::CATEGORY_ID_* $categoryId
   */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /**
   * @return self::CATEGORY_ID_*
   */
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  /**
   * Entity full name.
   *
   * @param string $entityFullName
   */
  public function setEntityFullName($entityFullName)
  {
    $this->entityFullName = $entityFullName;
  }
  /**
   * @return string
   */
  public function getEntityFullName()
  {
    return $this->entityFullName;
  }
  /**
   * The entity type (if the DDL is for a sub entity).
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
   * The group ID.
   *
   * Accepted values: ISSUE_GROUP_ID_UNSPECIFIED, ISSUE_GROUP_ID_CW_OP0000,
   * ISSUE_GROUP_ID_CW_OP0001, ISSUE_GROUP_ID_CW_OP0002,
   * ISSUE_GROUP_ID_CW_OP0101, ISSUE_GROUP_ID_CW_OP0102,
   * ISSUE_GROUP_ID_CW_OP0103, ISSUE_GROUP_ID_CW_OP0200,
   * ISSUE_GROUP_ID_CW_OP0201, ISSUE_GROUP_ID_CW_OP0202,
   * ISSUE_GROUP_ID_CW_OP0203, ISSUE_GROUP_ID_CW_OP0204,
   * ISSUE_GROUP_ID_CW_OP0205, ISSUE_GROUP_ID_CW_OP0206,
   * ISSUE_GROUP_ID_CW_OP0300, ISSUE_GROUP_ID_CW_OP0301,
   * ISSUE_GROUP_ID_CW_OP0315, ISSUE_GROUP_ID_CW_OP0303,
   * ISSUE_GROUP_ID_CW_OP0304, ISSUE_GROUP_ID_CW_OP0305,
   * ISSUE_GROUP_ID_CW_OP0306, ISSUE_GROUP_ID_CW_OP0307,
   * ISSUE_GROUP_ID_CW_OP0308, ISSUE_GROUP_ID_CW_OP0309,
   * ISSUE_GROUP_ID_CW_OP0310, ISSUE_GROUP_ID_CW_OP0311,
   * ISSUE_GROUP_ID_CW_OP0312, ISSUE_GROUP_ID_CW_OP0313,
   * ISSUE_GROUP_ID_CW_OP0314, ISSUE_GROUP_ID_CW_OP0302,
   * ISSUE_GROUP_ID_CW_OP0400, ISSUE_GROUP_ID_CW_OP0401,
   * ISSUE_GROUP_ID_CW_OP0402, ISSUE_GROUP_ID_CW_OP0403,
   * ISSUE_GROUP_ID_CW_OP0404, ISSUE_GROUP_ID_CW_OP0500,
   * ISSUE_GROUP_ID_CW_OP0501, ISSUE_GROUP_ID_CW_OP0502,
   * ISSUE_GROUP_ID_CW_OP0503, ISSUE_GROUP_ID_CW_OP0504,
   * ISSUE_GROUP_ID_CW_OP0601, ISSUE_GROUP_ID_CW_OP0602,
   * ISSUE_GROUP_ID_CW_OP0603, ISSUE_GROUP_ID_CW_OP0604,
   * ISSUE_GROUP_ID_CW_OP0605, ISSUE_GROUP_ID_CW_OP0606,
   * ISSUE_GROUP_ID_CW_OP0701, ISSUE_GROUP_ID_CW_OP0702,
   * ISSUE_GROUP_ID_CW_OP0801, ISSUE_GROUP_ID_CW_OP0802,
   * ISSUE_GROUP_ID_CW_OP0803, ISSUE_GROUP_ID_CW_OP0804,
   * ISSUE_GROUP_ID_CW_OP0805, ISSUE_GROUP_ID_CW_OP0806,
   * ISSUE_GROUP_ID_CW_OP0807, ISSUE_GROUP_ID_CW_OP0808,
   * ISSUE_GROUP_ID_QA_OP0000, ISSUE_GROUP_ID_CW_SP0000,
   * ISSUE_GROUP_ID_CW_SP0001, ISSUE_GROUP_ID_CW_SP0002,
   * ISSUE_GROUP_ID_CW_SP0101, ISSUE_GROUP_ID_CW_SP0102,
   * ISSUE_GROUP_ID_CW_SP0103, ISSUE_GROUP_ID_CW_SP0200,
   * ISSUE_GROUP_ID_CW_SP0201, ISSUE_GROUP_ID_CW_SP0202,
   * ISSUE_GROUP_ID_CW_SP0203, ISSUE_GROUP_ID_CW_SP0204,
   * ISSUE_GROUP_ID_CW_SP0205, ISSUE_GROUP_ID_CW_SP0300,
   * ISSUE_GROUP_ID_CW_SP0302, ISSUE_GROUP_ID_CW_SP0306,
   * ISSUE_GROUP_ID_CW_SP0308, ISSUE_GROUP_ID_CW_SP0309,
   * ISSUE_GROUP_ID_CW_SP0310, ISSUE_GROUP_ID_CW_SP0311,
   * ISSUE_GROUP_ID_CW_SP0312, ISSUE_GROUP_ID_CW_SP0313,
   * ISSUE_GROUP_ID_CW_SP0314, ISSUE_GROUP_ID_CW_SP0400,
   * ISSUE_GROUP_ID_CW_SP0401, ISSUE_GROUP_ID_CW_SP0402,
   * ISSUE_GROUP_ID_CW_SP0403, ISSUE_GROUP_ID_CW_SP0404,
   * ISSUE_GROUP_ID_CW_SP0500, ISSUE_GROUP_ID_CW_SP0501,
   * ISSUE_GROUP_ID_CW_SP0502, ISSUE_GROUP_ID_CW_SP0503,
   * ISSUE_GROUP_ID_CW_SP0504, ISSUE_GROUP_ID_CW_SP0601,
   * ISSUE_GROUP_ID_CW_SP0602, ISSUE_GROUP_ID_CW_SP0604,
   * ISSUE_GROUP_ID_CW_SP0701, ISSUE_GROUP_ID_CW_SP0802,
   * ISSUE_GROUP_ID_CW_SP0807, ISSUE_GROUP_ID_QA_SP0000,
   * ISSUE_GROUP_ID_CW_AI9900, ISSUE_GROUP_ID_CW_AI9901,
   * ISSUE_GROUP_ID_CW_AI9902, ISSUE_GROUP_ID_CW_AP0000
   *
   * @param self::GROUP_ID_* $groupId
   */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /**
   * @return self::GROUP_ID_*
   */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /**
   * Unique Issue ID. Use this ID when referencing a specific issue in other API
   * calls, such as DataMigrationService.SetIssuesState.
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
  /**
   * The source of the issue (deterministic, gemini, etc).
   *
   * Accepted values: ISSUE_ORIGIN_UNSPECIFIED, ISSUE_ORIGIN_DETERMINISTIC,
   * ISSUE_ORIGIN_AI, ISSUE_ORIGIN_AI_FROM_DETERMINISTIC
   *
   * @param self::ISSUE_ORIGIN_* $issueOrigin
   */
  public function setIssueOrigin($issueOrigin)
  {
    $this->issueOrigin = $issueOrigin;
  }
  /**
   * @return self::ISSUE_ORIGIN_*
   */
  public function getIssueOrigin()
  {
    return $this->issueOrigin;
  }
  /**
   * Output only. The state of the issue (open, resolved, etc).
   *
   * Accepted values: ISSUE_STATE_UNSPECIFIED, ISSUE_STATE_OPEN,
   * ISSUE_STATE_RESOLVED
   *
   * @param self::ISSUE_STATE_* $issueState
   */
  public function setIssueState($issueState)
  {
    $this->issueState = $issueState;
  }
  /**
   * @return self::ISSUE_STATE_*
   */
  public function getIssueState()
  {
    return $this->issueState;
  }
  /**
   * Issue detailed message.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * The position of the issue found, if relevant.
   *
   * @param FetchIssuesResponseIssuePosition $position
   */
  public function setPosition(FetchIssuesResponseIssuePosition $position)
  {
    $this->position = $position;
  }
  /**
   * @return FetchIssuesResponseIssuePosition
   */
  public function getPosition()
  {
    return $this->position;
  }
  /**
   * Severity of the issue.
   *
   * Accepted values: ISSUE_SEVERITY_UNSPECIFIED, ISSUE_SEVERITY_INFO,
   * ISSUE_SEVERITY_WARNING, ISSUE_SEVERITY_ERROR
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * The type of the issue.
   *
   * Accepted values: ISSUE_TYPE_UNSPECIFIED, ISSUE_TYPE_CONVERSION,
   * ISSUE_TYPE_PULL_SCHEMA, ISSUE_TYPE_APPLY
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
class_alias(Issue::class, 'Google_Service_DatabaseMigrationService_Issue');
