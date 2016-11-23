<?php

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Domesticated\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use BrianFaust\Domesticated\Traits\ApiRequestTrait;

abstract class ApiRequest extends FormRequest
{
    use ApiRequestTrait;

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
