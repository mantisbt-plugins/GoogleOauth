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

namespace Google\Service\CloudSupport\Resource;

use Google\Service\CloudSupport\CloudsupportEmpty;
use Google\Service\CloudSupport\ExpungeSupportEventSubscriptionRequest;
use Google\Service\CloudSupport\ListSupportEventSubscriptionsResponse;
use Google\Service\CloudSupport\SupportEventSubscription;
use Google\Service\CloudSupport\UndeleteSupportEventSubscriptionRequest;

/**
 * The "supportEventSubscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudsupportService = new Google\Service\CloudSupport(...);
 *   $supportEventSubscriptions = $cloudsupportService->supportEventSubscriptions;
 *  </code>
 */
class SupportEventSubscriptions extends \Google\Service\Resource
{
  /**
   * Creates a support event subscription for an organization. EXAMPLES: cURL:
   * ```shell parent="organizations/123456789" curl \ --request POST \ --header
   * "Authorization: Bearer $(gcloud auth print-access-token)" \ --header
   * 'Content-Type: application/json' \ --data '{ "pub_sub_topic": "projects/my-
   * project/topics/my-topic" }' \
   * "https://cloudsupport.googleapis.com/v2/$parent/supportEventSubscriptions"
   * ``` Python: ```python import googleapiclient.discovery api_version = "v2"
   * supportApiService = googleapiclient.discovery.build(
   * serviceName="cloudsupport", version=api_version, discoveryServiceUrl=f"https:
   * //cloudsupport.googleapis.com/$discovery/rest?version={api_version}", )
   * request = supportApiService.supportEventSubscriptions().create(
   * parent="organizations/123456789", body={ "pub_sub_topic": "projects/my-
   * project/topics/my-topic" }, ) print(request.execute()) ```
   * (supportEventSubscriptions.create)
   *
   * @param string $parent Required. The parent resource name where the support
   * event subscription will be created. Format: organizations/{organization_id}
   * @param SupportEventSubscription $postBody
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function create($parent, SupportEventSubscription $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], SupportEventSubscription::class);
  }
  /**
   * Soft deletes a support event subscription. EXAMPLES: cURL: ```shell support_e
   * vent_subscription="organizations/123456789/supportEventSubscriptions/abcdef12
   * 3456" curl \ --request DELETE \ --header "Authorization: Bearer $(gcloud auth
   * print-access-token)" \
   * "https://cloudsupport.googleapis.com/v2/$support_event_subscription" ```
   * Python: ```python import googleapiclient.discovery api_version = "v2"
   * supportApiService = googleapiclient.discovery.build(
   * serviceName="cloudsupport", version=api_version, discoveryServiceUrl=f"https:
   * //cloudsupport.googleapis.com/$discovery/rest?version={api_version}", )
   * request = supportApiService).supportEventSubscriptions().delete(
   * name="organizations/123456789/supportEventSubscriptions/abcdef123456" )
   * print(request.execute()) ``` (supportEventSubscriptions.delete)
   *
   * @param string $name Required. The name of the support event subscription to
   * delete. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SupportEventSubscription::class);
  }
  /**
   * Expunges a support event subscription. (supportEventSubscriptions.expunge)
   *
   * @param string $name Required. The name of the support event subscription to
   * expunge. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param ExpungeSupportEventSubscriptionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CloudsupportEmpty
   * @throws \Google\Service\Exception
   */
  public function expunge($name, ExpungeSupportEventSubscriptionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('expunge', [$params], CloudsupportEmpty::class);
  }
  /**
   * Gets a support event subscription. EXAMPLES: cURL: ```shell support_event_sub
   * scription="organizations/123456789/supportEventSubscriptions/abcdef123456"
   * curl \ --header "Authorization: Bearer $(gcloud auth print-access-token)" \
   * "https://cloudsupport.googleapis.com/v2/$support_event_subscription" ```
   * Python: ```python import googleapiclient.discovery api_version = "v2"
   * supportApiService = googleapiclient.discovery.build(
   * serviceName="cloudsupport", version=api_version, discoveryServiceUrl=f"https:
   * //cloudsupport.googleapis.com/$discovery/rest?version={api_version}", )
   * request = supportApiService.supportEventSubscriptions().get(
   * name="organizations/123456789/supportEventSubscriptions/abcdef123456" )
   * print(request.execute()) ``` (supportEventSubscriptions.get)
   *
   * @param string $name Required. The name of the support event subscription to
   * retrieve. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SupportEventSubscription::class);
  }
  /**
   * Lists support event subscriptions. EXAMPLES: cURL: ```shell
   * parent="organizations/123456789" curl \ --header "Authorization: Bearer
   * $(gcloud auth print-access-token)" \
   * "https://cloudsupport.googleapis.com/v2/$parent/supportEventSubscriptions"
   * ``` Python: ```python import googleapiclient.discovery api_version = "v2"
   * supportApiService = googleapiclient.discovery.build(
   * serviceName="cloudsupport", version=api_version, discoveryServiceUrl=f"https:
   * //cloudsupport.googleapis.com/$discovery/rest?version={api_version}", )
   * request = supportApiService.supportEventSubscriptions().list(
   * parent="organizations/123456789" ) print(request.execute()) ```
   * (supportEventSubscriptions.listSupportEventSubscriptions)
   *
   * @param string $parent Required. The fully qualified name of the Cloud
   * resource to list support event subscriptions under. Format:
   * organizations/{organization_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression based on AIP-160.
   * Supported fields: - pub_sub_topic - state Examples: -
   * `pub_sub_topic="projects/example-project/topics/example-topic"` -
   * `state=WORKING` - `pub_sub_topic="projects/example-project/topics/example-
   * topic" AND state=WORKING`
   * @opt_param int pageSize Optional. The maximum number of support event
   * subscriptions to return.
   * @opt_param string pageToken Optional. A token identifying the page of results
   * to return. If unspecified, the first page is retrieved. When paginating, all
   * other parameters provided to `ListSupportEventSubscriptions` must match the
   * call that provided the page token.
   * @opt_param bool showDeleted Optional. Whether to show deleted subscriptions.
   * By default, deleted subscriptions are not returned.
   * @return ListSupportEventSubscriptionsResponse
   * @throws \Google\Service\Exception
   */
  public function listSupportEventSubscriptions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSupportEventSubscriptionsResponse::class);
  }
  /**
   * Updates a support event subscription. EXAMPLES: cURL: ```shell support_event_
   * subscription="organizations/123456789/supportEventSubscriptions/abcdef123456"
   * curl \ --request PATCH \ --header "Authorization: Bearer $(gcloud auth print-
   * access-token)" \ --header "Content-Type: application/json" \ --data '{
   * "pub_sub_topic": "projects/my-project/topics/new-topic" }' \ "https://cloudsu
   * pport.googleapis.com/v2/$support_event_subscription?updateMask=pub_sub_topic"
   * ``` Python: ```python import googleapiclient.discovery api_version = "v2"
   * supportApiService = googleapiclient.discovery.build(
   * serviceName="cloudsupport", version=api_version, discoveryServiceUrl=f"https:
   * //cloudsupport.googleapis.com/$discovery/rest?version={api_version}", )
   * request = supportApiService.supportEventSubscriptions().patch(
   * name="organizations/123456789/supportEventSubscriptions/abcdef123456", body={
   * "pub_sub_topic": "projects/my-project/topics/new-topic" }, )
   * print(request.execute()) ``` (supportEventSubscriptions.patch)
   *
   * @param string $name Identifier. The resource name of the support event
   * subscription.
   * @param SupportEventSubscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update. The only
   * supported value is pub_sub_topic.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function patch($name, SupportEventSubscription $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], SupportEventSubscription::class);
  }
  /**
   * Undeletes a support event subscription. EXAMPLES: cURL: ```shell support_even
   * t_subscription="organizations/123456789/supportEventSubscriptions/abcdef12345
   * 6" curl \ --request POST \ --header "Authorization: Bearer $(gcloud auth
   * print-access-token)" \
   * "https://cloudsupport.googleapis.com/v2/$support_event_subscription:undelete"
   * ``` Python: ```python import googleapiclient.discovery api_version = "v2"
   * supportApiService = googleapiclient.discovery.build(
   * serviceName="cloudsupport", version=api_version, discoveryServiceUrl=f"https:
   * //cloudsupport.googleapis.com/$discovery/rest?version={api_version}", )
   * request = supportApiService.supportEventSubscriptions().undelete(
   * name="organizations/123456789/supportEventSubscriptions/abcdef123456" )
   * print(request.execute()) ``` Undeletes a support event subscription.
   * (supportEventSubscriptions.undelete)
   *
   * @param string $name Required. The name of the support event subscription to
   * undelete. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param UndeleteSupportEventSubscriptionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function undelete($name, UndeleteSupportEventSubscriptionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('undelete', [$params], SupportEventSubscription::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SupportEventSubscriptions::class, 'Google_Service_CloudSupport_Resource_SupportEventSubscriptions');
