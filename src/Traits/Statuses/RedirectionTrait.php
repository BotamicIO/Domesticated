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

trait RedirectionTrait
{
    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusMultipleChoices($message = 'Multiple Choices')
    {
        return $this->respond($message, StatusCode::MULTIPLE_CHOICES);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusMovedPermanently($message = 'Moved Permanently')
    {
        return $this->respond($message, StatusCode::MOVED_PERMANENTLY);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusFound($message = 'Found')
    {
        return $this->respond($message, StatusCode::FOUND);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusSeeOther($message = 'See Other')
    {
        return $this->respond($message, StatusCode::SEE_OTHER);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusNotModified($message = 'Not Modified')
    {
        return $this->respond($message, StatusCode::NOT_MODIFIED);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusUseProxy($message = 'Use Proxy (since HTTP/1.1)')
    {
        return $this->respond($message, StatusCode::USE_PROXY);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusSwitchProxy($message = 'Switch Proxy')
    {
        return $this->respond($message, 306);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusTemporaryRedirect($message = 'Temporary Redirect (since HTTP/1.1)')
    {
        return $this->respond($message, StatusCode::TEMPORARY_REDIRECT);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function statusPermanentRedirect($message = 'Permanent Redirect')
    {
        return $this->respond($message, StatusCode::PERMANENT_REDIRECT);
    }
}
