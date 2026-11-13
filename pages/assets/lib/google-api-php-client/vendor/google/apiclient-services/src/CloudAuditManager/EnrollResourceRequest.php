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

namespace Google\Service\CloudAuditManager;

class EnrollResourceRequest extends \Google\Collection
{
  protected $collection_key = 'destinations';
  protected $destinationsType = EligibleDestination::class;
  protected $destinationsDataType = 'array';
  /**
   * Optional. If `true`, only validates the request and does not enroll the
   * resource. This executes standard request validation (such as schema, IAM,
   * and destination checks) and skips the apply phase. Use this field for the
   * following purposes: * **Infrastructure as Code (IaC)**: Allow tools like
   * Terraform to run dry-run mutations (e.g., `terraform plan`) without
   * creating real resources or incurring costs. * **User Interface
   * Validation**: Enable real-time form and permission validation in custom UIs
   * before submitting requests. * **CI/CD & Automation**: Test your scripts,
   * permissions, and parameters safely without consuming resource quotas.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. Cloud Storage buckets that you can upload your audit reports to
   * during the audit process. When you enroll an organization or folder, you
   * can choose a Cloud Storage bucket from any project in the organization or
   * folder. If you run an audit at the project level using the service agent at
   * the organization or folder level, all the buckets that are associated with
   * the service agent are available.
   *
   * @param EligibleDestination[] $destinations
   */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /**
   * @return EligibleDestination[]
   */
  public function getDestinations()
  {
    return $this->destinations;
  }
  /**
   * Optional. If `true`, only validates the request and does not enroll the
   * resource. This executes standard request validation (such as schema, IAM,
   * and destination checks) and skips the apply phase. Use this field for the
   * following purposes: * **Infrastructure as Code (IaC)**: Allow tools like
   * Terraform to run dry-run mutations (e.g., `terraform plan`) without
   * creating real resources or incurring costs. * **User Interface
   * Validation**: Enable real-time form and permission validation in custom UIs
   * before submitting requests. * **CI/CD & Automation**: Test your scripts,
   * permissions, and parameters safely without consuming resource quotas.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnrollResourceRequest::class, 'Google_Service_CloudAuditManager_EnrollResourceRequest');
