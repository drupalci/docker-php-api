<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class SystemInfo extends \Jane\OpenApiRuntime\Client\BaseEndpoint
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/info';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null)
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\SystemInfoInternalServerErrorException
     *
     * @return null|\Docker\API\Model\SystemInfo
     */
    public function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\SystemInfo', 'json');
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\SystemInfoInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
}
