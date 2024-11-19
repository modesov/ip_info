<?php

declare(strict_types=1);

namespace Modes\IpInfo;

use Symfony\Component\HttpClient\HttpClient;

class IpInfoApi
{
    private const API_URL = 'https://ipinfo.io/{IP}/geo';

    public function getIpInfo(string $ip): string
    {
        $httpClient = HttpClient::create();
        $url = str_replace('{IP}', $ip, self::API_URL);
        $result = $httpClient->request('GET', $url);

        if ($result->getStatusCode() !== 200) {
            return "Информация по ip: $ip не найдена";
        }

        return $result->getContent();
    }
}
