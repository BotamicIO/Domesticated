<?php



declare(strict_types=1);

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
