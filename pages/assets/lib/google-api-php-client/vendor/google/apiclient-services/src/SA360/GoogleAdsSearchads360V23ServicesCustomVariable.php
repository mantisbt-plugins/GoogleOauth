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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesCustomVariable extends \Google\Model
{
  /**
   * Resource name of the custom variable associated with this conversion. Note:
   * Although this resource name consists of a customer id and a conversion
   * custom variable id, validation will ignore the customer id and use the
   * conversion custom variable id as the sole identifier of the conversion
   * custom variable.
   *
   * @var string
   */
  public $conversionCustomVariable;
  /**
   * The value string of this custom variable. The value of the custom variable
   * should not contain private customer data, such as email addresses or phone
   * numbers.
   *
   * @var string
   */
  public $value;

  /**
   * Resource name of the custom variable associated with this conversion. Note:
   * Although this resource name consists of a customer id and a conversion
   * custom variable id, validation will ignore the customer id and use the
   * conversion custom variable id as the sole identifier of the conversion
   * custom variable.
   *
   * @param string $conversionCustomVariable
   */
  public function setConversionCustomVariable($conversionCustomVariable)
  {
    $this->conversionCustomVariable = $conversionCustomVariable;
  }
  /**
   * @return string
   */
  public function getConversionCustomVariable()
  {
    return $this->conversionCustomVariable;
  }
  /**
   * The value string of this custom variable. The value of the custom variable
   * should not contain private customer data, such as email addresses or phone
   * numbers.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCustomVariable::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCustomVariable');
