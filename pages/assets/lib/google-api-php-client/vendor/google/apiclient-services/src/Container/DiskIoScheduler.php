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

class DiskIoScheduler extends \Google\Model
{
  /**
   * Optional. Configures the IO scheduler for the attached disks. Supported
   * values are `mq-deadline`, `bfq`, `kyber`, `none`.
   *
   * @var string
   */
  public $nodeAttachedDiskIoScheduler;
  /**
   * Optional. Configures the IO scheduler for the boot disk or ephemeral lssd
   * that runs node system workloads. Supported values are `mq-deadline`, `bfq`,
   * `kyber`, `none`.
   *
   * @var string
   */
  public $nodeSystemIoScheduler;

  /**
   * Optional. Configures the IO scheduler for the attached disks. Supported
   * values are `mq-deadline`, `bfq`, `kyber`, `none`.
   *
   * @param string $nodeAttachedDiskIoScheduler
   */
  public function setNodeAttachedDiskIoScheduler($nodeAttachedDiskIoScheduler)
  {
    $this->nodeAttachedDiskIoScheduler = $nodeAttachedDiskIoScheduler;
  }
  /**
   * @return string
   */
  public function getNodeAttachedDiskIoScheduler()
  {
    return $this->nodeAttachedDiskIoScheduler;
  }
  /**
   * Optional. Configures the IO scheduler for the boot disk or ephemeral lssd
   * that runs node system workloads. Supported values are `mq-deadline`, `bfq`,
   * `kyber`, `none`.
   *
   * @param string $nodeSystemIoScheduler
   */
  public function setNodeSystemIoScheduler($nodeSystemIoScheduler)
  {
    $this->nodeSystemIoScheduler = $nodeSystemIoScheduler;
  }
  /**
   * @return string
   */
  public function getNodeSystemIoScheduler()
  {
    return $this->nodeSystemIoScheduler;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskIoScheduler::class, 'Google_Service_Container_DiskIoScheduler');
