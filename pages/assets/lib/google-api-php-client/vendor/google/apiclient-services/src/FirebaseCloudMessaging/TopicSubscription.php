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

namespace Google\Service\FirebaseCloudMessaging;

class TopicSubscription extends \Google\Model
{
  /**
   * Output only. Time when the subscription was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Identifier. The resource name of the subscription. Format: projects/{projec
   * t}/registrations/{registration}/topicSubscriptions/{topicSubscription} The
   * {registration} part contains the registration ID (e.g., FID).
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The ID of the TopicSubscription, which is the topic name. This
   * corresponds to the {topicSubscription} segment in the resource name. Topic
   * names match the pattern of "[a-zA-Z0-9-_.~%]{1,900}".
   *
   * @var string
   */
  public $topicName;

  /**
   * Output only. Time when the subscription was created.
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
   * Identifier. The resource name of the subscription. Format: projects/{projec
   * t}/registrations/{registration}/topicSubscriptions/{topicSubscription} The
   * {registration} part contains the registration ID (e.g., FID).
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
   * Output only. The ID of the TopicSubscription, which is the topic name. This
   * corresponds to the {topicSubscription} segment in the resource name. Topic
   * names match the pattern of "[a-zA-Z0-9-_.~%]{1,900}".
   *
   * @param string $topicName
   */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /**
   * @return string
   */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TopicSubscription::class, 'Google_Service_FirebaseCloudMessaging_TopicSubscription');
