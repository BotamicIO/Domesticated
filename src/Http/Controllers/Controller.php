<?php

/*
 * This file is part of Domesticated.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Domesticated\Http\Controllers;

use Dingo\Api\Exception\ValidationHttpException;
use Dingo\Api\Routing\Helpers as DingoHelpers;
use DraperStudio\Domesticated\Traits\AuthenticationTrait;
use DraperStudio\Domesticated\Traits\StatusTrait;
use DraperStudio\Domesticated\Traits\TransformerTrait;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as IlluminateController;

/**
 * Class Controller.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
    public function validate(Request $request, array $rules, array $messages = [], array $customAttributes = [])
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
    public function hasStatusCode($response, $expectedCode)
    {
        return $response['status_code'] == $expectedCode;
    }
}
