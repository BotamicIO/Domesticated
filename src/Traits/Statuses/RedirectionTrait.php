<?php

namespace DraperStudio\Domesticated\Traits\Statuses;

use Teapot\StatusCode;

trait RedirectionTrait
{
    public function statusMultipleChoices($message = 'Multiple Choices')
    {
        return $this->respond($message, StatusCode::MULTIPLE_CHOICES);
    }

    public function statusMovedPermanently($message = 'Moved Permanently')
    {
        return $this->respond($message, StatusCode::MOVED_PERMANENTLY);
    }

    public function statusFound($message = 'Found')
    {
        return $this->respond($message, StatusCode::FOUND);
    }

    public function statusSeeOther($message = 'See Other')
    {
        return $this->respond($message, StatusCode::SEE_OTHER);
    }

    public function statusNotModified($message = 'Not Modified')
    {
        return $this->respond($message, StatusCode::NOT_MODIFIED);
    }

    public function statusUseProxy($message = 'Use Proxy (since HTTP/1.1)')
    {
        return $this->respond($message, StatusCode::USE_PROXY);
    }

    public function statusSwitchProxy($message = 'Switch Proxy')
    {
        return $this->respond($message, 306);
    }

    public function statusTemporaryRedirect($message = 'Temporary Redirect (since HTTP/1.1)')
    {
        return $this->respond($message, StatusCode::TEMPORARY_REDIRECT);
    }

    public function statusPermanentRedirect($message = 'Permanent Redirect')
    {
        return $this->respond($message, StatusCode::PERMANENT_REDIRECT);
    }
}
