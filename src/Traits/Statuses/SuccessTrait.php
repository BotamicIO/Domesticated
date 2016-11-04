<?php

namespace BrianFaust\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

trait SuccessTrait
{
    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusOk($message = 'OK')
    {
        return $this->respond($message, StatusCode::OK);
    }

    /**
     * @param null $location
     *
     * @return mixed
     */
    public function statusCreated($location = null)
    {
        return $this->response()->created($location);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusAccepted($message = 'Accepted')
    {
        return $this->respond($message, StatusCode::ACCEPTED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusNonAuthoritativeInformation($message = 'Non-Authoritative Information (since HTTP/1.1)')
    {
        return $this->respond($message, StatusCode::NON_AUTHORATIVE_INFORMATION);
    }

    /**
     * @return mixed
     */
    public function statusNoContent()
    {
        return $this->respond(null, StatusCode::NO_CONTENT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusResetContent($message = 'Reset Content')
    {
        return $this->respond($message, StatusCode::RESET_CONTENT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusPartialContent($message = 'Partial Content')
    {
        return $this->respond($message, StatusCode::PARTIAL_CONTENT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusMultiStatus($message = 'Multi-Status (WebDAV) (RFC 4918)')
    {
        return $this->respond($message, StatusCode::MULTI_STATUS);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusAlreadyReportedWebdavRfc5842($message = 'Already Reported (WebDAV) (RFC 5842)')
    {
        return $this->respond($message, StatusCode::ALREADY_REPORTED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusImUsed($message = 'IM Used (RFC 3229)')
    {
        return $this->respond($message, StatusCode::IM_USED);
    }

    /**
     * @return mixed
     */
    public function statusUpdated()
    {
        return $this->noContent();
    }

    /**
     * @return mixed
     */
    public function statusDeleted()
    {
        return $this->noContent();
    }
}
