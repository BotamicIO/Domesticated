<?php

namespace DraperStudio\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

trait ServerErrorTrait
{
    public function errorInternalServerError($message = 'Internal Server Error')
    {
        return $this->error($message, StatusCode::INTERNAL_SERVER_ERROR);
    }

    public function errorNotImplemented($message = 'Not Implemented')
    {
        return $this->error($message, StatusCode::NOT_IMPLEMENTED);
    }

    public function errorBadGateway($message = 'Bad Gateway')
    {
        return $this->error($message, StatusCode::BAD_GATEWAY);
    }

    public function errorServiceUnavailable($message = 'Service Unavailable')
    {
        return $this->error($message, StatusCode::SERVICE_UNAVAILABLE);
    }

    public function errorGatewayTimeout($message = 'Gateway Timeout')
    {
        return $this->error($message, StatusCode::GATEWAY_TIMEOUT);
    }

    public function errorHttpVersionNotSupported($message = 'HTTP Version Not Supported')
    {
        return $this->error($message, StatusCode::HTTP_VERSION_NOT_SUPPORTED);
    }

    public function errorVariantAlsoNegotiatesRfc2295($message = 'Variant Also Negotiates (RFC 2295)')
    {
        return $this->error($message, StatusCode::VARIANT_ALSO_NEGOTIATES);
    }

    public function errorInsufficientStorage($message = 'Insufficient Storage (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::INSUFFICIENT_STORAGE);
    }

    public function errorLoopDetectedWebdavRfc5842($message = 'Loop Detected (WebDAV) (RFC 5842)')
    {
        return $this->error($message, StatusCode::LOOP_DETECTED);
    }

    public function errorBandwidthLimitExceededApacheBwlimitedExtension($message = 'Bandwidth Limit Exceeded (Apache bw/limited extension)')
    {
        return $this->error($message, StatusCode::BANDWIDTH_LIMIT_EXCEEDED);
    }

    public function errorNotExtended($message = 'Not Extended (RFC 2774)')
    {
        return $this->error($message, StatusCode::NOT_EXTENDED);
    }

    public function errorNetworkAuthenticationRequired($message = 'Network Authentication Required')
    {
        return $this->error($message, StatusCode::NETWORK_AUTHENTICATION_REQUIRED);
    }

    public function errorNetworkReadTimeoutError($message = 'Network read timeout error')
    {
        return $this->error($message, 598);
    }

    public function errorNetworkConnectTimeoutError($message = 'Network connect timeout error')
    {
        return $this->error($message, 599);
    }
}
