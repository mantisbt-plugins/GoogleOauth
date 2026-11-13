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

namespace Google\Service\Container;

class ReservedResourcesConfig extends \Google\Model
{
  /**
   * Optional. The amount of CPU to reserve for system daemons. This is a user-
   * specified value. If unspecified, GKE decides the default based on node
   * version using different formula.
   *
   * @var string
   */
  public $cpuReservedMillicore;
  /**
   * Output only. The effective amount of CPU reserved for system daemons. If
   * `cpu_reserved_millicore` is specified, user-specified value is used.
   * Otherwise the GKE default is applied.
   *
   * @var string
   */
  public $effectiveCpuReservedMillicore;
  /**
   * Output only. The effective amount of memory reserved for system daemons. If
   * `memory_reserved_mib` is specified, the user-specified value is used.
   * Otherwise the GKE default is applied.
   *
   * @var string
   */
  public $effectiveMemoryReservedMib;
  /**
   * Optional. The amount of memory to reserve for system daemons (in MiB). This
   * is a user-specified value. If unspecified, GKE decides the default based on
   * node version using different formula.
   *
   * @var string
   */
  public $memoryReservedMib;

  /**
   * Optional. The amount of CPU to reserve for system daemons. This is a user-
   * specified value. If unspecified, GKE decides the default based on node
   * version using different formula.
   *
   * @param string $cpuReservedMillicore
   */
  public function setCpuReservedMillicore($cpuReservedMillicore)
  {
    $this->cpuReservedMillicore = $cpuReservedMillicore;
  }
  /**
   * @return string
   */
  public function getCpuReservedMillicore()
  {
    return $this->cpuReservedMillicore;
  }
  /**
   * Output only. The effective amount of CPU reserved for system daemons. If
   * `cpu_reserved_millicore` is specified, user-specified value is used.
   * Otherwise the GKE default is applied.
   *
   * @param string $effectiveCpuReservedMillicore
   */
  public function setEffectiveCpuReservedMillicore($effectiveCpuReservedMillicore)
  {
    $this->effectiveCpuReservedMillicore = $effectiveCpuReservedMillicore;
  }
  /**
   * @return string
   */
  public function getEffectiveCpuReservedMillicore()
  {
    return $this->effectiveCpuReservedMillicore;
  }
  /**
   * Output only. The effective amount of memory reserved for system daemons. If
   * `memory_reserved_mib` is specified, the user-specified value is used.
   * Otherwise the GKE default is applied.
   *
   * @param string $effectiveMemoryReservedMib
   */
  public function setEffectiveMemoryReservedMib($effectiveMemoryReservedMib)
  {
    $this->effectiveMemoryReservedMib = $effectiveMemoryReservedMib;
  }
  /**
   * @return string
   */
  public function getEffectiveMemoryReservedMib()
  {
    return $this->effectiveMemoryReservedMib;
  }
  /**
   * Optional. The amount of memory to reserve for system daemons (in MiB). This
   * is a user-specified value. If unspecified, GKE decides the default based on
   * node version using different formula.
   *
   * @param string $memoryReservedMib
   */
  public function setMemoryReservedMib($memoryReservedMib)
  {
    $this->memoryReservedMib = $memoryReservedMib;
  }
  /**
   * @return string
   */
  public function getMemoryReservedMib()
  {
    return $this->memoryReservedMib;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservedResourcesConfig::class, 'Google_Service_Container_ReservedResourcesConfig');
