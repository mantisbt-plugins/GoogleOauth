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

namespace Google\Service\NetworkServices;

class ExtensionBindingMatchCondition extends \Google\Model
{
  protected $toType = ExtensionBindingMatchConditionTo::class;
  protected $toDataType = '';

  /**
   * Optional. Describes properties of a destination of a request. If specified,
   * the extension will only be invoked on requests to destinations that match
   * the specified criteria.
   *
   * @param ExtensionBindingMatchConditionTo $to
   */
  public function setTo(ExtensionBindingMatchConditionTo $to)
  {
    $this->to = $to;
  }
  /**
   * @return ExtensionBindingMatchConditionTo
   */
  public function getTo()
  {
    return $this->to;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtensionBindingMatchCondition::class, 'Google_Service_NetworkServices_ExtensionBindingMatchCondition');
