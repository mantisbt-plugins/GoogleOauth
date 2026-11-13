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

namespace Google\Service\CloudAuditManager\Resource;

use Google\Service\CloudAuditManager\AuditSchedule;
use Google\Service\CloudAuditManager\ListAuditSchedulesResponse;

/**
 * The "auditSchedules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $auditSchedules = $auditmanagerService->organizations_locations_auditSchedules;
 *  </code>
 */
class OrganizationsLocationsAuditSchedules extends \Google\Service\Resource
{
  /**
   * Creates a new audit schedule in a given project and location.
   * (auditSchedules.create)
   *
   * @param string $parent Required. Project or folder that this audit schedule is
   * for, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}`
   * @param AuditSchedule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string auditScheduleId Required. ID to use for the audit schedule,
   * which becomes the final component of the audit schedule's resource name.
   * @opt_param bool validateOnly Optional. If `true`, only validates the request
   * and does not create the audit schedule. This executes standard request
   * validation (such as schema, framework existence, scope, and IAM checks) and
   * skips the apply phase. Use this field for the following purposes: *
   * **Infrastructure as Code (IaC)**: Allow tools like Terraform to run dry-run
   * mutations (e.g., `terraform plan`) without creating real resources or
   * incurring costs. * **User Interface Validation**: Enable real-time form and
   * permission validation in custom UIs before submitting requests. * **CI/CD &
   * Automation**: Test your scripts, permissions, and parameters safely without
   * consuming resource quotas.
   * @return AuditSchedule
   * @throws \Google\Service\Exception
   */
  public function create($parent, AuditSchedule $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AuditSchedule::class);
  }
  /**
   * Gets details of a single audit schedule. (auditSchedules.get)
   *
   * @param string $name Required. Name of the audit schedule to retrieve, in one
   * of the following formats: *
   * `projects/{project}/locations/{location}/auditSchedules/{audit_schedule}` *
   * `folders/{folder}/locations/{location}/auditSchedules/{audit_schedule}` * `or
   * ganizations/{organization}/locations/{location}/auditSchedules/{audit_schedul
   * e}`
   * @param array $optParams Optional parameters.
   * @return AuditSchedule
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AuditSchedule::class);
  }
  /**
   * Lists audit schedules in a given project and location.
   * (auditSchedules.listOrganizationsLocationsAuditSchedules)
   *
   * @param string $parent Required. Parent for the audit schedule, in one of the
   * following formats: * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of items to return in a
   * single page. The service might return fewer items than this value. If
   * unspecified, the service picks an appropriate default. The maximum value is
   * 100; values above 100 are reduced to 100.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * call, to retrieve the next page of results.
   * @return ListAuditSchedulesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsAuditSchedules($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAuditSchedulesResponse::class);
  }
  /**
   * Updates an existing audit schedule. (auditSchedules.patch)
   *
   * @param string $name Identifier. Unique identifier for the audit schedule.
   * Format:
   * projects/{project}/locations/{location}/auditSchedules/{audit_schedule}
   * folders/{folder}/locations/{location}/auditSchedules/{audit_schedule} organiz
   * ations/{organization}/locations/{location}/auditSchedules/{audit_schedule}
   * @param AuditSchedule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. List of fields to update.
   * @opt_param bool validateOnly Optional. If `true`, only validates the request
   * and does not update the audit schedule. This executes standard request
   * validation (such as schema, framework existence, scope, and IAM checks) and
   * skips the apply phase. Use this field for the following purposes: *
   * **Infrastructure as Code (IaC)**: Allow tools like Terraform to run dry-run
   * mutations (e.g., `terraform plan`) without creating real resources or
   * incurring costs. * **User Interface Validation**: Enable real-time form and
   * permission validation in custom UIs before submitting requests. * **CI/CD &
   * Automation**: Test your scripts, permissions, and parameters safely without
   * consuming resource quotas.
   * @return AuditSchedule
   * @throws \Google\Service\Exception
   */
  public function patch($name, AuditSchedule $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], AuditSchedule::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsAuditSchedules::class, 'Google_Service_CloudAuditManager_Resource_OrganizationsLocationsAuditSchedules');
