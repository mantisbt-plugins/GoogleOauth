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

class GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest extends \Google\Model
{
  /**
   * Default value. The acknowledge type isn't specified.
   */
  public const ACKNOWLEDGE_TYPE_ACKNOWLEDGE_TYPE_UNSPECIFIED = 'ACKNOWLEDGE_TYPE_UNSPECIFIED';
  /**
   * Acknowledges only the specified violation.
   */
  public const ACKNOWLEDGE_TYPE_SINGLE_VIOLATION = 'SINGLE_VIOLATION';
  /**
   * Acknowledges the specified organization policy violation and all of its
   * existing associated resource violations.
   */
  public const ACKNOWLEDGE_TYPE_EXISTING_CHILD_RESOURCE_VIOLATIONS = 'EXISTING_CHILD_RESOURCE_VIOLATIONS';
  /**
   * Defaults to the ASSURED_WORKLOADS view.
   */
  public const VIEW_VIOLATION_VIEW_UNSPECIFIED = 'VIOLATION_VIEW_UNSPECIFIED';
  /**
   * Includes the basic metadata about the violation.
   */
  public const VIEW_VIOLATION_VIEW_ASSURED_WORKLOADS = 'VIOLATION_VIEW_ASSURED_WORKLOADS';
  /**
   * Includes all information about the violation, including details about the
   * data boundary.
   */
  public const VIEW_VIOLATION_VIEW_DATA_BOUNDARY = 'VIOLATION_VIEW_DATA_BOUNDARY';
  /**
   * Optional. The scope of the acknowledgement for the specified violation. If
   * not specified, `SINGLE_VIOLATION` is used.
   *
   * @var string
   */
  public $acknowledgeType;
  /**
   * Required. The business justification for acknowledging the violation. The
   * comment can't be empty or contain only whitespace characters.
   *
   * @var string
   */
  public $comment;
  /**
   * Optional. Deprecated: This field is deprecated and will be removed in a
   * future version of the API. The service identifies the violation to
   * acknowledge by `name`, and ignores this field. Don't set this field. The
   * name of the organization policy that was modified with a non-compliant
   * change and resulted in this violation. Formats: *
   * `projects/{project_number}/policies/{constraint_name}` *
   * `folders/{folder_id}/policies/{constraint_name}` *
   * `organizations/{organization_id}/policies/{constraint_name}`
   *
   * @deprecated
   * @var string
   */
  public $nonCompliantOrgPolicy;
  /**
   * Optional. The violation view (`VIOLATION_VIEW_ASSURED_WORKLOADS` or
   * `VIOLATION_VIEW_DATA_BOUNDARY`) that the violation belongs to. If not
   * specified, `VIOLATION_VIEW_ASSURED_WORKLOADS` is used.
   *
   * @var string
   */
  public $view;

  /**
   * Optional. The scope of the acknowledgement for the specified violation. If
   * not specified, `SINGLE_VIOLATION` is used.
   *
   * Accepted values: ACKNOWLEDGE_TYPE_UNSPECIFIED, SINGLE_VIOLATION,
   * EXISTING_CHILD_RESOURCE_VIOLATIONS
   *
   * @param self::ACKNOWLEDGE_TYPE_* $acknowledgeType
   */
  public function setAcknowledgeType($acknowledgeType)
  {
    $this->acknowledgeType = $acknowledgeType;
  }
  /**
   * @return self::ACKNOWLEDGE_TYPE_*
   */
  public function getAcknowledgeType()
  {
    return $this->acknowledgeType;
  }
  /**
   * Required. The business justification for acknowledging the violation. The
   * comment can't be empty or contain only whitespace characters.
   *
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * Optional. Deprecated: This field is deprecated and will be removed in a
   * future version of the API. The service identifies the violation to
   * acknowledge by `name`, and ignores this field. Don't set this field. The
   * name of the organization policy that was modified with a non-compliant
   * change and resulted in this violation. Formats: *
   * `projects/{project_number}/policies/{constraint_name}` *
   * `folders/{folder_id}/policies/{constraint_name}` *
   * `organizations/{organization_id}/policies/{constraint_name}`
   *
   * @deprecated
   * @param string $nonCompliantOrgPolicy
   */
  public function setNonCompliantOrgPolicy($nonCompliantOrgPolicy)
  {
    $this->nonCompliantOrgPolicy = $nonCompliantOrgPolicy;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getNonCompliantOrgPolicy()
  {
    return $this->nonCompliantOrgPolicy;
  }
  /**
   * Optional. The violation view (`VIOLATION_VIEW_ASSURED_WORKLOADS` or
   * `VIOLATION_VIEW_DATA_BOUNDARY`) that the violation belongs to. If not
   * specified, `VIOLATION_VIEW_ASSURED_WORKLOADS` is used.
   *
   * Accepted values: VIOLATION_VIEW_UNSPECIFIED,
   * VIOLATION_VIEW_ASSURED_WORKLOADS, VIOLATION_VIEW_DATA_BOUNDARY
   *
   * @param self::VIEW_* $view
   */
  public function setView($view)
  {
    $this->view = $view;
  }
  /**
   * @return self::VIEW_*
   */
  public function getView()
  {
    return $this->view;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1AcknowledgeViolationRequest');
