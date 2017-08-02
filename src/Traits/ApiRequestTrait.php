<?php

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Domesticated\Traits;

use Illuminate\Contracts\Validation\Validator;
use Dingo\Api\Exception\ValidationHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;

trait ApiRequestTrait
{
    /**
     * @param Validator $validator
     *
     * @throws ValidationHttpException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationHttpException($validator->errors());
    }

    protected function failedAuthorization()
    {
        throw new HttpException(403);
    }
}
