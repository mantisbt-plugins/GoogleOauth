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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1AggregatedComplianceReport extends \Google\Model
{
  protected $controlAssessmentDetailsType = GoogleCloudAssuredworkloadsV1ControlAssessmentDetails::class;
  protected $controlAssessmentDetailsDataType = '';
  /**
   * The time that the compliance report represents.
   *
   * @var string
   */
  public $reportTime;

  /**
   * The number of passing, failing, and not assessed controls in the framework
   * at `report_time`.
   *
   * @param GoogleCloudAssuredworkloadsV1ControlAssessmentDetails $controlAssessmentDetails
   */
  public function setControlAssessmentDetails(GoogleCloudAssuredworkloadsV1ControlAssessmentDetails $controlAssessmentDetails)
  {
    $this->controlAssessmentDetails = $controlAssessmentDetails;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1ControlAssessmentDetails
   */
  public function getControlAssessmentDetails()
  {
    return $this->controlAssessmentDetails;
  }
  /**
   * The time that the compliance report represents.
   *
   * @param string $reportTime
   */
  public function setReportTime($reportTime)
  {
    $this->reportTime = $reportTime;
  }
  /**
   * @return string
   */
  public function getReportTime()
  {
    return $this->reportTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1AggregatedComplianceReport::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1AggregatedComplianceReport');
