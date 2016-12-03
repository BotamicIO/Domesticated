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
