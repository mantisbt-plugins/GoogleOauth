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

class GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const EVALUATION_STATE_EVALUATION_STATE_UNSPECIFIED = 'EVALUATION_STATE_UNSPECIFIED';
  /**
   * The control is passing.
   */
  public const EVALUATION_STATE_EVALUATION_STATE_PASSED = 'EVALUATION_STATE_PASSED';
  /**
   * The control is failing.
   */
  public const EVALUATION_STATE_EVALUATION_STATE_FAILED = 'EVALUATION_STATE_FAILED';
  /**
   * The control is not assessed.
   */
  public const EVALUATION_STATE_EVALUATION_STATE_NOT_ASSESSED = 'EVALUATION_STATE_NOT_ASSESSED';
  /**
   * Output only. The evaluation status of the cloud control.
   *
   * @var string
   */
  public $evaluationState;
  /**
   * The number of findings for the cloud control.
   *
   * @var int
   */
  public $findingsCount;
  /**
   * Output only. Number of organization policy findings for the cloud control.
   *
   * @var string
   */
  public $orgPolicyFindingCount;
  /**
   * Output only. Number of resource findings for the cloud control.
   *
   * @var string
   */
  public $resourceFindingCount;

  /**
   * Output only. The evaluation status of the cloud control.
   *
   * Accepted values: EVALUATION_STATE_UNSPECIFIED, EVALUATION_STATE_PASSED,
   * EVALUATION_STATE_FAILED, EVALUATION_STATE_NOT_ASSESSED
   *
   * @param self::EVALUATION_STATE_* $evaluationState
   */
  public function setEvaluationState($evaluationState)
  {
    $this->evaluationState = $evaluationState;
  }
  /**
   * @return self::EVALUATION_STATE_*
   */
  public function getEvaluationState()
  {
    return $this->evaluationState;
  }
  /**
   * The number of findings for the cloud control.
   *
   * @param int $findingsCount
   */
  public function setFindingsCount($findingsCount)
  {
    $this->findingsCount = $findingsCount;
  }
  /**
   * @return int
   */
  public function getFindingsCount()
  {
    return $this->findingsCount;
  }
  /**
   * Output only. Number of organization policy findings for the cloud control.
   *
   * @param string $orgPolicyFindingCount
   */
  public function setOrgPolicyFindingCount($orgPolicyFindingCount)
  {
    $this->orgPolicyFindingCount = $orgPolicyFindingCount;
  }
  /**
   * @return string
   */
  public function getOrgPolicyFindingCount()
  {
    return $this->orgPolicyFindingCount;
  }
  /**
   * Output only. Number of resource findings for the cloud control.
   *
   * @param string $resourceFindingCount
   */
  public function setResourceFindingCount($resourceFindingCount)
  {
    $this->resourceFindingCount = $resourceFindingCount;
  }
  /**
   * @return string
   */
  public function getResourceFindingCount()
  {
    return $this->resourceFindingCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails');
