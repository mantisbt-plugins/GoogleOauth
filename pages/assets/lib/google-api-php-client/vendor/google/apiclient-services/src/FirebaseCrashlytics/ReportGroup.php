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

class ReportGroup extends \Google\Collection
{
  protected $collection_key = 'subgroups';
  protected $browserType = Browser::class;
  protected $browserDataType = '';
  protected $customAttributeType = CustomAttribute::class;
  protected $customAttributeDataType = '';
  protected $deviceType = Device::class;
  protected $deviceDataType = '';
  protected $issueType = Issue::class;
  protected $issueDataType = '';
  protected $metricsType = IntervalMetrics::class;
  protected $metricsDataType = 'array';
  protected $operatingSystemType = OperatingSystem::class;
  protected $operatingSystemDataType = '';
  protected $subgroupsType = ReportGroup::class;
  protected $subgroupsDataType = 'array';
  protected $variantType = IssueVariant::class;
  protected $variantDataType = '';
  protected $versionType = Version::class;
  protected $versionDataType = '';
  protected $webMetricsGroupType = WebMetricsGroup::class;
  protected $webMetricsGroupDataType = '';

  /**
   * Browser metrics group.
   *
   * @param Browser $browser
   */
  public function setBrowser(Browser $browser)
  {
    $this->browser = $browser;
  }
  /**
   * @return Browser
   */
  public function getBrowser()
  {
    return $this->browser;
  }
  /**
   * Custom attribute metrics group.
   *
   * @param CustomAttribute $customAttribute
   */
  public function setCustomAttribute(CustomAttribute $customAttribute)
  {
    $this->customAttribute = $customAttribute;
  }
  /**
   * @return CustomAttribute
   */
  public function getCustomAttribute()
  {
    return $this->customAttribute;
  }
  /**
   * Device metrics group.
   *
   * @param Device $device
   */
  public function setDevice(Device $device)
  {
    $this->device = $device;
  }
  /**
   * @return Device
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * Issue metrics group.
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
   * Scalar metrics will contain a single object covering the entire interval,
   * while time-dimensioned graphs will contain one per time grain.
   *
   * @param IntervalMetrics[] $metrics
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return IntervalMetrics[]
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * Operating system metrics group.
   *
   * @param OperatingSystem $operatingSystem
   */
  public function setOperatingSystem(OperatingSystem $operatingSystem)
  {
    $this->operatingSystem = $operatingSystem;
  }
  /**
   * @return OperatingSystem
   */
  public function getOperatingSystem()
  {
    return $this->operatingSystem;
  }
  /**
   * When applicable, this field contains additional nested groupings. For
   * example, events can be grouped by operating system and by operating system
   * version.
   *
   * @param ReportGroup[] $subgroups
   */
  public function setSubgroups($subgroups)
  {
    $this->subgroups = $subgroups;
  }
  /**
   * @return ReportGroup[]
   */
  public function getSubgroups()
  {
    return $this->subgroups;
  }
  /**
   * Issue variant metrics group.
   *
   * @param IssueVariant $variant
   */
  public function setVariant(IssueVariant $variant)
  {
    $this->variant = $variant;
  }
  /**
   * @return IssueVariant
   */
  public function getVariant()
  {
    return $this->variant;
  }
  /**
   * Version metrics group.
   *
   * @param Version $version
   */
  public function setVersion(Version $version)
  {
    $this->version = $version;
  }
  /**
   * @return Version
   */
  public function getVersion()
  {
    return $this->version;
  }
  /**
   * Web metrics group.
   *
   * @param WebMetricsGroup $webMetricsGroup
   */
  public function setWebMetricsGroup(WebMetricsGroup $webMetricsGroup)
  {
    $this->webMetricsGroup = $webMetricsGroup;
  }
  /**
   * @return WebMetricsGroup
   */
  public function getWebMetricsGroup()
  {
    return $this->webMetricsGroup;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportGroup::class, 'Google_Service_FirebaseCrashlytics_ReportGroup');
