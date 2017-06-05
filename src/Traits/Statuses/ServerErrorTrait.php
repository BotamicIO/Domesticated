<?php

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

trait ServerErrorTrait
{
    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorInternalServerError($message = 'Internal Server Error')
    {
        return $this->error($message, StatusCode::INTERNAL_SERVER_ERROR);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNotImplemented($message = 'Not Implemented')
    {
        return $this->error($message, StatusCode::NOT_IMPLEMENTED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorBadGateway($message = 'Bad Gateway')
    {
        return $this->error($message, StatusCode::BAD_GATEWAY);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorServiceUnavailable($message = 'Service Unavailable')
    {
        return $this->error($message, StatusCode::SERVICE_UNAVAILABLE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorGatewayTimeout($message = 'Gateway Timeout')
    {
        return $this->error($message, StatusCode::GATEWAY_TIMEOUT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorHttpVersionNotSupported($message = 'HTTP Version Not Supported')
    {
        return $this->error($message, StatusCode::HTTP_VERSION_NOT_SUPPORTED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorVariantAlsoNegotiatesRfc2295($message = 'Variant Also Negotiates (RFC 2295)')
    {
        return $this->error($message, StatusCode::VARIANT_ALSO_NEGOTIATES);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorInsufficientStorage($message = 'Insufficient Storage (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::INSUFFICIENT_STORAGE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorLoopDetectedWebdavRfc5842($message = 'Loop Detected (WebDAV) (RFC 5842)')
    {
        return $this->error($message, StatusCode::LOOP_DETECTED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorBandwidthLimitExceededApacheBwlimitedExtension($message = 'Bandwidth Limit Exceeded (Apache bw/limited extension)')
    {
        return $this->error($message, StatusCode::BANDWIDTH_LIMIT_EXCEEDED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNotExtended($message = 'Not Extended (RFC 2774)')
    {
        return $this->error($message, StatusCode::NOT_EXTENDED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNetworkAuthenticationRequired($message = 'Network Authentication Required')
    {
        return $this->error($message, StatusCode::NETWORK_AUTHENTICATION_REQUIRED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNetworkReadTimeoutError($message = 'Network read timeout error')
    {
        return $this->error($message, 598);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNetworkConnectTimeoutError($message = 'Network connect timeout error')
    {
        return $this->error($message, 599);
    }
}
