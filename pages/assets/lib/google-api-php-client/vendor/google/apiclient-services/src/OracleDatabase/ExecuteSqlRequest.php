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

namespace Google\Service\OracleDatabase;

class ExecuteSqlRequest extends \Google\Collection
{
  protected $collection_key = 'params';
  protected $paramsType = SqlParameter::class;
  protected $paramsDataType = 'array';
  /**
   * Required. The SQL statement to execute.
   *
   * @var string
   */
  public $sqlStatement;

  /**
   * Optional. Optional: Bind variables (parameters) to be used with the SQL
   * statement. Supports named bind variables (e.g., :dept_id, :status in Oracle
   * SQL) or positional parameters (:1, :2).
   *
   * @param SqlParameter[] $params
   */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /**
   * @return SqlParameter[]
   */
  public function getParams()
  {
    return $this->params;
  }
  /**
   * Required. The SQL statement to execute.
   *
   * @param string $sqlStatement
   */
  public function setSqlStatement($sqlStatement)
  {
    $this->sqlStatement = $sqlStatement;
  }
  /**
   * @return string
   */
  public function getSqlStatement()
  {
    return $this->sqlStatement;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteSqlRequest::class, 'Google_Service_OracleDatabase_ExecuteSqlRequest');
