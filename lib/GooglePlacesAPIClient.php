<?php

namespace Felds\GooglePlacesAPIClient;

use Guzzle\Common\Collection;
use Guzzle\Service\Client as BaseClient;
use Guzzle\Service\Description\ServiceDescription;

class GooglePlacesAPIClient extends BaseClient
{
    public static function factory($config = array())
    {
        // Provide a hash of default client configuration options
        $default = array(
            'base_url' => 'https://maps.googleapis.com/maps/api/place',
        );

        // The following values are required when creating the client
        $required = array(
            'key',
        );

        // Merge in default settings and validate the config
        $config = Collection::fromConfig($config, $default, $required);

        // Create a new Google Places API Client
        $client = new self($config->get('base_url'), $config);
        $client->setDefaultOption('query',  array(
            'key' => $config['key'],
        ));

        // Set the service description
        $client->setDescription(ServiceDescription::factory(__DIR__ . '/../config/service_description.php'));

        return $client;
    }
}
