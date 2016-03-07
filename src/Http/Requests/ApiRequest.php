<?php

/*
 * This file is part of Domesticated.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Domesticated\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DraperStudio\Domesticated\Traits\ApiRequestTrait;

/**
 * Class ApiRequest.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
