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

class PolicyDocumentResponse extends \Google\Model
{
  /**
   * Required. ID of the uploaded document.
   *
   * @var string
   */
  public $documentId;
  protected $expiryDateType = Date::class;
  protected $expiryDateDataType = '';
  /**
   * Optional. True if confirmed that the document does not have an expiry date.
   *
   * @var bool
   */
  public $nonExpiring;

  /**
   * Required. ID of the uploaded document.
   *
   * @param string $documentId
   */
  public function setDocumentId($documentId)
  {
    $this->documentId = $documentId;
  }
  /**
   * @return string
   */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /**
   * Optional. Expiry date for the document.
   *
   * @param Date $expiryDate
   */
  public function setExpiryDate(Date $expiryDate)
  {
    $this->expiryDate = $expiryDate;
  }
  /**
   * @return Date
   */
  public function getExpiryDate()
  {
    return $this->expiryDate;
  }
  /**
   * Optional. True if confirmed that the document does not have an expiry date.
   *
   * @param bool $nonExpiring
   */
  public function setNonExpiring($nonExpiring)
  {
    $this->nonExpiring = $nonExpiring;
  }
  /**
   * @return bool
   */
  public function getNonExpiring()
  {
    return $this->nonExpiring;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PolicyDocumentResponse::class, 'Google_Service_AndroidPublisher_PolicyDocumentResponse');
