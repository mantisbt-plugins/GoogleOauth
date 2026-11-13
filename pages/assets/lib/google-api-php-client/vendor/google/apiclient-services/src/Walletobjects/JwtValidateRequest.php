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

class JwtValidateRequest extends \Google\Model
{
  protected $jsonResourceType = JsonResource::class;
  protected $jsonResourceDataType = '';
  protected $jwtResourceType = JwtResource::class;
  protected $jwtResourceDataType = '';

  /**
   * Optional. A JSON representation of a pass to be validated. Either this or
   * jwt_resource should be set. Requests setting both or neither will be
   * rejected.
   *
   * @param JsonResource $jsonResource
   */
  public function setJsonResource(JsonResource $jsonResource)
  {
    $this->jsonResource = $jsonResource;
  }
  /**
   * @return JsonResource
   */
  public function getJsonResource()
  {
    return $this->jsonResource;
  }
  /**
   * Optional. A JWT representation of a pass to be validated. Either this or
   * json_resource should be set. Requests setting both or neither will be
   * rejected.
   *
   * @param JwtResource $jwtResource
   */
  public function setJwtResource(JwtResource $jwtResource)
  {
    $this->jwtResource = $jwtResource;
  }
  /**
   * @return JwtResource
   */
  public function getJwtResource()
  {
    return $this->jwtResource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JwtValidateRequest::class, 'Google_Service_Walletobjects_JwtValidateRequest');
