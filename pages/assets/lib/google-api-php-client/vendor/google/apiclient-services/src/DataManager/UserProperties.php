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

namespace Google\Service\DataManager;

class UserProperties extends \Google\Collection
{
  public const CUSTOMER_TYPE_CUSTOMER_TYPE_UNSPECIFIED = 'CUSTOMER_TYPE_UNSPECIFIED';
  public const CUSTOMER_TYPE_NEW = 'NEW';
  public const CUSTOMER_TYPE_RETURNING = 'RETURNING';
  public const CUSTOMER_TYPE_REENGAGED = 'REENGAGED';
  public const CUSTOMER_VALUE_BUCKET_CUSTOMER_VALUE_BUCKET_UNSPECIFIED = 'CUSTOMER_VALUE_BUCKET_UNSPECIFIED';
  public const CUSTOMER_VALUE_BUCKET_LOW = 'LOW';
  public const CUSTOMER_VALUE_BUCKET_MEDIUM = 'MEDIUM';
  public const CUSTOMER_VALUE_BUCKET_HIGH = 'HIGH';
  protected $collection_key = 'additionalUserProperties';
  protected $additionalUserPropertiesType = UserProperty::class;
  protected $additionalUserPropertiesDataType = 'array';
  /**
   * @var string
   */
  public $customerType;
  /**
   * @var string
   */
  public $customerValueBucket;

  /**
   * @param UserProperty[] $additionalUserProperties
   */
  public function setAdditionalUserProperties($additionalUserProperties)
  {
    $this->additionalUserProperties = $additionalUserProperties;
  }
  /**
   * @return UserProperty[]
   */
  public function getAdditionalUserProperties()
  {
    return $this->additionalUserProperties;
  }
  /**
   * @param self::CUSTOMER_TYPE_* $customerType
   */
  public function setCustomerType($customerType)
  {
    $this->customerType = $customerType;
  }
  /**
   * @return self::CUSTOMER_TYPE_*
   */
  public function getCustomerType()
  {
    return $this->customerType;
  }
  /**
   * @param self::CUSTOMER_VALUE_BUCKET_* $customerValueBucket
   */
  public function setCustomerValueBucket($customerValueBucket)
  {
    $this->customerValueBucket = $customerValueBucket;
  }
  /**
   * @return self::CUSTOMER_VALUE_BUCKET_*
   */
  public function getCustomerValueBucket()
  {
    return $this->customerValueBucket;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserProperties::class, 'Google_Service_DataManager_UserProperties');
