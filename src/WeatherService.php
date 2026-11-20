<?php

namespace Gracielle\WeatherAppPhp;
use GuzzleHttp\Client;

class WeatherService
{
    private Client $client;
    private readonly string $apiKey;

    public function __construct(
        private readonly string $apiUrl = 'https://api.weatherapi.com/v1/current.json'
    ) {
        $this->client = new Client();

        $env = parse_ini_file(dirname(__DIR__) . '/.env');
        $key = $env['WEATHER_API_KEY'] ?? null;

        if (!$key || $key === '') {
            throw new \RuntimeException('WEATHER_API_KEY missing in .env');
        }

        $this->apiKey = $key;
    }

    public function getWeatherFromCity(string $city): array {
        $response = $this->client->get($this->apiUrl, [
            'query' => [
                'q' => $city,
                'key' => $this->apiKey,
                'aqi' => 'no',
            ]
        ]);

        $weatherData = json_decode($response->getBody()->getContents(), true);

        return [
            'name' => $weatherData['location']['name'],
            'region' => $weatherData['location']['region'],
            'country' => $weatherData['location']['country'],
            'timezone' => $weatherData['location']['tz_id'],
            'localtime' => $weatherData['location']['localtime'],

            'temp_c' => $weatherData['current']['temp_c'],
            'condition' => $weatherData['current']['condition']['text'],
            'wind_kph' => $weatherData['current']['wind_kph'],
            'humidity' => $weatherData['current']['humidity'],
            'precip_mm' => $weatherData['current']['precip_mm'],
            'chance_of_rain' => $weatherData['current']['chance_of_rain'],
        ];
    }
}