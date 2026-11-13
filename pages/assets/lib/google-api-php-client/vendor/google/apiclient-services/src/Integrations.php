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

namespace Google\Service;

use Google\Client;

/**
 * Service definition for Integrations (v2).
 *
 * <p>
</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/application-integration" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Integrations extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $projects_locations;
  public $projects_locations_integrations;
  public $projects_locations_integrations_executions;
  public $projects_locations_integrations_executions_taskExecutions;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the Integrations service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://integrations.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://integrations.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v2';
    $this->serviceName = 'integrations';

    $this->projects_locations = new Integrations\Resource\ProjectsLocations(
        $this,
        $this->serviceName,
        'locations',
        [
          'methods' => [
            'generateIntegration' => [
              'path' => 'v2/{+parent}:generateIntegration',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_locations_integrations = new Integrations\Resource\ProjectsLocationsIntegrations(
        $this,
        $this->serviceName,
        'integrations',
        [
          'methods' => [
            'execute' => [
              'path' => 'v2/{+parent}:execute',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'requestId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'triggerId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'generateIntegrationBranch' => [
              'path' => 'v2/{+parent}:generateIntegrationBranch',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateIntegrationDocument' => [
              'path' => 'v2/{+parent}:generateIntegrationDocument',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'generateJavascript' => [
              'path' => 'v2/{+parent}:generateJavascript',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'recommendTasks' => [
              'path' => 'v2/{+parent}:recommendTasks',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'schedule' => [
              'path' => 'v2/{+parent}:schedule',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'requestId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'scheduleTime' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'triggerId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_locations_integrations_executions = new Integrations\Resource\ProjectsLocationsIntegrationsExecutions(
        $this,
        $this->serviceName,
        'executions',
        [
          'methods' => [
            'list' => [
              'path' => 'v2/{+parent}/executions',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'filter' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'readMask' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'troubleshoot' => [
              'path' => 'v2/{+name}:troubleshoot',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_locations_integrations_executions_taskExecutions = new Integrations\Resource\ProjectsLocationsIntegrationsExecutionsTaskExecutions(
        $this,
        $this->serviceName,
        'taskExecutions',
        [
          'methods' => [
            'get' => [
              'path' => 'v2/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Integrations::class, 'Google_Service_Integrations');
