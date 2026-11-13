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

class TemplateVersion extends \Google\Model
{
  /**
   * Output only. Create time stamp
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Disabled boolean to determine if a TemplateVersion acts as a
   * metadata only resource (payload is never returned if disabled is true).
   *
   * @var bool
   */
  public $disabled;
  /**
   * Identifier. The resource name of the TemplateVersion in the format
   * `projects/locations/templates/versions`.
   *
   * @var string
   */
  public $name;
  protected $payloadType = TemplateVersionPayload::class;
  protected $payloadDataType = '';
  /**
   * Output only. Update time stamp
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Create time stamp
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Disabled boolean to determine if a TemplateVersion acts as a
   * metadata only resource (payload is never returned if disabled is true).
   *
   * @param bool $disabled
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * Identifier. The resource name of the TemplateVersion in the format
   * `projects/locations/templates/versions`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. Immutable. Payload content of a TemplateVersion resource.
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
   * Output only. Update time stamp
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TemplateVersion::class, 'Google_Service_ParameterManager_TemplateVersion');
