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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1ProtectedEndpoint extends \Google\Model
{
  /**
   * Required. Action name to be used for token generation for this endpoint.
   * The action name can only contain alphanumeric characters, slashes, and
   * underscores.
   *
   * @var string
   */
  public $action;
  /**
   * Required. The URI path of the API endpoint to protect. The path is case-
   * sensitive and must meet the following criteria: * Be unique, start with
   * `/`, and contain 1 to 200 characters without consecutive slashes (`//`). *
   * Include at least one non-wildcard segment. For example, cannot be `/`, ``,
   * `*`, or `/`. * Wildcards must occupy complete segments: `*` matches a
   * single segment. For example, `/api/login` or `/api` are valid;
   * `/api/login*` is invalid, and `**` matches multiple segments as the final
   * segment only. For example, `/api*` is valid; `/apilogin` is invalid.
   * Matching is evaluated against the URL path only. Domain, scheme, and query
   * parameters are ignored. Examples: * `/login` matches `/login`,
   * `https://example.com/login`, and `/login?query=1`, but not `/login/step1`.
   * * `/products` matches `/products/123`, but not `/products/123/456`. *
   * `/content*` matches `/content/articles/2024/01/01`.
   *
   * @var string
   */
  public $path;

  /**
   * Required. Action name to be used for token generation for this endpoint.
   * The action name can only contain alphanumeric characters, slashes, and
   * underscores.
   *
   * @param string $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return string
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Required. The URI path of the API endpoint to protect. The path is case-
   * sensitive and must meet the following criteria: * Be unique, start with
   * `/`, and contain 1 to 200 characters without consecutive slashes (`//`). *
   * Include at least one non-wildcard segment. For example, cannot be `/`, ``,
   * `*`, or `/`. * Wildcards must occupy complete segments: `*` matches a
   * single segment. For example, `/api/login` or `/api` are valid;
   * `/api/login*` is invalid, and `**` matches multiple segments as the final
   * segment only. For example, `/api*` is valid; `/apilogin` is invalid.
   * Matching is evaluated against the URL path only. Domain, scheme, and query
   * parameters are ignored. Examples: * `/login` matches `/login`,
   * `https://example.com/login`, and `/login?query=1`, but not `/login/step1`.
   * * `/products` matches `/products/123`, but not `/products/123/456`. *
   * `/content*` matches `/content/articles/2024/01/01`.
   *
   * @param string $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1ProtectedEndpoint::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1ProtectedEndpoint');
