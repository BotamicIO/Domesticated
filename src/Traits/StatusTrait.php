<?php

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Domesticated\Traits;

use BrianFaust\Domesticated\Traits\Statuses\ClientErrorTrait;
use BrianFaust\Domesticated\Traits\Statuses\InformationalTrait;
use BrianFaust\Domesticated\Traits\Statuses\RedirectionTrait;
use BrianFaust\Domesticated\Traits\Statuses\ServerErrorTrait;
use BrianFaust\Domesticated\Traits\Statuses\SuccessTrait;
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
