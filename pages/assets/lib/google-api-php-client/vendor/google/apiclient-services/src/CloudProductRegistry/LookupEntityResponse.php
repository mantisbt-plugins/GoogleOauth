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

namespace Google\Service\CloudProductRegistry;

class LookupEntityResponse extends \Google\Model
{
  protected $logicalProductType = LogicalProduct::class;
  protected $logicalProductDataType = '';
  protected $logicalProductVariantType = LogicalProductVariant::class;
  protected $logicalProductVariantDataType = '';
  protected $productSuiteType = ProductSuite::class;
  protected $productSuiteDataType = '';

  /**
   * Matched LogicalProduct.
   *
   * @param LogicalProduct $logicalProduct
   */
  public function setLogicalProduct(LogicalProduct $logicalProduct)
  {
    $this->logicalProduct = $logicalProduct;
  }
  /**
   * @return LogicalProduct
   */
  public function getLogicalProduct()
  {
    return $this->logicalProduct;
  }
  /**
   * Matched LogicalProductVariant.
   *
   * @param LogicalProductVariant $logicalProductVariant
   */
  public function setLogicalProductVariant(LogicalProductVariant $logicalProductVariant)
  {
    $this->logicalProductVariant = $logicalProductVariant;
  }
  /**
   * @return LogicalProductVariant
   */
  public function getLogicalProductVariant()
  {
    return $this->logicalProductVariant;
  }
  /**
   * Matched ProductSuite.
   *
   * @param ProductSuite $productSuite
   */
  public function setProductSuite(ProductSuite $productSuite)
  {
    $this->productSuite = $productSuite;
  }
  /**
   * @return ProductSuite
   */
  public function getProductSuite()
  {
    return $this->productSuite;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LookupEntityResponse::class, 'Google_Service_CloudProductRegistry_LookupEntityResponse');
