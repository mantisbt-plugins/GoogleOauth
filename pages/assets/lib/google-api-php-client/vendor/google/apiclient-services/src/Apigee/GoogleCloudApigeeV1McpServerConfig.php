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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1McpServerConfig extends \Google\Model
{
  /**
   * Output only. Cloud Storage URI to the McpServerConfigData blob in the
   * Apigee tenant project bucket. The sidecar fetches this URI using Cloud
   * Storage, and deserializes the. protojson blob to McpServerConfigData. Treat
   * this as an opaque URI — its format may change. Example: gs://{apigee-tp-
   * bucket}/apigee-mcp-config-{org}-{revision_id}.json
   *
   * @var string
   */
  public $mcpServerConfigDataLocation;
  /**
   * Identifier. Resource name in the singleton form:
   * organizations/{org}/mcpServerConfig
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Time at which this McpServerConfig revision was created.
   * Mirrors IngressConfig.revision_create_time.
   *
   * @var string
   */
  public $revisionCreateTime;
  /**
   * Output only. Revision ID that defines the ordering on McpServerConfig
   * revisions. Higher values indicate more recently deployed configurations.
   * Monotonically non-decreasing per organization. Mirrors
   * IngressConfig.revision_id.
   *
   * @var string
   */
  public $revisionId;
  /**
   * Output only. Unique ID for the McpServerConfig that will only change if the
   * organization is deleted and recreated.
   *
   * @var string
   */
  public $uid;

  /**
   * Output only. Cloud Storage URI to the McpServerConfigData blob in the
   * Apigee tenant project bucket. The sidecar fetches this URI using Cloud
   * Storage, and deserializes the. protojson blob to McpServerConfigData. Treat
   * this as an opaque URI — its format may change. Example: gs://{apigee-tp-
   * bucket}/apigee-mcp-config-{org}-{revision_id}.json
   *
   * @param string $mcpServerConfigDataLocation
   */
  public function setMcpServerConfigDataLocation($mcpServerConfigDataLocation)
  {
    $this->mcpServerConfigDataLocation = $mcpServerConfigDataLocation;
  }
  /**
   * @return string
   */
  public function getMcpServerConfigDataLocation()
  {
    return $this->mcpServerConfigDataLocation;
  }
  /**
   * Identifier. Resource name in the singleton form:
   * organizations/{org}/mcpServerConfig
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
   * Output only. Time at which this McpServerConfig revision was created.
   * Mirrors IngressConfig.revision_create_time.
   *
   * @param string $revisionCreateTime
   */
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /**
   * @return string
   */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /**
   * Output only. Revision ID that defines the ordering on McpServerConfig
   * revisions. Higher values indicate more recently deployed configurations.
   * Monotonically non-decreasing per organization. Mirrors
   * IngressConfig.revision_id.
   *
   * @param string $revisionId
   */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /**
   * @return string
   */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
  /**
   * Output only. Unique ID for the McpServerConfig that will only change if the
   * organization is deleted and recreated.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1McpServerConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1McpServerConfig');
