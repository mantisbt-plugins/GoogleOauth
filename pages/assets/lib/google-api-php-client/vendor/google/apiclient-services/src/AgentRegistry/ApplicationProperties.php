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

namespace Google\Service\AgentRegistry;

class ApplicationProperties extends \Google\Model
{
  protected $extendedMetadataType = ExtendedMetadata::class;
  protected $extendedMetadataDataType = 'map';

  /**
   * Output only. Additional metadata specific to the App Hub application. The
   * key is a string that identifies the type of metadata and the value is the
   * metadata contents specific to that type. Key format:
   * `apphub.googleapis.com/{metadataType}`
   *
   * @param ExtendedMetadata[] $extendedMetadata
   */
  public function setExtendedMetadata($extendedMetadata)
  {
    $this->extendedMetadata = $extendedMetadata;
  }
  /**
   * @return ExtendedMetadata[]
   */
  public function getExtendedMetadata()
  {
    return $this->extendedMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApplicationProperties::class, 'Google_Service_AgentRegistry_ApplicationProperties');
