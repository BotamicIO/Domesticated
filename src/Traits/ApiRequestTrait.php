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
