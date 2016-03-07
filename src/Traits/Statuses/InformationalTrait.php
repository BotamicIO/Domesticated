<?php

/*
 * This file is part of Domesticated.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

/**
 * Class InformationalTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait InformationalTrait
{
    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusContinue($message = 'Continue')
    {
        return $this->respond($message, StatusCode::CONTINUING);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusSwitchingProtocols($message = 'Switching Protocols')
    {
        return $this->respond($message, StatusCode::SWITCHING_PROTOCOLS);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusProcessing($message = 'Processing (WebDAV) (RFC 2518)')
    {
        return $this->respond($message, StatusCode::PROCESSING);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusCheckpoint($message = 'Checkpoint')
    {
        return $this->respond($message, 103);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusRequestUriTooLong($message = 'Request-URI too long')
    {
        return $this->respond($message, 122);
    }
}
