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

namespace Google\Service\ThreatIntelligenceService;

class LegacyMetadata extends \Google\Model
{
  /**
   * Output only. Whether aggregation is enabled for alerts from this monitor.
   *
   * @var bool
   */
  public $aggregationEnabled;
  /**
   * Output only. Similarity threshold for aggregation.
   *
   * @var 
   */
  public $aggregationSimilarity;
  /**
   * Output only. Version of the condition schema.
   *
   * @var int
   */
  public $conditionVersion;
  /**
   * Output only. User ID who created the monitor.
   *
   * @var string
   */
  public $creatorUserId;
  /**
   * Output only. Description of the legacy monitor.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Code indicating why the monitor is disabled (if applicable).
   *
   * @var string
   */
  public $disabledCode;
  /**
   * Output only. Reason why the monitor is disabled (if applicable).
   *
   * @var string
   */
  public $disabledReason;
  /**
   * Output only. Name of the legacy monitor.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Deprecated: Whether email notifications are enabled. This
   * field will not be used as email notifications are handled through the GTI
   * Mail Hub.
   *
   * @deprecated
   * @var bool
   */
  public $emailNotificationEnabled;
  /**
   * Output only. Deprecated: Whether email notifications are
   * intermediate/immediate. This field will not be used as email notifications
   * are handled through the GTI Mail Hub.
   *
   * @deprecated
   * @var bool
   */
  public $emailNotificationImmediate;
  /**
   * Output only. Unique identifier of the legacy monitor.
   *
   * @var string
   */
  public $legacyMonitorId;
  /**
   * Output only. Time the legacy monitor was considered stale.
   *
   * @var string
   */
  public $staleTime;
  /**
   * Output only. ID of the template this monitor was created from.
   *
   * @var string
   */
  public $templateId;
  /**
   * Output only. ID of the tenant owning the monitor.
   *
   * @var string
   */
  public $tenantId;
  /**
   * Output only. User ID who last updated the monitor.
   *
   * @var string
   */
  public $updaterUserId;
  /**
   * Output only. Version of the monitor configuration.
   *
   * @var int
   */
  public $version;

  /**
   * Output only. Whether aggregation is enabled for alerts from this monitor.
   *
   * @param bool $aggregationEnabled
   */
  public function setAggregationEnabled($aggregationEnabled)
  {
    $this->aggregationEnabled = $aggregationEnabled;
  }
  /**
   * @return bool
   */
  public function getAggregationEnabled()
  {
    return $this->aggregationEnabled;
  }
  public function setAggregationSimilarity($aggregationSimilarity)
  {
    $this->aggregationSimilarity = $aggregationSimilarity;
  }
  public function getAggregationSimilarity()
  {
    return $this->aggregationSimilarity;
  }
  /**
   * Output only. Version of the condition schema.
   *
   * @param int $conditionVersion
   */
  public function setConditionVersion($conditionVersion)
  {
    $this->conditionVersion = $conditionVersion;
  }
  /**
   * @return int
   */
  public function getConditionVersion()
  {
    return $this->conditionVersion;
  }
  /**
   * Output only. User ID who created the monitor.
   *
   * @param string $creatorUserId
   */
  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }
  /**
   * @return string
   */
  public function getCreatorUserId()
  {
    return $this->creatorUserId;
  }
  /**
   * Output only. Description of the legacy monitor.
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
   * Output only. Code indicating why the monitor is disabled (if applicable).
   *
   * @param string $disabledCode
   */
  public function setDisabledCode($disabledCode)
  {
    $this->disabledCode = $disabledCode;
  }
  /**
   * @return string
   */
  public function getDisabledCode()
  {
    return $this->disabledCode;
  }
  /**
   * Output only. Reason why the monitor is disabled (if applicable).
   *
   * @param string $disabledReason
   */
  public function setDisabledReason($disabledReason)
  {
    $this->disabledReason = $disabledReason;
  }
  /**
   * @return string
   */
  public function getDisabledReason()
  {
    return $this->disabledReason;
  }
  /**
   * Output only. Name of the legacy monitor.
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
   * Output only. Deprecated: Whether email notifications are enabled. This
   * field will not be used as email notifications are handled through the GTI
   * Mail Hub.
   *
   * @deprecated
   * @param bool $emailNotificationEnabled
   */
  public function setEmailNotificationEnabled($emailNotificationEnabled)
  {
    $this->emailNotificationEnabled = $emailNotificationEnabled;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getEmailNotificationEnabled()
  {
    return $this->emailNotificationEnabled;
  }
  /**
   * Output only. Deprecated: Whether email notifications are
   * intermediate/immediate. This field will not be used as email notifications
   * are handled through the GTI Mail Hub.
   *
   * @deprecated
   * @param bool $emailNotificationImmediate
   */
  public function setEmailNotificationImmediate($emailNotificationImmediate)
  {
    $this->emailNotificationImmediate = $emailNotificationImmediate;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getEmailNotificationImmediate()
  {
    return $this->emailNotificationImmediate;
  }
  /**
   * Output only. Unique identifier of the legacy monitor.
   *
   * @param string $legacyMonitorId
   */
  public function setLegacyMonitorId($legacyMonitorId)
  {
    $this->legacyMonitorId = $legacyMonitorId;
  }
  /**
   * @return string
   */
  public function getLegacyMonitorId()
  {
    return $this->legacyMonitorId;
  }
  /**
   * Output only. Time the legacy monitor was considered stale.
   *
   * @param string $staleTime
   */
  public function setStaleTime($staleTime)
  {
    $this->staleTime = $staleTime;
  }
  /**
   * @return string
   */
  public function getStaleTime()
  {
    return $this->staleTime;
  }
  /**
   * Output only. ID of the template this monitor was created from.
   *
   * @param string $templateId
   */
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  /**
   * @return string
   */
  public function getTemplateId()
  {
    return $this->templateId;
  }
  /**
   * Output only. ID of the tenant owning the monitor.
   *
   * @param string $tenantId
   */
  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }
  /**
   * @return string
   */
  public function getTenantId()
  {
    return $this->tenantId;
  }
  /**
   * Output only. User ID who last updated the monitor.
   *
   * @param string $updaterUserId
   */
  public function setUpdaterUserId($updaterUserId)
  {
    $this->updaterUserId = $updaterUserId;
  }
  /**
   * @return string
   */
  public function getUpdaterUserId()
  {
    return $this->updaterUserId;
  }
  /**
   * Output only. Version of the monitor configuration.
   *
   * @param int $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return int
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LegacyMetadata::class, 'Google_Service_ThreatIntelligenceService_LegacyMetadata');
