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

class GoogleCloudAssuredworkloadsV1Violation extends \Google\Collection
{
  /**
   * Default value. The state isn't specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The violation is resolved.
   */
  public const STATE_RESOLVED = 'RESOLVED';
  /**
   * The violation is unresolved and hasn't been acknowledged.
   */
  public const STATE_UNRESOLVED = 'UNRESOLVED';
  /**
   * The violation is unresolved and has been acknowledged as an exception.
   */
  public const STATE_EXCEPTION = 'EXCEPTION';
  /**
   * Default value. The violation type isn't specified.
   */
  public const VIOLATION_TYPE_VIOLATION_TYPE_UNSPECIFIED = 'VIOLATION_TYPE_UNSPECIFIED';
  /**
   * A violation that's caused by a non-compliant change to an organization
   * policy.
   */
  public const VIOLATION_TYPE_ORG_POLICY = 'ORG_POLICY';
  /**
   * A violation that's caused by a non-compliant resource.
   */
  public const VIOLATION_TYPE_RESOURCE = 'RESOURCE';
  protected $collection_key = 'exceptionContexts';
  /**
   * Whether the violation has been acknowledged.
   *
   * @var bool
   */
  public $acknowledged;
  /**
   * Optional. The time when the violation was first acknowledged. To find the
   * most recent time that the violation was acknowledged, check
   * `exception_contexts`. This field is absent when `acknowledged` is `false`.
   *
   * @var string
   */
  public $acknowledgementTime;
  /**
   * Output only. The IDs of the compliance frameworks that are affected by this
   * violation. For example, `builtin-fedramp-high`. This field is only
   * populated when using `VIOLATION_VIEW_DATA_BOUNDARY`.
   *
   * @var string[]
   */
  public $affectedFrameworks;
  /**
   * Optional. Output only. For resource violations, the ID of the organization
   * policy violation that caused this resource violation. This field is empty
   * for organization policy violations.
   *
   * @var string
   */
  public $associatedOrgPolicyViolationId;
  /**
   * Output only. Immutable. A link to the Cloud Audit Logs entries for the
   * violated resource. Format: `https://console.cloud.google.com/logs/query;que
   * ry={logName}{protoPayload.resourceName}{timeRange}{folder}`
   *
   * @var string
   */
  public $auditLogLink;
  /**
   * Output only. The time of the event that triggered the violation.
   *
   * @var string
   */
  public $beginTime;
  /**
   * Output only. The category that the violation is mapped to. For example,
   * `Location`, `Service Usage`, `Access`, or `Encryption`.
   *
   * @var string
   */
  public $category;
  /**
   * Optional. Output only. For organization policy violations, the number of
   * resource violations that are associated with this violation. This field is
   * `0` for resource violations.
   *
   * @var int
   */
  public $childResourceViolationCount;
  /**
   * Output only. A description of the violation. For example, `OrgPolicy
   * gcp.resourceLocations has non compliant value.`
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Immutable. A link to the Cloud Audit Logs entries that contain
   * the business justification that was provided when the violation was
   * acknowledged. Format: `https://console.cloud.google.com/logs/query;query={l
   * ogName}{protoPayload.resourceName}{protoPayload.methodName}{timeRange}{orga
   * nization}`
   *
   * @var string
   */
  public $exceptionAuditLogLink;
  protected $exceptionContextsType = GoogleCloudAssuredworkloadsV1ViolationExceptionContext::class;
  protected $exceptionContextsDataType = 'array';
  /**
   * Output only. Immutable. The resource name of the violation. Format: `organi
   * zations/{organization}/locations/{location}/workloads/{workload_id}/violati
   * ons/{violations_id}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Immutable. The name of the organization policy that was
   * modified with a non-compliant change and resulted in this violation.
   * Formats: * `projects/{project_number}/policies/{constraint_name}` *
   * `folders/{folder_id}/policies/{constraint_name}` *
   * `organizations/{organization_id}/policies/{constraint_name}`
   *
   * @var string
   */
  public $nonCompliantOrgPolicy;
  /**
   * Output only. Immutable. Deprecated: This field is deprecated and might be
   * removed in a future version of the API. Use `non_compliant_org_policy`
   * instead, which contains the full resource name of the organization policy,
   * including the constraint name. The organization policy constraint that was
   * changed in a non-compliant way, which resulted in this violation.
   *
   * @deprecated
   * @var string
   */
  public $orgPolicyConstraint;
  /**
   * Optional. Output only. For resource violations, the number of the project
   * that contains the non-compliant resource. This field is empty for
   * organization policy violations.
   *
   * @var string
   */
  public $parentProjectNumber;
  protected $remediationType = GoogleCloudAssuredworkloadsV1ViolationRemediation::class;
  protected $remediationDataType = '';
  /**
   * Output only. The remediation instructions for the violation, in Markdown
   * format. This field is only populated by `GetViolation` when using
   * `VIOLATION_VIEW_DATA_BOUNDARY`. When this field isn't populated, see
   * `remediation` instead.
   *
   * @var string
   */
  public $remediationMarkdown;
  /**
   * Output only. The time of the event that resolved the violation. This field
   * is empty if the violation is unresolved.
   *
   * @var string
   */
  public $resolveTime;
  /**
   * Optional. Output only. For resource violations, the full resource name of
   * the non-compliant resource. For example,
   * `//storage.googleapis.com/myprojectxyz-testbucket`. This field is empty for
   * organization policy violations.
   *
   * @var string
   */
  public $resourceName;
  /**
   * Optional. Output only. For resource violations, the type of the non-
   * compliant resource. For example, `compute.googleapis.com/Disk`. This field
   * is empty for organization policy violations.
   *
   * @var string
   */
  public $resourceType;
  /**
   * Output only. The state of the violation.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time when the violation record was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. The type of the violation.
   *
   * @var string
   */
  public $violationType;

