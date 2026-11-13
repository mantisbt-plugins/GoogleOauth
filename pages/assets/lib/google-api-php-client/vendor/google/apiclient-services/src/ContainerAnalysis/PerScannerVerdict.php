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

namespace Google\Service\ContainerAnalysis;

class PerScannerVerdict extends \Google\Model
{
  protected $maliciousContentLlmResultType = MaliciousContentLLMResult::class;
  protected $maliciousContentLlmResultDataType = '';
  protected $maliciousContentStaticResultType = MaliciousContentStaticResult::class;
  protected $maliciousContentStaticResultDataType = '';
  protected $malwareScanType = MalwareScanResult::class;
  protected $malwareScanDataType = '';
  protected $workspacePolicyType = WorkspacePolicyResult::class;
  protected $workspacePolicyDataType = '';

  /**
   * Malicious Content LLM scan result.
   *
   * @param MaliciousContentLLMResult $maliciousContentLlmResult
   */
  public function setMaliciousContentLlmResult(MaliciousContentLLMResult $maliciousContentLlmResult)
  {
    $this->maliciousContentLlmResult = $maliciousContentLlmResult;
  }
  /**
   * @return MaliciousContentLLMResult
   */
  public function getMaliciousContentLlmResult()
  {
    return $this->maliciousContentLlmResult;
  }
  /**
   * Malicious Content Static scan result.
   *
   * @param MaliciousContentStaticResult $maliciousContentStaticResult
   */
  public function setMaliciousContentStaticResult(MaliciousContentStaticResult $maliciousContentStaticResult)
  {
    $this->maliciousContentStaticResult = $maliciousContentStaticResult;
  }
  /**
   * @return MaliciousContentStaticResult
   */
  public function getMaliciousContentStaticResult()
  {
    return $this->maliciousContentStaticResult;
  }
  /**
   * Malware scan result.
   *
   * @param MalwareScanResult $malwareScan
   */
  public function setMalwareScan(MalwareScanResult $malwareScan)
  {
    $this->malwareScan = $malwareScan;
  }
  /**
   * @return MalwareScanResult
   */
  public function getMalwareScan()
  {
    return $this->malwareScan;
  }
  /**
   * Workspace Policy scan result.
   *
   * @param WorkspacePolicyResult $workspacePolicy
   */
  public function setWorkspacePolicy(WorkspacePolicyResult $workspacePolicy)
  {
    $this->workspacePolicy = $workspacePolicy;
  }
  /**
   * @return WorkspacePolicyResult
   */
  public function getWorkspacePolicy()
  {
    return $this->workspacePolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PerScannerVerdict::class, 'Google_Service_ContainerAnalysis_PerScannerVerdict');
