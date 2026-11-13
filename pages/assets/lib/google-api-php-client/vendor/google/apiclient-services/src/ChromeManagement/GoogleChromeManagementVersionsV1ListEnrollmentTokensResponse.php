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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1ListEnrollmentTokensResponse extends \Google\Collection
{
  protected $collection_key = 'enrollmentTokens';
  protected $enrollmentTokensType = GoogleChromeManagementVersionsV1EnrollmentToken::class;
  protected $enrollmentTokensDataType = 'array';
  /**
   * Token to retrieve the next page of results, or empty if there are no more
   * results in the list.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * List of Chrome device enrollment tokens.
   *
   * @param GoogleChromeManagementVersionsV1EnrollmentToken[] $enrollmentTokens
   */
  public function setEnrollmentTokens($enrollmentTokens)
  {
    $this->enrollmentTokens = $enrollmentTokens;
  }
  /**
   * @return GoogleChromeManagementVersionsV1EnrollmentToken[]
   */
  public function getEnrollmentTokens()
  {
    return $this->enrollmentTokens;
  }
  /**
   * Token to retrieve the next page of results, or empty if there are no more
   * results in the list.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ListEnrollmentTokensResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ListEnrollmentTokensResponse');
