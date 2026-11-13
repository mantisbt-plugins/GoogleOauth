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

class UploadAppStoreAppPolicyDeclarationFileResponse extends \Google\Model
{
  /**
   * The unique ID of the uploaded file.
   *
   * @var string
   */
  public $fileId;

  /**
   * The unique ID of the uploaded file.
   *
   * @param string $fileId
   */
  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }
  /**
   * @return string
   */
  public function getFileId()
  {
    return $this->fileId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UploadAppStoreAppPolicyDeclarationFileResponse::class, 'Google_Service_AndroidPublisher_UploadAppStoreAppPolicyDeclarationFileResponse');
