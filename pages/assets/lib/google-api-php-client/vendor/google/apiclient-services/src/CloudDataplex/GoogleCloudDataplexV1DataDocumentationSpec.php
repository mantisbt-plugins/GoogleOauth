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

class GoogleCloudDataplexV1DataDocumentationSpec extends \Google\Collection
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
  protected $collection_key = 'generationScopes';
  /**
   * Optional. Whether to publish result to Dataplex Catalog.
   *
   * @var bool
   */
  public $catalogPublishingEnabled;
  /**
   * Optional. Custom instructions for generating data documentation. The
   * maximum length is 2,048 characters.
   *
   * @var string
   */
  public $customInstructions;
  /**
   * Optional. Specifies which components of the data documentation to generate.
   * Any component that is required to generate the specified components will
   * also be generated. If no generation scope is specified, all available
   * documentation components will be generated.
   *
   * @var string[]
   */
  public $generationScopes;
  /**
   * Optional. The SQL dialect to use in the generated SQL queries. If not
   * specified, the default dialect is Google SQL.
   *
   * @var string
   */
  public $sqlDialect;

  /**
   * Optional. Whether to publish result to Dataplex Catalog.
   *
   * @param bool $catalogPublishingEnabled
   */
  public function setCatalogPublishingEnabled($catalogPublishingEnabled)
  {
    $this->catalogPublishingEnabled = $catalogPublishingEnabled;
  }
  /**
   * @return bool
   */
  public function getCatalogPublishingEnabled()
  {
    return $this->catalogPublishingEnabled;
  }
  /**
   * Optional. Custom instructions for generating data documentation. The
   * maximum length is 2,048 characters.
   *
   * @param string $customInstructions
   */
  public function setCustomInstructions($customInstructions)
  {
    $this->customInstructions = $customInstructions;
  }
  /**
   * @return string
   */
  public function getCustomInstructions()
  {
    return $this->customInstructions;
  }
  /**
   * Optional. Specifies which components of the data documentation to generate.
   * Any component that is required to generate the specified components will
   * also be generated. If no generation scope is specified, all available
   * documentation components will be generated.
   *
   * @param string[] $generationScopes
   */
  public function setGenerationScopes($generationScopes)
  {
    $this->generationScopes = $generationScopes;
  }
  /**
   * @return string[]
   */
  public function getGenerationScopes()
  {
    return $this->generationScopes;
  }
  /**
   * Optional. The SQL dialect to use in the generated SQL queries. If not
   * specified, the default dialect is Google SQL.
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
class_alias(GoogleCloudDataplexV1DataDocumentationSpec::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationSpec');
