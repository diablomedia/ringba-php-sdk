<?php
/**
 * ExportCallLogsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ringba API Documentation
 *
 * Ringba’s APIs allow you to interact, gather information, and make dynamic changes in real-time. All functions found within the Ringba portal are also available programmatically through our API.   If this is your first time using our API, please read the __Getting Started__ section below.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ringba\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ringba\ApiException;
use Ringba\Configuration;
use Ringba\HeaderSelector;
use Ringba\ObjectSerializer;

/**
 * ExportCallLogsApi Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportCallLogsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation exportCSVByJobId
     *
     * Export CSV By Job Id
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  string $cSVJobId  (required)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ringba\Model\ExportByJobId
     */
    public function exportCSVByJobId($authorization, $accountId, $cSVJobId)
    {
        list($response) = $this->exportCSVByJobIdWithHttpInfo($authorization, $accountId, $cSVJobId);
        return $response;
    }

    /**
     * Operation exportCSVByJobIdWithHttpInfo
     *
     * Export CSV By Job Id
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  string $cSVJobId  (required)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ringba\Model\ExportByJobId, HTTP status code, HTTP response headers (array of strings)
     */
    public function exportCSVByJobIdWithHttpInfo($authorization, $accountId, $cSVJobId)
    {
        $request = $this->exportCSVByJobIdRequest($authorization, $accountId, $cSVJobId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ringba\Model\ExportByJobId' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ringba\Model\ExportByJobId' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ringba\Model\ExportByJobId', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ringba\Model\ExportByJobId';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ringba\Model\ExportByJobId',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation exportCSVByJobIdAsync
     *
     * Export CSV By Job Id
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  string $cSVJobId  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportCSVByJobIdAsync($authorization, $accountId, $cSVJobId)
    {
        return $this->exportCSVByJobIdAsyncWithHttpInfo($authorization, $accountId, $cSVJobId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exportCSVByJobIdAsyncWithHttpInfo
     *
     * Export CSV By Job Id
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  string $cSVJobId  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportCSVByJobIdAsyncWithHttpInfo($authorization, $accountId, $cSVJobId)
    {
        $returnType = '\Ringba\Model\ExportByJobId';
        $request = $this->exportCSVByJobIdRequest($authorization, $accountId, $cSVJobId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'exportCSVByJobId'
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  string $cSVJobId  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function exportCSVByJobIdRequest($authorization, $accountId, $cSVJobId)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling exportCSVByJobId'
            );
        }
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling exportCSVByJobId'
            );
        }
        // verify the required parameter 'cSVJobId' is set
        if ($cSVJobId === null || (is_array($cSVJobId) && count($cSVJobId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cSVJobId when calling exportCSVByJobId'
            );
        }

        $resourcePath = '/{accountId}/calllogs/export/{CSVJobId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($accountId !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($accountId),
                $resourcePath
            );
        }
        // path params
        if ($cSVJobId !== null) {
            $resourcePath = str_replace(
                '{' . 'CSVJobId' . '}',
                ObjectSerializer::toPathValue($cSVJobId),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["http://example.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation exportCallLogCSV
     *
     * Export Call Log - CSV
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  \Ringba\Model\ExportCallLogCSVRequest $exportCallLogCSVRequest  (required)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ringba\Model\ExportCallLogCSV
     */
    public function exportCallLogCSV($authorization, $accountId, $exportCallLogCSVRequest)
    {
        list($response) = $this->exportCallLogCSVWithHttpInfo($authorization, $accountId, $exportCallLogCSVRequest);
        return $response;
    }

    /**
     * Operation exportCallLogCSVWithHttpInfo
     *
     * Export Call Log - CSV
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  \Ringba\Model\ExportCallLogCSVRequest $exportCallLogCSVRequest  (required)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ringba\Model\ExportCallLogCSV, HTTP status code, HTTP response headers (array of strings)
     */
    public function exportCallLogCSVWithHttpInfo($authorization, $accountId, $exportCallLogCSVRequest)
    {
        $request = $this->exportCallLogCSVRequest($authorization, $accountId, $exportCallLogCSVRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ringba\Model\ExportCallLogCSV' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ringba\Model\ExportCallLogCSV' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ringba\Model\ExportCallLogCSV', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ringba\Model\ExportCallLogCSV';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ringba\Model\ExportCallLogCSV',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation exportCallLogCSVAsync
     *
     * Export Call Log - CSV
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  \Ringba\Model\ExportCallLogCSVRequest $exportCallLogCSVRequest  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportCallLogCSVAsync($authorization, $accountId, $exportCallLogCSVRequest)
    {
        return $this->exportCallLogCSVAsyncWithHttpInfo($authorization, $accountId, $exportCallLogCSVRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exportCallLogCSVAsyncWithHttpInfo
     *
     * Export Call Log - CSV
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  \Ringba\Model\ExportCallLogCSVRequest $exportCallLogCSVRequest  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportCallLogCSVAsyncWithHttpInfo($authorization, $accountId, $exportCallLogCSVRequest)
    {
        $returnType = '\Ringba\Model\ExportCallLogCSV';
        $request = $this->exportCallLogCSVRequest($authorization, $accountId, $exportCallLogCSVRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'exportCallLogCSV'
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: http://example.com
     *
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (required)
     * @param  string $accountId  (required)
     * @param  \Ringba\Model\ExportCallLogCSVRequest $exportCallLogCSVRequest  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function exportCallLogCSVRequest($authorization, $accountId, $exportCallLogCSVRequest)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling exportCallLogCSV'
            );
        }
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling exportCallLogCSV'
            );
        }
        // verify the required parameter 'exportCallLogCSVRequest' is set
        if ($exportCallLogCSVRequest === null || (is_array($exportCallLogCSVRequest) && count($exportCallLogCSVRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $exportCallLogCSVRequest when calling exportCallLogCSV'
            );
        }

        $resourcePath = '/{accountId}/calllogs/export/csv';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($accountId !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($accountId),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=utf-8'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($exportCallLogCSVRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($exportCallLogCSVRequest));
            } else {
                $httpBody = $exportCallLogCSVRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["http://example.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}