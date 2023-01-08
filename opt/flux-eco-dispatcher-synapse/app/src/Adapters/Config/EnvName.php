<?php

namespace FluxEco\DispatcherSynapse\Adapters\Config;

enum EnvName: string
{
    case FLUX_ECO_DISPATCHER_SYNAPSE_CONFIG_DIRECTORY_PATH = 'FLUX_ECO_DISPATCHER_SYNAPSE_CONFIG_DIRECTORY_PATH';
    case FLUX_ECO_DISPATCHER_SYNAPSE_FROM_PROTOCOL = 'FLUX_ECO_DISPATCHER_SYNAPSE_FROM_PROTOCOL';
    case FLUX_ECO_DISPATCHER_SYNAPSE_FROM_HOST = 'FLUX_ECO_DISPATCHER_SYNAPSE_FROM_HOST';
    case FLUX_ECO_DISPATCHER_SYNAPSE_FROM_PORT = 'FLUX_ECO_DISPATCHER_SYNAPSE_FROM_PORT';


    case FLUX_ECO_MESSAGE_STREAM_ORBITAL_PROTOCOL = 'FLUX_ECO_MESSAGE_STREAM_ORBITAL_PROTOCOL';
    case FLUX_ECO_MESSAGE_STREAM_ORBITAL_HOST = 'FLUX_ECO_MESSAGE_STREAM_ORBITAL_HOST';
    case FLUX_ECO_MESSAGE_STREAM_ORBITAL_PORT = 'FLUX_ECO_MESSAGE_STREAM_ORBITAL_PORT';


    public function toConfigValue() : string|int
    {
        return getenv($this->value);
    }
}