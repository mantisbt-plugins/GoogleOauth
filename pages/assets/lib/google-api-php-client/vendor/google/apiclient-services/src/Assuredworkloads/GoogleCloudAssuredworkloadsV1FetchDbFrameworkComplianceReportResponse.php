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

class GoogleCloudAssuredworkloadsV1FetchDbFrameworkComplianceReportResponse extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const FRAMEWORK_TYPE_FRAMEWORK_TYPE_UNSPECIFIED = 'FRAMEWORK_TYPE_UNSPECIFIED';
  /**
   * A framework that's provided and managed by Google.
   */
  public const FRAMEWORK_TYPE_BUILT_IN = 'BUILT_IN';
  /**
   * A framework that's created and managed by you.
   */
  public const FRAMEWORK_TYPE_CUSTOM = 'CUSTOM';
  protected $collection_key = 'targetResourceDetails';
  protected $controlAssessmentDetailsType = GoogleCloudAssuredworkloadsV1ControlAssessmentDetails::class;
  protected $controlAssessmentDetailsDataType = '';
  /**
   * The resource name of the compliance framework. For example, `organizations/
   * {organization}/locations/{location}/frameworks/{framework_id}`.
   *
   * @var string
   */
  public $framework;
  /**
   * The categories of the framework.
   *
   * @var string[]
   */
  public $frameworkCategories;
  /**
   * The description of the framework.
   *
   * @var string
   */
  public $frameworkDescription;
  /**
   * Optional. The display name of the framework.
   *
   * @var string
   */
  public $frameworkDisplayName;
  /**
   * The type of the framework.
   *
   * @var string
   */
  public $frameworkType;
  /**
   * The latest major revision ID of the framework.
   *
   * @var string
   */
  public $majorRevisionId;
  /**
   * The latest minor revision ID of the latest major revision of the framework.
   *
   * @var string
   */
  public $minorRevisionId;
  /**
   * The resource name of the framework compliance report.
   *
   * @var string
   */
  public $name;
  /**
   * The cloud providers that are supported by the framework.
   *
   * @var string[]
   */
  public $supportedCloudProviders;
  protected $targetResourceDetailsType = GoogleCloudAssuredworkloadsV1TargetResourceDetails::class;
  protected $targetResourceDetailsDataType = 'array';
  /**
   * Output only. The time when the report was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * The number of passing, failing, and not assessed controls in the framework.
   *
   * @param GoogleCloudAssuredworkloadsV1ControlAssessmentDetails $controlAssessmentDetails
   */
  public function setControlAssessmentDetails(GoogleCloudAssuredworkloadsV1ControlAssessmentDetails $controlAssessmentDetails)
  {
    $this->controlAssessmentDetails = $controlAssessmentDetails;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1ControlAssessmentDetails
   */
  public function getControlAssessmentDetails()
  {
    return $this->controlAssessmentDetails;
  }
  /**
   * The resource name of the compliance framework. For example, `organizations/
   * {organization}/locations/{location}/frameworks/{framework_id}`.
   *
   * @param string $framework
   */
  public function setFramework($framework)
  {
    $this->framework = $framework;
  }
  /**
   * @return string
   */
  public function getFramework()
  {
    return $this->framework;
  }
  /**
   * The categories of the framework.
   *
   * @param string[] $frameworkCategories
   */
  public function setFrameworkCategories($frameworkCategories)
  {
    $this->frameworkCategories = $frameworkCategories;
  }
  /**
   * @return string[]
   */
  public function getFrameworkCategories()
  {
    return $this->frameworkCategories;
  }
  /**
   * The description of the framework.
   *
   * @param string $frameworkDescription
   */
  public function setFrameworkDescription($frameworkDescription)
  {
    $this->frameworkDescription = $frameworkDescription;
  }
  /**
   * @return string
   */
  public function getFrameworkDescription()
  {
    return $this->frameworkDescription;
  }
  /**
   * Optional. The display name of the framework.
   *
   * @param string $frameworkDisplayName
   */
  public function setFrameworkDisplayName($frameworkDisplayName)
  {
    $this->frameworkDisplayName = $frameworkDisplayName;
  }
  /**
   * @return string
   */
  public function getFrameworkDisplayName()
  {
    return $this->frameworkDisplayName;
  }
  /**
   * The type of the framework.
   *
   * Accepted values: FRAMEWORK_TYPE_UNSPECIFIED, BUILT_IN, CUSTOM
   *
   * @param self::FRAMEWORK_TYPE_* $frameworkType
   */
  public function setFrameworkType($frameworkType)
  {
    $this->frameworkType = $frameworkType;
  }
  /**
   * @return self::FRAMEWORK_TYPE_*
   */
  public function getFrameworkType()
  {
    return $this->frameworkType;
  }
  /**
   * The latest major revision ID of the framework.
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
   * The latest minor revision ID of the latest major revision of the framework.
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
   * The resource name of the framework compliance report.
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
   * The cloud providers that are supported by the framework.
   *
   * @param string[] $supportedCloudProviders
   */
  public function setSupportedCloudProviders($supportedCloudProviders)
  {
    $this->supportedCloudProviders = $supportedCloudProviders;
  }
  /**
   * @return string[]
   */
  public function getSupportedCloudProviders()
  {
    return $this->supportedCloudProviders;
  }
  /**
   * The details of the target resources (organizations, folders, or projects)
   * that the framework is deployed on.
   *
   * @param GoogleCloudAssuredworkloadsV1TargetResourceDetails[] $targetResourceDetails
   */
  public function setTargetResourceDetails($targetResourceDetails)
  {
    $this->targetResourceDetails = $targetResourceDetails;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1TargetResourceDetails[]
   */
  public function getTargetResourceDetails()
  {
    return $this->targetResourceDetails;
  }
  /**
   * Output only. The time when the report was last updated.
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
class_alias(GoogleCloudAssuredworkloadsV1FetchDbFrameworkComplianceReportResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1FetchDbFrameworkComplianceReportResponse');
