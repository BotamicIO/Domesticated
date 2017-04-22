<?php



declare(strict_types=1);

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
    protected function failedValidation(Validator $validator): void
    {
        throw new ValidationHttpException($validator->errors());
    }

    protected function failedAuthorization(): void
    {
        throw new HttpException(403);
    }
}
