<?php

namespace DraperStudio\Domesticated\Traits;

use Closure;
use Dingo\Api\Http\Response;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;

trait TransformerTrait
{
    protected $transformer;

    public function collection(Collection $collection, $transformer = null, array $parameters = [], Closure $after = null)
    {
        return $this->transform('collection', $collection, $transformer, $parameters, $after);
    }

    public function item($item, $transformer = null, array $parameters = [], Closure $after = null)
    {
        return $this->transform('item', $item, $transformer, $parameters, $after);
    }

    public function paginator(Paginator $paginator, $transformer = null, array $parameters = [], Closure $after = null)
    {
        return $this->transform('paginator', $paginator, $transformer, $parameters, $after);
    }

    private function transform($type, $data, $transformer, array $parameters, $after)
    {
        $transformer = empty($transformer) ? new $this->transformer()
                                           : new $transformer();

        return $this->response()->{$type}($data, $transformer, $parameters, $after);
    }
}
