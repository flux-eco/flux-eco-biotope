<?php

enum EnvName: string
{
    case FLUX_ECO_HTTP_SYNAPSE_PORT = 'FLUX_ECO_HTTP_SYNAPSE_PORT';
    case FLUX_ECO_HTTP_SYNAPSE_WORKER_NUM = 'FLUX_ECO_HTTP_SYNAPSE_WORKER_NUM';
    case FLUX_ECO_HTTP_SYNAPSE_TASK_WORKER_NUM = 'FLUX_ECO_HTTP_SYNAPSE_TASK_WORKER_NUM';
    case FLUX_ECO_HTTP_SYNAPSE_BACKLOG = 'FLUX_ECO_HTTP_SYNAPSE_BACKLOG';
    case FLUX_ECO_HTTP_SYNAPSE_AUTOLOAD_FILE_PATH = 'FLUX_ECO_HTTP_SYNAPSE_AUTOLOAD_FILE_PATH';
    case FLUX_ECO_HTTP_SYNAPSE_HTTP_API_FQCN = 'FLUX_ECO_HTTP_SYNAPSE_HTTP_API_FQCN';
    case FLUX_ECO_HTTP_SYNAPSE_LOG_FILE_PATH_NAME = 'FLUX_ECO_HTTP_SYNAPSE_LOG_FILE_PATH_NAME';

    public function toConfigValue() : string|int
    {
        return getenv($this->value);
    }
}