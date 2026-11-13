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

namespace Google\Service\FirebaseDataConnect;

class MigrationStep extends \Google\Model
{
  /**
   * Optional. Descriptive migration label (e.g. "create_accounts_table"). If
   * omitted, defaults to "adhoc".
   *
   * @var string
   */
  public $name;
  /**
   * Required. Raw multi-statement SQL script. The backend splits it into
   * individual statements before execution; callers do not pre-split. Required
   * whenever the request executes or records DDL, which is every publicly
   * available execution mode; omitting it returns INVALID_ARGUMENT.
   *
   * @var string
   */
  public $sql;
  /**
   * Optional. Monotonic 14-digit UTC timestamp (YYYYMMDDHHMMSS), matching the
   * timestamp prefix of the developer's migration filename. Constrained to
   * `^[0-9]{14}$`. - When specified (file migrations): If `version` is already
   * recorded in `firebasesql.schema_migrations`, the backend verifies that
   * `sql` matches the recorded statements and skips execution. If `version` is
   * unapplied, the backend validates `version > MAX(applied_version)` and
   * records the value unchanged, so the ledger row and the on-disk filename
   * stay identical. - When omitted (Console/ad-hoc): Backend auto-generates a
   * 14-digit UTC timestamp.
   *
   * @var string
   */
  public $version;

  /**
   * Optional. Descriptive migration label (e.g. "create_accounts_table"). If
   * omitted, defaults to "adhoc".
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. Raw multi-statement SQL script. The backend splits it into
   * individual statements before execution; callers do not pre-split. Required
   * whenever the request executes or records DDL, which is every publicly
   * available execution mode; omitting it returns INVALID_ARGUMENT.
   *
   * @param string $sql
   */
  public function setSql($sql)
  {
    $this->sql = $sql;
  }
  /**
   * @return string
   */
  public function getSql()
  {
    return $this->sql;
  }
  /**
   * Optional. Monotonic 14-digit UTC timestamp (YYYYMMDDHHMMSS), matching the
   * timestamp prefix of the developer's migration filename. Constrained to
   * `^[0-9]{14}$`. - When specified (file migrations): If `version` is already
   * recorded in `firebasesql.schema_migrations`, the backend verifies that
   * `sql` matches the recorded statements and skips execution. If `version` is
   * unapplied, the backend validates `version > MAX(applied_version)` and
   * records the value unchanged, so the ledger row and the on-disk filename
   * stay identical. - When omitted (Console/ad-hoc): Backend auto-generates a
   * 14-digit UTC timestamp.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrationStep::class, 'Google_Service_FirebaseDataConnect_MigrationStep');
