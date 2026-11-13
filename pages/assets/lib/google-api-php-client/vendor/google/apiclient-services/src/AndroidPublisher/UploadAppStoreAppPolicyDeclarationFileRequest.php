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

namespace Google\Service\AndroidPublisher;

class UploadAppStoreAppPolicyDeclarationFileRequest extends \Google\Model
{
  /**
   * Unspecified file type.
   */
  public const FILE_TYPE_DECLARATION_FILE_TYPE_UNSPECIFIED = 'DECLARATION_FILE_TYPE_UNSPECIFIED';
  /**
   * File type for PDF, JPEG, and PNG documents.
   */
  public const FILE_TYPE_DECLARATION_FILE_TYPE_DOCUMENT = 'DECLARATION_FILE_TYPE_DOCUMENT';
  /**
   * Required. Type of the policy declaration file.
   *
   * @var string
   */
  public $fileType;

  /**
   * Required. Type of the policy declaration file.
   *
   * Accepted values: DECLARATION_FILE_TYPE_UNSPECIFIED,
   * DECLARATION_FILE_TYPE_DOCUMENT
   *
   * @param self::FILE_TYPE_* $fileType
   */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /**
   * @return self::FILE_TYPE_*
   */
  public function getFileType()
  {
    return $this->fileType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UploadAppStoreAppPolicyDeclarationFileRequest::class, 'Google_Service_AndroidPublisher_UploadAppStoreAppPolicyDeclarationFileRequest');
