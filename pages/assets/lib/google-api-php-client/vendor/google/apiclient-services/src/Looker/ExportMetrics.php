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

namespace Google\Service\Looker;

class ExportMetrics extends \Google\Collection
{
  protected $collection_key = 'componentMetrics';
  protected $componentMetricsType = ComponentMetrics::class;
  protected $componentMetricsDataType = 'array';
  /**
   * Internal name of the instance being exported.
   *
   * @var string
   */
  public $instanceInternalName;

  /**
   * Metrics and telemetry for each exported component.
   *
   * @param ComponentMetrics[] $componentMetrics
   */
  public function setComponentMetrics($componentMetrics)
  {
    $this->componentMetrics = $componentMetrics;
  }
  /**
   * @return ComponentMetrics[]
   */
  public function getComponentMetrics()
  {
    return $this->componentMetrics;
  }
  /**
   * Internal name of the instance being exported.
   *
   * @param string $instanceInternalName
   */
  public function setInstanceInternalName($instanceInternalName)
  {
    $this->instanceInternalName = $instanceInternalName;
  }
  /**
   * @return string
   */
  public function getInstanceInternalName()
  {
    return $this->instanceInternalName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportMetrics::class, 'Google_Service_Looker_ExportMetrics');
