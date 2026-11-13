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

namespace Google\Service\FirebaseCrashlytics;

class Issue extends \Google\Collection
{
  /**
   * Unknown.
   */
  public const ERROR_TYPE_ERROR_TYPE_UNSPECIFIED = 'ERROR_TYPE_UNSPECIFIED';
  /**
   * Fatal crash event.
   */
  public const ERROR_TYPE_FATAL = 'FATAL';
  /**
   * Non-fatal event, such as a caught Java exception or NSError on iOS.
   */
  public const ERROR_TYPE_NON_FATAL = 'NON_FATAL';
  /**
   * Application not responding error, Android only.
   */
  public const ERROR_TYPE_ANR = 'ANR';
  /**
   * Unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Ongoing issue.
   */
  public const STATE_OPEN = 'OPEN';
  /**
   * Issue resolved.
   */
  public const STATE_CLOSED = 'CLOSED';
  /**
   * Issue muted. No alerts will be fired for this issue.
   */
  public const STATE_MUTED = 'MUTED';
  protected $collection_key = 'variants';
  /**
   * Output only. Immutable. Indicates whether this issue is a crash, non-fatal
   * exception, or ANR.
   *
   * @var string
   */
  public $errorType;
  /**
   * Output only. Immutable. The first time this issue was seen.
   *
   * @var string
   */
  public $firstSeenTime;
  /**
   * Output only. Immutable. The first app display_version in which this issue
   * was seen, populated for mobile issues only.
   *
   * @var string
   */
  public $firstSeenVersion;
  /**
   * Output only. Immutable. Unique identifier for the issue.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The most recent time this issue was seen.
   *
   * @var string
   */
  public $lastSeenTime;
  /**
   * Output only. The most recent app display_version in which this issue was
   * seen, populated for mobile issues only.
   *
   * @var string
   */
  public $lastSeenVersion;
  /**
   * Required. Output only. Immutable. Identifier. The name of the issue
   * resource. Format: "projects/{project}/apps/{app}/issues/{issue}".
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The number of notes attached to an issue.
   *
   * @var string
   */
  public $notesCount;
  /**
   * Output only. The resource name for a sample event in this issue.
   *
   * @var string
   */
  public $sampleEvent;
  protected $signalsType = IssueSignals::class;
  protected $signalsDataType = 'array';
  /**
   * Output only. Indicates whether this issue is open, closed or muted. For
   * details on how issue states change without user actions, see [Regressed Iss
   * ues](https://firebase.google.com/docs/crashlytics/troubleshooting?platform=
   * ios#regressed-issues).
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time at which the issue state was last changed.
   *
   * @var string
   */
  public $stateUpdateTime;
  /**
   * Output only. Immutable. Caption subtitle. This is usually a symbol or an
   * exception message.
   *
   * @var string
   */
  public $subtitle;
  /**
   * Output only. Immutable. Caption title. This is usually a source file or
   * method name.
   *
   * @var string
   */
  public $title;
  /**
   * Output only. Provides a link to the Issue on the Firebase console. When
   * this Issue is obtained as part of a Report, then the link will be
   * configured with the same time interval and filters as the request.
   *
   * @var string
   */
  public $uri;
  protected $variantsType = IssueVariant::class;
  protected $variantsDataType = 'array';

