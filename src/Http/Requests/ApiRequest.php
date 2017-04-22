<?php



declare(strict_types=1);

namespace BrianFaust\Domesticated\Http\Requests;

use BrianFaust\Domesticated\Traits\ApiRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

abstract class ApiRequest extends FormRequest
{
    use ApiRequestTrait;

    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
