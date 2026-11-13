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

class GoogleCloudAssuredworkloadsV1CloudControlReport extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const CLOUD_CONTROL_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * A cloud control that's created and managed by you.
   */
  public const CLOUD_CONTROL_TYPE_CUSTOM = 'CUSTOM';
  /**
   * A cloud control that's provided and managed by Google.
   */
  public const CLOUD_CONTROL_TYPE_BUILT_IN = 'BUILT_IN';
  /**
   * Default value. This value is unused.
   */
  public const ENFORCEMENT_MODE_ENFORCEMENT_MODE_UNSPECIFIED = 'ENFORCEMENT_MODE_UNSPECIFIED';
  /**
   * The cloud control is enforced to prevent non-compliance.
   */
  public const ENFORCEMENT_MODE_PREVENTIVE = 'PREVENTIVE';
  /**
   * The cloud control is enforced to detect non-compliance.
   */
  public const ENFORCEMENT_MODE_DETECTIVE = 'DETECTIVE';
  /**
   * The cloud control is enforced to audit for non-compliance.
   */
  public const ENFORCEMENT_MODE_AUDIT = 'AUDIT';
  /**
   * Default value. This value is unused.
   */
  public const FINDING_SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * A critical vulnerability is easily discoverable by an external actor,
   * exploitable, and results in the direct ability to execute arbitrary code,
   * exfiltrate data, and otherwise gain additional access and privileges to
   * cloud resources and workloads. Examples include publicly accessible
   * unprotected user data and public SSH access with weak or no passwords. A
   * critical threat is a threat that can access, modify, or delete data or
   * execute unauthorized code within existing resources.
   */
  public const FINDING_SEVERITY_CRITICAL = 'CRITICAL';
  /**
   * A high-risk vulnerability can be easily discovered and exploited in
   * combination with other vulnerabilities to gain direct access and the
   * ability to execute arbitrary code, exfiltrate data, and otherwise gain
   * additional access and privileges to cloud resources and workloads. An
   * example is a database with weak or no passwords that is only accessible
   * internally. This database could easily be compromised by an actor that had
   * access to the internal network. A high-risk threat is a threat that can
   * create new computational resources in an environment but can't access data
   * or execute code in existing resources.
   */
  public const FINDING_SEVERITY_HIGH = 'HIGH';
  /**
   * A medium-risk vulnerability can be used by an actor to gain access to
   * resources or privileges that enable them to eventually (through multiple
   * steps or a complex exploit) gain access and the ability to execute
   * arbitrary code or exfiltrate data. An example is a service account with
   * access to more projects than it should have. If an actor gains access to
   * the service account, they could potentially use that access to manipulate a
   * project the service account was not intended to. A medium-risk threat can
   * cause operational impact but might not access data or execute unauthorized
   * code.
   */
  public const FINDING_SEVERITY_MEDIUM = 'MEDIUM';
  /**
   * A low-risk vulnerability hampers a security organization's ability to
   * detect vulnerabilities or active threats in their deployment, or prevents
   * the root cause investigation of security issues. An example is monitoring
   * and logs being disabled for resource configurations and access. A low-risk
   * threat is a threat that has obtained minimal access to an environment but
   * can't access data, execute code, or create resources.
   */
  public const FINDING_SEVERITY_LOW = 'LOW';
  protected $collection_key = 'similarControls';
  /**
   * The list of categories for the cloud control.
   *
   * @var string[]
   */
  public $categories;
  /**
   * The name of the cloud control.
   *
   * @var string
   */
  public $cloudControl;
  protected $cloudControlAssessmentDetailsType = GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails::class;
  protected $cloudControlAssessmentDetailsDataType = '';
  /**
   * The name of the cloud control deployment.
   *
   * @var string
   */
  public $cloudControlDeployment;
  /**
   * The type of the cloud control.
   *
   * @var string
   */
  public $cloudControlType;
  /**
   * The description of the cloud control.
   *
   * @var string
   */
  public $description;
  /**
   * The display name of the cloud control.
   *
   * @var string
   */
  public $displayName;
  /**
   * The enforcement mode of the cloud control.
   *
   * @var string
   */
  public $enforcementMode;
  /**
   * The category of the finding.
   *
   * @var string
   */
  public $findingCategory;
  /**
   * The severity of the finding.
   *
   * @var string
   */
  public $findingSeverity;
  /**
   * The major revision IDs of the frameworks that the cloud control belongs to.
   *
   * @var string[]
   */
  public $frameworkMajorRevisionIds;
  /**
   * The major revision ID of the cloud control.
   *
   * @var string
   */
  public $majorRevisionId;
  protected $manualCloudControlAssessmentDetailsType = GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails::class;
  protected $manualCloudControlAssessmentDetailsDataType = '';
  /**
   * The minor revision ID of the cloud control.
   *
   * @var string
   */
  public $minorRevisionId;
  protected $rulesType = GoogleCloudAssuredworkloadsV1Rule::class;
  protected $rulesDataType = 'array';
  protected $similarControlsType = GoogleCloudAssuredworkloadsV1SimilarControls::class;
  protected $similarControlsDataType = 'array';

  /**
   * The list of categories for the cloud control.
   *
   * @param string[] $categories
   */
  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  /**
   * @return string[]
   */
  public function getCategories()
  {
    return $this->categories;
  }
  /**
   * The name of the cloud control.
   *
   * @param string $cloudControl
   */
  public function setCloudControl($cloudControl)
  {
    $this->cloudControl = $cloudControl;
  }
  /**
   * @return string
   */
  public function getCloudControl()
  {
    return $this->cloudControl;
  }
  /**
   * The details of a cloud control assessment.
   *
   * @param GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails $cloudControlAssessmentDetails
   */
  public function setCloudControlAssessmentDetails(GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails $cloudControlAssessmentDetails)
  {
    $this->cloudControlAssessmentDetails = $cloudControlAssessmentDetails;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1CloudControlAssessmentDetails
   */
  public function getCloudControlAssessmentDetails()
  {
    return $this->cloudControlAssessmentDetails;
  }
  /**
   * The name of the cloud control deployment.
   *
   * @param string $cloudControlDeployment
   */
  public function setCloudControlDeployment($cloudControlDeployment)
  {
    $this->cloudControlDeployment = $cloudControlDeployment;
  }
  /**
   * @return string
   */
  public function getCloudControlDeployment()
  {
    return $this->cloudControlDeployment;
  }
  /**
   * The type of the cloud control.
   *
   * Accepted values: TYPE_UNSPECIFIED, CUSTOM, BUILT_IN
   *
   * @param self::CLOUD_CONTROL_TYPE_* $cloudControlType
   */
  public function setCloudControlType($cloudControlType)
  {
    $this->cloudControlType = $cloudControlType;
  }
  /**
   * @return self::CLOUD_CONTROL_TYPE_*
   */
  public function getCloudControlType()
  {
    return $this->cloudControlType;
  }
  /**
   * The description of the cloud control.
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
   * The display name of the cloud control.
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
   * The enforcement mode of the cloud control.
   *
   * Accepted values: ENFORCEMENT_MODE_UNSPECIFIED, PREVENTIVE, DETECTIVE, AUDIT
   *
   * @param self::ENFORCEMENT_MODE_* $enforcementMode
   */
  public function setEnforcementMode($enforcementMode)
  {
    $this->enforcementMode = $enforcementMode;
  }
  /**
   * @return self::ENFORCEMENT_MODE_*
   */
  public function getEnforcementMode()
  {
    return $this->enforcementMode;
  }
  /**
   * The category of the finding.
   *
   * @param string $findingCategory
   */
  public function setFindingCategory($findingCategory)
  {
    $this->findingCategory = $findingCategory;
  }
  /**
   * @return string
   */
  public function getFindingCategory()
  {
    return $this->findingCategory;
  }
  /**
   * The severity of the finding.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, CRITICAL, HIGH, MEDIUM, LOW
   *
   * @param self::FINDING_SEVERITY_* $findingSeverity
   */
  public function setFindingSeverity($findingSeverity)
  {
    $this->findingSeverity = $findingSeverity;
  }
  /**
   * @return self::FINDING_SEVERITY_*
   */
  public function getFindingSeverity()
  {
    return $this->findingSeverity;
  }
  /**
   * The major revision IDs of the frameworks that the cloud control belongs to.
   *
   * @param string[] $frameworkMajorRevisionIds
   */
  public function setFrameworkMajorRevisionIds($frameworkMajorRevisionIds)
  {
    $this->frameworkMajorRevisionIds = $frameworkMajorRevisionIds;
  }
  /**
   * @return string[]
   */
  public function getFrameworkMajorRevisionIds()
  {
    return $this->frameworkMajorRevisionIds;
  }
  /**
   * The major revision ID of the cloud control.
   *
   * @param string $majorRevisionId
   */
  public function setMajorRevisionId($majorRevisionId)
  {
    $this->majorRevisionId = $majorRevisionId;
  }
  /**
   * @return string
   */
  public function getMajorRevisionId()
  {
    return $this->majorRevisionId;
  }
  /**
   * The details of a manual cloud control assessment.
   *
   * @param GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails $manualCloudControlAssessmentDetails
   */
  public function setManualCloudControlAssessmentDetails(GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails $manualCloudControlAssessmentDetails)
  {
    $this->manualCloudControlAssessmentDetails = $manualCloudControlAssessmentDetails;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1ManualCloudControlAssessmentDetails
   */
  public function getManualCloudControlAssessmentDetails()
  {
    return $this->manualCloudControlAssessmentDetails;
  }
  /**
   * The minor revision ID of the cloud control.
   *
   * @param string $minorRevisionId
   */
  public function setMinorRevisionId($minorRevisionId)
  {
    $this->minorRevisionId = $minorRevisionId;
  }
  /**
   * @return string
   */
  public function getMinorRevisionId()
  {
    return $this->minorRevisionId;
  }
  /**
   * The list of rules that correspond to the cloud control.
   *
   * @param GoogleCloudAssuredworkloadsV1Rule[] $rules
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1Rule[]
   */
  public function getRules()
  {
    return $this->rules;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1CloudControlReport::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1CloudControlReport');
