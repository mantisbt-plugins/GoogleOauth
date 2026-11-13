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

class GoogleCloudAssuredworkloadsV1ViolationRemediation extends \Google\Collection
{
  /**
   * Default value. The remediation type isn't specified.
   */
  public const REMEDIATION_TYPE_REMEDIATION_TYPE_UNSPECIFIED = 'REMEDIATION_TYPE_UNSPECIFIED';
  /**
   * Remediation for a boolean organization policy violation.
   */
  public const REMEDIATION_TYPE_REMEDIATION_BOOLEAN_ORG_POLICY_VIOLATION = 'REMEDIATION_BOOLEAN_ORG_POLICY_VIOLATION';
  /**
   * Remediation for a list organization policy violation where the monitoring
   * rule specifies allowed values.
   */
  public const REMEDIATION_TYPE_REMEDIATION_LIST_ALLOWED_VALUES_ORG_POLICY_VIOLATION = 'REMEDIATION_LIST_ALLOWED_VALUES_ORG_POLICY_VIOLATION';
  /**
   * Remediation for a list organization policy violation where the monitoring
   * rule specifies denied values.
   */
  public const REMEDIATION_TYPE_REMEDIATION_LIST_DENIED_VALUES_ORG_POLICY_VIOLATION = 'REMEDIATION_LIST_DENIED_VALUES_ORG_POLICY_VIOLATION';
  /**
   * Remediation for a `gcp.restrictCmekCryptoKeyProjects` organization policy
   * violation.
   */
  public const REMEDIATION_TYPE_REMEDIATION_RESTRICT_CMEK_CRYPTO_KEY_PROJECTS_ORG_POLICY_VIOLATION = 'REMEDIATION_RESTRICT_CMEK_CRYPTO_KEY_PROJECTS_ORG_POLICY_VIOLATION';
  /**
   * Remediation for a resource violation.
   */
  public const REMEDIATION_TYPE_REMEDIATION_RESOURCE_VIOLATION = 'REMEDIATION_RESOURCE_VIOLATION';
  /**
   * Remediation for a resource violation that's caused by the
   * `gcp.restrictNonCmekServices` organization policy.
   */
  public const REMEDIATION_TYPE_REMEDIATION_RESOURCE_VIOLATION_NON_CMEK_SERVICES = 'REMEDIATION_RESOURCE_VIOLATION_NON_CMEK_SERVICES';
  protected $collection_key = 'compliantValues';
  /**
   * The values that can resolve the violation. For example, for list
   * organization policy violations, this field contains the list of allowed or
   * denied values.
   *
   * @var string[]
   */
  public $compliantValues;
  protected $instructionsType = GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions::class;
  protected $instructionsDataType = '';
  /**
   * Output only. The remediation type, which is based on the type of
   * organization policy values that were violated.
   *
   * @var string
   */
  public $remediationType;

  /**
   * The values that can resolve the violation. For example, for list
   * organization policy violations, this field contains the list of allowed or
   * denied values.
   *
   * @param string[] $compliantValues
   */
  public function setCompliantValues($compliantValues)
  {
    $this->compliantValues = $compliantValues;
  }
  /**
   * @return string[]
   */
  public function getCompliantValues()
  {
    return $this->compliantValues;
  }
  /**
   * Required. The instructions to resolve the violation.
   *
   * @param GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions $instructions
   */
  public function setInstructions(GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions $instructions)
  {
    $this->instructions = $instructions;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1ViolationRemediationInstructions
   */
  public function getInstructions()
  {
    return $this->instructions;
  }
  /**
   * Output only. The remediation type, which is based on the type of
   * organization policy values that were violated.
   *
   * Accepted values: REMEDIATION_TYPE_UNSPECIFIED,
   * REMEDIATION_BOOLEAN_ORG_POLICY_VIOLATION,
   * REMEDIATION_LIST_ALLOWED_VALUES_ORG_POLICY_VIOLATION,
   * REMEDIATION_LIST_DENIED_VALUES_ORG_POLICY_VIOLATION,
   * REMEDIATION_RESTRICT_CMEK_CRYPTO_KEY_PROJECTS_ORG_POLICY_VIOLATION,
   * REMEDIATION_RESOURCE_VIOLATION,
   * REMEDIATION_RESOURCE_VIOLATION_NON_CMEK_SERVICES
   *
   * @param self::REMEDIATION_TYPE_* $remediationType
   */
  public function setRemediationType($remediationType)
  {
    $this->remediationType = $remediationType;
  }
  /**
   * @return self::REMEDIATION_TYPE_*
   */
  public function getRemediationType()
  {
    return $this->remediationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1ViolationRemediation::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1ViolationRemediation');
