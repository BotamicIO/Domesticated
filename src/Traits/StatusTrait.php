<?php

declare(strict_types=1);

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Domesticated\Traits;

use Artisanry\Domesticated\Traits\Statuses\ClientErrorTrait;
use Artisanry\Domesticated\Traits\Statuses\InformationalTrait;
use Artisanry\Domesticated\Traits\Statuses\RedirectionTrait;
use Artisanry\Domesticated\Traits\Statuses\ServerErrorTrait;
use Artisanry\Domesticated\Traits\Statuses\SuccessTrait;
use Dingo\Api\Http\Response;

trait StatusTrait
{
    use ClientErrorTrait;
    use InformationalTrait;
    use RedirectionTrait;
    use ServerErrorTrait;
    use SuccessTrait;

    /**
     * @param $data
     * @param int $statusCode
     *
     * @return mixed
     */
    protected function respond($data, $statusCode = 200)
    {
        $response = new Response($data);

        return $response->setStatusCode($statusCode);
    }

    /**
     * @param $message
     * @param $statusCode
     *
     * @return mixed
     */
    public function error($message, $statusCode)
    {
        return $this->response()->error($message, $statusCode);
    }
}
