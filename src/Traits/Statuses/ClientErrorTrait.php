<?php

namespace DraperStudio\Domesticated\Traits\Statuses;

use Dingo\Api\Exception\ValidationHttpException;
use Teapot\StatusCode;

trait ClientErrorTrait
{
    public function errorBadRequest($message = 'Bad Request')
    {
        return $this->error($message, StatusCode::BAD_REQUEST);
    }

    public function errorUnauthorized($message = 'Unauthorized')
    {
        return $this->error($message, StatusCode::UNAUTHORIZED);
    }

    public function errorPaymentRequired($message = 'Payment Required')
    {
        return $this->error($message, StatusCode::PAYMENT_REQUIRED);
    }

    public function errorForbidden($message = 'Forbidden')
    {
        return $this->error($message, StatusCode::FORBIDDEN);
    }

    public function errorNotFound($message = 'Not Found')
    {
        return $this->error($message, StatusCode::NOT_FOUND);
    }

    public function errorMethodNotAllowed($message = 'Method Not Allowed')
    {
        return $this->error($message, StatusCode::METHOD_NOT_ALLOWED);
    }

    public function errorNotAcceptable($message = 'Not Acceptable')
    {
        return $this->error($message, StatusCode::NOT_ACCEPTABLE);
    }

    public function errorProxyAuthenticationRequired($message = 'Proxy Authentication Required')
    {
        return $this->error($message, StatusCode::PROXY_AUTHENTICATION_REQUIRED);
    }

    public function errorRequestTimeout($message = 'Request Timeout')
    {
        return $this->error($message, StatusCode::REQUEST_TIMEOUT);
    }

    public function errorConflict($message = 'Conflict')
    {
        return $this->error($message, StatusCode::CONFLICT);
    }

    public function errorGone($message = 'Gone')
    {
        return $this->error($message, StatusCode::GONE);
    }

    public function errorLengthRequired($message = 'Length Required')
    {
        return $this->error($message, StatusCode::LENGTH_REQUIRED);
    }

    public function errorPreconditionFailed($message = 'Precondition Failed')
    {
        return $this->error($message, StatusCode::PRECONDITION_FAILED);
    }

    public function errorRequestEntityTooLarge($message = 'Request Entity Too Large')
    {
        return $this->error($message, StatusCode::REQUEST_ENTITY_TOO_LARGE);
    }

    public function errorRequestUriTooLong($message = 'Request-URI Too Long')
    {
        return $this->error($message, StatusCode::REQUEST_URI_TOO_LONG);
    }

    public function errorUnsupportedMediaType($message = 'Unsupported Media Type')
    {
        return $this->error($message, StatusCode::UNSUPPORTED_MEDIA_TYPE);
    }

    public function errorRequestedRangeNotSatisfiable($message = 'Requested Range Not Satisfiable')
    {
        return $this->error($message, StatusCode::REQUESTED_RANGE_NOT_SATISFIABLE);
    }

    public function errorExpectationFailed($message = 'Expectation Failed')
    {
        return $this->error($message, StatusCode::EXPECTATION_FAILED);
    }

    public function errorImATeapotExplanationGistgithubcom($message = "I'm a teapot (RFC 2324)")
    {
        return $this->error($message, StatusCode::I_AM_A_TEAPOT);
    }

    public function errorEnhanceYourCalm($message = 'Enhance Your Calm')
    {
        return $this->error($message, StatusCode::ENHANCE_YOUR_CALM);
    }

    public function errorUnprocessableEntity($message = 'Unprocessable Entity (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::UNPROCESSABLE_ENTITY);
    }

    public function errorLocked($message = 'Locked (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::ENTITY_LOCKED);
    }

    public function errorFailedDependency($message = 'Failed Dependency (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::FAILED_DEPENDENCY);
    }

    public function errorUpgradeRequired($message = 'Upgrade Required (RFC 2817)')
    {
        return $this->error($message, StatusCode::UPDATE_REQUIRED);
    }

    public function errorPreconditionRequired($message = 'Precondition Required')
    {
        return $this->error($message, StatusCode::PRECONDITION_REQUIRED);
    }

    public function errorTooManyRequests($message = 'Too Many Requests')
    {
        return $this->error($message, StatusCode::TOO_MANY_REQUESTS);
    }

    public function errorRequestHeaderFieldsTooLarge($message = 'Request Header Fields Too Large')
    {
        return $this->error($message, StatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE);
    }

    public function errorNoResponse($message = 'No Response')
    {
        return $this->error($message, StatusCode::NO_RESPONSE);
    }

    public function errorRetryWith($message = 'Retry With')
    {
        return $this->error($message, StatusCode::RETRY_WITH);
    }

    public function errorBlockedByWindowsParentalControls($message = 'Blocked by Windows Parental Controls')
    {
        return $this->error($message, StatusCode::BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS);
    }

    public function errorWrongExchangeServer($message = 'Wrong Exchange server')
    {
        return $this->error($message, StatusCode::REDIRECT);
    }

    public function errorClientClosedRequest($message = 'Client Closed Request')
    {
        return $this->error($message, StatusCode::CLIENT_CLOSED_REQUEST);
    }

    public function errorValidation($errors)
    {
        throw new ValidationHttpException($errors);
    }
}
