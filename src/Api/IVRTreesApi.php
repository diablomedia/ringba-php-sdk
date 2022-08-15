<?php
/**
 * IVRTreesApi
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
 * IVRTreesApi Class Doc Comment
 *
 * @category Class
 * @package  Ringba
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IVRTreesApi
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
     * Operation addIVRTreetoaCampaign
     *
     * Add IVR Tree to a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  \Ringba\Model\AddIVRTreetoaCampaignRequest $addIVRTreetoaCampaignRequest  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ringba\Model\AddIVRTreetoaCampaign
     */
    public function addIVRTreetoaCampaign($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization = null)
    {
        list($response) = $this->addIVRTreetoaCampaignWithHttpInfo($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization);
        return $response;
    }

    /**
     * Operation addIVRTreetoaCampaignWithHttpInfo
     *
     * Add IVR Tree to a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  \Ringba\Model\AddIVRTreetoaCampaignRequest $addIVRTreetoaCampaignRequest  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ringba\Model\AddIVRTreetoaCampaign, HTTP status code, HTTP response headers (array of strings)
     */
    public function addIVRTreetoaCampaignWithHttpInfo($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization = null)
    {
        $request = $this->addIVRTreetoaCampaignRequest($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization);

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
                    if ('\Ringba\Model\AddIVRTreetoaCampaign' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ringba\Model\AddIVRTreetoaCampaign' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ringba\Model\AddIVRTreetoaCampaign', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ringba\Model\AddIVRTreetoaCampaign';
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
                        '\Ringba\Model\AddIVRTreetoaCampaign',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addIVRTreetoaCampaignAsync
     *
     * Add IVR Tree to a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  \Ringba\Model\AddIVRTreetoaCampaignRequest $addIVRTreetoaCampaignRequest  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addIVRTreetoaCampaignAsync($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization = null)
    {
        return $this->addIVRTreetoaCampaignAsyncWithHttpInfo($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addIVRTreetoaCampaignAsyncWithHttpInfo
     *
     * Add IVR Tree to a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  \Ringba\Model\AddIVRTreetoaCampaignRequest $addIVRTreetoaCampaignRequest  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addIVRTreetoaCampaignAsyncWithHttpInfo($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization = null)
    {
        $returnType = '\Ringba\Model\AddIVRTreetoaCampaign';
        $request = $this->addIVRTreetoaCampaignRequest($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization);

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
     * Create request for operation 'addIVRTreetoaCampaign'
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  \Ringba\Model\AddIVRTreetoaCampaignRequest $addIVRTreetoaCampaignRequest  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addIVRTreetoaCampaignRequest($accountId, $campaignId, $addIVRTreetoaCampaignRequest, $authorization = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling addIVRTreetoaCampaign'
            );
        }
        // verify the required parameter 'campaignId' is set
        if ($campaignId === null || (is_array($campaignId) && count($campaignId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaignId when calling addIVRTreetoaCampaign'
            );
        }
        // verify the required parameter 'addIVRTreetoaCampaignRequest' is set
        if ($addIVRTreetoaCampaignRequest === null || (is_array($addIVRTreetoaCampaignRequest) && count($addIVRTreetoaCampaignRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $addIVRTreetoaCampaignRequest when calling addIVRTreetoaCampaign'
            );
        }

        $resourcePath = '/{accountId}/campaigns/{campaignId}/IVRTree';
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
        if ($campaignId !== null) {
            $resourcePath = str_replace(
                '{' . 'campaignId' . '}',
                ObjectSerializer::toPathValue($campaignId),
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
        if (isset($addIVRTreetoaCampaignRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($addIVRTreetoaCampaignRequest));
            } else {
                $httpBody = $addIVRTreetoaCampaignRequest;
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

        $operationHosts = ["https://api.ringba.com/v2"];
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
     * Operation getIVRTreesAssociatedwithAccount
     *
     * Get IVR Trees Associated with Account
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getIVRTreesAssociatedwithAccount($accountId, $authorization = null)
    {
        $this->getIVRTreesAssociatedwithAccountWithHttpInfo($accountId, $authorization);
    }

    /**
     * Operation getIVRTreesAssociatedwithAccountWithHttpInfo
     *
     * Get IVR Trees Associated with Account
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIVRTreesAssociatedwithAccountWithHttpInfo($accountId, $authorization = null)
    {
        $request = $this->getIVRTreesAssociatedwithAccountRequest($accountId, $authorization);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getIVRTreesAssociatedwithAccountAsync
     *
     * Get IVR Trees Associated with Account
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIVRTreesAssociatedwithAccountAsync($accountId, $authorization = null)
    {
        return $this->getIVRTreesAssociatedwithAccountAsyncWithHttpInfo($accountId, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIVRTreesAssociatedwithAccountAsyncWithHttpInfo
     *
     * Get IVR Trees Associated with Account
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIVRTreesAssociatedwithAccountAsyncWithHttpInfo($accountId, $authorization = null)
    {
        $returnType = '';
        $request = $this->getIVRTreesAssociatedwithAccountRequest($accountId, $authorization);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'getIVRTreesAssociatedwithAccount'
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getIVRTreesAssociatedwithAccountRequest($accountId, $authorization = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling getIVRTreesAssociatedwithAccount'
            );
        }

        $resourcePath = '/{accountId}/ivrtree';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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

        $operationHosts = ["https://api.ringba.com/v2"];
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
     * Operation removeIVRTreefromaCampaign
     *
     * Remove IVR Tree from a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ringba\Model\RemoveIVRTreefromaCampaign
     */
    public function removeIVRTreefromaCampaign($accountId, $campaignId, $authorization = null)
    {
        list($response) = $this->removeIVRTreefromaCampaignWithHttpInfo($accountId, $campaignId, $authorization);
        return $response;
    }

    /**
     * Operation removeIVRTreefromaCampaignWithHttpInfo
     *
     * Remove IVR Tree from a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ringba\Model\RemoveIVRTreefromaCampaign, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeIVRTreefromaCampaignWithHttpInfo($accountId, $campaignId, $authorization = null)
    {
        $request = $this->removeIVRTreefromaCampaignRequest($accountId, $campaignId, $authorization);

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
                    if ('\Ringba\Model\RemoveIVRTreefromaCampaign' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ringba\Model\RemoveIVRTreefromaCampaign' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ringba\Model\RemoveIVRTreefromaCampaign', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ringba\Model\RemoveIVRTreefromaCampaign';
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
                        '\Ringba\Model\RemoveIVRTreefromaCampaign',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation removeIVRTreefromaCampaignAsync
     *
     * Remove IVR Tree from a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeIVRTreefromaCampaignAsync($accountId, $campaignId, $authorization = null)
    {
        return $this->removeIVRTreefromaCampaignAsyncWithHttpInfo($accountId, $campaignId, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeIVRTreefromaCampaignAsyncWithHttpInfo
     *
     * Remove IVR Tree from a Campaign
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeIVRTreefromaCampaignAsyncWithHttpInfo($accountId, $campaignId, $authorization = null)
    {
        $returnType = '\Ringba\Model\RemoveIVRTreefromaCampaign';
        $request = $this->removeIVRTreefromaCampaignRequest($accountId, $campaignId, $authorization);

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
     * Create request for operation 'removeIVRTreefromaCampaign'
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.ringba.com/v2
     *
     * @param  string $accountId  (required)
     * @param  string $campaignId  (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function removeIVRTreefromaCampaignRequest($accountId, $campaignId, $authorization = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling removeIVRTreefromaCampaign'
            );
        }
        // verify the required parameter 'campaignId' is set
        if ($campaignId === null || (is_array($campaignId) && count($campaignId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaignId when calling removeIVRTreefromaCampaign'
            );
        }

        $resourcePath = '/{accountId}/campaigns/{campaignId}/IVRTree';
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
        if ($campaignId !== null) {
            $resourcePath = str_replace(
                '{' . 'campaignId' . '}',
                ObjectSerializer::toPathValue($campaignId),
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

        $operationHosts = ["https://api.ringba.com/v2"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
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
