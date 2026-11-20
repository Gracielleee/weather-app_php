<?php

use Gracielle\WeatherAppPhp\WeatherService;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/weatherArt.php';

//handle null city
if ($argc < 2) {
    echo "Correct Usage: php weather.php [city_here] \n";
    echo "Example: php weather.php Manila \n";
    exit(1);
};

//call API with input
$weatherService = new WeatherService();
$city = $argv['1'];
$weather = $weatherService->getWeatherFromCity($city);

$weatherArt = getWeatherArt($weather['condition']);

//print output
echo "Getting weather for $city... \n";
echo "\n";
echo "City: " . $city . "\n";
echo "Temperature: " . $weather['temp_c'] . "°C \n";
echo "Condition: " . $weather['condition'] . "\n";
echo "$weatherArt \n";
echo "Humidity: " . $weather['humidity'] . "% \n";
echo "Chance of rain: " . $weather['chance_of_rain'] . "% \n";

//matches conditions to weather art for display
function getWeatherArt(string $condition): string
{
    $conditionLower = strtolower($condition);
    $ascii = "";
    global $weatherArt;

    if (str_contains($conditionLower, 'rain')) {
        $ascii = $weatherArt['rain'];
    } else if (str_contains($conditionLower, 'clear') || str_contains($conditionLower, 'sunny')) {
        $ascii = $weatherArt['clear'];
    } else if (str_contains($conditionLower, 'cloud') || str_contains($conditionLower, 'overcast')) {
        $ascii = $weatherArt['cloud'];
    } else if (str_contains($conditionLower, 'snow')) {
        $ascii = $weatherArt['snow'];
    }

    return $ascii;
}
