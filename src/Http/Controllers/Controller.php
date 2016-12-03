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

namespace BrianFaust\Domesticated\Http\Controllers;

use BrianFaust\Domesticated\Traits\AuthenticationTrait;
use BrianFaust\Domesticated\Traits\StatusTrait;
use BrianFaust\Domesticated\Traits\TransformerTrait;
use Dingo\Api\Exception\ValidationHttpException;
use Dingo\Api\Routing\Helpers as DingoHelpers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as IlluminateController;

abstract class Controller extends IlluminateController
{
    use AuthenticationTrait;
    use DingoHelpers;
    use StatusTrait;
    use TransformerTrait;
    use ValidatesRequests;

    /**
     * @param Request $request
     * @param array   $rules
     * @param array   $messages
     * @param array   $customAttributes
     *
     * @throws ValidationHttpException
     */
    public function validate(Request $request, array $rules, array $messages = [], array $customAttributes = []): void
    {
        $validator = $this->getValidationFactory()->make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }
    }

    /**
     * @param $response
     * @param $expectedCode
     *
     * @return bool
     */
    public function hasStatusCode($response, $expectedCode): bool
    {
        return $response['status_code'] == $expectedCode;
    }
}
