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

namespace Google\Service\DeveloperKnowledge;

class DocumentReference extends \Google\Model
{
  protected $documentChunkType = DocumentChunk::class;
  protected $documentChunkDataType = '';

  /**
   * Output only. Contains the document chunk. The `document_chunk.id` field is
   * not set and will be empty.
   *
   * @param DocumentChunk $documentChunk
   */
  public function setDocumentChunk(DocumentChunk $documentChunk)
  {
    $this->documentChunk = $documentChunk;
  }
  /**
   * @return DocumentChunk
   */
  public function getDocumentChunk()
  {
    return $this->documentChunk;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DocumentReference::class, 'Google_Service_DeveloperKnowledge_DocumentReference');
