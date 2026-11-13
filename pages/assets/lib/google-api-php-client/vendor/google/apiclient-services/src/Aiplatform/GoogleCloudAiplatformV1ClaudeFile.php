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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ClaudeFile extends \Google\Model
{
  protected $internal_gapi_mappings = [
        "createdAt" => "created_at",
        "expiresAt" => "expires_at",
        "mimeType" => "mime_type",
        "sizeBytes" => "size_bytes",
  ];
  /**
   * Output only. The time at which the file was created.
   *
   * @var string
   */
  public $createdAt;
  /**
   * Output only. Whether the contents of this file can be retrieved with
   * `DownloadFile`. False for user-uploaded files, true for tool-generated
   * ones.
   *
   * @var bool
   */
  public $downloadable;
  /**
   * Output only. The time at which the file expires and is deleted, set from
   * the `expires_in_seconds` upload form field. Unset for files that do not
   * expire, which is serialised as `null`.
   *
   * @var string
   */
  public $expiresAt;
  /**
   * Output only. The original name of the uploaded file, taken from the
   * `Content-Disposition` header on upload. Between 1 and 255 characters.
   * Control characters and the characters `<>:"|?*\/` are not accepted.
   *
   * @var string
   */
  public $filename;
  /**
   * Output only. The server-assigned identifier of the file, for example
   * `file_abc123`. This is the ID to pass in subsequent model requests.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The media type of the file, taken from the `Content-Type`
   * header of the file part on upload.
   *
   * @var string
   */
  public $mimeType;
  /**
   * Output only. The size of the file in bytes.
   *
   * @var int
   */
  public $sizeBytes;
  /**
   * Output only. The object type. Always `file`.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The time at which the file was created.
   *
   * @param string $createdAt
   */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /**
   * @return string
   */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /**
   * Output only. Whether the contents of this file can be retrieved with
   * `DownloadFile`. False for user-uploaded files, true for tool-generated
   * ones.
   *
   * @param bool $downloadable
   */
  public function setDownloadable($downloadable)
  {
    $this->downloadable = $downloadable;
  }
  /**
   * @return bool
   */
  public function getDownloadable()
  {
    return $this->downloadable;
  }
  /**
   * Output only. The time at which the file expires and is deleted, set from
   * the `expires_in_seconds` upload form field. Unset for files that do not
   * expire, which is serialised as `null`.
   *
   * @param string $expiresAt
   */
  public function setExpiresAt($expiresAt)
  {
    $this->expiresAt = $expiresAt;
  }
  /**
   * @return string
   */
  public function getExpiresAt()
  {
    return $this->expiresAt;
  }
  /**
   * Output only. The original name of the uploaded file, taken from the
   * `Content-Disposition` header on upload. Between 1 and 255 characters.
   * Control characters and the characters `<>:"|?*\/` are not accepted.
   *
   * @param string $filename
   */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /**
   * @return string
   */
  public function getFilename()
  {
    return $this->filename;
  }
  /**
   * Output only. The server-assigned identifier of the file, for example
   * `file_abc123`. This is the ID to pass in subsequent model requests.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The media type of the file, taken from the `Content-Type`
   * header of the file part on upload.
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
  /**
   * Output only. The size of the file in bytes.
   *
   * @param int $sizeBytes
   */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /**
   * @return int
   */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /**
   * Output only. The object type. Always `file`.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ClaudeFile::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ClaudeFile');
