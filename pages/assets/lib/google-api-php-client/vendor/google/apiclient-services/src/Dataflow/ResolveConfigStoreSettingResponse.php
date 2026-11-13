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

namespace Google\Service\Dataflow;

class ResolveConfigStoreSettingResponse extends \Google\Collection
{
  protected $collection_key = 'choices';
  protected $choicesType = ConfigStoreSetting::class;
  protected $choicesDataType = 'array';
  protected $settingType = ConfigStoreSetting::class;
  protected $settingDataType = '';

  /**
   * The list of settings that were considered during resolution.
   *
   * @param ConfigStoreSetting[] $choices
   */
  public function setChoices($choices)
  {
    $this->choices = $choices;
  }
  /**
   * @return ConfigStoreSetting[]
   */
  public function getChoices()
  {
    return $this->choices;
  }
  /**
   * The dry-run setting result.
   *
   * @param ConfigStoreSetting $setting
   */
  public function setSetting(ConfigStoreSetting $setting)
  {
    $this->setting = $setting;
  }
  /**
   * @return ConfigStoreSetting
   */
  public function getSetting()
  {
    return $this->setting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResolveConfigStoreSettingResponse::class, 'Google_Service_Dataflow_ResolveConfigStoreSettingResponse');
