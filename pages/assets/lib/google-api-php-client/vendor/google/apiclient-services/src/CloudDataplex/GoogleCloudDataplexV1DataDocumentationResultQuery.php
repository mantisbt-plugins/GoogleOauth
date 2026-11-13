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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataDocumentationResultQuery extends \Google\Model
{
  /**
   * SQL dialect unspecified.
   */
  public const SQL_DIALECT_SQL_DIALECT_UNSPECIFIED = 'SQL_DIALECT_UNSPECIFIED';
  /**
   * Google SQL dialect.
   */
  public const SQL_DIALECT_GOOGLE_SQL = 'GOOGLE_SQL';
  /**
   * Spark SQL dialect.
   */
  public const SQL_DIALECT_SPARK_SQL = 'SPARK_SQL';
  /**
   * Output only. The description for the query.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The SQL query string which can be executed.
   *
   * @var string
   */
  public $sql;
  /**
   * Output only. The SQL dialect of the query.
   *
   * @var string
   */
  public $sqlDialect;

  /**
   * Output only. The description for the query.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. The SQL query string which can be executed.
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
   * Output only. The SQL dialect of the query.
   *
   * Accepted values: SQL_DIALECT_UNSPECIFIED, GOOGLE_SQL, SPARK_SQL
   *
   * @param self::SQL_DIALECT_* $sqlDialect
   */
  public function setSqlDialect($sqlDialect)
  {
    $this->sqlDialect = $sqlDialect;
  }
  /**
   * @return self::SQL_DIALECT_*
   */
  public function getSqlDialect()
  {
    return $this->sqlDialect;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDocumentationResultQuery::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationResultQuery');
