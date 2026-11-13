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

namespace Google\Service\CloudSupport;

class SupportEventSubscription extends \Google\Model
{
  /**
   * Unspecified failure reason.
   */
  public const FAILURE_REASON_FAILURE_REASON_UNSPECIFIED = 'FAILURE_REASON_UNSPECIFIED';
  /**
   * The service account (i.e. cloud-support-
   * apievents@system.gserviceaccount.com) lacks the permission to publish to
   * the customer's Pub/Sub topic.
   */
  public const FAILURE_REASON_PERMISSION_DENIED = 'PERMISSION_DENIED';
  /**
   * The specified Pub/Sub topic does not exist.
   */
  public const FAILURE_REASON_TOPIC_NOT_FOUND = 'TOPIC_NOT_FOUND';
  /**
   * Message failed to publish due to a system-side error.
   */
  public const FAILURE_REASON_OTHER = 'OTHER';
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Subscription is active and working.
   */
  public const STATE_WORKING = 'WORKING';
  /**
   * Subscription is failing. Notifications cannot be published for some reason.
   */
  public const STATE_FAILING = 'FAILING';
  /**
   * Subscription has been deleted and is pending purge. Notifications are not
   * sent for deleted subscriptions. Deleted subscriptions are purged after
   * their `purge_time` has passed.
   */
  public const STATE_DELETED = 'DELETED';
  /**
   * Output only. The time at which the subscription was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The time at which the subscription was deleted.
   *
   * @var string
   */
  public $deleteTime;
  /**
   * Output only. Reason why subscription is failing. State of subscription must
   * be FAILING in order for this to have a value.
   *
   * @var string
   */
  public $failureReason;
  /**
   * Identifier. The resource name of the support event subscription.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The name of the Pub/Sub topic to publish notifications to.
   * Format: projects/{project}/topics/{topic}
   *
   * @var string
   */
  public $pubSubTopic;
  /**
   * Output only. The time at which the subscription will be purged.
   *
   * @var string
   */
  public $purgeTime;
  /**
   * Output only. The state of the subscription.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time at which the subscription was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time at which the subscription was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The time at which the subscription was deleted.
   *
   * @param string $deleteTime
   */
  public function setDeleteTime($deleteTime)
  {
    $this->deleteTime = $deleteTime;
  }
  /**
   * @return string
   */
  public function getDeleteTime()
  {
    return $this->deleteTime;
  }
  /**
   * Output only. Reason why subscription is failing. State of subscription must
   * be FAILING in order for this to have a value.
   *
   * Accepted values: FAILURE_REASON_UNSPECIFIED, PERMISSION_DENIED,
   * TOPIC_NOT_FOUND, OTHER
   *
   * @param self::FAILURE_REASON_* $failureReason
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return self::FAILURE_REASON_*
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /**
   * Identifier. The resource name of the support event subscription.
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
   * Required. The name of the Pub/Sub topic to publish notifications to.
   * Format: projects/{project}/topics/{topic}
   *
   * @param string $pubSubTopic
   */
  public function setPubSubTopic($pubSubTopic)
  {
    $this->pubSubTopic = $pubSubTopic;
  }
  /**
   * @return string
   */
  public function getPubSubTopic()
  {
    return $this->pubSubTopic;
  }
  /**
   * Output only. The time at which the subscription will be purged.
   *
   * @param string $purgeTime
   */
  public function setPurgeTime($purgeTime)
  {
    $this->purgeTime = $purgeTime;
  }
  /**
   * @return string
   */
  public function getPurgeTime()
  {
    return $this->purgeTime;
  }
  /**
   * Output only. The state of the subscription.
   *
   * Accepted values: STATE_UNSPECIFIED, WORKING, FAILING, DELETED
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
   * Output only. The time at which the subscription was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SupportEventSubscription::class, 'Google_Service_CloudSupport_SupportEventSubscription');
