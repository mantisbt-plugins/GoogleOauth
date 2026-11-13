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

namespace Google\Service\Recommender;

class CloudRecommendationsRecommendersDatabasesV1Link extends \Google\Model
{
  public const REDIRECT_PAGE_REDIRECT_PAGE_UNSPECIFIED = 'REDIRECT_PAGE_UNSPECIFIED';
  /**
   * Use this option to provide a custom URL for the CTA button. For issues
   * using this option, the custom URL specific to the issue is to be defined in
   * the UI.
   */
  public const REDIRECT_PAGE_REDIRECT_PAGE_CUSTOM_URL = 'REDIRECT_PAGE_CUSTOM_URL';
  public const REDIRECT_PAGE_REDIRECT_PAGE_RESOURCE_OVERVIEW = 'REDIRECT_PAGE_RESOURCE_OVERVIEW';
  public const REDIRECT_PAGE_REDIRECT_PAGE_EDIT_RESOURCE = 'REDIRECT_PAGE_EDIT_RESOURCE';
  public const REDIRECT_PAGE_REDIRECT_PAGE_BACKUPS = 'REDIRECT_PAGE_BACKUPS';
  public const REDIRECT_PAGE_REDIRECT_PAGE_USERS = 'REDIRECT_PAGE_USERS';
  public const REDIRECT_PAGE_REDIRECT_PAGE_SECURITY_RULES = 'REDIRECT_PAGE_SECURITY_RULES';
  public const REDIRECT_PAGE_REDIRECT_PAGE_KEY_VISUALIZER = 'REDIRECT_PAGE_KEY_VISUALIZER';
  public const REDIRECT_PAGE_REDIRECT_PAGE_SYSTEM_INSIGHTS = 'REDIRECT_PAGE_SYSTEM_INSIGHTS';
  public const REDIRECT_PAGE_REDIRECT_PAGE_CONNECTIONS = 'REDIRECT_PAGE_CONNECTIONS';
  public const REDIRECT_PAGE_REDIRECT_PAGE_CONNECTIONS_SECURITY = 'REDIRECT_PAGE_CONNECTIONS_SECURITY';
  /**
   * String label for the link. This value is not translated
   *
   * @var string
   */
  public $label;
  /**
   * Enum used to map to the redirect page for the link.
   *
   * @var string
   */
  public $redirectPage;
  /**
   * Resource name for the table cell. This is used to construct the link.
   *
   * @var string
   */
  public $resourceName;

  /**
   * String label for the link. This value is not translated
   *
   * @param string $label
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * Enum used to map to the redirect page for the link.
   *
   * Accepted values: REDIRECT_PAGE_UNSPECIFIED, REDIRECT_PAGE_CUSTOM_URL,
   * REDIRECT_PAGE_RESOURCE_OVERVIEW, REDIRECT_PAGE_EDIT_RESOURCE,
   * REDIRECT_PAGE_BACKUPS, REDIRECT_PAGE_USERS, REDIRECT_PAGE_SECURITY_RULES,
   * REDIRECT_PAGE_KEY_VISUALIZER, REDIRECT_PAGE_SYSTEM_INSIGHTS,
   * REDIRECT_PAGE_CONNECTIONS, REDIRECT_PAGE_CONNECTIONS_SECURITY
   *
   * @param self::REDIRECT_PAGE_* $redirectPage
   */
  public function setRedirectPage($redirectPage)
  {
    $this->redirectPage = $redirectPage;
  }
  /**
   * @return self::REDIRECT_PAGE_*
   */
  public function getRedirectPage()
  {
    return $this->redirectPage;
  }
  /**
   * Resource name for the table cell. This is used to construct the link.
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRecommendationsRecommendersDatabasesV1Link::class, 'Google_Service_Recommender_CloudRecommendationsRecommendersDatabasesV1Link');
