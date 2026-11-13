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

class GoogleCloudDataplexV1BatchChangeMetadataResponse extends \Google\Model
{
  protected $failedRequestsType = GoogleRpcStatus::class;
  protected $failedRequestsDataType = 'map';

  /**
   * A map of failed requests for a batch change, where the key is the 0-based
   * index of the failed request in the batch and the value is the error status.
   * If all operations succeeded, this map is empty.
   *
   * @param GoogleRpcStatus[] $failedRequests
   */
  public function setFailedRequests($failedRequests)
  {
    $this->failedRequests = $failedRequests;
  }
  /**
   * @return GoogleRpcStatus[]
   */
  public function getFailedRequests()
  {
    return $this->failedRequests;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1BatchChangeMetadataResponse::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1BatchChangeMetadataResponse');
