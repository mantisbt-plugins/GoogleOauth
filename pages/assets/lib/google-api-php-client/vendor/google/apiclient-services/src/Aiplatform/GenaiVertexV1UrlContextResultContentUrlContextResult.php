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

namespace Google\Service\Aiplatform;

class GenaiVertexV1UrlContextResultContentUrlContextResult extends \Google\Model
{
  /**
   * Unspecified status. This value should not be used.
   */
  public const STATUS_STATUS_UNSPECIFIED = 'STATUS_UNSPECIFIED';
  /**
   * Url retrieval is successful.
   */
  public const STATUS_SUCCESS = 'SUCCESS';
  /**
   * Url retrieval is failed due to error.
   */
  public const STATUS_ERROR = 'ERROR';
  /**
   * Url retrieval is failed because the content is behind paywall.
   */
  public const STATUS_PAYWALL = 'PAYWALL';
  /**
   * Url retrieval is failed because the content is unsafe.
   */
  public const STATUS_UNSAFE = 'UNSAFE';
  /**
   * The status of the URL retrieval.
   *
   * @var string
   */
  public $status;
  /**
   * The URL that was fetched.
   *
   * @var string
   */
  public $url;

  /**
   * The status of the URL retrieval.
   *
   * Accepted values: STATUS_UNSPECIFIED, SUCCESS, ERROR, PAYWALL, UNSAFE
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * The URL that was fetched.
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
class_alias(GenaiVertexV1UrlContextResultContentUrlContextResult::class, 'Google_Service_Aiplatform_GenaiVertexV1UrlContextResultContentUrlContextResult');
