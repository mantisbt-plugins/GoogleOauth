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

namespace Google\Service\ParameterManager;

class RenderTemplateVersionResponse extends \Google\Model
{
  /**
   * The default / unset value. The API will default to the YAML format.
   */
  public const TEMPLATE_FORMAT_TEMPLATE_FORMAT_UNSPECIFIED = 'TEMPLATE_FORMAT_UNSPECIFIED';
  /**
   * YAML format.
   */
  public const TEMPLATE_FORMAT_TEMPLATE_FORMAT_YAML = 'TEMPLATE_FORMAT_YAML';
  /**
   * JSON format.
   */
  public const TEMPLATE_FORMAT_TEMPLATE_FORMAT_JSON = 'TEMPLATE_FORMAT_JSON';
  /**
   * The resource name of the ParameterVersion used to render the template
   * version in the format `projects/locations/parameters/versions`.
   *
   * @var string
   */
  public $parameterVersion;
  protected $payloadType = TemplateVersionPayload::class;
  protected $payloadDataType = '';
  /**
   * Server generated rendered version of the user provided payload data
   * (TemplateVersionPayload) which has all the variables resolved using the
   * provided parameter version.
   *
   * @var string
   */
  public $renderedPayload;
  /**
   * Format of the template version.
   *
   * @var string
   */
  public $templateFormat;
  /**
   * Resource identifier of a TemplateVersion in the format
   * `projects/locations/templates/versions`.
   *
   * @var string
   */
  public $templateVersion;

  /**
   * The resource name of the ParameterVersion used to render the template
   * version in the format `projects/locations/parameters/versions`.
   *
   * @param string $parameterVersion
   */
  public function setParameterVersion($parameterVersion)
  {
    $this->parameterVersion = $parameterVersion;
  }
  /**
   * @return string
   */
  public function getParameterVersion()
  {
    return $this->parameterVersion;
  }
  /**
   * Payload content of a TemplateVersion resource.
   *
   * @param TemplateVersionPayload $payload
   */
  public function setPayload(TemplateVersionPayload $payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return TemplateVersionPayload
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * Server generated rendered version of the user provided payload data
   * (TemplateVersionPayload) which has all the variables resolved using the
   * provided parameter version.
   *
   * @param string $renderedPayload
   */
  public function setRenderedPayload($renderedPayload)
  {
    $this->renderedPayload = $renderedPayload;
  }
  /**
   * @return string
   */
  public function getRenderedPayload()
  {
    return $this->renderedPayload;
  }
  /**
   * Format of the template version.
   *
   * Accepted values: TEMPLATE_FORMAT_UNSPECIFIED, TEMPLATE_FORMAT_YAML,
   * TEMPLATE_FORMAT_JSON
   *
   * @param self::TEMPLATE_FORMAT_* $templateFormat
   */
  public function setTemplateFormat($templateFormat)
  {
    $this->templateFormat = $templateFormat;
  }
  /**
   * @return self::TEMPLATE_FORMAT_*
   */
  public function getTemplateFormat()
  {
    return $this->templateFormat;
  }
  /**
   * Resource identifier of a TemplateVersion in the format
   * `projects/locations/templates/versions`.
   *
   * @param string $templateVersion
   */
  public function setTemplateVersion($templateVersion)
  {
    $this->templateVersion = $templateVersion;
  }
  /**
   * @return string
   */
  public function getTemplateVersion()
  {
    return $this->templateVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RenderTemplateVersionResponse::class, 'Google_Service_ParameterManager_RenderTemplateVersionResponse');
