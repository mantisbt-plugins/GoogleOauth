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

namespace Google\Service\StorageBatchOperations;

class PutMetadata extends \Google\Model
{
  /**
   * Optional. Updates the objects `Cache-Control` fixed metadata. Unset values
   * in the request are ignored. To clear the metadata, set an empty value.
   * Additionally, the value for `Custom-Time` can't decrease. For details, see
   * [Cache-
   * Control](https://cloud.google.com/storage/docs/metadata#caching_data).
   *
   * @var string
   */
  public $cacheControl;
  /**
   * Optional. Updates objects `Content-Disposition` fixed metadata. Unset
   * values in the request are ignored. To clear the metadata, set an empty
   * value. For details, see [Content-
   * Disposition](https://cloud.google.com/storage/docs/metadata#content-
   * disposition).
   *
   * @var string
   */
  public $contentDisposition;
  /**
   * Optional. Updates the objects `Content-Encoding` fixed metadata. Unset
   * values in the request are ignored. To clear the metadata, set an empty
   * value. For details, see [Content-
   * Encoding](https://cloud.google.com/storage/docs/metadata#content-encoding).
   *
   * @var string
   */
  public $contentEncoding;
  /**
   * Optional. Updates the objects `Content-Language` fixed metadata. Metadata
   * values must use ISO 639-1 language codes. The maximum length for metadata
   * values is 100 characters. Unset values in the request are ignored. To clear
   * the metadata, set an empty value. For details, see [Content-
   * Language](https://cloud.google.com/storage/docs/metadata#content-language).
   *
   * @var string
   */
  public $contentLanguage;
  /**
   * Optional. Updates objects `Content-Type` fixed metadata. Unset values in
   * the request are ignored. To clear the metadata, set an empty value. For
   * details, see [Content-
   * Type](https://cloud.google.com/storage/docs/metadata#content-type).
   *
   * @var string
   */
  public $contentType;
  /**
   * Optional. Updates the object's custom metadata. This operation adds or sets
   * individual custom metadata key-value pairs. Keys specified with empty
   * values have their values cleared. Existing custom metadata keys not
   * included in the request remain unchanged. For details, see [Custom
   * metadata](https://cloud.google.com/storage/docs/metadata#custom-metadata).
   *
   * @var string[]
   */
  public $customMetadata;
  /**
   * Optional. Updates the objects `Custom-Time` fixed metadata. Unset values in
   * the request are ignored. To clear the metadata, set an empty value. The
   * time must be specified in RFC 3339 format, for example `YYYY-MM-
   * DD'T'HH:MM:SS'Z'` or `YYYY-MM-DD'T'HH:MM:SS.SS'Z'`. For details, see
   * [Custom-Time](https://cloud.google.com/storage/docs/metadata#custom-time).
   *
   * @var string
   */
  public $customTime;
  protected $objectRetentionType = ObjectRetention::class;
  protected $objectRetentionDataType = '';

  /**
   * Optional. Updates the objects `Cache-Control` fixed metadata. Unset values
   * in the request are ignored. To clear the metadata, set an empty value.
   * Additionally, the value for `Custom-Time` can't decrease. For details, see
   * [Cache-
   * Control](https://cloud.google.com/storage/docs/metadata#caching_data).
   *
   * @param string $cacheControl
   */
  public function setCacheControl($cacheControl)
  {
    $this->cacheControl = $cacheControl;
  }
  /**
   * @return string
   */
  public function getCacheControl()
  {
    return $this->cacheControl;
  }
  /**
   * Optional. Updates objects `Content-Disposition` fixed metadata. Unset
   * values in the request are ignored. To clear the metadata, set an empty
   * value. For details, see [Content-
   * Disposition](https://cloud.google.com/storage/docs/metadata#content-
   * disposition).
   *
   * @param string $contentDisposition
   */
  public function setContentDisposition($contentDisposition)
  {
    $this->contentDisposition = $contentDisposition;
  }
  /**
   * @return string
   */
  public function getContentDisposition()
  {
    return $this->contentDisposition;
  }
  /**
   * Optional. Updates the objects `Content-Encoding` fixed metadata. Unset
   * values in the request are ignored. To clear the metadata, set an empty
   * value. For details, see [Content-
   * Encoding](https://cloud.google.com/storage/docs/metadata#content-encoding).
   *
   * @param string $contentEncoding
   */
  public function setContentEncoding($contentEncoding)
  {
    $this->contentEncoding = $contentEncoding;
  }
  /**
   * @return string
   */
  public function getContentEncoding()
  {
    return $this->contentEncoding;
  }
  /**
   * Optional. Updates the objects `Content-Language` fixed metadata. Metadata
   * values must use ISO 639-1 language codes. The maximum length for metadata
   * values is 100 characters. Unset values in the request are ignored. To clear
   * the metadata, set an empty value. For details, see [Content-
   * Language](https://cloud.google.com/storage/docs/metadata#content-language).
   *
   * @param string $contentLanguage
   */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /**
   * @return string
   */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /**
   * Optional. Updates objects `Content-Type` fixed metadata. Unset values in
   * the request are ignored. To clear the metadata, set an empty value. For
   * details, see [Content-
   * Type](https://cloud.google.com/storage/docs/metadata#content-type).
   *
   * @param string $contentType
   */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /**
   * @return string
   */
  public function getContentType()
  {
    return $this->contentType;
  }
  /**
   * Optional. Updates the object's custom metadata. This operation adds or sets
   * individual custom metadata key-value pairs. Keys specified with empty
   * values have their values cleared. Existing custom metadata keys not
   * included in the request remain unchanged. For details, see [Custom
   * metadata](https://cloud.google.com/storage/docs/metadata#custom-metadata).
   *
   * @param string[] $customMetadata
   */
  public function setCustomMetadata($customMetadata)
  {
    $this->customMetadata = $customMetadata;
  }
  /**
   * @return string[]
   */
  public function getCustomMetadata()
  {
    return $this->customMetadata;
  }
  /**
   * Optional. Updates the objects `Custom-Time` fixed metadata. Unset values in
   * the request are ignored. To clear the metadata, set an empty value. The
   * time must be specified in RFC 3339 format, for example `YYYY-MM-
   * DD'T'HH:MM:SS'Z'` or `YYYY-MM-DD'T'HH:MM:SS.SS'Z'`. For details, see
   * [Custom-Time](https://cloud.google.com/storage/docs/metadata#custom-time).
   *
   * @param string $customTime
   */
  public function setCustomTime($customTime)
  {
    $this->customTime = $customTime;
  }
  /**
   * @return string
   */
  public function getCustomTime()
  {
    return $this->customTime;
  }
  /**
   * Optional. Updates an object's retention configuration. To clear an object's
   * retention, both `retentionMode` and `retainUntilTime` must be left unset
   * (omitted). Setting `retentionMode` to `RETENTION_MODE_UNSPECIFIED` is
   * treated as a no-op. Unlike an unset field, it doesn't modify or clear the
   * retention settings. An object with `LOCKED` retention mode can't have its
   * retention cleared or its `retainUntilTime` reduced. For more information,
   * see [Object retention](https://cloud.google.com/storage/docs/batch-
   * operations/create-manage-batch-operation-jobs#retain-until-time).
   *
   * @param ObjectRetention $objectRetention
   */
  public function setObjectRetention(ObjectRetention $objectRetention)
  {
    $this->objectRetention = $objectRetention;
  }
  /**
   * @return ObjectRetention
   */
  public function getObjectRetention()
  {
    return $this->objectRetention;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PutMetadata::class, 'Google_Service_StorageBatchOperations_PutMetadata');
