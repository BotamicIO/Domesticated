<?php

namespace DraperStudio\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

trait InformationalTrait
{
    public function statusContinue($message = 'Continue')
    {
        return $this->respond($message, StatusCode::CONTINUING);
    }

    public function statusSwitchingProtocols($message = 'Switching Protocols')
    {
        return $this->respond($message, StatusCode::SWITCHING_PROTOCOLS);
    }

    public function statusProcessing($message = 'Processing (WebDAV) (RFC 2518)')
    {
        return $this->respond($message, StatusCode::PROCESSING);
    }

    public function statusCheckpoint($message = 'Checkpoint')
    {
        return $this->respond($message, 103);
    }

    public function statusRequestUriTooLong($message = 'Request-URI too long')
    {
        return $this->respond($message, 122);
    }
}
