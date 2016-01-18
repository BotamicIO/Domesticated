<?php

namespace DraperStudio\Domesticated\Traits;

use Dingo\Api\Http\Response;
use DraperStudio\Domesticated\Traits\Statuses\ClientErrorTrait;
use DraperStudio\Domesticated\Traits\Statuses\InformationalTrait;
use DraperStudio\Domesticated\Traits\Statuses\RedirectionTrait;
use DraperStudio\Domesticated\Traits\Statuses\ServerErrorTrait;
use DraperStudio\Domesticated\Traits\Statuses\SuccessTrait;

trait StatusTrait
{
    use ClientErrorTrait;
    use InformationalTrait;
    use RedirectionTrait;
    use ServerErrorTrait;
    use SuccessTrait;

    protected function respond($data, $statusCode = 200)
    {
        $response = new Response($data);

        return $response->setStatusCode($statusCode);
    }

    public function error($message, $statusCode)
    {
        return $this->response()->error($message, $statusCode);
    }
}
