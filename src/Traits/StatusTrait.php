<?php

/*
 * This file is part of Domesticated.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Domesticated\Traits;

use Dingo\Api\Http\Response;
use DraperStudio\Domesticated\Traits\Statuses\ClientErrorTrait;
use DraperStudio\Domesticated\Traits\Statuses\InformationalTrait;
use DraperStudio\Domesticated\Traits\Statuses\RedirectionTrait;
use DraperStudio\Domesticated\Traits\Statuses\ServerErrorTrait;
use DraperStudio\Domesticated\Traits\Statuses\SuccessTrait;

/**
 * Class StatusTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
