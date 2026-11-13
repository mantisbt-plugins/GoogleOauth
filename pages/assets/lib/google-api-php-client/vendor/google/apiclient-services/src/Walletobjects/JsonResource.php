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

namespace Google\Service\Walletobjects;

class JsonResource extends \Google\Model
{
  /**
   * Required. A JSON string representing the unencoded JWT payload for a pass
   * of the format described at
   * https://developers.google.com/wallet/reference/rest/v1/Jwt. This can be set
   * to either the entire JSON representation described at this link or just the
   * contents of the payload field holding the relevant classes and objects.
   *
   * @var string
   */
  public $json;

  /**
   * Required. A JSON string representing the unencoded JWT payload for a pass
   * of the format described at
   * https://developers.google.com/wallet/reference/rest/v1/Jwt. This can be set
   * to either the entire JSON representation described at this link or just the
   * contents of the payload field holding the relevant classes and objects.
   *
   * @param string $json
   */
  public function setJson($json)
  {
    $this->json = $json;
  }
  /**
   * @return string
   */
  public function getJson()
  {
    return $this->json;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JsonResource::class, 'Google_Service_Walletobjects_JsonResource');
