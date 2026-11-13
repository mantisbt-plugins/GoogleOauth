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

namespace Google\Service\OnDemandScanning;

class IngestionSource extends \Google\Model
{
  public const SOURCE_SOURCE_UNSPECIFIED = 'SOURCE_UNSPECIFIED';
  public const SOURCE_DOCKER_IMAGE = 'DOCKER_IMAGE';
  public const SOURCE_SBOM_ATTACHMENT = 'SBOM_ATTACHMENT';
  /**
   * The attachment URI that this package was extracted from.
   *
   * @var string
   */
  public $attachmentUri;
  /**
   * The resource URL of the resource that was scanned to find this package.
   *
   * @var string
   */
  public $resourceUrl;
  /**
   * @var string
   */
  public $source;

  /**
   * The attachment URI that this package was extracted from.
   *
   * @param string $attachmentUri
   */
  public function setAttachmentUri($attachmentUri)
  {
    $this->attachmentUri = $attachmentUri;
  }
  /**
   * @return string
   */
  public function getAttachmentUri()
  {
    return $this->attachmentUri;
  }
  /**
   * The resource URL of the resource that was scanned to find this package.
   *
   * @param string $resourceUrl
   */
  public function setResourceUrl($resourceUrl)
  {
    $this->resourceUrl = $resourceUrl;
  }
  /**
   * @return string
   */
  public function getResourceUrl()
  {
    return $this->resourceUrl;
  }
  /**
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestionSource::class, 'Google_Service_OnDemandScanning_IngestionSource');
