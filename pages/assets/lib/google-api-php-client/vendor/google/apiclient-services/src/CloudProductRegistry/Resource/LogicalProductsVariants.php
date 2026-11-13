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

use Google\Service\CloudProductRegistry\ListLogicalProductVariantsResponse;
use Google\Service\CloudProductRegistry\LogicalProductVariant;
use Google\Service\CloudProductRegistry\LookupEntityResponse;

/**
 * The "variants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudproductregistryService = new Google\Service\CloudProductRegistry(...);
 *   $variants = $cloudproductregistryService->logicalProducts_variants;
 *  </code>
 */
class LogicalProductsVariants extends \Google\Service\Resource
{
  /**
   * Get details of a LogicalProductVariant. (variants.get)
   *
   * @param string $name Required. The name of the LogicalProductVariant to
   * retrieve. Format: logicalProducts/{logical_product}/variants/{variant}
   * @param array $optParams Optional parameters.
   * @return LogicalProductVariant
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], LogicalProductVariant::class);
  }
  /**
   * Lists LogicalProductVariants matching given criteria.
   * (variants.listLogicalProductsVariants)
   *
   * @param string $parent Required. Parent logical product id. Format:
   * logicalProducts/{logical_product}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of logical product
   * variants to return. The service may return fewer than this value. If
   * unspecified, at most 100 logical product variants will be returned. The
   * maximum value is 500; values above 500 will be coerced to 500.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListLogicalProductVariants` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `ListLogicalProductVariants` must match the call that provided the page
   * token.
   * @return ListLogicalProductVariantsResponse
   * @throws \Google\Service\Exception
   */
  public function listLogicalProductsVariants($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListLogicalProductVariantsResponse::class);
  }
  /**
   * Look up entities. (variants.lookupEntity)
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
class_alias(LogicalProductsVariants::class, 'Google_Service_CloudProductRegistry_Resource_LogicalProductsVariants');
