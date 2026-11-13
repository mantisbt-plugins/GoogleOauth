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

class GoogleCloudAssuredworkloadsV1DbControlComplianceSummary extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const CONTROL_RESPONSIBILITY_TYPE_REGULATORY_CONTROL_RESPONSIBILITY_TYPE_UNSPECIFIED = 'REGULATORY_CONTROL_RESPONSIBILITY_TYPE_UNSPECIFIED';
  /**
   * Google's responsibility.
   */
  public const CONTROL_RESPONSIBILITY_TYPE_GOOGLE = 'GOOGLE';
  /**
   * Your responsibility.
   */
  public const CONTROL_RESPONSIBILITY_TYPE_CUSTOMER = 'CUSTOMER';
  /**
   * Shared responsibility.
   */
  public const CONTROL_RESPONSIBILITY_TYPE_SHARED = 'SHARED';
  /**
   * Default value. This value is unused.
   */
  public const OVERALL_EVALUATION_STATE_EVALUATION_STATE_UNSPECIFIED = 'EVALUATION_STATE_UNSPECIFIED';
  /**
   * The control is passing.
   */
  public const OVERALL_EVALUATION_STATE_EVALUATION_STATE_PASSED = 'EVALUATION_STATE_PASSED';
  /**
   * The control is failing.
   */
  public const OVERALL_EVALUATION_STATE_EVALUATION_STATE_FAILED = 'EVALUATION_STATE_FAILED';
  /**
   * The control is not assessed.
   */
  public const OVERALL_EVALUATION_STATE_EVALUATION_STATE_NOT_ASSESSED = 'EVALUATION_STATE_NOT_ASSESSED';
  protected $collection_key = 'similarControls';
  protected $cloudControlReportsType = GoogleCloudAssuredworkloadsV1CloudControlReport::class;
  protected $cloudControlReportsDataType = 'array';
  /**
   * The list of compliance frameworks that the control belongs to.
   *
   * @var string[]
   */
  public $complianceFrameworks;
  /**
   * The name of the control.
   *
   * @var string
   */
  public $control;
  /**
   * The responsibility type for the control.
   *
   * @var string
   */
  public $controlResponsibilityType;
  /**
   * The description of the control.
   *
   * @var string
   */
  public $description;
  /**
   * The display name of the control.
   *
   * @var string
   */
  public $displayName;
  /**
   * Whether the control is a fake control. Fake controls are created and mapped
   * to cloud controls that don't belong to a control group.
   *
   * @var bool
   */
  public $isFakeControl;
  /**
   * Identifier. The resource name of the control compliance summary. Format: `o
   * rganizations/{organization}/locations/{location}/dbFrameworkComplianceRepor
   * ts/{db_framework_compliance_report}/dbControlComplianceSummaries/{db_contro
   * l_compliance_summary}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Number of organization policy findings for this control.
   *
   * @var string
   */
  public $orgPolicyFindingCount;
  /**
   * Output only. The overall evaluation status of the control.
   *
   * @var string
   */
  public $overallEvaluationState;
  /**
   * Output only. Number of resource findings for this control.
   *
   * @var string
   */
  public $resourceFindingCount;
  protected $similarControlsType = GoogleCloudAssuredworkloadsV1SimilarControls::class;
  protected $similarControlsDataType = 'array';
  /**
   * The total number of findings for the control.
   *
   * @var int
   */
  public $totalFindingsCount;

  /**
   * The list of cloud control reports.
   *
   * @param GoogleCloudAssuredworkloadsV1CloudControlReport[] $cloudControlReports
   */
  public function setCloudControlReports($cloudControlReports)
  {
    $this->cloudControlReports = $cloudControlReports;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1CloudControlReport[]
   */
  public function getCloudControlReports()
  {
    return $this->cloudControlReports;
  }
  /**
   * The list of compliance frameworks that the control belongs to.
   *
   * @param string[] $complianceFrameworks
   */
  public function setComplianceFrameworks($complianceFrameworks)
  {
    $this->complianceFrameworks = $complianceFrameworks;
  }
  /**
   * @return string[]
   */
  public function getComplianceFrameworks()
  {
    return $this->complianceFrameworks;
  }
  /**
   * The name of the control.
   *
   * @param string $control
   */
  public function setControl($control)
  {
    $this->control = $control;
  }
  /**
   * @return string
   */
  public function getControl()
  {
    return $this->control;
  }
  /**
   * The responsibility type for the control.
   *
   * Accepted values: REGULATORY_CONTROL_RESPONSIBILITY_TYPE_UNSPECIFIED,
   * GOOGLE, CUSTOMER, SHARED
   *
   * @param self::CONTROL_RESPONSIBILITY_TYPE_* $controlResponsibilityType
   */
  public function setControlResponsibilityType($controlResponsibilityType)
  {
    $this->controlResponsibilityType = $controlResponsibilityType;
  }
  /**
   * @return self::CONTROL_RESPONSIBILITY_TYPE_*
   */
  public function getControlResponsibilityType()
  {
    return $this->controlResponsibilityType;
  }
  /**
   * The description of the control.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The display name of the control.
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
   * Whether the control is a fake control. Fake controls are created and mapped
   * to cloud controls that don't belong to a control group.
   *
   * @param bool $isFakeControl
   */
  public function setIsFakeControl($isFakeControl)
  {
    $this->isFakeControl = $isFakeControl;
  }
  /**
   * @return bool
   */
  public function getIsFakeControl()
  {
    return $this->isFakeControl;
  }
  /**
   * Identifier. The resource name of the control compliance summary. Format: `o
   * rganizations/{organization}/locations/{location}/dbFrameworkComplianceRepor
   * ts/{db_framework_compliance_report}/dbControlComplianceSummaries/{db_contro
   * l_compliance_summary}`
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
   * Output only. Number of organization policy findings for this control.
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
   * Output only. The overall evaluation status of the control.
   *
   * Accepted values: EVALUATION_STATE_UNSPECIFIED, EVALUATION_STATE_PASSED,
   * EVALUATION_STATE_FAILED, EVALUATION_STATE_NOT_ASSESSED
   *
   * @param self::OVERALL_EVALUATION_STATE_* $overallEvaluationState
   */
  public function setOverallEvaluationState($overallEvaluationState)
  {
    $this->overallEvaluationState = $overallEvaluationState;
  }
  /**
   * @return self::OVERALL_EVALUATION_STATE_*
   */
  public function getOverallEvaluationState()
  {
    return $this->overallEvaluationState;
  }
  /**
   * Output only. Number of resource findings for this control.
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
  /**
   * The list of similar controls.
   *
   * @param GoogleCloudAssuredworkloadsV1SimilarControls[] $similarControls
   */
  public function setSimilarControls($similarControls)
  {
    $this->similarControls = $similarControls;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1SimilarControls[]
   */
  public function getSimilarControls()
  {
    return $this->similarControls;
  }
  /**
   * The total number of findings for the control.
   *
   * @param int $totalFindingsCount
   */
  public function setTotalFindingsCount($totalFindingsCount)
  {
    $this->totalFindingsCount = $totalFindingsCount;
  }
  /**
   * @return int
   */
  public function getTotalFindingsCount()
  {
    return $this->totalFindingsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1DbControlComplianceSummary::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1DbControlComplianceSummary');
