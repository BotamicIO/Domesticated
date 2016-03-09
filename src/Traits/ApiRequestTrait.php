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

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class ApiRequestTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
