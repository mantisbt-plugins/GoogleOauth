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

class AppStoreAppPolicyDeclaration extends \Google\Collection
{
  protected $collection_key = 'responses';
  /**
   * Required. ID of the policy declaration.
   *
   * @var string
   */
  public $declarationId;
  protected $responsesType = PolicyResponse::class;
  protected $responsesDataType = 'array';

  /**
   * Required. ID of the policy declaration.
   *
   * @param string $declarationId
   */
  public function setDeclarationId($declarationId)
  {
    $this->declarationId = $declarationId;
  }
  /**
   * @return string
   */
  public function getDeclarationId()
  {
    return $this->declarationId;
  }
  /**
   * Required. Responses provided for this declaration.
   *
   * @param PolicyResponse[] $responses
   */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /**
   * @return PolicyResponse[]
   */
  public function getResponses()
  {
    return $this->responses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppStoreAppPolicyDeclaration::class, 'Google_Service_AndroidPublisher_AppStoreAppPolicyDeclaration');
