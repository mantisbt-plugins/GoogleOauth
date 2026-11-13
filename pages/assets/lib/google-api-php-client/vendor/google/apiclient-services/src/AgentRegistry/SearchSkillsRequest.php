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

namespace Google\Service\AgentRegistry;

class SearchSkillsRequest extends \Google\Model
{
  /**
   * Invalid search type.
   */
  public const SEARCH_TYPE_SEARCH_TYPE_UNSPECIFIED = 'SEARCH_TYPE_UNSPECIFIED';
  /**
   * Search for a keyword across all searchable fields.
   */
  public const SEARCH_TYPE_KEYWORD = 'KEYWORD';
  /**
   * Search based on the meaning and intent of a natural language query.
   */
  public const SEARCH_TYPE_SEMANTIC = 'SEMANTIC';
  /**
   * Optional. Use this field to specify additional filter criteria on search
   * results. Filter expressions can be used to restrict results based upon
   * filterable fields, where equality operators can be used. See
   * [instructions](https://docs.cloud.google.com/agent-registry/search-agents-
   * and-tools) for more details. Allowed operators: `=`, `<`, `>`, `NOT`,
   * `AND`, `OR`, and `()`. | Field | `=` | `<`, `>` |
   * |--------------|-----|----------| | state | Yes | No | | targetState | Yes
   * | No | | createTime | Yes | Yes | | updateTime | Yes | Yes | Examples: *
   * `state=ACTIVE` to restrict results to skills in the `ACTIVE` state.
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. The maximum number of search results to return per page. The page
   * size is capped at `100`, even if a larger value is specified. A negative
   * value will result in an `INVALID_ARGUMENT` error. If unspecified or set to
   * `0`, a default value of `20` will be used. The server may return fewer
   * results than requested.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. If present, retrieve the next batch of results from the preceding
   * call to this method. `page_token` must be the value of `next_page_token`
   * from the previous response. The values of all other method parameters, must
   * be identical to those in the previous call.
   *
   * @var string
   */
  public $pageToken;
  /**
   * Optional. Search criteria used to select the Skills to return. If no search
   * criteria is specified then all accessible Skills will be returned. Search
   * expressions can be used to restrict results based upon searchable fields,
   * where the operators can be used along with the suffix wildcard symbol `*`.
   * See [instructions](https://docs.cloud.google.com/agent-registry/search-
   * agents-and-tools) for more details. Allowed operators: `=`, `:`, `NOT`,
   * `AND`, `OR`, and `()`. Searchable fields: | Field | `=` | `:` | `*` |
   * Keyword Search |
   * |---------------------------|-----|-----|-----|----------------| | skillId
   * | Yes | Yes | Yes | Included | | name | No | Yes | Yes | Included | |
   * displayName | No | Yes | Yes | Included | | description | No | Yes | No |
   * Included | | frontmatter.name | No | Yes | No | Included | |
   * frontmatter.description | No | Yes | No | Included | |
   * frontmatter.compatibility | No | Yes | No | Included | |
   * frontmatter.license | No | Yes | No | Included | Examples: *
   * `skillId="urn:skill:projects-1234:locations:global:private-important-
   * skill"` to find the skill with the specified skill ID. * `name:important`
   * to find skills whose name contains `important` as a word. *
   * `displayName:works*` to find skills whose display name contains words that
   * start with `works`.
   *
   * @var string
   */
  public $searchString;
  /**
   * Optional. The type of search.
   *
   * @var string
   */
  public $searchType;

  /**
   * Optional. Use this field to specify additional filter criteria on search
   * results. Filter expressions can be used to restrict results based upon
   * filterable fields, where equality operators can be used. See
   * [instructions](https://docs.cloud.google.com/agent-registry/search-agents-
   * and-tools) for more details. Allowed operators: `=`, `<`, `>`, `NOT`,
   * `AND`, `OR`, and `()`. | Field | `=` | `<`, `>` |
   * |--------------|-----|----------| | state | Yes | No | | targetState | Yes
   * | No | | createTime | Yes | Yes | | updateTime | Yes | Yes | Examples: *
   * `state=ACTIVE` to restrict results to skills in the `ACTIVE` state.
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Optional. The maximum number of search results to return per page. The page
   * size is capped at `100`, even if a larger value is specified. A negative
   * value will result in an `INVALID_ARGUMENT` error. If unspecified or set to
   * `0`, a default value of `20` will be used. The server may return fewer
   * results than requested.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Optional. If present, retrieve the next batch of results from the preceding
   * call to this method. `page_token` must be the value of `next_page_token`
   * from the previous response. The values of all other method parameters, must
   * be identical to those in the previous call.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * Optional. Search criteria used to select the Skills to return. If no search
   * criteria is specified then all accessible Skills will be returned. Search
   * expressions can be used to restrict results based upon searchable fields,
   * where the operators can be used along with the suffix wildcard symbol `*`.
   * See [instructions](https://docs.cloud.google.com/agent-registry/search-
   * agents-and-tools) for more details. Allowed operators: `=`, `:`, `NOT`,
   * `AND`, `OR`, and `()`. Searchable fields: | Field | `=` | `:` | `*` |
   * Keyword Search |
   * |---------------------------|-----|-----|-----|----------------| | skillId
   * | Yes | Yes | Yes | Included | | name | No | Yes | Yes | Included | |
   * displayName | No | Yes | Yes | Included | | description | No | Yes | No |
   * Included | | frontmatter.name | No | Yes | No | Included | |
   * frontmatter.description | No | Yes | No | Included | |
   * frontmatter.compatibility | No | Yes | No | Included | |
   * frontmatter.license | No | Yes | No | Included | Examples: *
   * `skillId="urn:skill:projects-1234:locations:global:private-important-
   * skill"` to find the skill with the specified skill ID. * `name:important`
   * to find skills whose name contains `important` as a word. *
   * `displayName:works*` to find skills whose display name contains words that
   * start with `works`.
   *
   * @param string $searchString
   */
  public function setSearchString($searchString)
  {
    $this->searchString = $searchString;
  }
  /**
   * @return string
   */
  public function getSearchString()
  {
    return $this->searchString;
  }
  /**
   * Optional. The type of search.
   *
   * Accepted values: SEARCH_TYPE_UNSPECIFIED, KEYWORD, SEMANTIC
   *
   * @param self::SEARCH_TYPE_* $searchType
   */
  public function setSearchType($searchType)
  {
    $this->searchType = $searchType;
  }
  /**
   * @return self::SEARCH_TYPE_*
   */
  public function getSearchType()
  {
    return $this->searchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchSkillsRequest::class, 'Google_Service_AgentRegistry_SearchSkillsRequest');
