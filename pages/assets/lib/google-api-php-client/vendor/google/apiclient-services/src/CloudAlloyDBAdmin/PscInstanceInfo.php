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

namespace Google\Service\CloudAlloyDBAdmin;

class PscInstanceInfo extends \Google\Collection
{
  protected $collection_key = 'pscAutoDnsNames';
  /**
   * Output only. Indicates if the PSC auto connection policy is enabled for the
   * instance. For older instances, this will be off by default, but for newer
   * instances, this will be auto-enabled.
   *
   * @var bool
   */
  public $effectivePscAutoConnectionPolicy;
  /**
   * Output only. The effective state of the PSC auto DNS for the instance.
   *
   * @var bool
   */
  public $effectivePscAutoDnsEnabled;
  /**
   * Output only. Specifies the auto DNS names for the instance.
   *
   * @var string[]
   */
  public $pscAutoDnsNames;
  /**
   * Output only. The PSC service connection policy name. The format is
   * "projects//regions//serviceConnectionPolicies/"
   *
   * @var string
   */
  public $serviceConnectionPolicy;

  /**
   * Output only. Indicates if the PSC auto connection policy is enabled for the
   * instance. For older instances, this will be off by default, but for newer
   * instances, this will be auto-enabled.
   *
   * @param bool $effectivePscAutoConnectionPolicy
   */
  public function setEffectivePscAutoConnectionPolicy($effectivePscAutoConnectionPolicy)
  {
    $this->effectivePscAutoConnectionPolicy = $effectivePscAutoConnectionPolicy;
  }
  /**
   * @return bool
   */
  public function getEffectivePscAutoConnectionPolicy()
  {
    return $this->effectivePscAutoConnectionPolicy;
  }
  /**
   * Output only. The effective state of the PSC auto DNS for the instance.
   *
   * @param bool $effectivePscAutoDnsEnabled
   */
  public function setEffectivePscAutoDnsEnabled($effectivePscAutoDnsEnabled)
  {
    $this->effectivePscAutoDnsEnabled = $effectivePscAutoDnsEnabled;
  }
  /**
   * @return bool
   */
  public function getEffectivePscAutoDnsEnabled()
  {
    return $this->effectivePscAutoDnsEnabled;
  }
  /**
   * Output only. Specifies the auto DNS names for the instance.
   *
   * @param string[] $pscAutoDnsNames
   */
  public function setPscAutoDnsNames($pscAutoDnsNames)
  {
    $this->pscAutoDnsNames = $pscAutoDnsNames;
  }
  /**
   * @return string[]
   */
  public function getPscAutoDnsNames()
  {
    return $this->pscAutoDnsNames;
  }
  /**
   * Output only. The PSC service connection policy name. The format is
   * "projects//regions//serviceConnectionPolicies/"
   *
   * @param string $serviceConnectionPolicy
   */
  public function setServiceConnectionPolicy($serviceConnectionPolicy)
  {
    $this->serviceConnectionPolicy = $serviceConnectionPolicy;
  }
  /**
   * @return string
   */
  public function getServiceConnectionPolicy()
  {
    return $this->serviceConnectionPolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PscInstanceInfo::class, 'Google_Service_CloudAlloyDBAdmin_PscInstanceInfo');
