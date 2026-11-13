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

namespace Google\Service\Aiplatform;

class GenaiVertexV1CodeMenderAgentConfig extends \Google\Model
{
  protected $findRequestType = GenaiVertexV1CodeMenderAgentConfigFindRequest::class;
  protected $findRequestDataType = '';
  protected $fixRequestType = GenaiVertexV1CodeMenderAgentConfigFixRequest::class;
  protected $fixRequestDataType = '';
  /**
   * The name of the model to use for the CodeMender agent. One CodeMender
   * session will only use one model.
   *
   * @var string
   */
  public $model;
  protected $sessionConfigType = GenaiVertexV1CodeMenderAgentConfigSessionConfig::class;
  protected $sessionConfigDataType = '';
  /**
   * Parameter for grouping multiple interactions that belong to the same
   * CodeMender session.
   *
   * @var string
   */
  public $sessionId;

  /**
   * Parameters for finding vulnerabilities.
   *
   * @param GenaiVertexV1CodeMenderAgentConfigFindRequest $findRequest
   */
  public function setFindRequest(GenaiVertexV1CodeMenderAgentConfigFindRequest $findRequest)
  {
    $this->findRequest = $findRequest;
  }
  /**
   * @return GenaiVertexV1CodeMenderAgentConfigFindRequest
   */
  public function getFindRequest()
  {
    return $this->findRequest;
  }
  /**
   * Parameters for fixing vulnerabilities.
   *
   * @param GenaiVertexV1CodeMenderAgentConfigFixRequest $fixRequest
   */
  public function setFixRequest(GenaiVertexV1CodeMenderAgentConfigFixRequest $fixRequest)
  {
    $this->fixRequest = $fixRequest;
  }
  /**
   * @return GenaiVertexV1CodeMenderAgentConfigFixRequest
   */
  public function getFixRequest()
  {
    return $this->fixRequest;
  }
  /**
   * The name of the model to use for the CodeMender agent. One CodeMender
   * session will only use one model.
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
  /**
   * Optional session-specific configurations to override default agent
   * behavior.
   *
   * @param GenaiVertexV1CodeMenderAgentConfigSessionConfig $sessionConfig
   */
  public function setSessionConfig(GenaiVertexV1CodeMenderAgentConfigSessionConfig $sessionConfig)
  {
    $this->sessionConfig = $sessionConfig;
  }
  /**
   * @return GenaiVertexV1CodeMenderAgentConfigSessionConfig
   */
  public function getSessionConfig()
  {
    return $this->sessionConfig;
  }
  /**
   * Parameter for grouping multiple interactions that belong to the same
   * CodeMender session.
   *
   * @param string $sessionId
   */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /**
   * @return string
   */
  public function getSessionId()
  {
    return $this->sessionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1CodeMenderAgentConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1CodeMenderAgentConfig');
