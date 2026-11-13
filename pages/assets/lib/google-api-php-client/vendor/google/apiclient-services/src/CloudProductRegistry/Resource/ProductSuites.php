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

namespace Google\Service\CloudProductRegistry\Resource;

use Google\Service\CloudProductRegistry\ListProductSuitesResponse;
use Google\Service\CloudProductRegistry\LookupEntityResponse;
use Google\Service\CloudProductRegistry\ProductSuite;

/**
 * The "productSuites" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudproductregistryService = new Google\Service\CloudProductRegistry(...);
 *   $productSuites = $cloudproductregistryService->productSuites;
 *  </code>
 */
class ProductSuites extends \Google\Service\Resource
{
  /**
   * Get details of a ProductSuite. (productSuites.get)
   *
   * @param string $name Required. The name of the ProductSuite to retrieve.
   * Format: productSuites/{product_suite}
   * @param array $optParams Optional parameters.
   * @return ProductSuite
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ProductSuite::class);
  }
  /**
   * Lists ProductSuites. (productSuites.listProductSuites)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of suites to return. The
   * service may return fewer than this value. If unspecified, at most 100 suites
   * will be returned. The maximum value is 500; values above 500 will be coerced
   * to 500.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListProductSuites` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListProductSuites` must match
   * the call that provided the page token.
   * @return ListProductSuitesResponse
   * @throws \Google\Service\Exception
   */
  public function listProductSuites($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListProductSuitesResponse::class);
  }
  /**
   * Look up entities. (productSuites.lookupEntity)
   *
   * @param string $lookupUri Required. Entity uri to look up. Supported Formats:
   * logicalProducts/{logical_product}
   * logicalProducts/{logical_product}/variants/{variant}
   * productSuites/{product_suite}
   * @param array $optParams Optional parameters.
   * @return LookupEntityResponse
   * @throws \Google\Service\Exception
   */
  public function lookupEntity($lookupUri, $optParams = [])
  {
    $params = ['lookupUri' => $lookupUri];
    $params = array_merge($params, $optParams);
    return $this->call('lookupEntity', [$params], LookupEntityResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductSuites::class, 'Google_Service_CloudProductRegistry_Resource_ProductSuites');