  /**
   * Output only. Immutable. Indicates whether this issue is a crash, non-fatal
   * exception, or ANR.
   *
   * Accepted values: ERROR_TYPE_UNSPECIFIED, FATAL, NON_FATAL, ANR
   *
   * @param self::ERROR_TYPE_* $errorType
   */
  public function setErrorType($errorType)
  {
    $this->errorType = $errorType;
  }
  /**
   * @return self::ERROR_TYPE_*
   */
  public function getErrorType()
  {
    return $this->errorType;
  }
  /**
   * Output only. Immutable. The first time this issue was seen.
   *
   * @param string $firstSeenTime
   */
  public function setFirstSeenTime($firstSeenTime)
  {
    $this->firstSeenTime = $firstSeenTime;
  }
  /**
   * @return string
   */
  public function getFirstSeenTime()
  {
    return $this->firstSeenTime;
  }
  /**
   * Output only. Immutable. The first app display_version in which this issue
   * was seen, populated for mobile issues only.
   *
   * @param string $firstSeenVersion
   */
  public function setFirstSeenVersion($firstSeenVersion)
  {
    $this->firstSeenVersion = $firstSeenVersion;
  }
  /**
   * @return string
   */
  public function getFirstSeenVersion()
  {
    return $this->firstSeenVersion;
  }
  /**
   * Output only. Immutable. Unique identifier for the issue.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The most recent time this issue was seen.
   *
   * @param string $lastSeenTime
   */
  public function setLastSeenTime($lastSeenTime)
  {
    $this->lastSeenTime = $lastSeenTime;
  }
  /**
   * @return string
   */
  public function getLastSeenTime()
  {
    return $this->lastSeenTime;
  }
  /**
   * Output only. The most recent app display_version in which this issue was
   * seen, populated for mobile issues only.
   *
   * @param string $lastSeenVersion
   */
  public function setLastSeenVersion($lastSeenVersion)
  {
    $this->lastSeenVersion = $lastSeenVersion;
  }
  /**
   * @return string
   */
  public function getLastSeenVersion()
  {
    return $this->lastSeenVersion;
  }
  /**
   * Required. Output only. Immutable. Identifier. The name of the issue
   * resource. Format: "projects/{project}/apps/{app}/issues/{issue}".
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
   * Output only. The number of notes attached to an issue.
   *
   * @param string $notesCount
   */
  public function setNotesCount($notesCount)
  {
    $this->notesCount = $notesCount;
  }
  /**
   * @return string
   */
  public function getNotesCount()
  {
    return $this->notesCount;
  }
  /**
   * Output only. The resource name for a sample event in this issue.
   *
   * @param string $sampleEvent
   */
  public function setSampleEvent($sampleEvent)
  {
    $this->sampleEvent = $sampleEvent;
  }
  /**
   * @return string
   */
  public function getSampleEvent()
  {
    return $this->sampleEvent;
  }
  /**
   * Output only. Immutable. Distinctive characteristics assigned by the
   * Crashlytics analyzer.
   *
   * @param IssueSignals[] $signals
   */
  public function setSignals($signals)
  {
    $this->signals = $signals;
  }
  /**
   * @return IssueSignals[]
   */
  public function getSignals()
  {
    return $this->signals;
  }
  /**
   * Output only. Indicates whether this issue is open, closed or muted. For
   * details on how issue states change without user actions, see [Regressed Iss
   * ues](https://firebase.google.com/docs/crashlytics/troubleshooting?platform=
   * ios#regressed-issues).
   *
   * Accepted values: STATE_UNSPECIFIED, OPEN, CLOSED, MUTED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. The time at which the issue state was last changed.
   *
   * @param string $stateUpdateTime
   */
  public function setStateUpdateTime($stateUpdateTime)
  {
    $this->stateUpdateTime = $stateUpdateTime;
  }
  /**
   * @return string
   */
  public function getStateUpdateTime()
  {
    return $this->stateUpdateTime;
  }
  /**
   * Output only. Immutable. Caption subtitle. This is usually a symbol or an
   * exception message.
   *
   * @param string $subtitle
   */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /**
   * @return string
   */
  public function getSubtitle()
  {
    return $this->subtitle;
  }
  /**
   * Output only. Immutable. Caption title. This is usually a source file or
   * method name.
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
   * Output only. Provides a link to the Issue on the Firebase console. When
   * this Issue is obtained as part of a Report, then the link will be
   * configured with the same time interval and filters as the request.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
  /**
   * Output only. Immutable. The top 12 variants (subgroups) within the issue.
   * Variants group events within an issue that are very similar. A single
   * result implies that the variant is the same as the parent issue. This field
   * will be empty when multiple issues are requested. Request a single issue to
   * list variants.
   *
   * @param IssueVariant[] $variants
   */
  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  /**
   * @return IssueVariant[]
   */
  public function getVariants()
  {
    return $this->variants;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Issue::class, 'Google_Service_FirebaseCrashlytics_Issue');
