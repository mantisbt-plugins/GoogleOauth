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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1TraceConfig extends \Google\Model
{
  /**
   * Exporter unspecified
   */
  public const EXPORTER_EXPORTER_UNSPECIFIED = 'EXPORTER_UNSPECIFIED';
  /**
   * Exports events to Jaeger. Compatible with OpenCensus protocol.
   */
  public const EXPORTER_JAEGER = 'JAEGER';
  /**
   * Exports events to Cloud Trace. Compatible with OpenCensus protocol.
   */
  public const EXPORTER_CLOUD_TRACE = 'CLOUD_TRACE';
  /**
   * OpenTelemetry Collector. Compatible with OpenTelemetry protocol.
   */
  public const EXPORTER_OPEN_TELEMETRY_COLLECTOR = 'OPEN_TELEMETRY_COLLECTOR';
  /**
   * Exports events to Cloud Trace. Compatible with OpenTelemetry protocol.
   */
  public const EXPORTER_OPEN_TELEMETRY_CLOUD_TRACE = 'OPEN_TELEMETRY_CLOUD_TRACE';
  /**
   * Unspecified. Behavior is identical to NONE.
   */
  public const OTEL_COLLECTOR_SECURITY_SCHEME_OTEL_COLLECTOR_SECURITY_SCHEME_UNSPECIFIED = 'OTEL_COLLECTOR_SECURITY_SCHEME_UNSPECIFIED';
  /**
   * Default. Unauthenticated OTLP/HTTP export. Preserves today's behavior byte-
   * for-byte for existing configurations.
   */
  public const OTEL_COLLECTOR_SECURITY_SCHEME_NONE = 'NONE';
  /**
   * Mutual TLS via customer PKI. Cert material is stored in Apigee
   * Keystores/Truststores and referenced by resource ID in `mtls_config` (same
   * mechanism as TargetServer.tls_info).
   */
  public const OTEL_COLLECTOR_SECURITY_SCHEME_MTLS = 'MTLS';
  /**
   * Semantics unspecified. Defaults to LEGACY.
   */
  public const SPAN_SEMANTICS_SPAN_SEMANTICS_UNSPECIFIED = 'SPAN_SEMANTICS_UNSPECIFIED';
  /**
   * Uses Apigee legacy span and attribute names.
   */
  public const SPAN_SEMANTICS_LEGACY = 'LEGACY';
  /**
   * Uses OpenTelemetry semantic-convention-aligned span and attribute names.
   */
  public const SPAN_SEMANTICS_OTEL = 'OTEL';
  /**
   * Protocol unspecified. Defaults to OPEN_CENSUS.
   */
  public const TRACE_PROTOCOL_TRACE_PROTOCOL_UNSPECIFIED = 'TRACE_PROTOCOL_UNSPECIFIED';
  /**
   * Uses OpenCensus protocol.
   */
  public const TRACE_PROTOCOL_OPEN_CENSUS = 'OPEN_CENSUS';
  /**
   * Uses OpenTelemetry Protocol (OTLP).
   */
  public const TRACE_PROTOCOL_OTLP = 'OTLP';
  /**
   * Required. Endpoint of the exporter.
   *
   * @var string
   */
  public $endpoint;
  /**
   * Required. Exporter that is used to view the distributed trace captured
   * using the chosen trace protocol. An exporter sends traces to any backend
   * that is capable of consuming them. Recorded spans can be exported by
   * registered exporters.
   *
   * @var string
   */
  public $exporter;
  protected $mtlsConfigType = GoogleCloudApigeeV1TraceConfigOtelMtlsConfig::class;
  protected $mtlsConfigDataType = '';
  /**
   * Optional. The security scheme for the OTel Collector endpoint. Defaults to
   * NONE (unauthenticated OTLP/HTTP), preserving today's behavior for existing
   * configurations. Only applicable when `exporter` ==
   * OPEN_TELEMETRY_COLLECTOR.
   *
   * @var string
   */
  public $otelCollectorSecurityScheme;
  protected $samplingConfigType = GoogleCloudApigeeV1TraceSamplingConfig::class;
  protected $samplingConfigDataType = '';
  /**
   * Optional. The span semantics to use. Configuration Requirements (if
   * span_semantics is OTEL): - trace_protocol must be OTLP.
   *
   * @var string
   */
  public $spanSemantics;
  /**
   * Optional. The trace protocol to use. Configuration Requirements (if
   * trace_protocol is OTLP): - Allowed Exporters: CLOUD_TRACE or
   * OPEN_TELEMETRY_COLLECTOR. - If Exporter is OPEN_TELEMETRY_COLLECTOR: -
   * endpoint refers to a valid OTLP collector URL. - If Exporter is
   * CLOUD_TRACE: - endpoint refers to a valid project ID.
   *
   * @var string
   */
  public $traceProtocol;

  /**
   * Required. Endpoint of the exporter.
   *
   * @param string $endpoint
   */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /**
   * @return string
   */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /**
   * Required. Exporter that is used to view the distributed trace captured
   * using the chosen trace protocol. An exporter sends traces to any backend
   * that is capable of consuming them. Recorded spans can be exported by
   * registered exporters.
   *
   * Accepted values: EXPORTER_UNSPECIFIED, JAEGER, CLOUD_TRACE,
   * OPEN_TELEMETRY_COLLECTOR, OPEN_TELEMETRY_CLOUD_TRACE
   *
   * @param self::EXPORTER_* $exporter
   */
  public function setExporter($exporter)
  {
    $this->exporter = $exporter;
  }
  /**
   * @return self::EXPORTER_*
   */
  public function getExporter()
  {
    return $this->exporter;
  }
  /**
   * Optional. mTLS configuration for the OTel Collector endpoint. Required when
   * `otel_collector_security_scheme` == MTLS; must not be set otherwise.
   *
   * @param GoogleCloudApigeeV1TraceConfigOtelMtlsConfig $mtlsConfig
   */
  public function setMtlsConfig(GoogleCloudApigeeV1TraceConfigOtelMtlsConfig $mtlsConfig)
  {
    $this->mtlsConfig = $mtlsConfig;
  }
  /**
   * @return GoogleCloudApigeeV1TraceConfigOtelMtlsConfig
   */
  public function getMtlsConfig()
  {
    return $this->mtlsConfig;
  }
  /**
   * Optional. The security scheme for the OTel Collector endpoint. Defaults to
   * NONE (unauthenticated OTLP/HTTP), preserving today's behavior for existing
   * configurations. Only applicable when `exporter` ==
   * OPEN_TELEMETRY_COLLECTOR.
   *
   * Accepted values: OTEL_COLLECTOR_SECURITY_SCHEME_UNSPECIFIED, NONE, MTLS
   *
   * @param self::OTEL_COLLECTOR_SECURITY_SCHEME_* $otelCollectorSecurityScheme
   */
  public function setOtelCollectorSecurityScheme($otelCollectorSecurityScheme)
  {
    $this->otelCollectorSecurityScheme = $otelCollectorSecurityScheme;
  }
  /**
   * @return self::OTEL_COLLECTOR_SECURITY_SCHEME_*
   */
  public function getOtelCollectorSecurityScheme()
  {
    return $this->otelCollectorSecurityScheme;
  }
  /**
   * Distributed trace configuration for all API proxies in an environment. You
   * can also override the configuration for a specific API proxy using the
   * distributed trace configuration overrides API.
   *
   * @param GoogleCloudApigeeV1TraceSamplingConfig $samplingConfig
   */
  public function setSamplingConfig(GoogleCloudApigeeV1TraceSamplingConfig $samplingConfig)
  {
    $this->samplingConfig = $samplingConfig;
  }
  /**
   * @return GoogleCloudApigeeV1TraceSamplingConfig
   */
  public function getSamplingConfig()
  {
    return $this->samplingConfig;
  }
  /**
   * Optional. The span semantics to use. Configuration Requirements (if
   * span_semantics is OTEL): - trace_protocol must be OTLP.
   *
   * Accepted values: SPAN_SEMANTICS_UNSPECIFIED, LEGACY, OTEL
   *
   * @param self::SPAN_SEMANTICS_* $spanSemantics
   */
  public function setSpanSemantics($spanSemantics)
  {
    $this->spanSemantics = $spanSemantics;
  }
  /**
   * @return self::SPAN_SEMANTICS_*
   */
  public function getSpanSemantics()
  {
    return $this->spanSemantics;
  }
  /**
   * Optional. The trace protocol to use. Configuration Requirements (if
   * trace_protocol is OTLP): - Allowed Exporters: CLOUD_TRACE or
   * OPEN_TELEMETRY_COLLECTOR. - If Exporter is OPEN_TELEMETRY_COLLECTOR: -
   * endpoint refers to a valid OTLP collector URL. - If Exporter is
   * CLOUD_TRACE: - endpoint refers to a valid project ID.
   *
   * Accepted values: TRACE_PROTOCOL_UNSPECIFIED, OPEN_CENSUS, OTLP
   *
   * @param self::TRACE_PROTOCOL_* $traceProtocol
   */
  public function setTraceProtocol($traceProtocol)
  {
    $this->traceProtocol = $traceProtocol;
  }
  /**
   * @return self::TRACE_PROTOCOL_*
   */
  public function getTraceProtocol()
  {
    return $this->traceProtocol;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1TraceConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1TraceConfig');
