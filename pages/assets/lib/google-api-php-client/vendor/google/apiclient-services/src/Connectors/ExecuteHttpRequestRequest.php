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

class ExecuteHttpRequestRequest extends \Google\Collection
{
  public const HTTP_METHOD_HTTP_METHOD_UNSPECIFIED = 'HTTP_METHOD_UNSPECIFIED';
  public const HTTP_METHOD_HTTP_METHOD_GET = 'HTTP_METHOD_GET';
  public const HTTP_METHOD_HTTP_METHOD_POST = 'HTTP_METHOD_POST';
  public const HTTP_METHOD_HTTP_METHOD_PUT = 'HTTP_METHOD_PUT';
  public const HTTP_METHOD_HTTP_METHOD_PATCH = 'HTTP_METHOD_PATCH';
  public const HTTP_METHOD_HTTP_METHOD_DELETE = 'HTTP_METHOD_DELETE';
  public const HTTP_METHOD_HTTP_METHOD_HEAD = 'HTTP_METHOD_HEAD';
  public const HTTP_METHOD_HTTP_METHOD_OPTIONS = 'HTTP_METHOD_OPTIONS';
  protected $collection_key = 'headers';
  protected $headersType = HttpHeader::class;
  protected $headersDataType = 'array';
  /**
   * Required. The HTTP method to use for the request.
   *
   * @var string
   */
  public $httpMethod;
  /**
   * Raw byte payload. Used for all pre-serialized formats including JSON, XML,
   * GraphQL, and Multipart.
   *
   * @var string
   */
  public $rawBody;
  /**
   * Required. The fully resolved absolute target URL. Callers must pre-encode
   * any query parameters.
   *
   * @var string
   */
  public $url;

  /**
   * HTTP headers to send with the request (e.g., Content-Type:
   * application/json). Order is preserved and duplicate keys are allowed.
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
   * Required. The HTTP method to use for the request.
   *
   * Accepted values: HTTP_METHOD_UNSPECIFIED, HTTP_METHOD_GET,
   * HTTP_METHOD_POST, HTTP_METHOD_PUT, HTTP_METHOD_PATCH, HTTP_METHOD_DELETE,
   * HTTP_METHOD_HEAD, HTTP_METHOD_OPTIONS
   *
   * @param self::HTTP_METHOD_* $httpMethod
   */
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  /**
   * @return self::HTTP_METHOD_*
   */
  public function getHttpMethod()
  {
    return $this->httpMethod;
  }
  /**
   * Raw byte payload. Used for all pre-serialized formats including JSON, XML,
   * GraphQL, and Multipart.
   *
   * @param string $rawBody
   */
  public function setRawBody($rawBody)
  {
    $this->rawBody = $rawBody;
  }
  /**
   * @return string
   */
  public function getRawBody()
  {
    return $this->rawBody;
  }
  /**
   * Required. The fully resolved absolute target URL. Callers must pre-encode
   * any query parameters.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteHttpRequestRequest::class, 'Google_Service_Connectors_ExecuteHttpRequestRequest');
