<?php

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
