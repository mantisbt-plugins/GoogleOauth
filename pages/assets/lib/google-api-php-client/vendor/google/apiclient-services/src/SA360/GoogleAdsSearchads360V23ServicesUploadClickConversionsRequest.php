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

class GoogleAdsSearchads360V23ServicesUploadClickConversionsRequest extends \Google\Collection
{
  protected $collection_key = 'conversions';
  protected $conversionsType = GoogleAdsSearchads360V23ServicesClickConversion::class;
  protected $conversionsDataType = 'array';
  /**
   * Optional. Optional input to set job ID. Must be a non-negative number that
   * is less than 2^31 if provided. If this field is not provided, the API will
   * generate a job ID in the range [2^31, (2^63)-1]. The API will return the
   * value for this request in the `job_id` field of the
   * `UploadClickConversionsResponse`.
   *
   * @var int
   */
  public $jobId;
  /**
   * Required. If `true`, successful operations will be carried out and invalid
   * operations will return errors. If `false`, all operations will be carried
   * out in one transaction if and only if they are all valid. This should
   * always be set to `true`.
   *
   * @var bool
   */
  public $partialFailure;
  /**
   * If `true`, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. The conversions that are being uploaded.
   *
   * @param GoogleAdsSearchads360V23ServicesClickConversion[] $conversions
   */
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesClickConversion[]
   */
  public function getConversions()
  {
    return $this->conversions;
  }
  /**
   * Optional. Optional input to set job ID. Must be a non-negative number that
   * is less than 2^31 if provided. If this field is not provided, the API will
   * generate a job ID in the range [2^31, (2^63)-1]. The API will return the
   * value for this request in the `job_id` field of the
   * `UploadClickConversionsResponse`.
   *
   * @param int $jobId
   */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /**
   * @return int
   */
  public function getJobId()
  {
    return $this->jobId;
  }
  /**
   * Required. If `true`, successful operations will be carried out and invalid
   * operations will return errors. If `false`, all operations will be carried
   * out in one transaction if and only if they are all valid. This should
   * always be set to `true`.
   *
   * @param bool $partialFailure
   */
  public function setPartialFailure($partialFailure)
  {
    $this->partialFailure = $partialFailure;
  }
  /**
   * @return bool
   */
  public function getPartialFailure()
  {
    return $this->partialFailure;
  }
  /**
   * If `true`, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUploadClickConversionsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUploadClickConversionsRequest');
