<?php

namespace DraperStudio\Domesticated\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DraperStudio\Domesticated\Traits\ApiRequestTrait;

abstract class ApiRequest extends FormRequest
{
    use ApiRequestTrait;

    public function authorize()
    {
        return true;
    }
}
