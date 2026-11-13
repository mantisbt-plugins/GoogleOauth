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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsResponse extends \Google\Collection
{
  protected $collection_key = 'results';
  /**
   * Job ID for the upload batch.
   *
   * @var string
   */
  public $jobId;
  protected $partialFailureErrorType = GoogleRpcStatus::class;
  protected $partialFailureErrorDataType = '';
  protected $resultsType = GoogleAdsSearchads360V23ServicesConversionAdjustmentResult::class;
  protected $resultsDataType = 'array';

  /**
   * Job ID for the upload batch.
   *
   * @param string $jobId
   */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /**
   * @return string
   */
  public function getJobId()
  {
    return $this->jobId;
  }
  /**
   * Errors that pertain to conversion adjustment failures in the partial
   * failure mode. Returned when all errors occur inside the adjustments. If any
   * errors occur outside the adjustments (for example, auth errors), we return
   * an RPC level error. See https://developers.google.com/google-
   * ads/api/docs/best-practices/partial-failures for more information about
   * partial failure.
   *
   * @param GoogleRpcStatus $partialFailureError
   */
  public function setPartialFailureError(GoogleRpcStatus $partialFailureError)
  {
    $this->partialFailureError = $partialFailureError;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getPartialFailureError()
  {
    return $this->partialFailureError;
  }
  /**
   * Returned for successfully processed conversion adjustments. Proto will be
   * empty for rows that received an error. Results are not returned when
   * validate_only is true.
   *
   * @param GoogleAdsSearchads360V23ServicesConversionAdjustmentResult[] $results
   */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesConversionAdjustmentResult[]
   */
  public function getResults()
  {
    return $this->results;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUploadConversionAdjustmentsResponse');
