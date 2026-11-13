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

class LogicalProduct extends \Google\Collection
{
  /**
   * The default value. This value is used if the lifecycle state is not set.
   */
  public const LIFECYCLE_STATE_LIFECYCLE_STATE_UNSPECIFIED = 'LIFECYCLE_STATE_UNSPECIFIED';
  /**
   * The entity is in Public Preview. It is available to all customers, but may
   * not be feature-complete or have full support guarantees.
   */
  public const LIFECYCLE_STATE_LIFECYCLE_STATE_PUBLIC_PREVIEW = 'LIFECYCLE_STATE_PUBLIC_PREVIEW';
  /**
   * Deprecated: Private General Availability entities are not exposed. The
   * entity is in Private General Availability. It is fully supported and
   * stable, but only available to a select group of customers.
   *
   * @deprecated
   */
  public const LIFECYCLE_STATE_LIFECYCLE_STATE_PRIVATE_GA = 'LIFECYCLE_STATE_PRIVATE_GA';
  /**
   * The entity is Generally Available. It is fully supported, stable, and
   * available to all customers.
   */
  public const LIFECYCLE_STATE_LIFECYCLE_STATE_GA = 'LIFECYCLE_STATE_GA';
  /**
   * The entity is deprecated. It is no longer recommended for use and may be
   * removed in a future version.
   */
  public const LIFECYCLE_STATE_LIFECYCLE_STATE_DEPRECATED = 'LIFECYCLE_STATE_DEPRECATED';
  protected $collection_key = 'variants';
  /**
   * Output only. Current Lifecycle state of the logical product.
   *
   * @var string
   */
  public $lifecycleState;
  /**
   * Identifier. The resource name of the LogicalProduct. Format:
   * logicalProducts/{logical_product}.
   *
   * @var string
   */
  public $name;
  /**
   * Product suite associated with the logical product. Format:
   * productSuites/{product_suite}.
   *
   * @var string
   */
  public $productSuite;
  /**
   * Output only. Indicates whether the logical product has been replaced. If
   * `false`, the product is active. If `true`, the product has been replaced by
   * another type, and the `replacement` field contains the resource name of
   * that replacement.
   *
   * @var bool
   */
  public $replaced;
  /**
   * Output only. The resource name of the Logical Entity that the logical
   * product is replaced by. This field is only populated when this logical
   * product is replaced by some other type. Eg:
   * logicalProducts/{logical_product}/variants/{variant},
   * productSuites/{product_suite}, etc.
   *
   * @var string
   */
  public $replacement;
  /**
   * Display name of the LogicalProduct.
   *
   * @var string
   */
  public $title;
  /**
   * Output only. Child variant resource references. Format:
   * logicalProducts/{logical_product}/variants/{variant}
   *
   * @var string[]
   */
  public $variants;

  /**
   * Output only. Current Lifecycle state of the logical product.
   *
   * Accepted values: LIFECYCLE_STATE_UNSPECIFIED,
   * LIFECYCLE_STATE_PUBLIC_PREVIEW, LIFECYCLE_STATE_PRIVATE_GA,
   * LIFECYCLE_STATE_GA, LIFECYCLE_STATE_DEPRECATED
   *
   * @param self::LIFECYCLE_STATE_* $lifecycleState
   */
  public function setLifecycleState($lifecycleState)
  {
    $this->lifecycleState = $lifecycleState;
  }
  /**
   * @return self::LIFECYCLE_STATE_*
   */
  public function getLifecycleState()
  {
    return $this->lifecycleState;
  }
  /**
   * Identifier. The resource name of the LogicalProduct. Format:
   * logicalProducts/{logical_product}.
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
   * Product suite associated with the logical product. Format:
   * productSuites/{product_suite}.
   *
   * @param string $productSuite
   */
  public function setProductSuite($productSuite)
  {
    $this->productSuite = $productSuite;
  }
  /**
   * @return string
   */
  public function getProductSuite()
  {
    return $this->productSuite;
  }
  /**
   * Output only. Indicates whether the logical product has been replaced. If
   * `false`, the product is active. If `true`, the product has been replaced by
   * another type, and the `replacement` field contains the resource name of
   * that replacement.
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
   * Output only. The resource name of the Logical Entity that the logical
   * product is replaced by. This field is only populated when this logical
   * product is replaced by some other type. Eg:
   * logicalProducts/{logical_product}/variants/{variant},
   * productSuites/{product_suite}, etc.
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
   * Display name of the LogicalProduct.
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
  /**
   * Output only. Child variant resource references. Format:
   * logicalProducts/{logical_product}/variants/{variant}
   *
   * @param string[] $variants
   */
  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  /**
   * @return string[]
   */
  public function getVariants()
  {
    return $this->variants;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LogicalProduct::class, 'Google_Service_CloudProductRegistry_LogicalProduct');
