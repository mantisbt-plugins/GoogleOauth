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

namespace Google\Service\AgentRegistry;

class Publisher extends \Google\Model
{
  /**
   * Default value. Unspecified.
   */
  public const PUBLISHER_TIER_PUBLISHER_TIER_UNSPECIFIED = 'PUBLISHER_TIER_UNSPECIFIED';
  /**
   * First-party Google-curated and verified global publishers.
   */
  public const PUBLISHER_TIER_FIRST_PARTY = 'FIRST_PARTY';
  /**
   * Third-party verified enterprise partner publishers.
   */
  public const PUBLISHER_TIER_THIRD_PARTY = 'THIRD_PARTY';
  /**
   * Private publishers within the developer's workspace/project.
   */
  public const PUBLISHER_TIER_PRIVATE = 'PRIVATE';
  /**
   * Optional. Human readable display name of the publisher.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. URI pointing to official publisher documentation.
   *
   * @var string
   */
  public $documentationUri;
  /**
   * Identifier. Resource name of the publisher. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The curation tier of the publisher.
   *
   * @var string
   */
  public $publisherTier;
  /**
   * Optional. URI pointing to the support portal or email.
   *
   * @var string
   */
  public $supportUri;
  /**
   * Required. The verified prefix (e.g. "snowflake-", "google-") associated
   * with this publisher. The system uses this prefix to enforce name-squatting
   * rules during Skill registration. Must be globally unique across all
   * publishers.
   *
   * @var string
   */
  public $verifiedPrefix;

  /**
   * Optional. Human readable display name of the publisher.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. URI pointing to official publisher documentation.
   *
   * @param string $documentationUri
   */
  public function setDocumentationUri($documentationUri)
  {
    $this->documentationUri = $documentationUri;
  }
  /**
   * @return string
   */
  public function getDocumentationUri()
  {
    return $this->documentationUri;
  }
  /**
   * Identifier. Resource name of the publisher. Format:
   * `projects/{project}/locations/{location}/publishers/{publisher}`
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
   * Output only. The curation tier of the publisher.
   *
   * Accepted values: PUBLISHER_TIER_UNSPECIFIED, FIRST_PARTY, THIRD_PARTY,
   * PRIVATE
   *
   * @param self::PUBLISHER_TIER_* $publisherTier
   */
  public function setPublisherTier($publisherTier)
  {
    $this->publisherTier = $publisherTier;
  }
  /**
   * @return self::PUBLISHER_TIER_*
   */
  public function getPublisherTier()
  {
    return $this->publisherTier;
  }
  /**
   * Optional. URI pointing to the support portal or email.
   *
   * @param string $supportUri
   */
  public function setSupportUri($supportUri)
  {
    $this->supportUri = $supportUri;
  }
  /**
   * @return string
   */
  public function getSupportUri()
  {
    return $this->supportUri;
  }
  /**
   * Required. The verified prefix (e.g. "snowflake-", "google-") associated
   * with this publisher. The system uses this prefix to enforce name-squatting
   * rules during Skill registration. Must be globally unique across all
   * publishers.
   *
   * @param string $verifiedPrefix
   */
  public function setVerifiedPrefix($verifiedPrefix)
  {
    $this->verifiedPrefix = $verifiedPrefix;
  }
  /**
   * @return string
   */
  public function getVerifiedPrefix()
  {
    return $this->verifiedPrefix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Publisher::class, 'Google_Service_AgentRegistry_Publisher');
