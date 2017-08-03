<?php

declare(strict_types=1);

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
use Dingo\Api\Exception\ValidationHttpException;

trait ClientErrorTrait
{
    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorBadRequest($message = 'Bad Request')
    {
        return $this->error($message, StatusCode::BAD_REQUEST);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorUnauthorized($message = 'Unauthorized')
    {
        return $this->error($message, StatusCode::UNAUTHORIZED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorPaymentRequired($message = 'Payment Required')
    {
        return $this->error($message, StatusCode::PAYMENT_REQUIRED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorForbidden($message = 'Forbidden')
    {
        return $this->error($message, StatusCode::FORBIDDEN);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNotFound($message = 'Not Found')
    {
        return $this->error($message, StatusCode::NOT_FOUND);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorMethodNotAllowed($message = 'Method Not Allowed')
    {
        return $this->error($message, StatusCode::METHOD_NOT_ALLOWED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNotAcceptable($message = 'Not Acceptable')
    {
        return $this->error($message, StatusCode::NOT_ACCEPTABLE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorProxyAuthenticationRequired($message = 'Proxy Authentication Required')
    {
        return $this->error($message, StatusCode::PROXY_AUTHENTICATION_REQUIRED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorRequestTimeout($message = 'Request Timeout')
    {
        return $this->error($message, StatusCode::REQUEST_TIMEOUT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorConflict($message = 'Conflict')
    {
        return $this->error($message, StatusCode::CONFLICT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorGone($message = 'Gone')
    {
        return $this->error($message, StatusCode::GONE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorLengthRequired($message = 'Length Required')
    {
        return $this->error($message, StatusCode::LENGTH_REQUIRED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorPreconditionFailed($message = 'Precondition Failed')
    {
        return $this->error($message, StatusCode::PRECONDITION_FAILED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorRequestEntityTooLarge($message = 'Request Entity Too Large')
    {
        return $this->error($message, StatusCode::REQUEST_ENTITY_TOO_LARGE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorRequestUriTooLong($message = 'Request-URI Too Long')
    {
        return $this->error($message, StatusCode::REQUEST_URI_TOO_LONG);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorUnsupportedMediaType($message = 'Unsupported Media Type')
    {
        return $this->error($message, StatusCode::UNSUPPORTED_MEDIA_TYPE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorRequestedRangeNotSatisfiable($message = 'Requested Range Not Satisfiable')
    {
        return $this->error($message, StatusCode::REQUESTED_RANGE_NOT_SATISFIABLE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorExpectationFailed($message = 'Expectation Failed')
    {
        return $this->error($message, StatusCode::EXPECTATION_FAILED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorImATeapotExplanationGistgithubcom($message = "I'm a teapot (RFC 2324)")
    {
        return $this->error($message, StatusCode::I_AM_A_TEAPOT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorEnhanceYourCalm($message = 'Enhance Your Calm')
    {
        return $this->error($message, StatusCode::ENHANCE_YOUR_CALM);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorUnprocessableEntity($message = 'Unprocessable Entity (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::UNPROCESSABLE_ENTITY);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorLocked($message = 'Locked (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::ENTITY_LOCKED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorFailedDependency($message = 'Failed Dependency (WebDAV) (RFC 4918)')
    {
        return $this->error($message, StatusCode::FAILED_DEPENDENCY);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorUpgradeRequired($message = 'Upgrade Required (RFC 2817)')
    {
        return $this->error($message, StatusCode::UPDATE_REQUIRED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorPreconditionRequired($message = 'Precondition Required')
    {
        return $this->error($message, StatusCode::PRECONDITION_REQUIRED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorTooManyRequests($message = 'Too Many Requests')
    {
        return $this->error($message, StatusCode::TOO_MANY_REQUESTS);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorRequestHeaderFieldsTooLarge($message = 'Request Header Fields Too Large')
    {
        return $this->error($message, StatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorNoResponse($message = 'No Response')
    {
        return $this->error($message, StatusCode::NO_RESPONSE);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorRetryWith($message = 'Retry With')
    {
        return $this->error($message, StatusCode::RETRY_WITH);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorBlockedByWindowsParentalControls($message = 'Blocked by Windows Parental Controls')
    {
        return $this->error($message, StatusCode::BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorWrongExchangeServer($message = 'Wrong Exchange server')
    {
        return $this->error($message, StatusCode::REDIRECT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function errorClientClosedRequest($message = 'Client Closed Request')
    {
        return $this->error($message, StatusCode::CLIENT_CLOSED_REQUEST);
    }

    /**
     * @param $errors
     *
     * @throws ValidationHttpException
     */
    public function errorValidation($errors)
    {
        throw new ValidationHttpException($errors);
    }
}
