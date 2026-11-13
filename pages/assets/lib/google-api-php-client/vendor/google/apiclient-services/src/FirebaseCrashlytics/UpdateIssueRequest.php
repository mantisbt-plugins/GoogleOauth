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

class UpdateIssueRequest extends \Google\Model
{
  protected $issueType = Issue::class;
  protected $issueDataType = '';
  /**
   * Optional. The list of Issue fields to update. Currently only "state" is
   * mutable.
   *
   * @var string
   */
  public $updateMask;

  /**
   * Required. The issue to update. The issue's `name` field is used to identify
   * the issue to update. Format:
   * "projects/{project}/apps/{app}/issues/{issue}".
   *
   * @param Issue $issue
   */
  public function setIssue(Issue $issue)
  {
    $this->issue = $issue;
  }
  /**
   * @return Issue
   */
  public function getIssue()
  {
    return $this->issue;
  }
  /**
   * Optional. The list of Issue fields to update. Currently only "state" is
   * mutable.
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
class_alias(UpdateIssueRequest::class, 'Google_Service_FirebaseCrashlytics_UpdateIssueRequest');
