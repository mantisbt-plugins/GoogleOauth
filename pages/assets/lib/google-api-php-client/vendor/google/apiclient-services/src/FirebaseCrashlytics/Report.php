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

class Report extends \Google\Collection
{
  protected $collection_key = 'groups';
  /**
   * Output only. The displayable title of the report.
   *
   * @var string
   */
  public $displayName;
  protected $groupsType = ReportGroup::class;
  protected $groupsDataType = 'array';
  /**
   * The name of the report. Format:
   * "projects/{project}/apps/{app_id}/reports/{report}".
   *
   * @var string
   */
  public $name;
  /**
   * Output only. A page token used to retrieve additional report groups. If
   * this field is not present, there are no subsequent pages available to
   * retrieve.
   *
   * @var string
   */
  public $nextPageToken;
  /**
   * Output only. The total number of groups retrievable by the request.
   *
   * @var int
   */
  public $totalSize;
  /**
   * Usage instructions for the report with a description of the result metrics.
   * This field contains a description of the underlying query and describes the
   * expected response data with any known caveats. This string can be displayed
   * in the UI of any integration that offers comprehensive access to all
   * Crashlytics reports.
   *
   * @var string
   */
  public $usage;

  /**
   * Output only. The displayable title of the report.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Aggregate event statistics in the report will be grouped by a dimension,
   * such as by issue or by version. The response contains one element per
   * group, and all ReportGroup messages will have the same parent field.
   *
   * @param ReportGroup[] $groups
   */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /**
   * @return ReportGroup[]
   */
  public function getGroups()
  {
    return $this->groups;
  }
  /**
   * The name of the report. Format:
   * "projects/{project}/apps/{app_id}/reports/{report}".
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. A page token used to retrieve additional report groups. If
   * this field is not present, there are no subsequent pages available to
   * retrieve.
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
  /**
   * Output only. The total number of groups retrievable by the request.
   *
   * @param int $totalSize
   */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /**
   * @return int
   */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
  /**
   * Usage instructions for the report with a description of the result metrics.
   * This field contains a description of the underlying query and describes the
   * expected response data with any known caveats. This string can be displayed
   * in the UI of any integration that offers comprehensive access to all
   * Crashlytics reports.
   *
   * @param string $usage
   */
  public function setUsage($usage)
  {
    $this->usage = $usage;
  }
  /**
   * @return string
   */
  public function getUsage()
  {
    return $this->usage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Report::class, 'Google_Service_FirebaseCrashlytics_Report');
