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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2SandboxTemplate extends \Google\Collection
{
  protected $collection_key = 'volumeMounts';
  /**
   * Optional. Arguments to the entrypoint. The docker image's CMD is used if
   * this is not provided.
   *
   * @var string[]
   */
  public $args;
  /**
   * Optional. Entrypoint array. Not executed within a shell. The docker image's
   * ENTRYPOINT is used if this is not provided.
   *
   * @var string[]
   */
  public $command;
  protected $envType = GoogleCloudRunV2EnvVar::class;
  protected $envDataType = 'array';
  /**
   * Required. Name of the container image in Dockerhub or Artifact Registry. If
   * the host is not provided, Dockerhub is assumed.
   *
   * @var string
   */
  public $image;
  /**
   * Required. Name of the sandbox specified as a DNS_LABEL (RFC 1123).
   *
   * @var string
   */
  public $name;
  protected $volumeMountsType = GoogleCloudRunV2VolumeMount::class;
  protected $volumeMountsDataType = 'array';
  /**
   * Optional. Container's working directory. If not specified, the container
   * runtime's default will be used, which might be configured in the container
   * image.
   *
   * @var string
   */
  public $workingDir;

  /**
   * Optional. Arguments to the entrypoint. The docker image's CMD is used if
   * this is not provided.
   *
   * @param string[] $args
   */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /**
   * @return string[]
   */
  public function getArgs()
  {
    return $this->args;
  }
  /**
   * Optional. Entrypoint array. Not executed within a shell. The docker image's
   * ENTRYPOINT is used if this is not provided.
   *
   * @param string[] $command
   */
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /**
   * @return string[]
   */
  public function getCommand()
  {
    return $this->command;
  }
  /**
   * Optional. List of environment variables to set in the sandbox.
   *
   * @param GoogleCloudRunV2EnvVar[] $env
   */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /**
   * @return GoogleCloudRunV2EnvVar[]
   */
  public function getEnv()
  {
    return $this->env;
  }
  /**
   * Required. Name of the container image in Dockerhub or Artifact Registry. If
   * the host is not provided, Dockerhub is assumed.
   *
   * @param string $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /**
   * @return string
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Required. Name of the sandbox specified as a DNS_LABEL (RFC 1123).
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
   * Optional. Volume to mount into the container's filesystem.
   *
   * @param GoogleCloudRunV2VolumeMount[] $volumeMounts
   */
  public function setVolumeMounts($volumeMounts)
  {
    $this->volumeMounts = $volumeMounts;
  }
  /**
   * @return GoogleCloudRunV2VolumeMount[]
   */
  public function getVolumeMounts()
  {
    return $this->volumeMounts;
  }
  /**
   * Optional. Container's working directory. If not specified, the container
   * runtime's default will be used, which might be configured in the container
   * image.
   *
   * @param string $workingDir
   */
  public function setWorkingDir($workingDir)
  {
    $this->workingDir = $workingDir;
  }
  /**
   * @return string
   */
  public function getWorkingDir()
  {
    return $this->workingDir;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2SandboxTemplate::class, 'Google_Service_CloudRun_GoogleCloudRunV2SandboxTemplate');
