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

class GenaiVertexV1FileCitation extends \Google\Model
{
  /**
   * User provided metadata about the retrieved context.
   *
   * @var array[]
   */
  public $customMetadata;
  /**
   * The URI of the file.
   *
   * @var string
   */
  public $documentUri;
  /**
   * The name of the file.
   *
   * @var string
   */
  public $fileName;
  /**
   * Media ID in-case of image citations, if applicable.
   *
   * @var string
   */
  public $mediaId;
  /**
   * Page number of the cited document, if applicable.
   *
   * @var int
   */
  public $pageNumber;
  /**
   * Source attributed for a portion of the text.
   *
   * @var string
   */
  public $source;

  /**
   * User provided metadata about the retrieved context.
   *
   * @param array[] $customMetadata
   */
  public function setCustomMetadata($customMetadata)
  {
    $this->customMetadata = $customMetadata;
  }
  /**
   * @return array[]
   */
  public function getCustomMetadata()
  {
    return $this->customMetadata;
  }
  /**
   * The URI of the file.
   *
   * @param string $documentUri
   */
  public function setDocumentUri($documentUri)
  {
    $this->documentUri = $documentUri;
  }
  /**
   * @return string
   */
  public function getDocumentUri()
  {
    return $this->documentUri;
  }
  /**
   * The name of the file.
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
   * Media ID in-case of image citations, if applicable.
   *
   * @param string $mediaId
   */
  public function setMediaId($mediaId)
  {
    $this->mediaId = $mediaId;
  }
  /**
   * @return string
   */
  public function getMediaId()
  {
    return $this->mediaId;
  }
  /**
   * Page number of the cited document, if applicable.
   *
   * @param int $pageNumber
   */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /**
   * @return int
   */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
  /**
   * Source attributed for a portion of the text.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1FileCitation::class, 'Google_Service_Aiplatform_GenaiVertexV1FileCitation');
