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

namespace Google\Service\BigQueryDataTransfer;

class ParameterConfig extends \Google\Collection
{
  protected $collection_key = 'secretManagerManagedParams';
  /**
   * Optional. The list of parameters that are stored in Secret Manager. The
   * value of a parameter included in this list will be interpreted as a Secret
   * Manager key version resource name instead of a raw value. The raw value
   * will be retrieved from Secret Manager upon execution.
   *
   * @var string[]
   */
  public $secretManagerManagedParams;

  /**
   * Optional. The list of parameters that are stored in Secret Manager. The
   * value of a parameter included in this list will be interpreted as a Secret
   * Manager key version resource name instead of a raw value. The raw value
   * will be retrieved from Secret Manager upon execution.
   *
   * @param string[] $secretManagerManagedParams
   */
  public function setSecretManagerManagedParams($secretManagerManagedParams)
  {
    $this->secretManagerManagedParams = $secretManagerManagedParams;
  }
  /**
   * @return string[]
   */
  public function getSecretManagerManagedParams()
  {
    return $this->secretManagerManagedParams;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ParameterConfig::class, 'Google_Service_BigQueryDataTransfer_ParameterConfig');
