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

namespace Google\Service\AndroidPublisher\Resource;

use Google\Service\AndroidPublisher\CreateAppStoreHostedAppRequest;
use Google\Service\AndroidPublisher\CreateAppStoreHostedAppResponse;
use Google\Service\AndroidPublisher\UpdateAppStoreHostedAppPublishStatusRequest;
use Google\Service\AndroidPublisher\UpdateAppStoreHostedAppPublishStatusResponse;
use Google\Service\AndroidPublisher\UpdateAppStoreHostedAppRequest;
use Google\Service\AndroidPublisher\UpdateAppStoreHostedAppResponse;
use Google\Service\AndroidPublisher\UploadApkRequest;
use Google\Service\AndroidPublisher\UploadApkResponse;
use Google\Service\AndroidPublisher\UploadAppStoreAppPolicyDeclarationFileRequest;
use Google\Service\AndroidPublisher\UploadAppStoreAppPolicyDeclarationFileResponse;
use Google\Service\AndroidPublisher\UploadImageRequest;
use Google\Service\AndroidPublisher\UploadImageResponse;

/**
 * The "appstoreappsreview" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google\Service\AndroidPublisher(...);
 *   $appstoreappsreview = $androidpublisherService->appstoreappsreview;
 *  </code>
 */
class Appstoreappsreview extends \Google\Service\Resource
{
  /**
   * Creates an app store hosted app. This must be called before any other RPCs
   * for this hosted app. (appstoreappsreview.createappstorehostedapp)
   *
   * @param string $appStorePackageName Required. Package name of the third-party
   * app store.
   * @param CreateAppStoreHostedAppRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CreateAppStoreHostedAppResponse
   * @throws \Google\Service\Exception
   */
  public function createappstorehostedapp($appStorePackageName, CreateAppStoreHostedAppRequest $postBody, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('createappstorehostedapp', [$params], CreateAppStoreHostedAppResponse::class);
  }
  /**
   * Updates details for an app hosted on an app store. Use this to provide
   * details for a new app, or to update details for an existing app. The update
   * will be sent for review immediately after creation.
   * (appstoreappsreview.updateappstorehostedapp)
   *
   * @param string $appStorePackageName Required. Package name of the third-party
   * app store.
   * @param UpdateAppStoreHostedAppRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UpdateAppStoreHostedAppResponse
   * @throws \Google\Service\Exception
   */
  public function updateappstorehostedapp($appStorePackageName, UpdateAppStoreHostedAppRequest $postBody, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateappstorehostedapp', [$params], UpdateAppStoreHostedAppResponse::class);
  }
  /**
   * Updates the publish status of an app store hosted app. The default state
   * after calling UpdateAppStoreHostedApp is PUBLISHED. It is not necessary to
   * call this RPC explicitly to set an app to PUBLISHED.
   * (appstoreappsreview.updateappstorehostedapppublishstatus)
   *
   * @param string $appStorePackageName Required. Package name of the third-party
   * app store.
   * @param string $packageName Required. Package name of the app.
   * @param UpdateAppStoreHostedAppPublishStatusRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UpdateAppStoreHostedAppPublishStatusResponse
   * @throws \Google\Service\Exception
   */
  public function updateappstorehostedapppublishstatus($appStorePackageName, $packageName, UpdateAppStoreHostedAppPublishStatusRequest $postBody, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'packageName' => $packageName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateappstorehostedapppublishstatus', [$params], UpdateAppStoreHostedAppPublishStatusResponse::class);
  }
  /**
   * Upload an APK file for the hosted app. Returns an ID to track this APK.
   * (appstoreappsreview.uploadapk)
   *
   * @param string $appStorePackageName Required. Package name of the third-party
   * app store.
   * @param string $packageName Required. Package name of the app.
   * @param UploadApkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UploadApkResponse
   * @throws \Google\Service\Exception
   */
  public function uploadapk($appStorePackageName, $packageName, UploadApkRequest $postBody, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'packageName' => $packageName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadapk', [$params], UploadApkResponse::class);
  }
  /**
   * Upload a policy declaration file for the hosted app. Returns an ID to track
   * the file. (appstoreappsreview.uploadappstoreapppolicydeclarationfile)
   *
   * @param string $appStorePackageName Required. Package name of the third-party
   * app store.
   * @param string $packageName Required. Package name of the app.
   * @param UploadAppStoreAppPolicyDeclarationFileRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UploadAppStoreAppPolicyDeclarationFileResponse
   * @throws \Google\Service\Exception
   */
  public function uploadappstoreapppolicydeclarationfile($appStorePackageName, $packageName, UploadAppStoreAppPolicyDeclarationFileRequest $postBody, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'packageName' => $packageName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadappstoreapppolicydeclarationfile', [$params], UploadAppStoreAppPolicyDeclarationFileResponse::class);
  }
  /**
   * Upload a screenshot or app icon for the hosted app. Returns an ID to track
   * the image. (appstoreappsreview.uploadimage)
   *
   * @param string $appStorePackageName Required. Package name of the third-party
   * app store.
   * @param string $packageName Required. Package name of the app.
   * @param UploadImageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return UploadImageResponse
   * @throws \Google\Service\Exception
   */
  public function uploadimage($appStorePackageName, $packageName, UploadImageRequest $postBody, $optParams = [])
  {
    $params = ['appStorePackageName' => $appStorePackageName, 'packageName' => $packageName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('uploadimage', [$params], UploadImageResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Appstoreappsreview::class, 'Google_Service_AndroidPublisher_Resource_Appstoreappsreview');
