<?php

namespace DraperStudio\Domesticated\Traits;

trait AuthenticationTrait
{
    public function authenticated()
    {
        return $this->auth()->check();
    }

    public function getCurrentUser()
    {
        return $this->auth()->user();
    }

    public function isManageable($model, $field)
    {
        return $model->{$field} == $this->getCurrentUser()->id;
    }
}
