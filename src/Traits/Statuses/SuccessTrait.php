<?php

namespace DraperStudio\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

trait SuccessTrait
{
    public function statusOk($message = 'OK')
    {
        return $this->respond($message, StatusCode::OK);
    }

    public function statusCreated($location = null)
    {
        return $this->response()->created($location);
    }

    public function statusAccepted($message = 'Accepted')
    {
        return $this->respond($message, StatusCode::ACCEPTED);
    }

    public function statusNonAuthoritativeInformation($message = 'Non-Authoritative Information (since HTTP/1.1)')
    {
        return $this->respond($message, StatusCode::NON_AUTHORATIVE_INFORMATION);
    }

    public function statusNoContent()
    {
        return $this->respond(null, StatusCode::NO_CONTENT);
    }

    public function statusResetContent($message = 'Reset Content')
    {
        return $this->respond($message, StatusCode::RESET_CONTENT);
    }

    public function statusPartialContent($message = 'Partial Content')
    {
        return $this->respond($message, StatusCode::PARTIAL_CONTENT);
    }

    public function statusMultiStatus($message = 'Multi-Status (WebDAV) (RFC 4918)')
    {
        return $this->respond($message, StatusCode::MULTI_STATUS);
    }

    public function statusAlreadyReportedWebdavRfc5842($message = 'Already Reported (WebDAV) (RFC 5842)')
    {
        return $this->respond($message, StatusCode::ALREADY_REPORTED);
    }

    public function statusImUsed($message = 'IM Used (RFC 3229)')
    {
        return $this->respond($message, StatusCode::IM_USED);
    }

    public function statusUpdated()
    {
        return $this->noContent();
    }

    public function statusDeleted()
    {
        return $this->noContent();
    }
}
