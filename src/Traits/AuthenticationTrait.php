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

/**
 * Class AuthenticationTrait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait AuthenticationTrait
{
    /**
     * @return mixed
     */
    public function authenticated()
    {
        return $this->auth()->check();
    }

    /**
     * @return mixed
     */
    public function getCurrentUser()
    {
        return $this->auth()->user();
    }

    /**
     * @param $model
     * @param $field
     *
     * @return bool
     */
    public function isManageable($model, $field)
    {
        return $model->{$field} == $this->getCurrentUser()->id;
    }
}
