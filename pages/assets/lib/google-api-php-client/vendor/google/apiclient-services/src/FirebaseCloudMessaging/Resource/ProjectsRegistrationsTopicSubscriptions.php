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

namespace Google\Service\FirebaseCloudMessaging\Resource;

use Google\Service\FirebaseCloudMessaging\FcmEmpty;
use Google\Service\FirebaseCloudMessaging\ListTopicSubscriptionsResponse;
use Google\Service\FirebaseCloudMessaging\TopicSubscription;

/**
 * The "topicSubscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fcmService = new Google\Service\FirebaseCloudMessaging(...);
 *   $topicSubscriptions = $fcmService->projects_registrations_topicSubscriptions;
 *  </code>
 */
class ProjectsRegistrationsTopicSubscriptions extends \Google\Service\Resource
{
  /**
   * Creates a TopicSubscription. Subscribes an app installation instance (by
   * registration_id, either FID or FCM Token) to a topicSubscription. Returns a
   * TopicSubscription if it is created successfully. If the subscription already
   * exists, returns error of ALREADY_EXISTS. (topicSubscriptions.create)
   *
   * @param string $parent Required. The parent resource where this subscription
   * will be created. Format: projects/{project}/registrations/{registration} The
   * {registration} part can be an FID or an FCM Token.
   * @param TopicSubscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string topicName Required. The ID to use for the subscription,
   * which is the topic name. This will become the last segment of the
   * TopicSubscription's resource name. Topic names match the pattern of
   * "[a-zA-Z0-9-_.~%]{1,900}".
   * @return TopicSubscription
   * @throws \Google\Service\Exception
   */
  public function create($parent, TopicSubscription $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], TopicSubscription::class);
  }
  /**
   * Deletes a TopicSubscription. (topicSubscriptions.delete)
   *
   * @param string $name Required. The name of the topic subscription to delete.
   * Format: projects/{project}/registrations/{registration}/topicSubscriptions/{t
   * opicSubscription}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true, and the topic
   * subscription is not found, the request will succeed but no action will be
   * taken on the server.
   * @return FcmEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], FcmEmpty::class);
  }
  /**
   * Gets a TopicSubscription. (topicSubscriptions.get)
   *
   * @param string $name Required. The name of the topic subscription to retrieve.
   * Format: projects/{project}/registrations/{registration}/topicSubscriptions/{t
   * opicSubscription}
   * @param array $optParams Optional parameters.
   * @return TopicSubscription
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], TopicSubscription::class);
  }
  /**
   * Lists TopicSubscriptions for a given app instance.
   * (topicSubscriptions.listProjectsRegistrationsTopicSubscriptions)
   *
   * @param string $parent Required. The parent resource, which owns this
   * collection of subscriptions. Format:
   * projects/{project}/registrations/{registration} The {registration} part can
   * be an FID or an FCM Token.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of subscriptions to
   * return. The service may return fewer than this value. If unspecified, at most
   * 1000 subscriptions will be returned. The maximum value is 2000; values above
   * 2000 will be coerced to 2000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListTopicSubscriptions` call. Provide this to retrieve the subsequent page.
   * @return ListTopicSubscriptionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsRegistrationsTopicSubscriptions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListTopicSubscriptionsResponse::class);
  }
  /**
   * Updates a TopicSubscription. Subscribes an app installation instance by
   * registration_id, either FID or FCM Token, to a topicSubscription. Returns an
   * existing TopicSubscription or creates a new one if it does not exist.
   * (topicSubscriptions.patch)
   *
   * @param string $name Identifier. The resource name of the subscription.
   * Format: projects/{project}/registrations/{registration}/topicSubscriptions/{t
   * opicSubscription} The {registration} part contains the registration ID (e.g.,
   * FID).
   * @param TopicSubscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true, and the topic
   * subscription is not found, a new topic subscription will be created.
   * @return TopicSubscription
   * @throws \Google\Service\Exception
   */
  public function patch($name, TopicSubscription $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], TopicSubscription::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsRegistrationsTopicSubscriptions::class, 'Google_Service_FirebaseCloudMessaging_Resource_ProjectsRegistrationsTopicSubscriptions');
