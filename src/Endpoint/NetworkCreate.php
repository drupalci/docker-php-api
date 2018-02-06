<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class NetworkCreate extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    /**
     * @param \Docker\API\Model\NetworksCreatePostBody $networkConfig Network configuration
     */
    public function __construct(\Docker\API\Model\NetworksCreatePostBody $networkConfig)
    {
        $this->body = $networkConfig;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/networks/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return $this->getSerializedBody($serializer);
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\NetworkCreateForbiddenException
     * @throws \Docker\API\Exception\NetworkCreateNotFoundException
     * @throws \Docker\API\Exception\NetworkCreateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\NetworksCreatePostResponse201
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\NetworksCreatePostResponse201', 'json');
        }
        if (403 === $status) {
            throw new \Docker\API\Exception\NetworkCreateForbiddenException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\NetworkCreateNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\NetworkCreateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
}