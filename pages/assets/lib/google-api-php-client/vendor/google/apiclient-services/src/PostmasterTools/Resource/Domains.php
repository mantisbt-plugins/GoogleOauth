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

namespace Google\Service\PostmasterTools\Resource;

use Google\Service\PostmasterTools\CreateDomainRequest;
use Google\Service\PostmasterTools\Domain;
use Google\Service\PostmasterTools\DomainComplianceStatus;
use Google\Service\PostmasterTools\DomainVerificationToken;
use Google\Service\PostmasterTools\GmailpostmastertoolsEmpty;
use Google\Service\PostmasterTools\ListDomainsResponse;
use Google\Service\PostmasterTools\VerifyDomainRequest;
use Google\Service\PostmasterTools\VerifyDomainResponse;

/**
 * The "domains" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailpostmastertoolsService = new Google\Service\PostmasterTools(...);
 *   $domains = $gmailpostmastertoolsService->domains;
 *  </code>
 */
class Domains extends \Google\Service\Resource
{
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Adds a
   * domain to the user's account. Returns INVALID_ARGUMENT if a domain is not
   * provided. Returns ALREADY_EXISTS if the domain is already registered by the
   * user. (domains.create)
   *
   * @param CreateDomainRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Domain
   * @throws \Google\Service\Exception
   */
  public function create(CreateDomainRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Domain::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Deletes
   * a domain from the user's account. Returns NOT_FOUND if the domain is not
   * registered by the user. (domains.delete)
   *
   * @param string $name Required. The domain to delete.
   * @param array $optParams Optional parameters.
   * @return GmailpostmastertoolsEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GmailpostmastertoolsEmpty::class);
  }
  /**
   * Retrieves detailed information about a domain registered by you. Returns
   * NOT_FOUND if the domain is not registered by you. Domain represents the
   * metadata of a domain that has been registered within the system and linked to
   * a user. (domains.get)
   *
   * @param string $name Required. The resource name of the domain. Format:
   * `domains/{domain_name}`, where domain_name is the fully qualified domain name
   * (i.e., mymail.mydomain.com).
   * @param array $optParams Optional parameters.
   * @return Domain
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Domain::class);
  }
  /**
   * Retrieves the compliance status for a given domain. Returns PERMISSION_DENIED
   * if you don't have permission to access compliance status for the domain.
   * (domains.getComplianceStatus)
   *
   * @param string $name Required. The resource name of the domain's compliance
   * status to retrieve. Format: `domains/{domain_id}/complianceStatus`.
   * @param array $optParams Optional parameters.
   * @return DomainComplianceStatus
   * @throws \Google\Service\Exception
   */
  public function getComplianceStatus($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getComplianceStatus', [$params], DomainComplianceStatus::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Gets a
   * verification token used for verifying a user's ownership over a domain.
   * (domains.getVerificationToken)
   *
   * @param string $name Required. The resource name of the verification token to
   * retrieve. Format: `domains/{domain}/verificationToken`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string verificationMethod Required. The verification method used.
   * Must be specified, i.e. TXT or CNAME.
   * @return DomainVerificationToken
   * @throws \Google\Service\Exception
   */
  public function getVerificationToken($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getVerificationToken', [$params], DomainVerificationToken::class);
  }
  /**
   * Retrieves a list of all domains registered by you, along with their
   * corresponding metadata. The order of domains in the response is unspecified
   * and non-deterministic. Newly registered domains will not necessarily be added
   * to the end of this list. (domains.listDomains)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer domains than requested. If unspecified, the default value for this
   * field is 10. The maximum value for this field is 200.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous List request, if any.
   * @return ListDomainsResponse
   * @throws \Google\Service\Exception
   */
  public function listDomains($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDomainsResponse::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview):
   * Verifies a user's ownership of a domain at the DNS level. Note that this is
   * distinct from checking if the user has OWNER status within IRDB.
   * (domains.verify)
   *
   * @param string $name Required. The domain to verify.
   * @param VerifyDomainRequest $postBody
   * @param array $optParams Optional parameters.
   * @return VerifyDomainResponse
   * @throws \Google\Service\Exception
   */
  public function verify($name, VerifyDomainRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('verify', [$params], VerifyDomainResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Domains::class, 'Google_Service_PostmasterTools_Resource_Domains');
