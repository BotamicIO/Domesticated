<?php

namespace BrianFaust\Domesticated\Traits;

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Contracts\Validation\Validator;
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
