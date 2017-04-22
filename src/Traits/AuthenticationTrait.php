<?php



declare(strict_types=1);

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
