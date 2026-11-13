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

namespace Google\Service\Datastore;

class RequestOptions extends \Google\Collection
{
  protected $collection_key = 'requestTags';
  /**
   * Optional. The request tags for the request. Request tags are user-provided
   * strings used for usage monitoring, cost management, and observability.
   * Callers can associate custom application context (such as component,
   * microservice, feature name, or operation type) with database requests.
   * These tags are collected and aggregated in usage and monitoring reports,
   * allowing billable operations and usage metrics to be sliced and analyzed by
   * tag. These tags *only* show up in monitoring and are visible in
   * administrative operations (such as usage reports). They do not affect data
   * storage, query semantics, or request execution. Cardinality and Best
   * Practices: - Request tags are most effective when using a bounded set of
   * distinct values (e.g., fewer than 100 distinct tags across an entire
   * database). Using a large number of distinct tags may result in tags being
   * omitted from top usage dashboards. - Use structured identifiers (for
   * example: `app=cart`, `env=prod`, `service=checkout`) and avoid high-
   * cardinality values such as UUIDs, request IDs, timestamps, user IDs, or
   * document keys. - Do not include sensitive data or personally identifiable
   * information (PII) in request tags, as they show up in administrative
   * monitoring. The tags are processed as follows: - Leading and trailing
   * whitespace is trimmed. - Empty tags (after trimming) are filtered out. -
   * Truncated to a maximum of 510 characters. - Deduplicated within the same
   * request. - Limited to a maximum of 50 tags per request (excess tags are
   * silently discarded).
   *
   * @var string[]
   */
  public $requestTags;

  /**
   * Optional. The request tags for the request. Request tags are user-provided
   * strings used for usage monitoring, cost management, and observability.
   * Callers can associate custom application context (such as component,
   * microservice, feature name, or operation type) with database requests.
   * These tags are collected and aggregated in usage and monitoring reports,
   * allowing billable operations and usage metrics to be sliced and analyzed by
   * tag. These tags *only* show up in monitoring and are visible in
   * administrative operations (such as usage reports). They do not affect data
   * storage, query semantics, or request execution. Cardinality and Best
   * Practices: - Request tags are most effective when using a bounded set of
   * distinct values (e.g., fewer than 100 distinct tags across an entire
   * database). Using a large number of distinct tags may result in tags being
   * omitted from top usage dashboards. - Use structured identifiers (for
   * example: `app=cart`, `env=prod`, `service=checkout`) and avoid high-
   * cardinality values such as UUIDs, request IDs, timestamps, user IDs, or
   * document keys. - Do not include sensitive data or personally identifiable
   * information (PII) in request tags, as they show up in administrative
   * monitoring. The tags are processed as follows: - Leading and trailing
   * whitespace is trimmed. - Empty tags (after trimming) are filtered out. -
   * Truncated to a maximum of 510 characters. - Deduplicated within the same
   * request. - Limited to a maximum of 50 tags per request (excess tags are
   * silently discarded).
   *
   * @param string[] $requestTags
   */
  public function setRequestTags($requestTags)
  {
    $this->requestTags = $requestTags;
  }
  /**
   * @return string[]
   */
  public function getRequestTags()
  {
    return $this->requestTags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestOptions::class, 'Google_Service_Datastore_RequestOptions');
