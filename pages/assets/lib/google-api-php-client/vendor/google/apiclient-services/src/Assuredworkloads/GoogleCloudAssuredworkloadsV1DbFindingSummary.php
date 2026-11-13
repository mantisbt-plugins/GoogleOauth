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

class GoogleCloudAssuredworkloadsV1DbFindingSummary extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const FINDING_CLASS_FINDING_CLASS_UNSPECIFIED = 'FINDING_CLASS_UNSPECIFIED';
  /**
   * The activity is unwanted or malicious.
   */
  public const FINDING_CLASS_THREAT = 'THREAT';
  /**
   * A potential weakness in software that increases risk to confidentiality,
   * integrity, and availability.
   */
  public const FINDING_CLASS_VULNERABILITY = 'VULNERABILITY';
  /**
   * A potential weakness in a cloud resource or asset configuration that
   * increases risk.
   */
  public const FINDING_CLASS_MISCONFIGURATION = 'MISCONFIGURATION';
  /**
   * A security observation that is for informational purposes.
   */
  public const FINDING_CLASS_OBSERVATION = 'OBSERVATION';
  /**
   * An error that prevents Security Command Center from functioning properly.
   */
  public const FINDING_CLASS_SCC_ERROR = 'SCC_ERROR';
  /**
   * A potential security risk that's due to a change in the security posture.
   */
  public const FINDING_CLASS_POSTURE_VIOLATION = 'POSTURE_VIOLATION';
  /**
   * A combination of security issues that represent a more severe security
   * problem when taken together.
   */
  public const FINDING_CLASS_TOXIC_COMBINATION = 'TOXIC_COMBINATION';
  /**
   * A potential security risk to data assets that contain sensitive data.
   */
  public const FINDING_CLASS_SENSITIVE_DATA_RISK = 'SENSITIVE_DATA_RISK';
  /**
   * A resource or resource group where high risk attack paths converge, based
   * on attack path simulations (APS).
   */
  public const FINDING_CLASS_CHOKEPOINT = 'CHOKEPOINT';
  /**
   * Default value. This value is unused.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * A critical vulnerability is easily discoverable by an external actor,
   * exploitable, and results in the direct ability to execute arbitrary code,
   * exfiltrate data, and otherwise gain additional access and privileges to
   * cloud resources and workloads. Examples include publicly accessible
   * unprotected user data and public SSH access with weak or no passwords. A
   * critical threat is a threat that can access, modify, or delete data or
   * execute unauthorized code within existing resources.
   */
  public const SEVERITY_CRITICAL = 'CRITICAL';
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
  public const SEVERITY_HIGH = 'HIGH';
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
  public const SEVERITY_MEDIUM = 'MEDIUM';
  /**
   * A low-risk vulnerability hampers a security organization's ability to
   * detect vulnerabilities or active threats in their deployment, or prevents
   * the root cause investigation of security issues. An example is monitoring
   * and logs being disabled for resource configurations and access. A low-risk
   * threat is a threat that has obtained minimal access to an environment but
   * can't access data, execute code, or create resources.
   */
  public const SEVERITY_LOW = 'LOW';
  protected $collection_key = 'relatedFrameworks';
  /**
   * Output only. The category of the findings that are summarized.
   *
   * @var string
   */
  public $findingCategory;
  /**
   * Output only. The class of the findings.
   *
   * @var string
   */
  public $findingClass;
  /**
   * Output only. The total number of active findings in the category.
   *
   * @var string
   */
  public $findingCount;
  /**
   * Identifier. The resource name of the finding summary.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The number of active organization policy findings in the
   * category.
   *
   * @var string
   */
  public $organizationPolicyFindingCount;
  /**
   * Optional. The display names of the compliance frameworks that the findings
   * are related to.
   *
   * @var string[]
   */
  public $relatedFrameworks;
  /**
   * Output only. The number of active resource findings in the category.
   *
   * @var string
   */
  public $resourceFindingCount;
  /**
   * Output only. The severity of the findings.
   *
   * @var string
   */
  public $severity;
  /**
   * Output only. The time when the findings in the category were last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The category of the findings that are summarized.
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
   * Output only. The class of the findings.
   *
   * Accepted values: FINDING_CLASS_UNSPECIFIED, THREAT, VULNERABILITY,
   * MISCONFIGURATION, OBSERVATION, SCC_ERROR, POSTURE_VIOLATION,
   * TOXIC_COMBINATION, SENSITIVE_DATA_RISK, CHOKEPOINT
   *
   * @param self::FINDING_CLASS_* $findingClass
   */
  public function setFindingClass($findingClass)
  {
    $this->findingClass = $findingClass;
  }
  /**
   * @return self::FINDING_CLASS_*
   */
  public function getFindingClass()
  {
    return $this->findingClass;
  }
  /**
   * Output only. The total number of active findings in the category.
   *
   * @param string $findingCount
   */
  public function setFindingCount($findingCount)
  {
    $this->findingCount = $findingCount;
  }
  /**
   * @return string
   */
  public function getFindingCount()
  {
    return $this->findingCount;
  }
  /**
   * Identifier. The resource name of the finding summary.
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
   * Output only. The number of active organization policy findings in the
   * category.
   *
   * @param string $organizationPolicyFindingCount
   */
  public function setOrganizationPolicyFindingCount($organizationPolicyFindingCount)
  {
    $this->organizationPolicyFindingCount = $organizationPolicyFindingCount;
  }
  /**
   * @return string
   */
  public function getOrganizationPolicyFindingCount()
  {
    return $this->organizationPolicyFindingCount;
  }
  /**
   * Optional. The display names of the compliance frameworks that the findings
   * are related to.
   *
   * @param string[] $relatedFrameworks
   */
  public function setRelatedFrameworks($relatedFrameworks)
  {
    $this->relatedFrameworks = $relatedFrameworks;
  }
  /**
   * @return string[]
   */
  public function getRelatedFrameworks()
  {
    return $this->relatedFrameworks;
  }
  /**
   * Output only. The number of active resource findings in the category.
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
   * Output only. The severity of the findings.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, CRITICAL, HIGH, MEDIUM, LOW
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * Output only. The time when the findings in the category were last updated.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1DbFindingSummary::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1DbFindingSummary');
