<?php

namespace App\Providers;

use GuzzleHttp\Client;
use NotificationChannels\Messagebird\MessagebirdClient;
use NotificationChannels\Messagebird\MessagebirdChannel;
use NotificationChannels\Messagebird\Exceptions\InvalidConfiguration;
 


public function boot()
{
          // Override Messagebird service provider to instruct Guzzle not to verify their API SSL certificate
        $this->app->when(MessagebirdChannel::class)
            ->needs(MessagebirdClient::class)
           ->give(function () {
                $config = config('services.messagebird');

                if (is_null($config)) {
                    throw InvalidConfiguration::configurationNotSet();
               }

                return new MessagebirdClient(new Client(['verify' => false]), $config['access_key']);
                });
}