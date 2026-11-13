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

namespace Google\Service\Connectors;

class ExecuteHttpRequestResponse extends \Google\Collection
{
  protected $collection_key = 'headers';
  /**
   * The raw response body.
   *
   * @var string
   */
  public $body;
  protected $headersType = HttpHeader::class;
  protected $headersDataType = 'array';
  /**
   * The HTTP status reason phrase received from the backend (e.g., "Not
   * Found"). May be empty if the backend did not provide one.
   *
   * @var string
   */
  public $reason;
  /**
   * The HTTP status code received from the backend.
   *
   * @var int
   */
  public $statusCode;

  /**
   * The raw response body.
   *
   * @param string $body
   */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /**
   * @return string
   */
  public function getBody()
  {
    return $this->body;
  }
  /**
   * HTTP headers received in the response. Order is preserved and duplicate
   * keys are allowed (e.g., multiple Set-Cookie headers).
   *
   * @param HttpHeader[] $headers
   */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /**
   * @return HttpHeader[]
   */
  public function getHeaders()
  {
    return $this->headers;
  }
  /**
   * The HTTP status reason phrase received from the backend (e.g., "Not
   * Found"). May be empty if the backend did not provide one.
   *
   * @param string $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return string
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * The HTTP status code received from the backend.
   *
   * @param int $statusCode
   */
  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }
  /**
   * @return int
   */
  public function getStatusCode()
  {
    return $this->statusCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteHttpRequestResponse::class, 'Google_Service_Connectors_ExecuteHttpRequestResponse');
