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
 * Ringba’s APIs allow you to interact, gather information, and make dynamic changes in real-time. All functions found within the Ringba portal are also available programmatically through our API.  If this is your first time using our API, please read the __Getting Started__ section below.
 *
 * The version of the OpenAPI document: 1.0.0
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
     * Operation accountIdCampaignsCampaignIdIVRTreeDelete
     *
     * Remove IVR Tree from a Campaign
     *
     * @param  string $accountId accountId (required)
     * @param  string $campaignId campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function accountIdCampaignsCampaignIdIVRTreeDelete($accountId, $campaignId, $authorization = null)
    {
        list($response) = $this->accountIdCampaignsCampaignIdIVRTreeDeleteWithHttpInfo($accountId, $campaignId, $authorization);
        return $response;
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreeDeleteWithHttpInfo
     *
     * Remove IVR Tree from a Campaign
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountIdCampaignsCampaignIdIVRTreeDeleteWithHttpInfo($accountId, $campaignId, $authorization = null)
    {
        $request = $this->accountIdCampaignsCampaignIdIVRTreeDeleteRequest($accountId, $campaignId, $authorization);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreeDeleteAsync
     *
     * Remove IVR Tree from a Campaign
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountIdCampaignsCampaignIdIVRTreeDeleteAsync($accountId, $campaignId, $authorization = null)
    {
        return $this->accountIdCampaignsCampaignIdIVRTreeDeleteAsyncWithHttpInfo($accountId, $campaignId, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreeDeleteAsyncWithHttpInfo
     *
     * Remove IVR Tree from a Campaign
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountIdCampaignsCampaignIdIVRTreeDeleteAsyncWithHttpInfo($accountId, $campaignId, $authorization = null)
    {
        $returnType = 'object';
        $request = $this->accountIdCampaignsCampaignIdIVRTreeDeleteRequest($accountId, $campaignId, $authorization);

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
     * Create request for operation 'accountIdCampaignsCampaignIdIVRTreeDelete'
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountIdCampaignsCampaignIdIVRTreeDeleteRequest($accountId, $campaignId, $authorization = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling accountIdCampaignsCampaignIdIVRTreeDelete'
            );
        }
        // verify the required parameter 'campaignId' is set
        if ($campaignId === null || (is_array($campaignId) && count($campaignId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaignId when calling accountIdCampaignsCampaignIdIVRTreeDelete'
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreePost
     *
     * Add IVR Tree to a Campaign
     *
     * @param  string $accountId accountId (required)
     * @param  string $campaignId campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     * @param  object $body body (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function accountIdCampaignsCampaignIdIVRTreePost($accountId, $campaignId, $authorization = null, $body = null)
    {
        list($response) = $this->accountIdCampaignsCampaignIdIVRTreePostWithHttpInfo($accountId, $campaignId, $authorization, $body);
        return $response;
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreePostWithHttpInfo
     *
     * Add IVR Tree to a Campaign
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     * @param  object $body (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountIdCampaignsCampaignIdIVRTreePostWithHttpInfo($accountId, $campaignId, $authorization = null, $body = null)
    {
        $request = $this->accountIdCampaignsCampaignIdIVRTreePostRequest($accountId, $campaignId, $authorization, $body);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreePostAsync
     *
     * Add IVR Tree to a Campaign
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     * @param  object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountIdCampaignsCampaignIdIVRTreePostAsync($accountId, $campaignId, $authorization = null, $body = null)
    {
        return $this->accountIdCampaignsCampaignIdIVRTreePostAsyncWithHttpInfo($accountId, $campaignId, $authorization, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountIdCampaignsCampaignIdIVRTreePostAsyncWithHttpInfo
     *
     * Add IVR Tree to a Campaign
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     * @param  object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountIdCampaignsCampaignIdIVRTreePostAsyncWithHttpInfo($accountId, $campaignId, $authorization = null, $body = null)
    {
        $returnType = 'object';
        $request = $this->accountIdCampaignsCampaignIdIVRTreePostRequest($accountId, $campaignId, $authorization, $body);

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
     * Create request for operation 'accountIdCampaignsCampaignIdIVRTreePost'
     *
     * @param  string $accountId (required)
     * @param  string $campaignId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     * @param  object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountIdCampaignsCampaignIdIVRTreePostRequest($accountId, $campaignId, $authorization = null, $body = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling accountIdCampaignsCampaignIdIVRTreePost'
            );
        }
        // verify the required parameter 'campaignId' is set
        if ($campaignId === null || (is_array($campaignId) && count($campaignId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaignId when calling accountIdCampaignsCampaignIdIVRTreePost'
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation accountIdIvrtreeGet
     *
     * Get IVR Trees Associated with Account
     *
     * @param  string $accountId accountId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function accountIdIvrtreeGet($accountId, $authorization = null)
    {
        $this->accountIdIvrtreeGetWithHttpInfo($accountId, $authorization);
    }

    /**
     * Operation accountIdIvrtreeGetWithHttpInfo
     *
     * Get IVR Trees Associated with Account
     *
     * @param  string $accountId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \Ringba\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountIdIvrtreeGetWithHttpInfo($accountId, $authorization = null)
    {
        $request = $this->accountIdIvrtreeGetRequest($accountId, $authorization);

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
     * Operation accountIdIvrtreeGetAsync
     *
     * Get IVR Trees Associated with Account
     *
     * @param  string $accountId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountIdIvrtreeGetAsync($accountId, $authorization = null)
    {
        return $this->accountIdIvrtreeGetAsyncWithHttpInfo($accountId, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountIdIvrtreeGetAsyncWithHttpInfo
     *
     * Get IVR Trees Associated with Account
     *
     * @param  string $accountId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountIdIvrtreeGetAsyncWithHttpInfo($accountId, $authorization = null)
    {
        $returnType = '';
        $request = $this->accountIdIvrtreeGetRequest($accountId, $authorization);

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
     * Create request for operation 'accountIdIvrtreeGet'
     *
     * @param  string $accountId (required)
     * @param  string $authorization Find your [apiToken](#get-or-create-api-token) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function accountIdIvrtreeGetRequest($accountId, $authorization = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling accountIdIvrtreeGet'
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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