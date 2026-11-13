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

class GoogleCloudAssuredworkloadsV1AggregateDbFrameworkComplianceReportResponse extends \Google\Collection
{
  protected $collection_key = 'aggregatedComplianceReports';
  protected $aggregatedComplianceReportsType = GoogleCloudAssuredworkloadsV1AggregatedComplianceReport::class;
  protected $aggregatedComplianceReportsDataType = 'array';

  /**
   * The daily compliance reports for the requested time range.
   *
   * @param GoogleCloudAssuredworkloadsV1AggregatedComplianceReport[] $aggregatedComplianceReports
   */
  public function setAggregatedComplianceReports($aggregatedComplianceReports)
  {
    $this->aggregatedComplianceReports = $aggregatedComplianceReports;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1AggregatedComplianceReport[]
   */
  public function getAggregatedComplianceReports()
  {
    return $this->aggregatedComplianceReports;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1AggregateDbFrameworkComplianceReportResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1AggregateDbFrameworkComplianceReportResponse');
