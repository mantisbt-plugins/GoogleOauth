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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaQueryPartUserSuppliedSobiArtifactReference extends \Google\Model
{
  /**
   * Required. Client-supplied filename. Unique per task within the user-
   * supplied artifact set (UI dedupes before upload). Doubles as the artifact
   * identifier used to look up the artifact on `Task.artifacts`. The `_name`
   * suffix is deliberate and the AIP-122 lint is suppressed: this field is not
   * a resource name (which is what AIP-122 reserves the bare `name` for). It is
   * the literal filename, and it serves as the join key against
   * `AgentArtifact.name` on the backing Sobi task -- a structural role that
   * `title` or `display_name` would not communicate to a client picking what to
   * send. The internal mirror
   * (`cloud/ml/discoveryengine/schema/assistant.proto`) uses the same field
   * name so the round-trip converter stays name-for-name.
   *
   * @var string
   */
  public $fileName;
  /**
   * Optional. IANA MIME type. Used for icon/preview rendering.
   *
   * @var string
   */
  public $mimeType;

  /**
   * Required. Client-supplied filename. Unique per task within the user-
   * supplied artifact set (UI dedupes before upload). Doubles as the artifact
   * identifier used to look up the artifact on `Task.artifacts`. The `_name`
   * suffix is deliberate and the AIP-122 lint is suppressed: this field is not
   * a resource name (which is what AIP-122 reserves the bare `name` for). It is
   * the literal filename, and it serves as the join key against
   * `AgentArtifact.name` on the backing Sobi task -- a structural role that
   * `title` or `display_name` would not communicate to a client picking what to
   * send. The internal mirror
   * (`cloud/ml/discoveryengine/schema/assistant.proto`) uses the same field
   * name so the round-trip converter stays name-for-name.
   *
   * @param string $fileName
   */
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }
  /**
   * @return string
   */
  public function getFileName()
  {
    return $this->fileName;
  }
  /**
   * Optional. IANA MIME type. Used for icon/preview rendering.
   *
   * @param string $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaQueryPartUserSuppliedSobiArtifactReference::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaQueryPartUserSuppliedSobiArtifactReference');
