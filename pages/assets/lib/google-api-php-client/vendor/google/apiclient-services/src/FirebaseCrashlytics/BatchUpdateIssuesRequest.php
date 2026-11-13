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

namespace Google\Service\FirebaseCrashlytics;

class BatchUpdateIssuesRequest extends \Google\Collection
{
  protected $collection_key = 'requests';
  protected $requestsType = UpdateIssueRequest::class;
  protected $requestsDataType = 'array';
  /**
   * Optional. The list of Issue fields to update. If this is set, the
   * update_mask field in the UpdateIssueRequest messages must either be empty
   * or match this field.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Required. The request message specifying the resources to update. A maximum
   * of 100 issues can be modified in a batch.
   *
   * @param UpdateIssueRequest[] $requests
   */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /**
   * @return UpdateIssueRequest[]
   */
  public function getRequests()
  {
    return $this->requests;
  }
  /**
   * Optional. The list of Issue fields to update. If this is set, the
   * update_mask field in the UpdateIssueRequest messages must either be empty
   * or match this field.
   *
   * @param string $updateMask
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdateIssuesRequest::class, 'Google_Service_FirebaseCrashlytics_BatchUpdateIssuesRequest');
