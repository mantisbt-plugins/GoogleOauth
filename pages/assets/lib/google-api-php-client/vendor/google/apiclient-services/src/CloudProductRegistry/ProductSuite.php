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

class ProductSuite extends \Google\Collection
{
  protected $collection_key = 'logicalProducts';
  /**
   * Output only. LogicalProducts under this suite. Format:
   * logicalProducts/{logical_product}
   *
   * @var string[]
   */
  public $logicalProducts;
  /**
   * Identifier. The resource name of the ProductSuite. Format:
   * productSuites/{product_suite}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Indicates whether the product suite has been replaced. If
   * `false`, the product suite is active. If `true`, the product suite has been
   * replaced by another type, and the `replacement` field contains the resource
   * name of that replacement.
   *
   * @var bool
   */
  public $replaced;
  /**
   * Output only. The resource name of the Logical Entity that the product suite
   * is replaced by. This field is only populated when this product suite is
   * replaced by some other type. Eg: logicalProducts/{logical_product},
   * logicalProducts/{logical_product}/variants/{variant}, etc.
   *
   * @var string
   */
  public $replacement;
  /**
   * Title of the ProductSuite.
   *
   * @var string
   */
  public $title;

  /**
   * Output only. LogicalProducts under this suite. Format:
   * logicalProducts/{logical_product}
   *
   * @param string[] $logicalProducts
   */
  public function setLogicalProducts($logicalProducts)
  {
    $this->logicalProducts = $logicalProducts;
  }
  /**
   * @return string[]
   */
  public function getLogicalProducts()
  {
    return $this->logicalProducts;
  }
  /**
   * Identifier. The resource name of the ProductSuite. Format:
   * productSuites/{product_suite}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Indicates whether the product suite has been replaced. If
   * `false`, the product suite is active. If `true`, the product suite has been
   * replaced by another type, and the `replacement` field contains the resource
   * name of that replacement.
   *
   * @param bool $replaced
   */
  public function setReplaced($replaced)
  {
    $this->replaced = $replaced;
  }
  /**
   * @return bool
   */
  public function getReplaced()
  {
    return $this->replaced;
  }
  /**
   * Output only. The resource name of the Logical Entity that the product suite
   * is replaced by. This field is only populated when this product suite is
   * replaced by some other type. Eg: logicalProducts/{logical_product},
   * logicalProducts/{logical_product}/variants/{variant}, etc.
   *
   * @param string $replacement
   */
  public function setReplacement($replacement)
  {
    $this->replacement = $replacement;
  }
  /**
   * @return string
   */
  public function getReplacement()
  {
    return $this->replacement;
  }
  /**
   * Title of the ProductSuite.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductSuite::class, 'Google_Service_CloudProductRegistry_ProductSuite');