  /**
   * Whether the violation has been acknowledged.
   *
   * @param bool $acknowledged
   */
  public function setAcknowledged($acknowledged)
  {
    $this->acknowledged = $acknowledged;
  }
  /**
   * @return bool
   */
  public function getAcknowledged()
  {
    return $this->acknowledged;
  }
  /**
   * Optional. The time when the violation was first acknowledged. To find the
   * most recent time that the violation was acknowledged, check
   * `exception_contexts`. This field is absent when `acknowledged` is `false`.
   *
   * @param string $acknowledgementTime
   */
  public function setAcknowledgementTime($acknowledgementTime)
  {
    $this->acknowledgementTime = $acknowledgementTime;
  }
  /**
   * @return string
   */
  public function getAcknowledgementTime()
  {
    return $this->acknowledgementTime;
  }
  /**
   * Output only. The IDs of the compliance frameworks that are affected by this
   * violation. For example, `builtin-fedramp-high`. This field is only
   * populated when using `VIOLATION_VIEW_DATA_BOUNDARY`.
   *
   * @param string[] $affectedFrameworks
   */
  public function setAffectedFrameworks($affectedFrameworks)
  {
    $this->affectedFrameworks = $affectedFrameworks;
  }
  /**
   * @return string[]
   */
  public function getAffectedFrameworks()
  {
    return $this->affectedFrameworks;
  }
  /**
   * Optional. Output only. For resource violations, the ID of the organization
   * policy violation that caused this resource violation. This field is empty
   * for organization policy violations.
   *
   * @param string $associatedOrgPolicyViolationId
   */
  public function setAssociatedOrgPolicyViolationId($associatedOrgPolicyViolationId)
  {
    $this->associatedOrgPolicyViolationId = $associatedOrgPolicyViolationId;
  }
  /**
   * @return string
   */
  public function getAssociatedOrgPolicyViolationId()
  {
    return $this->associatedOrgPolicyViolationId;
  }
  /**
   * Output only. Immutable. A link to the Cloud Audit Logs entries for the
   * violated resource. Format: `https://console.cloud.google.com/logs/query;que
   * ry={logName}{protoPayload.resourceName}{timeRange}{folder}`
   *
   * @param string $auditLogLink
   */
  public function setAuditLogLink($auditLogLink)
  {
    $this->auditLogLink = $auditLogLink;
  }
  /**
   * @return string
   */
  public function getAuditLogLink()
  {
    return $this->auditLogLink;
  }
  /**
   * Output only. The time of the event that triggered the violation.
   *
   * @param string $beginTime
   */
  public function setBeginTime($beginTime)
  {
    $this->beginTime = $beginTime;
  }
  /**
   * @return string
   */
  public function getBeginTime()
  {
    return $this->beginTime;
  }
  /**
   * Output only. The category that the violation is mapped to. For example,
   * `Location`, `Service Usage`, `Access`, or `Encryption`.
   *
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * Optional. Output only. For organization policy violations, the number of
   * resource violations that are associated with this violation. This field is
   * `0` for resource violations.
   *
   * @param int $childResourceViolationCount
   */
  public function setChildResourceViolationCount($childResourceViolationCount)
  {
    $this->childResourceViolationCount = $childResourceViolationCount;
  }
  /**
   * @return int
   */
  public function getChildResourceViolationCount()
  {
    return $this->childResourceViolationCount;
  }
  /**
   * Output only. A description of the violation. For example, `OrgPolicy
   * gcp.resourceLocations has non compliant value.`
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
   * Output only. Immutable. A link to the Cloud Audit Logs entries that contain
   * the business justification that was provided when the violation was
   * acknowledged. Format: `https://console.cloud.google.com/logs/query;query={l
   * ogName}{protoPayload.resourceName}{protoPayload.methodName}{timeRange}{orga
   * nization}`
   *
   * @param string $exceptionAuditLogLink
   */
  public function setExceptionAuditLogLink($exceptionAuditLogLink)
  {
    $this->exceptionAuditLogLink = $exceptionAuditLogLink;
  }
  /**
   * @return string
   */
  public function getExceptionAuditLogLink()
  {
    return $this->exceptionAuditLogLink;
  }
  /**
   * Output only. The details of all of the acknowledgements (exceptions) for
   * the violation.
   *
   * @param GoogleCloudAssuredworkloadsV1ViolationExceptionContext[] $exceptionContexts
   */
  public function setExceptionContexts($exceptionContexts)
  {
    $this->exceptionContexts = $exceptionContexts;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1ViolationExceptionContext[]
   */
  public function getExceptionContexts()
  {
    return $this->exceptionContexts;
  }
  /**
   * Output only. Immutable. The resource name of the violation. Format: `organi
   * zations/{organization}/locations/{location}/workloads/{workload_id}/violati
   * ons/{violations_id}`
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
   * Output only. Immutable. The name of the organization policy that was
   * modified with a non-compliant change and resulted in this violation.
   * Formats: * `projects/{project_number}/policies/{constraint_name}` *
   * `folders/{folder_id}/policies/{constraint_name}` *
   * `organizations/{organization_id}/policies/{constraint_name}`
   *
   * @param string $nonCompliantOrgPolicy
   */
  public function setNonCompliantOrgPolicy($nonCompliantOrgPolicy)
  {
    $this->nonCompliantOrgPolicy = $nonCompliantOrgPolicy;
  }
  /**
   * @return string
   */
  public function getNonCompliantOrgPolicy()
  {
    return $this->nonCompliantOrgPolicy;
  }
  /**
   * Output only. Immutable. Deprecated: This field is deprecated and might be
   * removed in a future version of the API. Use `non_compliant_org_policy`
   * instead, which contains the full resource name of the organization policy,
   * including the constraint name. The organization policy constraint that was
   * changed in a non-compliant way, which resulted in this violation.
   *
   * @deprecated
   * @param string $orgPolicyConstraint
   */
  public function setOrgPolicyConstraint($orgPolicyConstraint)
  {
    $this->orgPolicyConstraint = $orgPolicyConstraint;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getOrgPolicyConstraint()
  {
    return $this->orgPolicyConstraint;
  }
  /**
   * Optional. Output only. For resource violations, the number of the project
   * that contains the non-compliant resource. This field is empty for
   * organization policy violations.
   *
   * @param string $parentProjectNumber
   */
  public function setParentProjectNumber($parentProjectNumber)
  {
    $this->parentProjectNumber = $parentProjectNumber;
  }
  /**
   * @return string
   */
  public function getParentProjectNumber()
  {
    return $this->parentProjectNumber;
  }
  /**
   * Output only. The remediation guidance for the violation.
   *
   * @param GoogleCloudAssuredworkloadsV1ViolationRemediation $remediation
   */
  public function setRemediation(GoogleCloudAssuredworkloadsV1ViolationRemediation $remediation)
  {
    $this->remediation = $remediation;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1ViolationRemediation
   */
  public function getRemediation()
  {
    return $this->remediation;
  }
  /**
   * Output only. The remediation instructions for the violation, in Markdown
   * format. This field is only populated by `GetViolation` when using
   * `VIOLATION_VIEW_DATA_BOUNDARY`. When this field isn't populated, see
   * `remediation` instead.
   *
   * @param string $remediationMarkdown
   */
  public function setRemediationMarkdown($remediationMarkdown)
  {
    $this->remediationMarkdown = $remediationMarkdown;
  }
  /**
   * @return string
   */
  public function getRemediationMarkdown()
  {
    return $this->remediationMarkdown;
  }
  /**
   * Output only. The time of the event that resolved the violation. This field
   * is empty if the violation is unresolved.
   *
   * @param string $resolveTime
   */
  public function setResolveTime($resolveTime)
  {
    $this->resolveTime = $resolveTime;
  }
  /**
   * @return string
   */
  public function getResolveTime()
  {
    return $this->resolveTime;
  }
  /**
   * Optional. Output only. For resource violations, the full resource name of
   * the non-compliant resource. For example,
   * `//storage.googleapis.com/myprojectxyz-testbucket`. This field is empty for
   * organization policy violations.
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Optional. Output only. For resource violations, the type of the non-
   * compliant resource. For example, `compute.googleapis.com/Disk`. This field
   * is empty for organization policy violations.
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Output only. The state of the violation.
   *
   * Accepted values: STATE_UNSPECIFIED, RESOLVED, UNRESOLVED, EXCEPTION
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The time when the violation record was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. The type of the violation.
   *
   * Accepted values: VIOLATION_TYPE_UNSPECIFIED, ORG_POLICY, RESOURCE
   *
   * @param self::VIOLATION_TYPE_* $violationType
   */
  public function setViolationType($violationType)
  {
    $this->violationType = $violationType;
  }
  /**
   * @return self::VIOLATION_TYPE_*
   */
  public function getViolationType()
  {
    return $this->violationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1Violation::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1Violation');
