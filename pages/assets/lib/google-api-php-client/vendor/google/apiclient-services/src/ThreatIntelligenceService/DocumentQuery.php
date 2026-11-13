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

namespace Google\Service\ThreatIntelligenceService;

class DocumentQuery extends \Google\Model
{
  /**
   * Default value, should never be set.
   */
  public const QUERY_TYPE_QUERY_TYPE_UNSPECIFIED = 'QUERY_TYPE_UNSPECIFIED';
  /**
   * Structured JSON condition tree built via query builder.
   */
  public const QUERY_TYPE_JSON = 'JSON';
  /**
   * Raw search query string e.g., VTI search syntax.
   */
  public const QUERY_TYPE_STRING = 'STRING';
  /**
   * Required. The query string.
   *
   * @var string
   */
  public $query;
  /**
   * Required. The type of query.
   *
   * @var string
   */
  public $queryType;

  /**
   * Required. The query string.
   *
   * @param string $query
   */
  public function setQuery($query)
  {
    $this->query = $query;
  }
  /**
   * @return string
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * Required. The type of query.
   *
   * Accepted values: QUERY_TYPE_UNSPECIFIED, JSON, STRING
   *
   * @param self::QUERY_TYPE_* $queryType
   */
  public function setQueryType($queryType)
  {
    $this->queryType = $queryType;
  }
  /**
   * @return self::QUERY_TYPE_*
   */
  public function getQueryType()
  {
    return $this->queryType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DocumentQuery::class, 'Google_Service_ThreatIntelligenceService_DocumentQuery');
