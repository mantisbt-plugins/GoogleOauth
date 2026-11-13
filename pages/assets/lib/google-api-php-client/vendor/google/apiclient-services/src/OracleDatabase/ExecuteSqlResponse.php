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

class ExecuteSqlResponse extends \Google\Collection
{
  protected $collection_key = 'sqlResults';
  protected $metadataType = ExecuteSqlMetadata::class;
  protected $metadataDataType = '';
  protected $sqlResultsType = SqlResult::class;
  protected $sqlResultsDataType = 'array';

  /**
   * Any additional metadata information regarding the execution of the sql
   * statement.
   *
   * @param ExecuteSqlMetadata $metadata
   */
  public function setMetadata(ExecuteSqlMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return ExecuteSqlMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * SqlResult represents the results for the execution of sql statements.
   *
   * @param SqlResult[] $sqlResults
   */
  public function setSqlResults($sqlResults)
  {
    $this->sqlResults = $sqlResults;
  }
  /**
   * @return SqlResult[]
   */
  public function getSqlResults()
  {
    return $this->sqlResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteSqlResponse::class, 'Google_Service_OracleDatabase_ExecuteSqlResponse');
